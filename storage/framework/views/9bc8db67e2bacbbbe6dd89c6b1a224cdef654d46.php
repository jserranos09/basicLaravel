<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />

<!-- links to the css in the public.css file-->
<link href="/css/default.css" rel="stylesheet" />
<link href="/css/fonts.css" rel="stylesheet" />
<!-- this links to the css style sheet in the css/app folder-->
<link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">

<!-- This is in the create.blade.php. this is used to only use css for one page -->
<?php echo $__env->yieldContent('head'); ?>

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="/">SimpleWork</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <!-- the class is so that the name is highlighted when on that page-->
                    <!-- "path" is anything after the domain website, this case is "/" which is the homepage). ? = means this only works is path is "/" then exho current page or (:) echo nothing ('')-->
                    <li class="<?php echo e(Request::path() === '/' ? 'current_page_item' : ''); ?>"><a href="/" accesskey="1" title="">Homepage</a></li>
                    <li class="<?php echo e(Request::path() === 'clients' ? 'current_page_item' : ''); ?>"><a href="#" accesskey="2" title="">Our Clients</a></li>
                    <!-- This does the same as all the others, just in a diuffernet way-->
                    <li class="<?php echo e(Request::is('about') ? 'current_page_item' : ''); ?>"><a href="/about" accesskey="3" title="">About Us</a></li>
                    <li class="<?php echo e(Request::path() === 'articles' ? 'current_page_item' : ''); ?>"><a href="/articles" accesskey="4" title="">Articles</a></li>
                    <li class="<?php echo e(Request::path() === 'contact' ? 'current_page_item' : ''); ?>"><a href="#" accesskey="5" title="">Contact Us</a></li>
                </ul>
            </div>
        </div>

        <?php echo $__env->yieldContent('header'); ?>

    </div>
    <?php echo $__env->yieldContent('content'); ?>

    <div id="copyright" class="container">
        <p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
    </div>

    <script src="/js/app.js"></script>
</body>
</html>

<?php /**PATH /home/juan/juan.comet.software/resources/views/layout.blade.php ENDPATH**/ ?>