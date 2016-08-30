<html>

<head>

    <link rel="stylesheet" href="fonts/css/font-style.css">
    <title>BigData</title><meta charset="utf-8">
    <link rel="stylesheet" href="css/base.less" type="text/css">
    <link rel="stylesheet" href="css/kaggle-site.less" type="text/css">
    <link rel="stylesheet" href="css/style.css" id="intercom-styles" type="text/css">
    <script src="js/ga.js" async="" type="text/javascript"></script>
     <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
    <script type="text/javascript" src="js/kaggle.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>

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


            <div style="width: 98%; margin-top: 1px;" class="description comp-content with-sidebar _panel">
                <header style="height:80px">
                    <div style="width: 25%;float: right;text-align: right">
                        <img style="height: 50px;width: 50px;padding: 20px" src="images/site-logo.png">
                        <img style="height: 50px;width: 50px;padding: 20px" src="images/site-logo.png">

                    </div>

                    <div style="width: 75%;float: right;text-align: right;padding-top: 20px">محمد احمدی</div>
                </header>


                <header  class="info">
                    <div class="simple-steps">
                        <a style="margin-left: 20px" class="info" href="https://www.kaggle.com/c/draper-satellite-image-chronology">کدها                </a>
                        <a style="margin-left: 20px" class="data" href="https://www.kaggle.com/c/draper-satellite-image-chronology/data">خروجی           </a>
                        <a class="submit" href="https://www.kaggle.com/c/draper-satellite-image-chronology/submit">نظرات         </a>
                    </div>
                </header>
            </div>


            <div style="width: 98%; margin-top: 1px" class="description comp-content with-sidebar _panel">

                <header style="height:80px">
                    <h1 style="text-align: right">کدها</h1>

                </header>
            </div>




        </div>
    </div>


</div>
<!-- end koll -- wrap --  -->






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


</body>

</html>

