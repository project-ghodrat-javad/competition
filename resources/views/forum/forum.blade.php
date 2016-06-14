
@extends('layouts.heaer')
@section('content')


    <div id="wrap"><!-- needed for sticky footer -->





        <!-- header-inside and header -->
        <div id="main">




            <div id='competition'      > <!--@Html.Attr('class', 'prospecting', competition.InProspectingPhase).Add(isPreview ? 'preview' : '')-->
                <header id="comp-header" >

                    <div id="comp-header-details">
                        <h2>

                            Knowledge
                            &bull; <a href="/c/integer-sequence-learning/leaderboard">47 teams</a>
                        </h2>
                        <h1><a href="/c/integer-sequence-learning">Integer Sequence Learning</a>
                        </h1>



                        <div id="comp-header-stats" >
                            <div id="comp-header-stats-progress-section">
                                <div id="comp-header-stats-progress">
                                    <div id="comp-header-stats-teams" style="width:8%">
                                    </div>
                                </div>
                                <div id="comp-progress-start"></div>
                                <div id="comp-progress-end" ></div>





                            </div>

                            <div id="comp-header-stats-start">
                                Thu 2 Jun 2016
                            </div>
                            <div id="comp-header-stats-end">
                                Fri 30 Sep 2016
                                        <span class="to-go-note">
                                            (3 months to go)
                                        </span>
                            </div>
                        </div>
                    </div>
                    <a href="/c/integer-sequence-learning">
                        <img id="comp-image" style="float: right" src="images/bigdata.png" alt="" />
                    </a>
                </header>
                <script type="text/javascript">
                    jQuery(function ($) {
                        $('#comp-header-details h1').textfill({ maxFontPixels: 26, innerTag: 'a' });
                    });
                </script>
                <div id="comp-dash-header" class="comp-sidebar">



                    <div class="_panel" id="competition-dashboard" style="float: right">
                        <header>
                            <h1>داشبورد</h1>
                            <div id="triangle">&#9660;</div>
                        </header>
                        <ul id="competition-dashboard-dropdown">
                            <li class="cd-home">
                                <a href="/c/integer-sequence-learning">Home</a>
                                <ul>
                                    <li class="cd-data"><a href="/c/integer-sequence-learning/data">Data</a></li>

                                    <li class="cd-submit submission-link">
                                        <a class="comp-link" href="/c/integer-sequence-learning/submit">Make a submission</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="cd-info">
                                <a id="open-info">Information</a>
                                <ul id="pages-flyout">
                                    <li>
                                        <a href="/c/integer-sequence-learning">Description</a>                    </li>
                                    <li>
                                        <a href="/c/integer-sequence-learning/details/evaluation">Evaluation</a>                    </li>
                                    <li>
                                        <a href="/c/integer-sequence-learning/rules">Rules</a>                    </li>

                                </ul>
                            </li>

                            <li class="cd-forum"><a href="/c/integer-sequence-learning/forums">Forum</a></li>

                            <li class="cd-scripts">
                                <a class="comp-link" href="/c/integer-sequence-learning/scripts">Scripts</a>
                                <ul class="flyout">
                                    <li><a href="/c/integer-sequence-learning/scripts/new">New Script</a></li>
                                    <li><a href="/c/integer-sequence-learning/scripts/notebook">New Notebook</a></li>
                                </ul>
                            </li>

                            <li class="cd-leaderboard">
                                <a href="/c/integer-sequence-learning/leaderboard">Leaderboard</a>
                            </li>


                            <li class="cd-team">
                                <a href="/c/integer-sequence-learning/team">My Team</a>
                            </li>
                            <li class="cd-submissions"><a href="/c/integer-sequence-learning/submissions">My Submissions</a></li>


                        </ul>
                    </div>


                    <div id="comp-dash-header-title">
                        <h1>
                            <a href="/c/integer-sequence-learning/forums" style="margin-right: 20px">تالار گفتگوی مسابقات</a>


                        </h1>
                    </div>
                </div>
                <div class="forum-page comp-content full-width">
                    <div class="comp-content-inside">
                        <div id="competition-intro">

                        </div>




                        <div id="forum-page">

                            <ul id="forum-breadcrumbs" class="forum-page-breadcrumbs">
                                <li>
                                    <a href="/forums">All Forums</a>
                                    <span>&raquo;</span> <a href="/c/integer-sequence-learning/forums">Integer Sequence Learning</a>
                                </li>
                            </ul>


                            <div id="forum-search">
                                <form method="get" action="https://www.google.com/search">
                                    <input type="text" name="q" size="25" maxlength="255" value="" />
                                    <input type="submit" value="جستجو" />
                                    <input type="hidden"  name="sitesearch" value="www.kaggle.com/c/integer-sequence-learning/forums" />
                                </form>
                            </div>


                            <div class='forum-buttons comp-forum-buttons' id="forum-above-buttons">
                                <a href="/forums/topics/new?forumId=1316">ثبت موضوع جدید</a>
                                <a href="/forums/watches/stop?forumId=1316" title="Stop receiving e-mail updates when new posts occur in this forum">شروع گفتگو</a>
                                {{--<a href="/forums/watches/stop?forumId=1316" title="Stop receiving e-mail updates when new posts occur in this forum">Stop Watching</a>--}}
                            </div>



                            <div id="topiclist-head" class="forum-head">
                                <div id="topiclist-head-replies" class="score-col">رای ها</div>
                                <div id="topiclist-head-name" class="name-col">9 موضوع و 16 پست</div>
                                <div id="topiclist-head-replies" class="replies-col">تعداد پاسخ ها</div>
                                <div id="topiclist-head-views" class="views-col">تعداد بازدیدها</div>
                                <div id="topiclist-head-lastpost" class="lastpost-col">آخرین پست</div>
                            </div>
                            <div id="topiclist" class="forum">
                                <div>
                                    <div class="topiclist-topic">
                                        <div class="topiclist-topic-score score-col">
                                            0
                                        </div>
                                        <div class="topiclist-topic-name name-col">
                                            {{--<h3>--}}
                                                {{--<a href="/madjack/integer-sequence-learning/totaltrash/discussion" title="Go to script 'TotalTrash'">--}}
                                                    {{--<span class="fa fa-bar-chart" style="margin-right: 10px;"></span>--}}
                                                    {{--TotalTrash--}}
                                                {{--</a>--}}
                                            {{--</h3>--}}

                                            {{--<h4 style="margin-left: 34px;">--}}
                                    {{--<span>--}}
                                        {{--<em>by</em>--}}
                                        {{--<a class="profilelink" href="/madjack" title="View Mad Jack&#39;s profile">Mad Jack</a>,--}}
                                        {{--7 روز قبل--}}
                                    {{--</span>--}}
                                            {{--</h4>--}}
                                        </div>
                                        <div class="topiclist-topic-replies replies-col">
                                            1
                                        </div>
                                        <div class="topiclist-topic-views views-col">
                                            0
                                        </div>
                                        <div class="topiclist-topic-lastpost lastpost-col">
                                            <a class="lastpost-link" href="https://www.kaggle.com/madjack/integer-sequence-learning/totaltrash/comments#123490" title="Last post by EndInTears">مسابقه مسابقه مسابقه</a><br />
                                            <div style="margin-right: 27%; text-align: right; direction: rtl;">
                                                10 روز قبل
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>

                        {{--<div id="forum-bar">--}}
                        {{--<ul id="forum-bar-links">--}}
                        {{--<li><a href="/feeds/forum/1316?token=IZXi_52_qFS5pqT_x7cn-L1RoNQ8HiAoQYogSLApDaUD89bElaqpU4BIqbBToieZNTEXdA-ahcND-UfRZdWU5hlmaex-m7CcfvVSyhbTAkD0BDE8XiE7BnV71FMxlBZER0y20j4YLMomTw9UEybAsYnVDvKKIxHk_Mx6NQs3Q0TPLmk_0" title="RSS feed for this forum"><img src='/content/v/beca1a8a90fa/shared/img/forum-rss.png' alt="RSS" /></a></li>--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
