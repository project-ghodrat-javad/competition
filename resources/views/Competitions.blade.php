
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
                <form id="competitions-sidebar" action="/competitions/search" method="GET">
                    <!--<h2 id="competitions-found"><span id="sidebar-total-comps-found">13</span> مورد یافت شد,
                        <span id="sidebar-active-comps-found">13</span> فعال <img src="images/spinner-small.gif" alt="Wait cursor" class="spinner" style="display:none;">
                    </h2>-->
                    <input id="search" name="Query" placeholder="جستجوی مسابقه" type="text">
                    <input id="active-sort" name="RewardColumnSort" value="Descending" type="hidden">
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
                            <h3>وضعیت</h3> <!-- Status -->
                            <ul>
                                <li>
                                    <input name="ShowActive" id="active" value="true" checked="checked" type="checkbox">
                                    <label class="active checked" for="active">فعال</label>
                                </li>
                                <li>
                                    <input name="ShowCompleted" id="completed" value="true" type="checkbox">
                                    <label class="active" for="completed">کامل</label> 	<!-- Completed -->
                                </li>
                            </ul>
                        </div>
                        
                        <div class="filter">
                            <h3>حامی</h3>
                            <ul>
                                <li>
                                    <input name="ShowInclass" id="inclass" value="true" type="checkbox">
                                    <label class="inclass" for="inclass">مسابقات دانشجویی</label>
                                </li>
                            </ul>
                        </div>


                    </div>
                    <input style="display: none;" value="Update" type="submit">
                </form>
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
                        <col width="16%">
                        <col width="16%">
                        <col width="16%">
                    </colgroup>
                    <thead>
                    <tr>
                        <th class="not-sorted">
                            <a href="/competitions/search?CompetitionNameColumnSort=Ascending" title="Sort by Competition Name"> نام مسابقه <img alt="Sort" src="<?= asset('resources/images/sort-not-sorted.png'); ?>">  </a>
                        </th>
                        <th class="sorted descending">
                            <a href="/competitions/search?RewardColumnSort=Ascending" title="Current sorting by Reward descending. Click to reverse."> جایزه <img alt="Sort" src="<?= asset('resources/fonts/css/font-style.css'); ?>images/sort-descending.png">  &nbsp;<!-- extra space to center text --></a>
                            <input id="current-sort-column-name" value="RewardColumnSort" type="hidden">
                            <input id="current-sort-direction" value="Descending" type="hidden">
                        </th>

                        <th class="not-sorted">
                            <a href="/competitions/search?TeamsColumnSort=Descending" title="Sort by Teams"> تیم ها <img alt="Sort" src="<?= asset('resources/images/sort-not-sorted.png'); ?>">  &nbsp;<!-- extra space to center text --></a>
                        </th>
                        <th class="not-sorted">
                            <a href="/competitions/search?DeadlineColumnSort=Descending" title="Sort by Deadline"> آخرین فرصت <img alt="Sort" src="<?= asset('resources/images/sort-not-sorted.png'); ?>">  &nbsp;<!-- extra space to center text --></a>
                        </th>
                    </tr></thead>

                    <tbody>



                    @yield('content2')



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

            // find-a-comp submit
            $('#competitions-sidebar').submit(function (e) {
                // stop submit and show spinner
                e.preventDefault();
                $('#competitions-sidebar h2 .spinner').css('display', 'inline');

                // get form action URL
                url = $(this).attr('action');

                // create form data array
                dataArray = $(this).serializeArray();

                if (currentCompetitionsSidebarAjaxRequest) {
                    currentCompetitionsSidebarAjaxRequest.abort();
                }

                currentCompetitionsSidebarAjaxRequest = $.get(url, dataArray, function (data) {
                    // display new content
                    var content = $(data).find('#competitions-all').contents();
                    $('#competitions-all').html(content);
                    $('#active-sort').name = content.find('#current-sort-column-name').attr("value");
                    $('#active-sort').value = content.find('#current-sort-direction').attr("value");

                    // update totals
                    $('#competitions-found').html($(data).find('#competitions-found').html());
                    $('#page-number').html($(data).find('#page-number').html());

                    //hide spinner
                    $('#competitions-sidebar h2 .spinner').css('display', 'none');
                });
            });

            $('#competitions-sidebar input[type=text]').bind('input keyup', function () {
                // Wait 300 milli after last input to submit
                var delay = 300;
                var $this = $(this);

                clearTimeout($this.data('timer'));
                $this.data('timer', setTimeout(function () {
                    $this.removeData('timer');
                    $('#competitions-sidebar').submit();
                }, delay));
            });

            $('#competitions-sidebar input[type=radio], #competitions-sidebar input[type=checkbox]').click(function () {
                $('#competitions-sidebar').submit();
            });
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
</body>

</html>
