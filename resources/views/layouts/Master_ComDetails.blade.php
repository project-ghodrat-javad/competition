<html>

<head>
 
    <link rel="stylesheet" href="<?= asset('resources/fonts/css/font-style.css'); ?>">
    <title>BigData</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?= asset('resources/css/base.less'); ?>" type="text/css">
    <link rel="stylesheet" href="<?= asset('resources/css/kaggle-site.less'); ?>" type="text/css">
    <link rel="stylesheet" href="<?= asset('resources/css/style.css'); ?>" id="intercom-styles" type="text/css">
    <script src="<?= asset('resources/js/ga.js'); ?>" async="" type="text/javascript"></script>
    <script type="text/javascript" src="<?= asset('resources/js/jquery-1.7.2.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/jquery-ui-1.9.2.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/kaggle.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/bootstrap.min.js'); ?>"></script>
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
            <a id="logo" href="/"><img alt="Kaggle" src="<?= asset('resources/images/site-logo.png'); ?>" height="86" width="240"></a>
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
            <a href=""><img id="comp-image" src="<?= asset('resources/images/bigdata.png'); ?>" alt="" style="float: right;"></a>
        </header>
        <script type="text/javascript">
            jQuery(function ($) {
                $('#comp-header-details h1').textfill({ maxFontPixels: 26, innerTag: 'a' });
            });
        </script>
        


        @yield('content')



    </div>
</div>


</div>
        					 
<div id="footer">
    <div id="footer-inside">
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
</body>

</html>

