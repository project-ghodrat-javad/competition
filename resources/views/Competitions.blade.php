
<html>
<head>

    <link rel="stylesheet" href="<?= asset('resources/fonts/css/font-style.css'); ?>">
    <title>مسابقات پردازش داده - بیگ دیتا</title>
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
                    <li id="header-logout"><a href="<?= url('/register'); ?>" class="logout-link">ثبت نام</a></li>
                    <li id="header-login"><a href="<?= url('/login'); ?>" class="login-link">ورود</a></li>
                </ul>

            <ul id="header-ul">
                <li>
                    <a href="/test">میزبان</a>
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


             {{--for menu anjoman--}}
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


	<!-- Logo Bigdata -->
    <div class= 'container' style="margin-top:20px;margin-bottom:230px">
       <!-- <style type="text/css">
            #competitions-intro-container {
                background:#2699c7;
            }
        </style>-->
        <!--<div id="" style="width:15%;float:left"></div>-->
        <div id="logobig" style="width:85%;float:right"><img src="<?= asset('resources/images/bigdata.png'); ?>"></div>
    </div>


	<!-- start mosabeghe -->
	
    <div id="competitions" class="content">
	        <!-- start dashbord left -->
        <div id="competitions-page-sidebar">
            <ul id="view-switch" style="text-align: right; margin: 10px;" id="view-switch">
                <li class="active" id="recent-switch" data-target="competitions-recent">مسابقات فعال</li>
                <li class="" id="all-switch" data-target="competitions-all">همه مسابقات</li>
            </ul>
            <div id="sidebar-all-competitions" style="display: none;">
                <div id="competitions-sidebar">
                    
                    <div id="competitions-filter">
                        <div class="filter" id="all-or-enterable">
                            <ul>
                                <li>
                                    <input value="AllCompetitions" id="all" name="SearchVisibility" checked="checked" type="radio">
                                    <label class="checked" for="all">همه مسابقات</label>
                                    
                                </li>
                                <!-- only show if user has entered a comp -->
                            </ul>
                        </div>
                        
                        <div class="filter">
                            <h3>حامی</h3>
                            <ul>
                                <li>

                                    {{ Form::label('دانش') }}
                                    {{ Form::checkbox('know',null,false,['class'=>'checkclick','onClick'=>'hami()']) }}
                                    <!-- <input name="ShowInclass" value="true" type="checkbox" onclick="hami();">
                                    <label class="inclass" for="inclass">مسابقات دانشجویی</label> -->
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- end dashbord left  -->
		
        <!-- start dashbord right  -->
        <div id="competitions-content">
            <div id="competitions-recent" style="">
                <li class="home-item current-comps _panel">
                    <header class="homepage-heading comp-type" id="active-heading">
                        <h1>
                            <a href="/Competitions">مسابقات فعال</a>
                        </h1>
                    </header>
                    <div class="front-current-container" id="recruitment-container">
                        <ul class="front-current multiple" id="recruitment">
                            

                        @yield('content')



                        </ul>
                    </div>
                </li>
            </div>
			
            <div id="competitions-all" style="display: none;">
                <table id="competitions-table">
                    <colgroup>
                        <col width="52%">
                        <col width="24%">
                        <col width="24%">
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="not-sorted">
                             نام مسابقه 
                        </th>
                        <th class="sorted descending">
                             جایزه  
                        </th>

                        
                        <th class="not-sorted">
                             آخرین فرصت 
                        </th>
                    </tr></thead>

                    <tbody id="box2">



                    @yield('content2')


                    </tbody>
                    <tbody id="box3">
                       @yield('content3') 
                    </tbody>

                </table>
            </div>
        </div>
    </div>


      {{--for click bar hamey mosabeghat--}}
    <script type="text/javascript">
        $(document).ready(function () {

            $('#view-switch li').click(function () {
                $('#view-switch li').not(this).removeClass('active');
                $(this).addClass('active');

                var target = $(this).data('target');
                $('#competitions-content').children().not('#' + target).hide();
                $('#' + target).show();

                if ($(this).attr('id') == 'all-switch') {
                    $('#sidebar-all-competitions').slideDown();
                } else {
                    $('#sidebar-all-competitions').slideUp();
                }

            });

            $('#recent-switch').click();

            // find a comp bolding of checked boxes
            $('#competitions-sidebar input:checked').next('label').addClass('checked');
            $('#competitions-sidebar input[type=checkbox]').click(function () {
                $(this).next('label').toggleClass('checked');
            });

            $('#competitions-sidebar input[type=radio]').click(function () {
                $(this).parent().parent().find('label').removeClass('checked');
                $(this).next('label').addClass('checked');
            });

            $('#competitions-sidebar input[type=submit]').css('display', 'none');

            var currentCompetitionsSidebarAjaxRequest = null;

            

            
        });
    </script>




</div>
        <!-- end koll  -->
		
	

<!--  start footer -->							 
<div id="footer">
    <div id="footer-inside">
        <div id="footer-links">
            <a href="/team">درباره ما</a>
            <a href="/careers">سایت بیگ دیتا</a>
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
