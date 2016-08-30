<html>

<head>
    <title>BigData</title>


    <link rel="stylesheet" href="<?= asset('resources/fonts/css/font-style.css'); ?>">
    <link rel="stylesheet" href="<?= asset('resources/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= asset('resources/css/base.less'); ?>" type="text/css">
    <link rel="stylesheet" href="<?= asset('resources/css/kaggle-site.less'); ?>" type="text/css">
    <link rel="stylesheet" href="<?= asset('resources/css/style.css'); ?>" id="intercom-styles" type="text/css">
    <script src="<?= asset('resources/js/ga.js'); ?>" async="" type="text/javascript"></script>
    <script type="text/javascript" src="<?= asset('resources/js/jquery-resources.7.2.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/jquery-ui-resources.9.2.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/kaggle.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/bootstrap.min.js'); ?>"></script>
    <meta charset="utf-8">

   
    <script type="text/javascript" src="<?= asset('resources/js/jquery-ui-resources.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/kaggle.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/jquery.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/select2.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/knockout-3.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/knockout.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/kaggle_005.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/kaggle_006.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/kaggle_004.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/kaggle_002.js'); ?>"></script>
    <script src="<?= asset('resources/js/select-box-it.js'); ?>" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="<?= asset('resources/css/forum.less'); ?>" />
    <script type="text/javascript" src="<?= asset('resources/js/kaggle.forum.js'); ?>"> </script>


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

                <div id="logobig" style="width:85%;float:center;padding-left:resources00px;"><img src="<?= asset('resources/images/bigdata.png'); ?>" height="resources50px"></div>

            </header>
        <script type="text/javascript">
            jQuery(function ($) {
                $('#comp-header-details hresources').textfill({ maxFontPixels: 26, innerTag: 'a' });
            });
        </script>
        <div class="comp-sidebar">

           



          
        </div>
       
            <div style="margin-top:80px;">

            @yield('content')
            </div>


    </div>
</div>


</div>
       

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
            ? 20resources6 bigdata Inc
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


<script type="text/javascript">
    /**
     * Function that tracks a click on an outbound link in Google Analytics.
     * This function takes a valid URL string as an argument, and uses that URL string
     * as the event label.
     * See: https://support.google.com/analytics/answer/resourcesresources36920?hl=en
     */
    var trackOutboundLink = function(url) {
        ga('send', 'event', 'outbound', 'click', url, {'hitCallback':
                function () {
                    document.location = url;
                }
        });
    }
</script>

    @yield('Footer')
</body>

</html>

