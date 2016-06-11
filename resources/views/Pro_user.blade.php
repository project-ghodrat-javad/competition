

@extends('layouts.Master_Profile')
@section('p_content')

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

@endsection