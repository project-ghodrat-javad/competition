<div class="comp-sidebar">

            <div class="_panel" id="competition-dashboard" style="direction:rtl">
                <header>
                    <h1>داشبورد</h1>
                </header>
                <ul id="competition-dashboard-dropdown">
                    <li class="cd-home selected">
                        <a href="<?= Url('/'); ?>">صفحه اصلی</a>
                        <ul style="border-left: 2px none; margin: 10px;">

                            <li class="cd-data"><a href="<?= Url('/details/'.$mosabeghe->url); ?>"> جزئیات مسابقه</a></li>

                            <li class="cd-data"><a href="<?= Url('/details/'.$mosabeghe->url.'/data'); ?>">داده ها</a></li>

                            <li class="cd-submit submission-link">
                                <a class="comp-link" href="">ایجاد یک نظر</a>
                            </li>
                        </ul>
                    </li>

                    <li class="cd-info">
                        <a id="open-info">اطلاعات</a>
                        <ul id="pages-flyout" style="border-left: 2px none; margin: 10px;">
                           
                            <li>
                                <a href="<?= Url('/rules/'.$mosabeghe->url); ?>">قوانین</a>                    </li>
                            <li>
                                <a href="<?= Url('/prize/'.$mosabeghe->url); ?>">جایزه</a>                    </li>

                        </ul>
                    </li>

                    <li class="cd-forum"><a href="/forum">تالار گفتگو</a></li>

                    <li class="cd-scripts" >
                        <a class="comp-link" href="/ComDetails/scripts">اسکریپت ها </a>
                        <ul class="flyout" style="border-left: 2px none; margin: 10px;">
                            <li><a href="ComDetails/scripts/new">اسکریپت جدید</a></li>
                            <li><a href="/ComDetails/scripts/notebook">نوشته جدید</a></li>
                        </ul>
                    </li>

                    <li class="cd-leaderboard">
                        <a href="/team">ایجاد تیم</a>
                        <a href="https://www.kaggle.com/c/draper-satellite-image-chronology/leaderboard">سایر</a>
                        <a href="https://www.kaggle.com/c/draper-satellite-image-chronology/leaderboard">سایر</a>
                        <a href="https://www.kaggle.com/c/draper-satellite-image-chronology/leaderboard">سایر</a>
                    </li>
                </ul>
            </div>
            
        </div>