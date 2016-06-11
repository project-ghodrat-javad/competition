
@extends('layouts.Master_ComDetails')
@section('matndetails')




    <div class="comp-content-inside">
        <div id="competition-intro">

        </div>




        <h3>مدیریت تیم </h3>

        <div id="team-edit" data-bind="with: team, visible: true">
            <form action="/c/avito-duplicate-ads-detection/submit" class="_buttons team-action" method="get">                <input value="Make a Submission" type="submit">
                <p>on behalf of your team.</p>
            </form>
            <div id="team-name-div" class="field">
                <input value="GhodratHeydari" class="input" id="team-name-input" name="teamName" data-bind="value: name, valueUpdate: 'afterkeydown'" type="text">
                <label>نام تیم</label>
            </div>


            <div style="display: none;" class="field slide-down _buttons" data-bind="slideDownUp: changed">
                <label>&nbsp;</label>
                <input value="Save Team Changes" data-bind="click: $root.saveTeamSettings" type="button">
            </div>

            <div id="team-members" class="field _buttons">
                <div style="margin-bottom: 250px">

                    <ul id="current-team">
                        <!-- ko foreach: members -->
                        <li class="you" data-bind="css: id == Kaggle.Current.userId ? 'you' : id == $parent.teamLeaderId() ? 'leader' : null">
                            <a href="https://www.kaggle.com/ghodrat" target="_blank" data-bind="attr: { href: url }">
                                <img src="Team%20GhodratHeydari%20-%20Avito%20Duplicate%20Ads%20Detection%20_%20Kaggle_files/11c8bb11f06112d43f000650dc4cdc4e.jpg" data-bind="attr: { src: gravatarUrl(90) }" alt="" height="90" width="90">
                            </a>
                            <div class="user-details">
                                <h3><a href="https://www.kaggle.com/ghodrat" target="_blank" data-bind="text: name, attr: { href: url }">GhodratHeydari</a></h3>
                                <h4 data-bind="visible: id == $parent.teamLeaderId()">Team Leader</h4>
                                <h4 style="display: none;" data-bind="visible: id != $parent.teamLeaderId()"><a href="https://www.kaggle.com/t/337758/ghodratheydari/leader/598228" data-bind="attr: { href: $parent.makeTeamLeaderUrl($data) }">Make Leader</a></h4>
                            </div>
                        </li>
                        <!-- /ko -->
                    </ul>
                    <label style="">اعضای تیم</label>
                </div>




                <div id="team-invites" class="_buttons">
                    <label data-bind="visible: activeInvites().length" style="display:none;">Active Invitations</label>
                    <table id="pending-invites" class="full nicetable roomy" data-bind="visible: activeInvites().length, foreach: activeInvites" style="display:none;"></table>

                    <div id="invite-member">
                        <label>Invite someone to join your team</label>
                        <form id="invite-member-form" data-bind="submit: $root.inviteMemberByEmail">
                            <div>
                                <input name="email" id="invite-member-email" placeholder="آدرس ایمیل" style="width: 60%;" type="text">
                                <input value="ارسال" type="submit">
                            </div>
                        </form>
                    </div>

                    <div id="invite-merger">
                        <label>Invite a team to merge with yours</label>
                        <form id="invite-merger-form" data-bind="submit: $root.inviteMergerByEmail">
                            <div>
                                <input name="email" id="invite-merger-email" placeholder="آدرس ایمیل سرگروه تیم" style="width:60%;" type="text">
                                <input value="ارسال" type="submit">
                            </div>
                        </form>
                    </div>


                    <label data-bind="visible: rejectedInvites().length" style="display:none;">Declined Invitations</label>
                    <table id="rejected-invites" class="full nicetable roomy" data-bind="foreach: rejectedInvites"></table>
                </div>
            </div>


        </div>

        <script type="text/javascript">
            // Turn on change tracking for teams
            Kaggle.Model.trackType("Team");

            // Page View Model for the Team page
            (function($) {
                // Requires: jQuery,
                // Requires: Knockout
                // Requires: kaggle.js
                // Requires: kaggle.knockout
                Kaggle.Page.EditTeam = function(proto) {
                    // Current User
                    this.currentUserId = proto.currentUserId;
                    this.currentUser = ko.observable(
                            Kaggle.Model.ProfileCache.set(proto.currentUser)
                    );

                    // Competition
                    this.competitionId = proto.competitionId;
                    this.competition = ko.observable(
                            Kaggle.Model.CompetitionCache.set(proto.competition)
                    );

                    // Team
                    this.teamId = proto.teamId;
                    this.team = ko.observable(
                            Kaggle.Model.TeamCache.set(proto.team)
                    );

                    // Actions

                    this.saveTeamSettings = function() {
                        var root = this;
                        var team = root.team();
                        var data = team.formData();
                        var url = team.saveTeamSettingsUrl();
                        jQuery.ajax({
                            type: 'POST',
                            url: url,
                            data: {
                                name: data.name,
                                isInterestedInHostContact: data.isInterestedInHostContact
                            },
                            traditional: true,
                            dataType: "json",
                            context: team,
                            success: function (response) {
                                if (response && typeof response == "object") {
                                    // Success: Returned updated team object
                                    if (this.id == null && response.id) this.id = response.id;
                                    this.set(response);
                                    if (this.changed) this.changed.commit();
                                } else {
                                    window.alert(response);
                                }
                                return;
                            },
                            error: function (request, status) {
                                Kaggle.Model.reportAjaxError({
                                    message: "Kaggle JSON API call failed",
                                    status: status,
                                    method: "POST",
                                    url: url
                                });
                            }
                        });
                    }.bind(this);

                    this.inviteMemberByEmail = function() {
                        var root = this;
                        var team = root.team();
                        var url = team.inviteUrl();
                        $.ajax({
                            type: 'POST',
                            url: url,
                            data: {
                                email: $("#invite-member-email").val(),
                                isMerger: false
                            },
                            traditional: true,
                            dataType: "json",
                            context: team,
                            success: function(response) {
                                $("#invite-member-email").val("");
                                if (response && typeof response == "object") {
                                    if (this.id == null && response.id) this.id = response.id;
                                    this.set(response);
                                    if (this.changed) this.changed.commit();
                                } else {
                                    window.alert("Already invited or on your team");
                                }
                                return;
                            },
                            error: function(request, status) {
                                try {
                                    var json = $.parseJSON(request.responseText);
                                    alert(json.details);
                                } catch (e) {
                                    // NOP for now
                                }

                                Kaggle.Model.reportAjaxError({
                                    message: "Kaggle JSON API call failed",
                                    status: status,
                                    method: "POST",
                                    url: url
                                });
                            }
                        });
                    }.bind(this);

                    this.inviteMergerByEmail = function() {
                        var root = this;
                        var team = root.team();
                        var url = team.inviteUrl();
                        $.ajax({
                            type: 'POST',
                            url: url,
                            data: {
                                email: $("#invite-merger-email").val(),
                                isMerger: true
                            },
                            traditional: true,
                            dataType: "json",
                            context: team,
                            success: function(response) {
                                $("#invite-merger-email").val("");
                                if (response && typeof response == "object") {
                                    if (this.id == null && response.id) this.id = response.id;
                                    this.set(response);
                                    if (this.changed) this.changed.commit();
                                } else {
                                    window.alert("Already invited or on your team");
                                }
                                return;
                            },
                            error: function(request, status) {
                                try {
                                    var json = $.parseJSON(request.responseText);
                                    alert(json.details);
                                } catch (e) {
                                    // NOP for now
                                }

                                Kaggle.Model.reportAjaxError({
                                    message: "Kaggle JSON API call failed",
                                    status: status,
                                    method: "POST",
                                    url: url
                                });
                            }
                        });
                    }.bind(this);

                    this.discardTeamInvite = function(teamInvite) {
                        var root = this;
                        var team = root.team();
                        var url = team.uninviteUrl();
                        $.ajax({
                            type: 'POST',
                            url: url,
                            data: {
                                teamInviteId: teamInvite.id
                            },
                            traditional: true,
                            dataType: "json",
                            context: team,
                            success: function(response) {
                                if (response && typeof response == "object") {
                                    if (this.id == null && response.id) this.id = response.id;
                                    this.set(response);
                                    if (this.changed) this.changed.commit();
                                }
                                return;
                            },
                            error: function(request, status) {
                                Kaggle.Model.reportAjaxError({
                                    message: "Kaggle JSON API call failed",
                                    status: status,
                                    method: "POST",
                                    url: url
                                });
                            }
                        });
                    }.bind(this);
                };

                Kaggle.Page.EditTeam.prototype.init = function() {
                    ko.applyBindings(this);
                };
            })(jQuery);

            var page = new Kaggle.Page.EditTeam({
                currentUserId: 598228,
                currentUser: {
                    "id": 598228,
                    "name": "GhodratHeydari",
                    "slug": "ghodrat",
                    "tier": 2,
                    "gravatar": "11c8bb11f06112d43f000650dc4cdc4e",
                    "registered": 1461730565937,
                    "points": null,
                    "pointsText": "none",
                    "ranking": null,
                    "rankingText": "none",
                    "highestRanking": null,
                    "highestRankingText": "none",
                    "url": "/ghodrat"
                },
                competitionId: 5174,
                competition: {
                    "id": 5174,
                    "siteId": 1,
                    "name": "avito-duplicate-ads-detection",
                    "title": "Avito Duplicate Ads Detection",
                    "deadline": 1468281540000,
                    "isActive": true,
                    "isPublic": true
                },
                teamId: 337758,
                team: {
                    "id": 337758,
                    "name": "GhodratHeydari",
                    "slug": "ghodratheydari",
                    "competitionId": 5174,
                    "rank": null,
                    "rankText": "none",
                    "teamLeaderId": 598228,
                    "isInterestedInHostContact": false,
                    "members": [
                        {
                            "id": 598228,
                            "name": "GhodratHeydari",
                            "slug": "ghodrat",
                            "tier": 2,
                            "gravatar": "11c8bb11f06112d43f000650dc4cdc4e",
                            "registered": 1461730565937,
                            "points": null,
                            "pointsText": "none",
                            "ranking": null,
                            "rankingText": "none",
                            "highestRanking": null,
                            "highestRankingText": "none",
                            "url": "/ghodrat"
                        }
                    ],
                    "activeInvites": [],
                    "rejectedInvites": []
                }
            });
            jQuery(function () {
                page.init();
            });
        </script>
    </div>

@endsection