///////////////////////////////////////////////////////////////////////////////
// Functionality for the Kaggle Messaging GUI
//
// Dependencies:
// Assumes that jQuery has already been loaded.
// Assumes that Knockout has been loaded.
//
///////////////////////////////////////////////////////////////////////////////

// Message View Model
(function ($) {
    Kaggle.Message = function (options) {
        if (typeof options == "object") {
            $.extend(this, options);
        }
        this.to = ko.observable(this.to || 0);
        this.from = ko.observable(this.from || 0);
        this.subject = ko.observable("");
        this.body = ko.observable("");
        this.edit = ko.observable(true);

        this.showEdit = ko.computed(function () {
            return this.edit();
        }, this);

        this.showView = ko.computed(function () {
            return ! this.edit();
        }, this);
    };

    Kaggle.Message.prototype.init = function () {
        ko.applyBindings(this);
    };

    Kaggle.Message.prototype.toJS = function () {
        return {
            to: this.to(),
            from: this.from(),
            subject: this.subject(),
            body: this.body()
        };
    };

    Kaggle.Message.prototype.reset = function () {
        this.subject = ko.observable("");
        this.body = ko.observable("");
        this.edit = ko.observable(1);
    };
    
    Kaggle.Message.prototype.send = function () {
        this.subject($.trim(this.subject()));
        this.body($.trim(this.body()));

        if (this.subject() == "") {
            alert("Please enter a message subject");
            return false;
        }
        if (this.body() == "") {
            alert("Please enter a message body");
            return false;
        }

        $.ajax({
            type: "POST",
            url: this.sendUrl,
            data: this.toJS(),
            dataType: "json",
            cache: false,
            success: this.sendSuccess.bind(this),
            error: this.sendError.bind(this)
        });

        return false;
    };

    Kaggle.Message.prototype.sendSuccess = function (data, textStatus, jqXHR) {
        if (data == false) return this.sendFailed();
        
        // Message queued for sending
        this.edit(false);

        alert("Message sent!");
        return true;
    };

    Kaggle.Message.prototype.sendError = function (jqXHR, textStatus, errorThrown) {
        return this.sendFailed();
    };

    Kaggle.Message.prototype.sendFailed = function () {
        alert("Failed to send message");
    };

    Kaggle.Message.prototype.discard = function () {
        window.location = this.discardUrl;
    };
})(jQuery);
