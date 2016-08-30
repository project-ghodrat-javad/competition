<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <link type="text/css" rel="stylesheet" href="<?= asset('resources/admin/css/style.css'); ?>">
    <script type="text/javascript" src="<?= asset('resources/admin/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/admin/js/jquery.flot.js'); ?>"></script>
    <script type="text/javascript" src="<?= asset('resources/admin/js/doc.js'); ?>"></script>



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
<body>

<div class="body_style">
    <div class="menu">

    </div>



    <div class="nav">
        <ul>
            <li class="active">
                <div class="fix">
                    <span class="ico"><img src="<?= asset('resources/admin/image/icoresources.png'); ?>"></span>
                    <span class="value">مدیریت</span>
                </div>
            </li>
            <li>
                <div class="fix">
                    <span class="ico"><img src="<?= asset('resources/admin/image/ico3.png'); ?>"></span>
                    <span class="value"> پروفایل کاربر</span>
                </div>
                <ul>
                    <li><a href="<?= Url('users/panel/edit/profile'); ?>">ویرایش اطلاعات</a></li>
                    <li><a href="<?= Url('logout'); ?>"> خروج </a></li>
                </ul>
            </li>
            

            
            <li>
                <div class="fix">
                    <span class="ico"><img src="<?= asset('resources/admin/image/ico6.png'); ?>"></span>
                    <span class="value"> مسابقات</span>
                </div>
                <ul>
                    <li><a href="<?= Url('users/panel/mosabeghe/create') ?>">درخواست ثبت مسابقه </a></li>
                    
                    <li><a href="<?= Url('users/panel/mosabeghe') ?>">   نمایش مسابقات شما </a></li>

                    <li><a href="<?= Url('users/panel/member') ?>"> مسابقات شرکت شده </a></li>                    

                </ul>
            </li>



            <li>
                <div class="fix">
                    <span class="ico"><img src="<?= asset('resources/admin/image/ico5.png'); ?>"></span>
                    <span class="value"> تالار گفت و گو </span>
                </div>
                <ul>
                    <li><a href="<?= Url('users/panel/forum/create'); ?>"> ایجاد موضوع جدید </a></li>
                    <li><a href="<?= Url('users/panel/forum'); ?>"> نمایش موضوعات تالار </a></li>
                    
                   

                </ul>
            </li>




            <!--  -->

        </ul>
    </div>



    <div class="content">


        <ul data-collapse="collapse" class="quick">

        </ul>
        {{--<h2>نمونه فیلد ها</h2>--}}
        @yield('content')
    </div>


</div>



@yield('Footer')
</body>
</html>
