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


<body class="logged-in kaggle" style="direction:rtl;">

<div id="wrap">

    <!--Start header-inside and header -->

    @yield('headermenu')

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

