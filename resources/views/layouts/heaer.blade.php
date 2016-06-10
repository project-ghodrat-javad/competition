<html>
<head>


    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/base.css" type="text/css">
    <link rel="stylesheet" href="css/kaggle-site.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/profiles.css">
    <link rel="stylesheet" type="text/css" href="css/select2.css">
    <link rel="stylesheet" type="text/css" href="css/select-box-it.css">
    <link rel="stylesheet" href="css/jquery-ui.css" type="text/css" media="all">
    <script type="text/javascript" src="js/jquery-ui-1.js"></script>
    <script type="text/javascript" src="js/kaggle.js"></script>
    <script type="text/javascript">

        Kaggle.Current.siteId = 1;
        Kaggle.Current.userId = 598228;
    </script>


    <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="/content/v/f1f17fea7cee/shared/js/ie/selectivizr.min.js"></script>
    <![endif]-->


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="images/jquery_002.js"></script><style>
        .text-core{position:relative;}
        .text-core .text-wrap{background:#fff;position:absolute;}
        .text-core .text-wrap textarea,.text-core .text-wrap input{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-border-radius:0px;-moz-border-radius:0px;border-radius:0px;border:1px solid #9daccc;outline:none;resize:none;position:absolute;z-index:1;background:none;overflow:hidden;margin:0;padding:3px 5px 4px 5px;white-space:nowrap;font:11px "lucida grande",tahoma,verdana,arial,sans-serif;line-height:13px;height:auto;}

        .text-core .text-wrap .text-arrow{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;position:absolute;top:0;right:0;width:22px;height:22px;background:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAkAAAAOAQMAAADHWqTrAAAAA3NCSVQICAjb4U/gAAAABlBMVEX///8yXJnt8Ns4AAAACXBIWXMAAAsSAAALEgHS3X78AAAAHHRFWHRTb2Z0d2FyZQBBZG9iZSBGaXJld29ya3MgQ1MzmNZGAwAAABpJREFUCJljYEAF/xsY6hkY7BgYZBgYOFBkADkdAmFDagYFAAAAAElFTkSuQmCC") 50% 50% no-repeat;cursor:pointer;z-index:2;}

        .text-core .text-wrap .text-dropdown{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0;position:absolute;z-index:3;background:#fff;border:1px solid #9daccc;width:100%;max-height:100px;padding:1px;font:11px "lucida grande",tahoma,verdana,arial,sans-serif;display:none;overflow-x:hidden;overflow-y:auto;}
        .text-core .text-wrap .text-dropdown.text-position-below{margin-top:1px;}
        .text-core .text-wrap .text-dropdown.text-position-above{margin-bottom:1px;}
        .text-core .text-wrap .text-dropdown .text-list .text-suggestion{padding:3px 5px;cursor:pointer;}
        .text-core .text-wrap .text-dropdown .text-list .text-suggestion em{font-style:normal;text-decoration:underline;}
        .text-core .text-wrap .text-dropdown .text-list .text-suggestion.text-selected{color:#fff;background:#6d84b4;}

        .text-core .text-wrap .text-focus{-webkit-box-shadow:0px 0px 6px #6d84b4;-moz-box-shadow:0px 0px 6px #6d84b4;box-shadow:0px 0px 6px #6d84b4;position:absolute;width:100%;height:100%;display:none;}
        .text-core .text-wrap .text-focus.text-show-focus{display:block;}

        .text-core .text-wrap .text-prompt{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;position:absolute;width:100%;height:100%;margin:1px 0 0 2px;font:11px "lucida grande",tahoma,verdana,arial,sans-serif;color:#c0c0c0;overflow:hidden;white-space:pre;}
        .text-core .text-wrap .text-prompt.text-hide-prompt{display:none;}

        .text-core .text-wrap .text-tags{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;position:absolute;width:100%;height:100%;padding:3px 35px 3px 3px;cursor:text;}
        .text-core .text-wrap .text-tags.text-tags-on-top{z-index:2;}
        .text-core .text-wrap .text-tags .text-tag{float:left;}
        .text-core .text-wrap .text-tags .text-tag .text-button{-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;position:relative;float:left;border:1px solid #9daccc;background:#e2e6f0;color:#000;padding:0px 17px 0px 3px;margin:0 2px 2px 0;cursor:pointer;height:16px;font:11px "lucida grande",tahoma,verdana,arial,sans-serif;}
        .text-core .text-wrap .text-tags .text-tag .text-button a.text-remove{position:absolute;right:3px;top:2px;display:block;width:11px;height:11px;background:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAsAAAAhCAYAAAAPm1F2AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEgAACxIB0t1+/AAAAB50RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNS4xqx9I6wAAAQ5JREFUOI2dlD0WwiAQhCc8L6HHgAPoASwtSYvX8BrQxtIyveYA8RppLO1jE+LwE8lzms2yH8MCj1QoaBzH+VuUYNYMS213UlvDRamtUbXb5ZyPHuDoxwGgip3ipfvGuGzPz+vZ/coDONdzFuYCO6ramQQG0DJIE1oPBBvM6e9LqaS2FwD7FWwnVoIAsOc2Xn1jDlyd8pfPBRVOBHA8cc/3yCmQqt0jcY4LuTyAF3pOYS6wI48LAm4MUrx5JthgSQJAt5LtNgAUgEMBBIC3AL2xgo58dEPfhE9wygef89FtCeC49UwltR1pQrK2qr9vNr7uRTCBF3pOYS6wI4/zdQ8MUpxPI9hgSQL0Xyio/QBt54DzsHQx6gAAAABJRU5ErkJggg==") 0 0 no-repeat;}
        .text-core .text-wrap .text-tags .text-tag .text-button a.text-remove:hover{background-position:0 -11px;}
        .text-core .text-wrap .text-tags .text-tag .text-button a.text-remove:active{background-position:0 -22px;}
    </style>
    <script type="text/javascript" src="js/select2.js"></script>
    <script type="text/javascript" src="js/knockout-3.js"></script>
    <script type="text/javascript" src="js/knockout.js"></script>
    <script type="text/javascript" src="js/kaggle_005.js"></script>
    <script type="text/javascript" src="js/kaggle_006.js"></script>
    <script type="text/javascript" src="js/kaggle_004.js"></script>

    <script type="text/javascript" src="js/kaggle_002.js"></script>
    <script src="js/select-box-it.js" type="text/javascript"></script>

    <link rel="apple-touch-icon" href="https://www.kaggle.com/content/v/1e4cdaa83f46/kaggle/img/apple-touch-icon.png">





    <link rel="stylesheet" href="fonts/css/font-style.css">
    <title>Competitions | BigData</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/base.less" type="text/css">
    <link rel="stylesheet" href="css/kaggle-site.less" type="text/css">
    <link rel="stylesheet" href="css/style.css" id="intercom-styles" type="text/css">
    <script src="https://widget.intercom.io/widget/koj6gxx6" async="" type="text/javascript"></script><script src="js/ga.js" async="" type="text/javascript"></script><script src="https://widget.intercom.io/widget/koj6gxx6" async="" type="text/javascript"></script><script src="js/ga.js" async="" type="text/javascript"></script><script src="https://widget.intercom.io/widget/koj6gxx6" async="" type="text/javascript">
    </script><script src="js/ga.js" async="" type="text/javascript">
    </script><script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
    <script type="text/javascript" src="js/kaggle.min.js"></script>
    <script type="text/javascript">
        Kaggle.Current.siteId = 1;
        Kaggle.Current.userId = 598228;
    </script>
    <!--[if (gte IE 6)&(lte IE 8)]>
    <script type="text/javascript" src="/content/v/f1f17fea7cee/shared/js/ie/selectivizr.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script>
        window.intercomSettings = {
            app_id: "koj6gxx6"
        };
    </script>
    <script>(function(){var w=window;var ic=w.Intercom;
            if(typeof ic==="function"){ic('reattach_activator');
                ic('update',intercomSettings);}else{var d=document;
                var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){
                    var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/koj6gxx6';
                    var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}
                else{w.addEventListener('load',l,false);}}})()</script>



    <script>
        window.intercomSettings = {
            app_id: "koj6gxx6",
            name: "GhodratHeydari",
            email: "heydari3436@yahoo.com",
            created_at: 1461730565,
            user_hash: "31648168af21b6cbf060149033fdd5889003b3f8de7aa567f3734867b797f2b5",
            "last_visit_date_at": 1465363275,
            "is_activated": true,
            "is_locked_out": false,
            "points": 0,
            "ranking": 0,
            "tier": 1,
            "highest_ranking": 0,
            "user_name": "ghodrat",
            "display_name": "GhodratHeydari",
            "is_admin": false,
            "experiment_group": 1,
            "newsletter_subscriber": true,
            "block_emails": false,
            "delete_account_reason": ""
        };
    </script>
    <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/koj6gxx6';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>

</head>


<body class="logged-in    kaggle">



<div id="wrap">

    <!--Start header-inside and header -->
    <div id="header2" class="">
        <div id="header2-inside" class="">
            <ul id="header-control">
                <li id="header-logout"><a href="/account/logoff" class="logout-link">ثبت نام</a></li>
                <li id="header-login"><a href="https://www.kaggle.com/account/login?returnUrl=%2Fcompetitions" class="login-link">ورود</a></li>
            </ul>
            <ul id="header-ul">
                <li>
                    <a href="/solutions/competitions">میزبان</a>
                </li>
                <li>
                    <a href="/competitions">مسابقات</a>
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


    <div>

        @yield('content');
    </div>








</div>
<!-- end koll  -->

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


</body>

</html>

