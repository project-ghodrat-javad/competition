<div id="header2" class="" >
        <div id="header2-inside" class="" >
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
            <a id="logo" href="/"><img alt="Kaggle" src="<?= asset('resources/images/site-logo.png'); ?>" height="86" width="240"></a>
        </div>
    </div>