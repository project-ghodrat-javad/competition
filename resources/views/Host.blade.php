
<html>
<head>

    <link rel="stylesheet" href="fonts/css/font-style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>مسابقات داده</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/base.less" type="text/css">
    <link rel="stylesheet" href="css/kaggle-site.less" type="text/css">
    <link rel="stylesheet" href="css/style.css" id="intercom-styles" type="text/css">
    {{--<script src="" async="" type="text/javascript"></script>--}}
    <script src="js/ga.js" async="" type="text/javascript"></script>
    {{--<script src="https://widget.intercom.io/widget/koj6gxx6" async="" type="text/javascript"></script>--}}
    {{--<script src="js/ga.js" async="" type="text/javascript"></script>--}}
    {{--<script src="https://widget.intercom.io/widget/koj6gxx6" async="" type="text/javascript"></script>--}}
    {{--<script src="js/ga.js" async="" type="text/javascript"></script>--}}
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
    <script type="text/javascript" src="js/kaggle.min.js"></script>
    {{--<script type="text/javascript">--}}
    {{--Kaggle.Current.siteId = 1;--}}
    {{--Kaggle.Current.userId = 598228;--}}
    {{--</script>--}}
    <!--[if (gte IE 6)&(lte IE 8)]>
    <!--<script type="text/javascript" src="/content/v/f1f17fea7cee/shared/js/ie/selectivizr.min.js"></script>-->
    <![endif]-->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    {{--<link rel="apple-touch-icon" href="img/apple-touch-icon.png">--}}
    <!--[if lt IE 9]>
    <!--<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>-->
    <![endif]-->
    {{--<script>--}}
    {{--window.intercomSettings = {--}}
    {{--app_id: "koj6gxx6"--}}
    {{--};--}}
    {{--</script>--}}
    {{--<script>(function(){var w=window;var ic=w.Intercom;--}}
    {{--if(typeof ic==="function"){ic('reattach_activator');--}}
    {{--ic('update',intercomSettings);}else{var d=document;--}}
    {{--var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){--}}
    {{--var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/koj6gxx6';--}}
    {{--var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}--}}
    {{--else{w.addEventListener('load',l,false);}}})()</script>--}}

</head>

<body class="logged-out    kaggle">

<div id="wrap">


    <!--Start header-inside and header -->
    <div id="header2" class="">
        <div id="header2-inside" class="">
            <ul id="header-control">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">ورود</a></li>
                    <li><a href="{{ url('/register') }}">ثبت نام </a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>خروج</a></li>
                        </ul>
                    </li>
                @endif
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











    <!-- header-inside and header -->

    <div id="standalone-signin">
        <form action="/login" id="login-account" method="post">
            <fieldset id="social-authentication">
                <div style="float: right">
                    فرم درخواست میزبانی مسابقه
                </div>
            </fieldset>
            <div style=""></div>
            <fieldset id="social-authentication">


                <div class="row form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="col-md-5">
                        <label for="email" style="float: right;padding-top: 10px ; width: auto" class="col-md-4 control-label"> نام و نام خانوادگی</label>
                    </div>
                </div>
                <div class="row form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="col-md-5">
                        <label for="email" style="float: right;padding-top: 10px ; width: auto" class="col-md-4 control-label"> عنوان شغل </label>
                    </div>
                </div>
                <div class="row form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                    <div class="col-md-7">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="col-md-5">
                        <label for="email" style="float: right;padding-top: 10px ; width: auto" class="col-md-4 control-label">  تعداد افراد تیم </label>
                    </div>
                </div>

                <div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    <div class="col-md-7">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="col-md-5">
                        <label for="email" style="padding-top: 10px;width: auto;float: right" class="col-md-4 control-label">آدرس ایمیل</label>
                    </div>
                </div>
                <div class="row form-group{{ $errors->has('name') ? ' has-error' : '' }}">


                    <div class="col-md-12">
                        <label for="email" style="float: right;padding-top: 10px ; width: auto" class="col-md-4 control-label">   موضوع مورد نظر برای میزبانی مسابقه  </label>
                    </div>
                    <div class="col-md-11">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" style="height: 80px">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                <div class="row form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user">ارسال درخواست</i>
                        </button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div> <!-- wrap -->


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

</body></html>