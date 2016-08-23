<html>
<head>


    <link rel="stylesheet" href="<?= asset('resources/fonts/css/font-style.css'); ?>">
    <link rel="stylesheet" href="<?= asset('resources/css/base.less'); ?>" type="text/css">
    <link rel="stylesheet" href="<?= asset('resources/css/kaggle-site.less'); ?>" type="text/css">
    <link rel="stylesheet" href="<?= asset('resources/css/style.css'); ?>" id="intercom-styles" type="text/css">
    <script src="<?= asset('resources/js/ga.js'); ?>" async="" type="text/javascript"></script>
    <script type="text/javascript" src="<?= asset('resources/js/jquery-1.7.2.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/jquery-ui-1.9.2.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/kaggle.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/js/bootstrap.min.js'); ?>"></script>

    <link rel="stylesheet" href="<?= asset('resources/css/base.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?= asset('resources/css/kaggle-site.css'); ?>" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= asset('resources/css/profiles.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset('resources/css/select2.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?= asset('resources/css/select-box-it.css'); ?>">
    <link rel="stylesheet" href="<?= asset('resources/css/jquery-ui.css'); ?>" type="text/css" media="all">
    <title>Competitions | BigData</title>
    <meta charset="utf-8">

    <script type="text/javascript" src="<?= asset('resources/js/jquery-ui-1.js'); ?>"></script>
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
                <li id="header-logout"><a href="{{ url('logout') }}" class="logout-link"> خروج</a></li>
                <li id="header-login"><a href="https://www.kaggle.com/account/login?returnUrl=%2Fcompetitions" class="login-link">اسم کاربر</a></li>
            </ul>
            <ul id="header-ul">
                <li>
                    <a href="/solutions/competitions">میزبان</a>
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
            <a id="logo" href="/"></a>
        </div>
    </div>
    <!-- End header-inside and header -->


    <div>

        @yield('content')
    </div>








</div>
<!-- end koll  -->

<!--  start footer -->
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
@yield('Footer')
</body>
</html>

