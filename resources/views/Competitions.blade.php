
<html>
<head>

    <link rel="stylesheet" href="fonts/css/font-style.css">
    <title>مسابقات پردازش داده - بیگ دیتا</title>
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
            <a id="logo" href="/"><img alt="Kaggle" src="images/site-logo.png" height="86" width="240"></a>
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
        <div id="logobig" style="width:85%;float:right"><img src="images/bigdata.png"></div>
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
                        <!--<div class="filter" style="display: none">
                            <h3>نوع</h3>
                            <ul>
                                <li>
                                    <input name="ShowProspect" id="prospect" value="true" checked="checked" type="checkbox">
                                    <label class="prospect checked" for="prospect">چشم انداز</label>
                                </li>
                                <li>
                                    <input name="ShowOpenToAll" id="open" value="true" checked="checked" type="checkbox">
                                    <label class="open checked" for="open">بازکردن همه</label>
                                </li>
                                <li>
                                    <input name="ShowPrivate" id="private" value="true" checked="checked" type="checkbox">
                                    <label class="private checked" for="private">خصوصی</label>
                                </li>
                                <li>
                                    <input name="ShowLimited" id="limited" value="true" checked="checked" type="checkbox">
                                    <label class="limited checked" for="limited">محدود</label>
                                </li>
                            </ul>
                        </div>-->

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
                            <li>
								
								<div class="front-comp-details">
									

									<!-- Day   prize   teams  -->
                                    <div class="comp-stats-column-scripts">
                                        <div class="stats stats-ending">
                                            <strong>48 روز</strong>
                                        </div>
                                        <div class="stats stats-teams">
                                            <strong>330</strong>
                                            تیم       </div>
                                        <div class="stats stats-scripts">
                                            <strong>702</strong>
                                            اسکریپت
                                        </div>
                                        <div class="stats stats-prize">
                                            <strong>جایزه</strong>
                                        </div>
                                    </div>
									<!--table title -->
                                    <div class="comp-desc-column" style="width: 60%; float: left;">
                                        <h3>
                                            <a class="comp-link" href="/ComDetails">عنوان</a>
                                        </h3>
                                        <div class="job-desc">
                                            <div class="job-title">
                                                سوال
                                            </div>
                                          <!--  <div class="job-employer">Facebook</div>
                                            <div class="job-location">Menlo Park, CA or Seattle, WA</div>-->
                                        </div>
                                    </div>
									<img class="front-current-image" src="images/thumb76_76.png" alt="Facebook V: Predicting Check Ins" title="Facebook V: Predicting Check Ins" height="76" width="76">

                                </div>
								<!-- img  -->
								<div class="My" style="background:'red';">
                                </div>
								
                            </li>
                        </ul>
                        <!--<div class="tooltip">
                            <div class="tooltip-text">recruitment</div>
                        </div>-->
                    </div>
                </li>
				<!--
                <script type="text/javascript">
                    $(function() {
                        $('.front-current-container .tooltip').mousemove(function(e) {
                            $(this).find('.tooltip-text').css('top', e.offsetY-15);
                        });
                    });
                </script>-->
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
                            <a href="/competitions/search?CompetitionNameColumnSort=Ascending" title="Sort by Competition Name"> نام مسابقه <img alt="Sort" src="images/sort-not-sorted.png">  </a>
                        </th>
                        <th class="sorted descending">
                            <a href="/competitions/search?RewardColumnSort=Ascending" title="Current sorting by Reward descending. Click to reverse."> جایزه <img alt="Sort" src="images/sort-descending.png">  &nbsp;<!-- extra space to center text --></a>
                            <input id="current-sort-column-name" value="RewardColumnSort" type="hidden">
                            <input id="current-sort-direction" value="Descending" type="hidden">
                        </th>

                        <th class="not-sorted">
                            <a href="/competitions/search?TeamsColumnSort=Descending" title="Sort by Teams"> تیم ها <img alt="Sort" src="images/sort-not-sorted.png">  &nbsp;<!-- extra space to center text --></a>
                        </th>
                        <th class="not-sorted">
                            <a href="/competitions/search?DeadlineColumnSort=Descending" title="Sort by Deadline"> آخرین فرصت <img alt="Sort" src="images/sort-not-sorted.png">  &nbsp;<!-- extra space to center text --></a>
                        </th>
                    </tr></thead>

                    <tbody>
                    <tr class="active-comp">
                        <td style="border-left: 1px solid rgb(224, 224, 224);">
                            
                            <div class="competition-details">
                                <div class="competitions-types"></div>
                                <a href="/c/state-farm-distracted-driver-detection"><h4>عنوان</h4></a>
                                <p class="competition-summary">
                                    <a href="/c/state-farm-distracted-driver-detection">سوال</a>
                                </p>
                            </div>
							<a href="/c/state-farm-distracted-driver-detection">
							<img class="competition-image" src="images/thumb76_76.png" alt="state-farm-distracted-driver-detection Image" height="76" width="76"></a>
                        </td>
                        <td>200 هزار</td>
                        <td>1</td>
                        <td>1 ماه</td>
                    </tr>
                    </tbody>
                </table>
                <!--<div id="page-number" class="page-number">
                    نمایش <strong>1?13</strong> از <span id="total-comps-found">13</span> مسابقات یافت شده (<span id="active-comps-found">13</span> فعال)
                </div>-->
            </div>
        </div>
    </div>




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
            <a href="/team">درباره ما</a>
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
