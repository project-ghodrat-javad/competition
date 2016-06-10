@extends('layouts.heaer')

@section('content')

    <div id="main">

        <div class="kaggle content">


            <div id="profile2">


                <!-- ko with:profile -->
                <div class="novice" id="profile2-head" data-bind="init: results.load, css: false ? 'kaggle team' : tierName">
                    <div id="profile2-card">
                        <h1 style="cursor: pointer;" data-bind="text: name, style: { cursor: 'pointer' }, click: gotoUrl">GhodratHeydari</h1>
                        <h3 style="display: block;" data-bind="fadeIn: summary.load, with: summary"><span class="viewing" data-bind="text: taglineText"></span></h3>


                        <h4 data-bind="fadeIn: summary.load, with: summary" style="">
                            <a target="_blank" style="display: none;" rel="nofollow" title="Read Tweets" data-bind="visible: twitterUrl, attr: { href: twitterUrl, target: '_blank' }"><img src="GhodratHeydari%20_%20Kaggle_files/profile-twitter.png"></a>
                            <a target="_blank" style="display: none;" rel="nofollow" title="View Github Profile" data-bind="visible: githubUrl, attr: { href: githubUrl, target: '_blank' }"><img src="GhodratHeydari%20_%20Kaggle_files/profile-github.png"></a>
                            <a target="_blank" style="display: none;" rel="nofollow" title="View LinkedIn Profile" data-bind="visible: linkedinUrl, attr: { href: linkedinUrl, target: '_blank' }"><img src="GhodratHeydari%20_%20Kaggle_files/profile-linkedin.png"></a>
                            <a target="_blank" style="display: none;" rel="nofollow" id="personal-website" title="View Website" data-bind="visible: websiteUrl, text: websiteUrl, attr: { href: websiteUrl, target: '_blank' }"></a>
                        </h4>
                    </div>

                    <div id="profile2-stats" data-bind="visible: true" style="">
                        <div id="profile2-ranking">
                            <h3 id="tier-info">
                                <span id="tier-text" data-bind="text: false ? 'kaggle team' : tierName">novice</span>
                                <a class="tier-popup" href="#">?</a>
                            </h3>

                            <!-- ko if:ranking --><!-- /ko -->

                            <h6>
                                <span data-bind="if: points"></span><br>
                                Joined <span title="Wed Apr 27 2016 08:46:05 GMT+0430 (Iran Standard Time)" class="timeago" data-bind="timeago: registered">a month ago</span> <br>
                                <!-- ko if:ranking --><!-- /ko -->
                            </h6>

                        </div>

                        <img id="profile2-avatar" src="GhodratHeydari%20_%20Kaggle_files/11c8bb11f06112d43f000650dc4cdc4e.jpg" alt="" title="" data-bind="attr: { src: gravatarUrl(240, 240) }, click: gotoUrl" height="240" width="240">
                    </div>
                </div>
                <!-- /ko -->


                <ul id="profile2-tabs">
                    <li class="selected" data-bind="css: { selected: tab.showing('overview') }">
                        <a href="https://www.kaggle.com/ghodrat" data-bind="click: tab.show('overview', $element), attr: { href: profile().url }">پروفایل</a>
                    </li>
                    <li class="" data-bind="css: { selected: tab.showing('results') }">
                        <a href="https://www.kaggle.com/ghodrat/results" data-bind="click: tab.show('results', $element), attr: { href: profile().resultsUrl }">نتایج</a>
                    </li>
                    <li class="" data-bind="css: { selected: tab.showing('scripts') }">
                        <a href="https://www.kaggle.com/ghodrat/scripts" data-bind="click: function() { tab.show('scripts', $element)(); setScriptsSelectBoxIt(); }, attr: { href: profile().scriptsUrl }">اسکریپت ها</a>
                    </li>
                    <li class="" data-bind="css: { selected: tab.showing('forum') }">
                        <a href="https://www.kaggle.com/ghodrat/forum" data-bind="click: tab.show('forum', $element), attr: { href: profile().forumUrl }">تالار گفتگو</a>
                    </li>
                    <li class="" data-bind="visible: canShowPrivate, css: { selected: tab.showing('account') }">
                        <a href="https://www.kaggle.com/ghodrat/account" data-bind="click: tab.show('account', $element), attr: { href: profile().accountUrl }">حساب کاربری</a>
                    </li>
                </ul>

                <div id="profile2-content" data-bind="visible: true" style="">



                    <div style="display: none;" id="profile2-content-activity" data-bind="visible: tab.showing('activity'), if: tab.showing('activity')"></div>
                    <div style="display: none;" id="profile2-content-account" data-bind="visible: tab.showing('account'), if: tab.showing('account')"></div>

                    <div style="display: none;" id="profile2-content-contact" data-bind="visible: tab.showing('contact'), if: tab.showing('contact')"></div>

                    <div style="display: none;" id="profile2-content-forum" data-bind="visible: tab.showing('forum'), if: tab.showing('forum')"></div>

                    <div style="display: none;" id="profile2-content-scripts" data-bind="visible: tab.showing('scripts'), if: tab.showing('scripts')"></div>

                    <div style="display: none;" id="profile2-content-results" data-bind="visible: tab.showing('results'), if: tab.showing('results')"></div>

                    <div id="profile2-content-overview" class="profile2-modular-page" data-bind="visible: tab.showing('overview'), if: tab.showing('overview')">
                        <div id="start-editing" style="" data-bind="visible: canShowPrivate">
                            <button data-bind="click: $root.editProfile">ویرایش پروفایل</button>
                        </div>

                        <div style="display: none;" class="profile2-col-section" data-bind="visible: $root.showResults">
                            <ul id="profile2-comps" data-bind="with: profile">
                                <!-- ko foreach: $root.visibleResults --><!-- /ko -->

                                <li style="display: none;" class="total" data-bind="visible: results().length &gt; 9, click: $root.tab.show('results')">
                                    <a class="total-number" data-bind="text: results().length">0</a>
                                    <h5>Competitions</h5>
                                </li>
                            </ul>
                        </div>


                        <div class="profile2-col-section profile2-2cols" data-bind="with: profile">
                            <div class="col-1">
                                <div id="profile-bio" class="viewing">

                                    <h2>بیوگرافی</h2>


                                    <div class="" style="" data-bind="with: summary, visible: summary.loaded, css: { 'x-spinner-test': summary.loading }">
                                        <p style="display: none;" class="_prewrap" data-bind="visible: bio, if: bio"></p>



                                        <div class="profile2-noinfo" data-bind="visible: !bio()">
                                            User hasn't entered any bio information.
                                        </div>

                                        <dl id="profile2-bio-vitals" data-bind="visible: location">
                                            <dt>موقعیت</dt>
                                            <dd data-bind="text: location">ایالات متحده</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>



                            <div class="col-2">
                                <h2>اسکریپت ها</h2>
                                <div data-bind="foreach: initialScriptsList">

                                    <div class="break-line"></div>

                                    <div class="script-item">
                                        <div class="script-item-votes-section" style="width: auto; margin-top: 30px; padding:0; text-align: right;margin-right: 20px;">
                                            <h1 style="font-size: 24px;"><span data-bind="text: totalVotes">0</span></h1>
                                        </div>


                                        <div class="script-item-content-section">
                                            <h1><a style="text-decoration: none;" href="https://www.kaggle.com/ghodrat/draper-satellite-image-chronology/example01" data-bind="attr: { href: scriptUrl }, text: title, style: { textDecoration: isHidden() ? 'line-through' : 'none' }">example01</a></h1>
                                            <p style="white-space: nowrap;">
                                                last run <span title="Thu Jun 02 2016 19:32:37 GMT+0430 (Iran Standard Time)" class="timeago" data-bind="timeago: lastRunTime()">6 days ago</span> by <a href="https://www.kaggle.com/ghodrat" data-bind="attr: { href: author.profileUrl }, text: author.displayName" class="hover-fix">GhodratHeydari</a>
                                                in <a href="https://www.kaggle.com/c/draper-satellite-image-chronology/scripts" data-bind="attr: { href: projectScriptsUrl }, text: projectName" class="hover-fix">Draper Satellite Image Chronology</a> <br>
                                                <span data-bind="if: totalComments() &gt; 0"></span>
                                                <span data-bind="if: totalForks() &gt; 0"></span>
                                                <span data-bind="text: totalViews">11</span> views  ·  <span data-bind="text: languageName">Python</span>
					<span data-bind="if: outputTypes().length &gt; 0">
						·
						<span data-bind="foreach: outputTypes">
							<span data-bind="if: extension() == 'Notebook'"><span class="fa fa-globe" title="This script outputs a notebook"></span></span>
							<span data-bind="if: extension() == 'Visualization'"></span>
							<span data-bind="if: extension() == 'Data'"></span>
							<span data-bind="if: extension() == 'Other'"></span>
						</span>
					</span>
                                                <span data-bind="if: forkParentScriptVersionId()!=0"></span>
                                                <span data-bind="if: isFork"></span>
                                            </p>

                                        </div>

                                        <div class="script-item-votes-section" style="width: auto; margin-top: 29px; padding: 0; padding-left: 6px;">
                                            <h1 style="font-size: 24px;">
                                                <span title="upvote this script" class="fa fa-arrow-up list-vote-icon" data-bind="click: $parent.voteButtonClicked, css: (currentUserHasVotedForThisScript() ? 'voted-icon' : ''), attr: {title: (currentUserHasVotedForThisScript() ? 'remove upvote' : 'upvote this script')}"></span>
                                            </h1>
                                        </div>

                                        <div class="script-item-avatar-section">
                                            <a href="https://www.kaggle.com/ghodrat/draper-satellite-image-chronology/example01" data-bind="attr: { href: scriptUrl }"><img src="GhodratHeydari%20_%20Kaggle_files/thumb76_76_002.png" data-bind="attr: {src: projectThumbnailUrl}" height="60px" width="60px"></a>
                                        </div>

                                    </div>
                                    <div class="break-line"></div>


                                </div>


                            </div>


                        </div>

                        <div class="profile2-col-section profile2-2cols" data-bind="with: profile">
                            <div class="col-1">
                                <h2 data-bind="init: achievements.load">موفقیت ها</h2>

                                <div class="" style="display: none;" data-bind="visible: achievements.loaded() &amp;&amp; achievements()[0], css: { 'x-spinner-test-2': achievements.loading }">
                                    <ul id="profile2-achievements" data-bind="foreach: achievements"></ul>
                                </div>

                                <div style="" class="profile2-noinfo" data-bind="visible: achievements.loaded() &amp;&amp; !achievements()[0]">
                                    User hasn't earned any achievements yet.
                                </div>

                            </div>

                            <div class="col-2">

                                <div class="info-section" data-bind="with: summary.load">
                                    <h2>مهارت ها</h2>
                                    <ul id="profile2-linkedin-tags" data-bind="foreach: skills"></ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="tiers-info-popup" style="display:none;">
                <ul>
                    <li id="tier-info-master">
                        <img src="GhodratHeydari%20_%20Kaggle_files/tier-big-master.png" alt="Master">
                        <h1>Master</h1>
                        <p>
                            A Kaggle competitor with consistent and stellar competition results.
                        </p>
                    </li>
                    <li id="tier-info-kaggler">
                        <img src="GhodratHeydari%20_%20Kaggle_files/tier-big-kaggler.png" alt="Kaggler">
                        <h1>Kaggler</h1>
                        <p>
                            A Kaggle user actively participating in competitions.
                        </p>
                    </li>
                    <li id="tier-info-novice">
                        <img src="GhodratHeydari%20_%20Kaggle_files/tier-big-novice.png" alt="Novice">
                        <h1>Novice</h1>
                        <p>
                            A Kaggle user just getting started with competitions.
                        </p>
                    </li>
                </ul>

                <p style="text-align:center; margin:2em 0 1em; font-size:15px;">
                    <a href="https://www.kaggle.com/wiki/UserRankingAndTierSystem" target="_blank">More info on our user ranking &amp; tier system »</a>
                </p>

                <script type="text/javascript">
                    jQuery(function($) {
                        $('body').on('click', 'a.tier-popup', function() {
                            $('#tiers-info-popup').dialog({
                                'modal':true,
                                'width':640,
                                'title':"User Tiers",
                                'resizable':false,
                                'dialogClass': 'nicedialog'
                            });
                        });
                    });
                </script>
            </div>

            <script type="text/javascript">
                // Page View Model for the user Profiles page
                (function ($) {
                    // Requires: jQuery
                    // Requires: Knockout
                    // Requires: kaggle.js
                    // Requires: kaggle.knockout

                    Kaggle.Page.ViewProfile = function (proto) {
                        // Current User
                        this.currentUserId = proto.currentUserId;
                        this.currentUser = ko.observable(
                                Kaggle.Model.ProfileCache.set(proto.currentUser)
                        );

                        // Core Profile
                        this.profileId = proto.profileId;
                        this.profile = ko.observable(
                                Kaggle.Model.ProfileCache.set(proto.profile)
                        );

                        // User Birthday (temporary until a specific private entity is created)
                        this.profile().birthday = ko.observable(proto.birthday);

                        this.profile().initialScriptsList = Kaggle.Mapping.fromJS([{"id":68682,"totalVotes":0,"totalForks":0,"hoursSinceLatestEdit":48.433333,"title":"hassan","totalViews":10,"totalComments":0,"forkParentScriptVersionId":0,"isHidden":false,"languageName":"R","outputTypes":[],"currentUserHasVotedForThisScript":false,"isFork":false,"forkDiffLinesInserted":0,"forkDiffLinesDeleted":0,"forkDiffLinesChanged":0,"forkDiffUrl":"/scripts/diff/0/257434","totalScripts":3,"author":{"userId":598228,"displayName":"GhodratHeydari","avatarThumbnailUrl":"https://secure.gravatar.com/avatar/11c8bb11f06112d43f000650dc4cdc4e.jpg?r=pg\u0026s=100\u0026d=https%3a%2f%2fkaggle2.blob.core.windows.net%2favatars%2fthumbnails%2fdefault-thumb.png","profileUrl":"/ghodrat"},"scriptUrl":"/ghodrat/avito-duplicate-ads-detection/hassan","scriptCommentsUrl":"/ghodrat/avito-duplicate-ads-detection/hassan/comments","lastRunTime":"2016-06-06T04:55:49.707Z","projectName":"Avito Duplicate Ads Detection","projectScriptsUrl":"/c/avito-duplicate-ads-detection/scripts","projectThumbnailUrl":"https://kaggle2.blob.core.windows.net/competitions/kaggle/5174/logos/thumb76_76.png","workerStatusMessage":"Complete"},{"id":68119,"totalVotes":0,"totalForks":0,"hoursSinceLatestEdit":134.316666,"title":"example01","totalViews":11,"totalComments":0,"forkParentScriptVersionId":0,"isHidden":false,"languageName":"Python","outputTypes":[{"extension":"Notebook","count":1}],"currentUserHasVotedForThisScript":false,"isFork":false,"forkDiffLinesInserted":0,"forkDiffLinesDeleted":0,"forkDiffLinesChanged":0,"forkDiffUrl":"/scripts/diff/0/254872","totalScripts":3,"author":{"userId":598228,"displayName":"GhodratHeydari","avatarThumbnailUrl":"https://secure.gravatar.com/avatar/11c8bb11f06112d43f000650dc4cdc4e.jpg?r=pg\u0026s=100\u0026d=https%3a%2f%2fkaggle2.blob.core.windows.net%2favatars%2fthumbnails%2fdefault-thumb.png","profileUrl":"/ghodrat"},"scriptUrl":"/ghodrat/draper-satellite-image-chronology/example01","scriptCommentsUrl":"/ghodrat/draper-satellite-image-chronology/example01/comments","lastRunTime":"2016-06-02T15:02:37.577Z","projectName":"Draper Satellite Image Chronology","projectScriptsUrl":"/c/draper-satellite-image-chronology/scripts","projectThumbnailUrl":"https://kaggle2.blob.core.windows.net/competitions/kaggle/5229/logos/thumb76_76.png","workerStatusMessage":"Complete"},{"id":63625,"totalVotes":0,"totalForks":0,"hoursSinceLatestEdit":550.35,"title":"example","totalViews":87,"totalComments":1,"forkParentScriptVersionId":0,"isHidden":true,"languageName":"R","outputTypes":[],"currentUserHasVotedForThisScript":false,"isFork":false,"forkDiffLinesInserted":0,"forkDiffLinesDeleted":0,"forkDiffLinesChanged":0,"forkDiffUrl":"/scripts/diff/0/237662","totalScripts":3,"author":{"userId":598228,"displayName":"GhodratHeydari","avatarThumbnailUrl":"https://secure.gravatar.com/avatar/11c8bb11f06112d43f000650dc4cdc4e.jpg?r=pg\u0026s=100\u0026d=https%3a%2f%2fkaggle2.blob.core.windows.net%2favatars%2fthumbnails%2fdefault-thumb.png","profileUrl":"/ghodrat"},"scriptUrl":"/ghodrat/avito-duplicate-ads-detection/example","scriptCommentsUrl":"/ghodrat/avito-duplicate-ads-detection/example/comments","lastRunTime":"2016-05-16T07:00:53.753Z","projectName":"Avito Duplicate Ads Detection","projectScriptsUrl":"/c/avito-duplicate-ads-detection/scripts","projectThumbnailUrl":"https://kaggle2.blob.core.windows.net/competitions/kaggle/5174/logos/thumb76_76.png","workerStatusMessage":"Complete"}]);

                        // Global Kaggle Statistics
                        this.global = ko.observable(
                                Kaggle.Model.SiteStatisticsCache.get("global")
                        );

                        // User Message
                        this.message = ko.observable(proto.message);

                        // Rate brackets
                        this.rates = ko.observableArray([ 100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600]);
                        this.rateText = function (rate) {
                            return "$" + rate;
                        };

                        // Hour brackets
                        this.hours = ko.observableArray([ 1, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50]);

                        // Page Layout

                        this.tab = Kaggle.Page.tabs(proto.tab || 'overview');

                        this.canSendMessageToProfileUser = proto.canSendMessageToProfileUser;

                        this.canShowPrivate = ko.computed(function () {
                            return this.profile().isSelf() || this.currentUser().isSiteAdmin();
                        }, this);

                        this.canShowContact = ko.computed(function () {
                            return this.canSendMessageToProfileUser;
                        }, this);

                        // NOTE: Show the bar by default to prioritise flicker reduction for active players?
                        this.showResults = ko.computed(function () {
                            var profile = this.profile();
                            if (!profile) return true;
                            if (!profile.results.loaded()) return true;
                            return profile.results().length ? true : false;
                        }, this);

                        this.visibleResults = ko.computed(function () {
                            var profile = this.profile();
                            if (!profile) return null;
                            if (!profile.results.loaded()) return null;
                            var results = profile.results();
                            if (!results) return null;
                            if (results.length <= 9) return results;
                            return results.slice(0,8);
                        }, this);

                        // Page Events

                        this.editProfile = function () {
                            window.location = this.profile().editUrl();
                        }.bind(this);

                        this.showAccount = function () {
                            window.location = this.profile().accountUrl();
                        }.bind(this);

                        this.setScriptsSelectBoxIt = function() {
                            allScriptsViewModel.replaceState();
                            $("select").selectBoxIt({ autoWidth: false });
                        }.bind(this);

                        this.cancelMessage = function () {
                            this.tab('overview');
                            this.message().reset();
                        }.bind(this);
                    };
                })(jQuery);
            </script>

            <script type="text/javascript">
                var pageViewModel = new Kaggle.Page.ViewProfile({
                    tab: '',
                    currentUserId: 598228,
                    currentUser: {
                        "id": 598228,
                        "name": "GhodratHeydari",
                        "slug": "ghodrat",
                        "tier": 1,
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
                    profileId: 598228,
                    profile: {
                        "id": 598228,
                        "name": "GhodratHeydari",
                        "slug": "ghodrat",
                        "tier": 1,
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
                    birthday: "",
                    canSendMessageToProfileUser: false,
                    message: new Kaggle.Message({
                        sendUrl: "/knockout/user-messages/POST",
                        discardUrl: "/ghodrat",
                        from: 598228,
                        to: 598228
                    })
                });
            </script>
            <script>
                allScriptsViewModel.listMetadata.userHasScriptsInThisList(false);
                pageViewModel.allScriptsViewModel = allScriptsViewModel;
            </script>
            <script>
                ko.applyBindings(pageViewModel);
            </script>
            <script src="js/kaggle_003.js" type="text/javascript"></script>

        </div>






    </div>

@endsection