<?php use App\lib\Jdf; ?>
<html>

<head>
 
    @yield('cssha')
    <title>BigData</title> 
    <meta charset="utf-8">
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
</head>


<body class="logged-in kaggle">




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
                        <li><a href="" target="_blank">Blog</a></li>
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

            <div id="comp-header-details" style="direction:rtl;">
                
                <h1><a style="font-size: 26px;" href="<?= Url('/details/'.$mosabeghe->url.'/data'); ?>">{{ $mosabeghe->title }}</a>
                </h1>



                <div id="comp-header-stats">
                    <div id="comp-header-stats-progress-section">
                        <div id="comp-header-stats-progress">
                            <?php
                                
                                $Jdf=new Jdf();
                                $datest=$mosabeghe->date_st;
                                $days=$mosabeghe->date_finish + 1;
                                $datenow=time();
                                for ($i=1; $i < $days ; $i++) { 
                                    $date='+'.$i.' day';
                                    $created=strtotime($date, $datest);
                                    if ( $created >= $datenow ) {
                                        break;
                                    }
                                    // echo $Jdf->jdate('Y/n/j-H:i:s',); 
                                }
                                // echo $countday;
                                $dd='width:'.(100/$days)*$i.'%';
                                
                            ?>
                            <div id="comp-header-stats-teams" style="{{ $dd  }}">
                            </div>
                        </div>
                        <div id="comp-progress-start"></div>
                        <div id="comp-progress-end"></div>

                    </div>

                    <div id="comp-header-stats-start">
                        <?php      
                            $Jdf=new Jdf(); 
                            echo $Jdf->jdate('Y/n/j-H:i:s',$mosabeghe->date_st); 
                        ?>  
                    </div>
                    <div id="comp-header-stats-end">
                       <?php 
                            $count=$mosabeghe->date_finish;
                            $date='+'.$count.' day';
                            echo $Jdf->jdate('Y/n/j-H:i:s',strtotime($date, $mosabeghe->date_st)); 
                        ?>  
                                        
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
@yield('Footer')
</body>

</html>

