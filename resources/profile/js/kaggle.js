// Base library for all Kaggle websites, loaded in the head of all pages.
//
// The load order for scripts is...
// 1. jQuery (Google CDN)
// 2. jQuery UI (Google CDN)
// 3. kaggle.js
//
// This is an intermediate solution which will be replaced at a later time
// once we no longer need to have jquery and jquery UI in the head.





// Kaggle root namespace and global functions, this block must not use any
// dependencies including jQuery. I repeat, NO JQUERY.
// The root namespace is not instantiable and merely acts as a container for
// other namespaces and classes, and some universal functions.
(function () {
    // Root namespace
    Kaggle = {
        // Global developer mode flag
        isDebug: false,

        // Holds context copied in from Razor
        Current: {},

        // Entity View Models
        Model: {},

        // Page View Models
        Page: {},

        // URL Generators
        Url: {},

        // Hardcoded constants (requires site push to update)
        Constant: {
            // Used in site-agnostic permalinks
            permahost: "kaggle.com",

            // Blob storage server for Kaggle
            blobService: "//kaggle2.blob.core.windows.net/",

            // A column-subset of the authorative Sites database table.
            // Assists the generation of URLs for site-related objects.
            siteTable: [
                // Id, ShortName, LongName, CanonicalHostName
                [1, "kaggle", "Kaggle", "www.kaggle.com"],
                [2, "hhp", "Heritage Health Prize", "www.heritagehealthprize.com"],
                [3, "inclass", "Kaggle in Class", "inclass.kaggle.com"],
                [4, "host", "Kaggle", "host.kaggle.com"],
                [5, "kddcup2012", "KDD Cup 2012", "www.kddcup2012.org"],
                [6, "team", "Team Kaggle", "team.kaggle.com"],
                [7, "gequest", "GE Quest", "www.gequest.com"]
            ]
        }
    };
})();





// Copied from Knockout's version so it can be used everywhere.
if (!Function.prototype['bind']) {
    // Function.prototype.bind is a standard part of ECMAScript 5th Edition (December 2009, http://www.ecma-international.org/publications/files/ECMA-ST/ECMA-262.pdf)
    // In case the browser doesn't implement it natively, provide a JavaScript implementation. This implementation is based on the one in prototype.js
    Function.prototype['bind'] = function (object) {
        var originalFunction = this, args = Array.prototype.slice.call(arguments), object = args.shift();
        return function () {
            return originalFunction.apply(object, args.concat(Array.prototype.slice.call(arguments)));
        };
    };
}





// A limited number of generic url functions usable beyond Knockout
(function () {
    Kaggle.Url.kaggleUrl = function (path, secure) {
        var http = secure ? "https://" : "http://";
        return http + Kaggle.Constant.siteTable[0][3] + (path.charAt(0) == "/" ? "" : "/") + path;
    };

    Kaggle.Url.gravatarUrl = function (hash, size) {
        if (size == null) size = 160;
        if (hash == null) return Kaggle.Url.gravatarDefault(size);
        var secure = window.location.protocol == "https:";
        //var goosePath = Kaggle.Url.gravatarDefault(size);
        var goosePath = "/content/shared/img/default-avatar.png";
        var gooseUrl = Kaggle.Url.kaggleUrl(goosePath, secure);
        var http = secure ? "https://secure" : "http://www";
        return http + ".gravatar.com/avatar/" + hash + ".png" + "?r=pg" + "&s=" + size + "&d=" + gooseUrl;
    };

    Kaggle.Url.gravatarDefault = function (size) {
        if (size <= 64) {
            size = 64;
        } else if (size <= 90) {
            size = 90;
        } else {
            size = 160;
        }
        return "/Content/shared/img/default-avatar-" + size + ".jpg";
    };
})();





// Inlined copy of the easing plugin. Assumes jQuery is already loaded.
(function () {
    /*
    * jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
    *
    * Uses the built in easing capabilities added In jQuery 1.1
    * to offer multiple easing options
    *
    * TERMS OF USE - jQuery Easing
    * 
    * Open source under the BSD License. 
    * 
    * Copyright © 2008 George McGinley Smith
    * All rights reserved.
    * 
    * Redistribution and use in source and binary forms, with or without modification, 
    * are permitted provided that the following conditions are met:
    * 
    * Redistributions of source code must retain the above copyright notice, this list of 
    * conditions and the following disclaimer.
    * Redistributions in binary form must reproduce the above copyright notice, this list 
    * of conditions and the following disclaimer in the documentation and/or other materials 
    * provided with the distribution.
    * 
    * Neither the name of the author nor the names of contributors may be used to endorse 
    * or promote products derived from this software without specific prior written permission.
    * 
    * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
    * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
    * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
    *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
    *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
    *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
    * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
    *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
    * OF THE POSSIBILITY OF SUCH DAMAGE. 
    *
    */

    // t: current time, b: begInnIng value, c: change In value, d: duration
    jQuery.easing['jswing'] = jQuery.easing['swing'];

    jQuery.extend(jQuery.easing, {
        def: 'easeOutQuad',
        swing: function (x, t, b, c, d) {
            //alert(jQuery.easing.default);
            return jQuery.easing[jQuery.easing.def](x, t, b, c, d);
        },
        easeInQuad: function (x, t, b, c, d) {
            return c * (t /= d) * t + b;
        },
        easeOutQuad: function (x, t, b, c, d) {
            return -c * (t /= d) * (t - 2) + b;
        },
        easeInOutQuad: function (x, t, b, c, d) {
            if ((t /= d / 2) < 1) return c / 2 * t * t + b;
            return -c / 2 * ((--t) * (t - 2) - 1) + b;
        },
        easeInCubic: function (x, t, b, c, d) {
            return c * (t /= d) * t * t + b;
        },
        easeOutCubic: function (x, t, b, c, d) {
            return c * ((t = t / d - 1) * t * t + 1) + b;
        },
        easeInOutCubic: function (x, t, b, c, d) {
            if ((t /= d / 2) < 1) return c / 2 * t * t * t + b;
            return c / 2 * ((t -= 2) * t * t + 2) + b;
        },
        easeInQuart: function (x, t, b, c, d) {
            return c * (t /= d) * t * t * t + b;
        },
        easeOutQuart: function (x, t, b, c, d) {
            return -c * ((t = t / d - 1) * t * t * t - 1) + b;
        },
        easeInOutQuart: function (x, t, b, c, d) {
            if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
            return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
        },
        easeInQuint: function (x, t, b, c, d) {
            return c * (t /= d) * t * t * t * t + b;
        },
        easeOutQuint: function (x, t, b, c, d) {
            return c * ((t = t / d - 1) * t * t * t * t + 1) + b;
        },
        easeInOutQuint: function (x, t, b, c, d) {
            if ((t /= d / 2) < 1) return c / 2 * t * t * t * t * t + b;
            return c / 2 * ((t -= 2) * t * t * t * t + 2) + b;
        },
        easeInSine: function (x, t, b, c, d) {
            return -c * Math.cos(t / d * (Math.PI / 2)) + c + b;
        },
        easeOutSine: function (x, t, b, c, d) {
            return c * Math.sin(t / d * (Math.PI / 2)) + b;
        },
        easeInOutSine: function (x, t, b, c, d) {
            return -c / 2 * (Math.cos(Math.PI * t / d) - 1) + b;
        },
        easeInExpo: function (x, t, b, c, d) {
            return (t == 0) ? b : c * Math.pow(2, 10 * (t / d - 1)) + b;
        },
        easeOutExpo: function (x, t, b, c, d) {
            return (t == d) ? b + c : c * (-Math.pow(2, -10 * t / d) + 1) + b;
        },
        easeInOutExpo: function (x, t, b, c, d) {
            if (t == 0) return b;
            if (t == d) return b + c;
            if ((t /= d / 2) < 1) return c / 2 * Math.pow(2, 10 * (t - 1)) + b;
            return c / 2 * (-Math.pow(2, -10 * --t) + 2) + b;
        },
        easeInCirc: function (x, t, b, c, d) {
            return -c * (Math.sqrt(1 - (t /= d) * t) - 1) + b;
        },
        easeOutCirc: function (x, t, b, c, d) {
            return c * Math.sqrt(1 - (t = t / d - 1) * t) + b;
        },
        easeInOutCirc: function (x, t, b, c, d) {
            if ((t /= d / 2) < 1) return -c / 2 * (Math.sqrt(1 - t * t) - 1) + b;
            return c / 2 * (Math.sqrt(1 - (t -= 2) * t) + 1) + b;
        },
        easeInElastic: function (x, t, b, c, d) {
            var s = 1.70158; var p = 0; var a = c;
            if (t == 0) return b; if ((t /= d) == 1) return b + c; if (!p) p = d * .3;
            if (a < Math.abs(c)) { a = c; var s = p / 4; }
            else var s = p / (2 * Math.PI) * Math.asin(c / a);
            return -(a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
        },
        easeOutElastic: function (x, t, b, c, d) {
            var s = 1.70158; var p = 0; var a = c;
            if (t == 0) return b; if ((t /= d) == 1) return b + c; if (!p) p = d * .3;
            if (a < Math.abs(c)) { a = c; var s = p / 4; }
            else var s = p / (2 * Math.PI) * Math.asin(c / a);
            return a * Math.pow(2, -10 * t) * Math.sin((t * d - s) * (2 * Math.PI) / p) + c + b;
        },
        easeInOutElastic: function (x, t, b, c, d) {
            var s = 1.70158; var p = 0; var a = c;
            if (t == 0) return b; if ((t /= d / 2) == 2) return b + c; if (!p) p = d * (.3 * 1.5);
            if (a < Math.abs(c)) { a = c; var s = p / 4; }
            else var s = p / (2 * Math.PI) * Math.asin(c / a);
            if (t < 1) return -.5 * (a * Math.pow(2, 10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p)) + b;
            return a * Math.pow(2, -10 * (t -= 1)) * Math.sin((t * d - s) * (2 * Math.PI) / p) * .5 + c + b;
        },
        easeInBack: function (x, t, b, c, d, s) {
            if (s == undefined) s = 1.70158;
            return c * (t /= d) * t * ((s + 1) * t - s) + b;
        },
        easeOutBack: function (x, t, b, c, d, s) {
            if (s == undefined) s = 1.70158;
            return c * ((t = t / d - 1) * t * ((s + 1) * t + s) + 1) + b;
        },
        easeInOutBack: function (x, t, b, c, d, s) {
            if (s == undefined) s = 1.70158;
            if ((t /= d / 2) < 1) return c / 2 * (t * t * (((s *= (1.525)) + 1) * t - s)) + b;
            return c / 2 * ((t -= 2) * t * (((s *= (1.525)) + 1) * t + s) + 2) + b;
        },
        easeInBounce: function (x, t, b, c, d) {
            return c - jQuery.easing.easeOutBounce(x, d - t, 0, c, d) + b;
        },
        easeOutBounce: function (x, t, b, c, d) {
            if ((t /= d) < (1 / 2.75)) {
                return c * (7.5625 * t * t) + b;
            } else if (t < (2 / 2.75)) {
                return c * (7.5625 * (t -= (1.5 / 2.75)) * t + .75) + b;
            } else if (t < (2.5 / 2.75)) {
                return c * (7.5625 * (t -= (2.25 / 2.75)) * t + .9375) + b;
            } else {
                return c * (7.5625 * (t -= (2.625 / 2.75)) * t + .984375) + b;
            }
        },
        easeInOutBounce: function (x, t, b, c, d) {
            if (t < d / 2) return jQuery.easing.easeInBounce(x, t * 2, 0, c, d) * .5 + b;
            return jQuery.easing.easeOutBounce(x, t * 2 - d, 0, c, d) * .5 + c * .5 + b;
        }
    });

    /*
    *
    * TERMS OF USE - EASING EQUATIONS
    * 
    * Open source under the BSD License. 
    * 
    * Copyright © 2001 Robert Penner
    * All rights reserved.
    * 
    * Redistribution and use in source and binary forms, with or without modification, 
    * are permitted provided that the following conditions are met:
    * 
    * Redistributions of source code must retain the above copyright notice, this list of 
    * conditions and the following disclaimer.
    * Redistributions in binary form must reproduce the above copyright notice, this list 
    * of conditions and the following disclaimer in the documentation and/or other materials 
    * provided with the distribution.
    * 
    * Neither the name of the author nor the names of contributors may be used to endorse 
    * or promote products derived from this software without specific prior written permission.
    * 
    * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
    * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
    * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
    *  COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
    *  EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE
    *  GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED 
    * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
    *  NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED 
    * OF THE POSSIBILITY OF SUCH DAMAGE. 
    *
    */
})();





/**
* Resizes an inner element's font so that the inner element completely fills the outer element.
* author Russ Painter WebDesign@GeekyMonkey.com
* version 0.1
*/
(function ($) {
    $.fn.textfill = function (options) {
        var defaults = {
            maxFontPixels: 40,
            innerTag: 'span'
        };
        var opts = jQuery.extend(defaults, options);
        return this.each(function () {
            var fontSize = opts.maxFontPixels;
            var ourText = $(opts.innerTag + ':visible:first', this);
            var maxHeight = $(this).height();
            var maxWidth = $(this).width();
            var textHeight;
            var textWidth;
            do {
                ourText.css('font-size', fontSize);
                textHeight = ourText.height();
                textWidth = ourText.width();
                fontSize = fontSize - 1;
            } while ((textHeight > maxHeight || textWidth > maxWidth) && fontSize > 3);
        });
    };
})(jQuery);

(function ($) {
    $(function () {
        $('.link-post').click(function (e) {
            e.preventDefault();
            $('<form action="' + this.href + '" method="POST"></form>').submit();
        });
    });
})(jQuery);



// Universal dom-manipulating (ugh) ready-time hooks we can't easily avoid for now
(function ($) {
    $(function () {
        // Add icons to link styles
        $("a[href$='.pdf']").not(".no-icon").not("a[href*='detach']").addClass("pdf-link");

        // Add external link tracking
        $('a[href^="http://"]').click(function () {
            try {
                _gaq.push(['_trackEvent', 'External Links', 'Click', $(this).attr('href')]);
            } catch (err) {
            }
            return true;
        });

        $('body').on('click', 'a.open-modal', function (e) {
            e.preventDefault();

            // no modal on mobile
            if (window.screen.width <= 480) {
                window.location.href = $(this).attr('href');
            } else {
                var href = $(this).attr('href');
                var height = $(window).height() - 80;
                var top = 40;

                if ($(this).data('height')) { // if the link sets a height
                    height = $(this).data('height');
                    top = ($(window).height() - height) / 2;
                }

                $('body')
                    .append('<div id="hovering-overlay" style="display:none"></div>')
                    .append('<div id="modal-window" style="display:none"></div>');

                $('#hovering-overlay').slideDown();
                $('#modal-window')
                    .css({ 'height': height, 'top': top + 'px' })
                    .addClass('loading')
                    .fadeIn();

                $('#hovering-overlay').click(function () {
                    $(this).remove();
                    $('#modal-window').remove();
                });

                $('#modal-window').prepend('<a id="close-modal-link">&times;</a>');

                $('#modal-window').on('click', '#close-modal-link', function () {
                    $('#hovering-overlay').click();
                });

                if ($(this).hasClass('kaggle-page')) {
                    $('#modal-window').addClass('kaggle-page');
                }

                if ($(this).hasClass('kaggle-page') || $(this).hasClass('ajax')) {

                    $('#modal-window').addClass('loading');
                    $.get(href, function (data) {
                        $('#modal-window').append($(data).find('#main')).removeClass('loading');
                    });

                } else {
                    $('#modal-window').append('<iframe class="modal-iframe" src="' + href + '" ></iframe>');
                    $('.modal-iframe').load(function () {
                        $('#modal-window').removeClass('loading');
                    });
                }
            }
        });

        // close jQUI dialogs on overlay click
        $("body").on('click', '.ui-widget-overlay', function () {
            $(".ui-dialog-titlebar-close").click();
        });

        $('.make-slider').each(function () {

            //$(this).hide();
            var selectedInput = $(this);

            $(this).before('<div class="slider"></div>').attr('readonly', true);
            $(this).siblings('.slider').slider({
                value: $(selectedInput).val(),
                min: parseInt($(selectedInput).attr('min')),
                max: parseInt($(selectedInput).attr('max')),
                slide: function (e, ui) {
                    $(selectedInput).val(ui.value);
                }
            });
        });

    });
})(jQuery);
