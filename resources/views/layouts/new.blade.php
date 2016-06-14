@extends('layouts.heaer')
@section('header')

        <!--Start header-inside and header -->
<div id="header2" class="">
    <div id="header2-inside" class="">
        <ul id="header-control">
            <li id="header-logout"><a href="{{ url('logout') }}" class="logout-link"> خروج</a></li>
            <li id="header-login"><a href="https://www.kaggle.com/account/login?returnUrl=%2Fcompetitions" class="login-link">اسم کاربر</a></li>
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

@endsection



@section('footer')

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

@endsection