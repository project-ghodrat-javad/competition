<html>

<head>

    <link rel="stylesheet" href="fonts/css/font-style.css">
    <title>BigData</title>
    {{--<link href="/content/v/4e3f994e938b/kaggle/favicon.ico" rel="shortcut icon" type="image/x-icon">--}}
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/base.less" type="text/css">
    <link rel="stylesheet" href="css/kaggle-site.less" type="text/css">
    <link rel="stylesheet" href="css/style.css" id="intercom-styles" type="text/css">
    {{--<script src="https://widget.intercom.io/widget/koj6gxx6" async="" type="text/javascript"></script>--}}
    <script src="js/ga.js" async="" type="text/javascript"></script>
    {{--<script src="https://widget.intercom.io/widget/koj6gxx6" async="" type="text/javascript"></script>--}}
    {{--<script src="js/ga.js" async="" type="text/javascript"></script>--}}
    {{--<script src="https://widget.intercom.io/widget/koj6gxx6" async="" type="text/javascript"></script>--}}
    {{--<script src="js/ga.js" async="" type="text/javascript"></script>--}}
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
    <script type="text/javascript" src="js/kaggle.min.js"></script>
    {{--<script type="text/javascript">--}}
        {{--Kaggle.Current.siteId = 1;--}}
        {{--Kaggle.Current.userId = 598228;--}}
    {{--</script>--}}
    <!--[if (gte IE 6)&(lte IE 8)]>
    <!--<script type="text/javascript" src="/content/v/f1f17fea7cee/shared/js/ie/selectivizr.min.js"></script>-->
    <![endif]-->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    {{--<link rel="apple-touch-icon" href="img/apple-touch-icon.png">--}}
    <!--[if lt IE 9]>
    <!--<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>-->
    <![endif]-->
    {{--<script>--}}
        {{--window.intercomSettings = {--}}
            {{--app_id: "koj6gxx6"--}}
        {{--};--}}
    {{--</script>--}}
    {{--<script>(function(){var w=window;var ic=w.Intercom;--}}
	{{--if(typeof ic==="function"){ic('reattach_activator');--}}
	{{--ic('update',intercomSettings);}else{var d=document;--}}
	{{--var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){--}}
	{{--var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/koj6gxx6';--}}
	{{--var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}--}}
	{{--else{w.addEventListener('load',l,false);}}})()</script>--}}

</head>


<body class="logged-in    kaggle">




<div id="wrap">

	<!--Start header-inside and header -->
    <div id="header2" class="">
        <div id="header2-inside" class="">
            <ul id="header-control">
                <li id="header-logout"><a href="/register" class="logout-link">ثبت نام</a></li>
                <li id="header-login"><a href="/login" class="login-link">ورود</a></li>
            </ul>
            <ul id="header-ul">
                <li>
                    <a href="/Pro_user">میزبان</a>
                </li>
                <li>
                    <a href="/Competitions">مسابقات</a>
                </li>
                <li>
                    <a href="/datasets">پایگاه داده</a>
                </li>
                <li>
                    <a href="/scripts">اسکریپت</a>
                </li>
                <li>
                    <a href="/jobs">مشاغل</a>
                </li>
                <li>
                    <a href="">         انجمن ▾     </a>
                    <ul>
                        <li><a href="/users">کاربر عالی رتبه</a></li>
                        <li><a href="/forums">بازار</a></li>
                        <li><a href="http://blog.kaggle.com" target="_blank">Blog</a></li>
                        <li><a href="/Wiki">Wiki</a></li>
                    </ul>
                </li>
            </ul>
            <script>
                jQuery(function () {
                    jQuery('#header-ul li:has(ul) > a').click(function (e) {
                        e.preventDefault();

                        jQuery('#header-ul li').not(jQuery(this).parent()).find('ul').removeClass('open');
                        jQuery(this).parent().find('ul').toggleClass('open');
                        jQuery('#menu-open-overlay').show();
                    });

                    jQuery('#menu-open-overlay').click(function () {
                        jQuery('#header-ul ul').removeClass('open');
                        jQuery('#top-bar-signin').hide();
                        jQuery(this).hide();
                    });

                });
            </script>
            <a id="logo" href="/"><img alt="Kaggle" src="images/site-logo.png" height="86" width="240"></a>
        </div>
    </div>
    <!-- End header-inside and header -->

	<div id="main">
        <div id="competition">
            <!-- i ma  @html.attr('class',="" 'prospecting',="" competition.inprospectingphase).add(ispreview="" ?="" 'preview'="" :="" '')="">    -->
            <header id="comp-header">

            <div id="comp-header-details">
                <h2>

                    $75,000
                    ՠ<a href="https://www.kaggle.com/c/draper-satellite-image-chronology/leaderboard">204 teams</a>
                </h2>
                <h1><a style="font-size: 26px;" href="https://www.kaggle.com/c/draper-satellite-image-chronology">Draper Satellite Image Chronology</a>
                </h1>



                <div id="comp-header-stats">
                    <div id="comp-header-stats-progress-section">
                        <div id="comp-header-stats-progress">
                            <div id="comp-header-stats-teams" style="width:22%">
                            </div>
                        </div>
                        <div id="comp-progress-start"></div>
                        <div id="comp-progress-end"></div>



                        <div class="comp-progress-milestone prohibit-entrants" style="left:88.21865%;">

                            <div class="circle" style="background:blue"></div>
                            <div class="milestone-key">Merger and 1st Submission Deadline</div>

                            <div class="milestone-caption">
                                <h2>
                                    <strong>20 Jun</strong><br>
                                    38 days
                                </h2>
                                <h3>
                                    Deadline for new entry &amp; team mergers
                                </h3>
                            </div>

                        </div>


                    </div>

                    <div id="comp-header-stats-start">
                        Fri 29 Apr 2016
                    </div>
                    <div id="comp-header-stats-end">
                        Mon 27 Jun 2016
                                        <span class="to-go-note">
                                            (45 days to go)
                                        </span>
                    </div>
                </div>
            </div>
            <a href="https://www.kaggle.com/c/draper-satellite-image-chronology"><img id="comp-image" src="images/bigdata.png" alt="" style="float: right;"></a>
        </header>
        <script type="text/javascript">
            jQuery(function ($) {
                $('#comp-header-details h1').textfill({ maxFontPixels: 26, innerTag: 'a' });
            });
        </script>
        <div class="comp-sidebar">

            <div class="_panel" id="competition-dashboard" style="direction:rtl">
                <header>
                    <h1>داشبورد</h1>
                </header>
                <ul id="competition-dashboard-dropdown">
                    <li class="cd-home selected">
                        <a href="/Competitions">صفحه اصلی</a>
                        <ul style="border-left: 2px none; margin: 10px;">

                            <li class="cd-data"><a href="/ComDetails"> جزئیات مسابقه</a></li>

                            <li class="cd-data"><a href="/Data">داده ها</a></li>

                            <li class="cd-submit submission-link">
                                <a class="comp-link" href="">ایجاد یک نظر</a>
                            </li>
                        </ul>
                    </li>

                    <li class="cd-info">
                        <a id="open-info">اطلاعات</a>
                        <ul id="pages-flyout" style="border-left: 2px none; margin: 10px;">
                            <li>
                                <a href="">توصیف</a>                    </li>
                            <li>
                                <a href="/ComDetails/evaluation">ارزیابی</a>                    </li>
                            <li>
                                <a href="/Rules">قواعد</a>                    </li>
                            <li>
                                <a href="/Prizes">جایزه</a>                    </li>
                            <li>
                                <a href="/Timeline">مدت زمان</a>                    </li>

                        </ul>
                    </li>

                    <li class="cd-forum"><a href="/forum">تالار گفتگو</a></li>

                    <li class="cd-scripts" >
                        <a class="comp-link" href="/ComDetails/scripts">اسکریپت ها </a>
                        <ul class="flyout" style="border-left: 2px none; margin: 10px;">
                            <li><a href="ComDetails/scripts/new">اسکریپت جدید</a></li>
                            <li><a href="/ComDetails/scripts/notebook">نوشته جدید</a></li>
                        </ul>
                    </li>

                    <li class="cd-leaderboard">
                        <a href="/team">ایجاد تیم</a>
                        <a href="https://www.kaggle.com/c/draper-satellite-image-chronology/leaderboard">سایر</a>
                        <a href="https://www.kaggle.com/c/draper-satellite-image-chronology/leaderboard">سایر</a>
                        <a href="https://www.kaggle.com/c/draper-satellite-image-chronology/leaderboard">سایر</a>
                    </li>




                </ul>
            </div>

            {{--<script type="text/javascript">--}}
                {{--$(function () {--}}
                    {{--$(".cd-home").addClass("selected");--}}
                {{--});--}}
            {{--</script>--}}


           <!-- <div id="partial-mini-leaderboard">   
				<!--
				<div class="widget _panel" id="compside-leaderboard">
                    <header>
                        <h1><a href="https://www.kaggle.com/c/draper-satellite-image-chronology/leaderboard">Public Leaderboard</a></h1>
                    </header>

                    <ol>
                        <li value="1">Vladimir Tomecek</li>
                        <li value="2">Bad Robot</li>
                        <li value="3">Cavor</li>
                        <li value="4">( ?Р?? ?Щ</li>
                        <li value="5">khyh</li>
                        <li value="6">olegpolivin</li>
                        <li value="7">Igor Lins e Silva</li>
                        <li value="8">kc</li>
                        <li value="9">kes367</li>
                        <li value="10">Ravi</li>
                    </ol>
                </div>
            </div>-->

            {{--22.03.95--}}
            {{--<script type="text/javascript">--}}
                {{--jQuery(function ($) {--}}
                    {{--$("#partial-mini-leaderboard").load("/c/5229/partial/mini-leaderboard");--}}
                {{--});--}}
            {{--</script>--}}
            {{----}}
            {{--<script type="text/javascript">--}}
                {{--jQuery(function ($) {--}}
                    {{--$("#partial-mini-scripts").load("/c/5229/scripts/hot/widget");--}}
                {{--});--}}
            {{--</script>--}}


            {{----}}
            {{----}}
            {{--<script type="text/javascript">--}}
                {{--jQuery(function ($) {--}}
                    {{--$("#partial-stats-ticker").load("/c/5229/partial/stats");--}}
                {{--});--}}
            {{--</script>--}}
        </div>
        <div class="description comp-content with-sidebar _panel">
            <header class="info">
                <div class="simple-steps">
                    <a class="info" href="https://www.kaggle.com/c/draper-satellite-image-chronology">       «        جزئیات مسابقه</a>
                    <a class="data" href="https://www.kaggle.com/c/draper-satellite-image-chronology/data">«  داده ها</a>
                    <a class="submit" href="https://www.kaggle.com/c/draper-satellite-image-chronology/submit">ایجاد یک نطر</a>
                </div>
            </header>
            <div class="comp-content-inside">
                @yield('matndetails')
            </div>
        </div>
    </div>
</div>


</div>
        <!-- end koll -- wrap --  -->

<!--  start footer -->							 
<div id="footer">
    <div id="footer-inside">
        <!--<div id="footer-social">
            <div id="social-links">
                <a class="twitter" href="http://www.twitter.com/kaggle" title="Follow Kaggle on Twitter"></a>
                <a class="facebook" href="http://www.facebook.com/kaggle" title="Follow Kaggle on Facebook"></a>
                <a class="linkedin" href="http://www.linkedin.com/companies/kaggle" title="Follow Kaggle on LinkedIn"></a>
            </div>
        </div>-->
       <!-- <div id="footer-copyright">
            ? 2016 bigdata Inc
        </div>	-->
        <div id="footer-links">
            <a href="/team">Our Team</a>
            <a href="/careers">Careers</a>
            <a href="/terms">Terms</a>
            <a href="/privacy">Privacy</a>
            <a href="/Home/contact">Contact/Support</a>
        </div>
    </div> 
</div>
 <!--end footer-->


{{--<script type="text/javascript">--}}
    {{--var _gaq = _gaq || [];--}}
    {{--_gaq.push(['_setAccount', 'UA-12629138-1']);--}}
    {{--_gaq.push(['_trackPageview']);--}}
    {{--_gaq.push(['_trackPageLoadTime']);--}}
    {{--_gaq.push(['_setCustomVar', 1, 'usertype', 'registered', 2]);--}}
    {{--_gaq.push(['_setCustomVar', 2, 'userid', '598228', 2]);--}}
    {{--(function () {--}}
        {{--var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;--}}
        {{--ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';--}}
        {{--var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);--}}
    {{--})();--}}
{{--</script>--}}
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

<!--
<iframe style="display: none;"></iframe>
<div class="intercom-container intercom-reset intercom-learn" id="intercom-container">



    <div style="display: block;" class="intercom-launcher intercom-launcher-active" id="intercom-launcher">
        <div class="intercom-launcher-button">
            <div class="intercom-launcher-initials"></div>
        </div>
        <div class="intercom-launcher-badge">
        </div>
        <div class="intercom-launcher-preview">
            <div class="intercom-launcher-preview-body"></div>
            <div class="intercom-launcher-preview-caret"></div>
            <div class="intercom-launcher-preview-close"></div>
        </div>
    </div>
    <div class="intercom-messenger intercom-messenger-inactive" id="intercom-messenger"></div>
</div> -->

</body>

</html>

