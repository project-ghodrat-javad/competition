
@extends('layouts.new')

@section('content')



    <div id="wrap"><!-- needed for sticky footer -->


        <div id="menu-open-overlay"></div>

        {{--<div id="header2" class="">--}}
        {{--<div id="header2-inside" class="">--}}
        {{--<a id="logo" href="https://www.kaggle.com/"><img alt="Kaggle" src="GhodratHeydari%20_%20Kaggle_files/site-logo.png" height="86" width="240"></a>--}}

        {{--<ul id="header-ul">--}}
        {{--<li>--}}
        {{--<a href="https://www.kaggle.com/solutions/competitions">Host</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="https://www.kaggle.com/competitions">Competitions</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="https://www.kaggle.com/datasets">Datasets</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="https://www.kaggle.com/scripts">Scripts</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="https://www.kaggle.com/jobs">Jobs</a>--}}
        {{--</li>--}}
        {{--<li>--}}
        {{--<a href="">Community ▾</a>--}}
        {{--<ul>--}}
        {{--<li><a href="https://www.kaggle.com/users">User Rankings</a></li>--}}
        {{--<li><a href="https://www.kaggle.com/forums">Forum</a></li>--}}
        {{--<li><a href="http://blog.kaggle.com/" target="_blank">Blog</a></li>--}}
        {{--<li><a href="https://www.kaggle.com/Wiki">Wiki</a></li>--}}
        {{--</ul>--}}
        {{--</li><!-- <script>--}}
        {{--$(function(){--}}
        {{--if (!$('body.logged-in').length) {--}}
        {{--$('a.logged-in-only').hide().parent().next().find('a').css('padding-top','10px');--}}
        {{--}--}}
        {{--});--}}
        {{--</script> -->--}}
        {{--</ul>--}}

        {{--<script>--}}
        {{--jQuery(function () {--}}
        {{--jQuery('#header-ul li:has(ul) > a').click(function (e) {--}}
        {{--e.preventDefault();--}}

        {{--jQuery('#header-ul li').not(jQuery(this).parent()).find('ul').removeClass('open');--}}
        {{--jQuery(this).parent().find('ul').toggleClass('open');--}}
        {{--jQuery('#menu-open-overlay').show();--}}
        {{--});--}}

        {{--jQuery('#menu-open-overlay').click(function () {--}}
        {{--jQuery('#header-ul ul').removeClass('open');--}}
        {{--jQuery('#top-bar-signin').hide();--}}
        {{--jQuery(this).hide();--}}
        {{--});--}}

        {{--});--}}
        {{--</script>--}}

        {{--<ul id="header-control">--}}
        {{--<li id="header-account"><a class="profilelink" href="https://www.kaggle.com/ghodrat" title="View my profile">GhodratHeydari</a></li>--}}
        {{--<li id="header-logout"><a href="https://www.kaggle.com/account/logoff" class="logout-link">Logout</a></li>--}}
        {{--</ul>--}}
        {{--</div>--}}
        {{--</div>--}}









        <!-- header-inside and header -->
        <div id="main">

            <div class="kaggle content">


                <div id="profile2">


                    <!-- ko with:profile -->
                    <div class="novice" id="profile2-head" data-bind="init: results.load, css: false ? 'kaggle team' : tierName">
                        <div id="profile2-card">
                            <h1 style="cursor: pointer;" data-bind="text: name, style: { cursor: 'pointer' }, click: gotoUrl">اسم کاربر</h1>
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
                            <a href="/Pro_user" data-bind="click: tab.show('overview', $element), attr: { href: profile().url }">پروفایل</a>
                        </li>
                        <li class="" data-bind="css: { selected: tab.showing('results') }">
                            <a href="/Result_user" data-bind="click: tab.show('results', $element), attr: { href: profile().resultsUrl }">نتایج</a>
                        </li>
                        <li class="" data-bind="css: { selected: tab.showing('scripts') }">
                            <a href="/Script_user" data-bind="click: function() { tab.show('scripts', $element)(); setScriptsSelectBoxIt(); }, attr: { href: profile().scriptsUrl }">اسکریپت ها</a>
                        </li>
                        <li class="" data-bind="css: { selected: tab.showing('forum') }">
                            <a href="/Forum_user" data-bind="click: tab.show('forum', $element), attr: { href: profile().forumUrl }">تالار گفتگو</a>
                        </li>
                        <li class="" data-bind="visible: canShowPrivate, css: { selected: tab.showing('account') }">
                            <a href="/Acaunt_user" data-bind="click: tab.show('account', $element), attr: { href: profile().accountUrl }">حساب کاربری</a>
                        </li>
                    </ul>

                    <div>
                        @yield('p_content')
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
    </div> <!-- wrap -->

    {{--<div id="footer">--}}
    {{--<div id="footer-inside">--}}
    {{--<div id="footer-social">--}}
    {{--<div id="social-links">--}}
    {{--<a class="twitter" href="http://www.twitter.com/kaggle" title="Follow Kaggle on Twitter"></a>--}}
    {{--<a class="facebook" href="http://www.facebook.com/kaggle" title="Follow Kaggle on Facebook"></a>--}}
    {{--<a class="linkedin" href="http://www.linkedin.com/companies/kaggle" title="Follow Kaggle on LinkedIn"></a>--}}
    {{--</div><!-- social-links -->--}}

    {{--</div>--}}
    {{--<div id="footer-copyright">--}}



    {{--© 2016 Kaggle Inc                </div>--}}
    {{--<div id="footer-links">--}}
    {{--<a href="https://www.kaggle.com/team">Our Team</a>--}}
    {{--<a href="https://www.kaggle.com/careers">Careers</a>--}}
    {{--<a href="https://www.kaggle.com/terms">Terms</a>--}}
    {{--<a href="https://www.kaggle.com/privacy">Privacy</a>--}}
    {{--<!--<a href="/Home/ContactPress">Press</a>-->--}}
    {{--<a href="https://www.kaggle.com/Home/contact">Contact/Support</a>--}}
    {{--</div> <!-- footer-links -->--}}
    {{--</div> <!-- footer-inside -->--}}
    {{--</div> <!--footer-->--}}


    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-12629138-1']);
        _gaq.push(['_trackPageview']);
        _gaq.push(['_trackPageLoadTime']);
        _gaq.push(['_setCustomVar', 1, 'usertype', 'registered', 2]);
        _gaq.push(['_setCustomVar', 2, 'userid', '598228', 2]);
        (function () {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <script type="text/javascript">
        /**
         * Function that tracks a click on an outbound link in Google Analytics.
         * This function takes a valid URL string as an argument, and uses that URL string
         * as the event label.
         * See: https://support.google.com/analytics/answer/1136920?hl=en
         */
        var trackOutboundLink = function(url) {
            ga('send', 'event', 'outbound', 'click', url, {'hitCallback':
                    function () {
                        document.location = url;
                    }
            });
        }
    </script>



@endsection
