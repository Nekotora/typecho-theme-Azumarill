<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('%s'),
            'search'    =>  _t('%s'),
            'tag'       =>  _t('%s'),
            'author'    =>  _t('%s')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/font.css'); ?>">

    <script src="<?php $this->options->themeUrl('js/jquery-1.9.1.min.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/page.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/SmoothScroll.js'); ?>"></script>

    <link rel="shortcut icon" href="<?php $this->options->themeUrl('css/favicon.ico'); ?>"> 
    <link rel="apple-touch-icon-precomposed" href="<?php $this->options->themeUrl('/img/avatar.png'); ?>">

    <?php $this->header(); ?>
</head>

<body class="clear">
<div>
    <div title="fMoeErrorReporter" style="margin:0 auto;width:100%;color:blue;text-align:center;font-size:15px;z-index:9999999;font-weight:blod;">
        <noscript><div style="padding:5px;background:#ffffa8;">您的浏览器不支持或者您禁止了Javascript脚本！部分功能将不可用！</div></noscript>
        <!--[if lt IE 9]><div style="padding:5px;background:#ffff88;">您的浏览器版本过旧，请升级浏览器获得更好的体验，推荐使用 Chrome FF IE11 等最新浏览器！</div><![endif]--><!--[if lt IE 8]><div style="padding:5px;background-color:red;color:#fff;">不支持IE7以下的浏览器，可能会出现严重的布局错位，脚本错误等问题！求你了，赶紧升级浏览器吧！</div><![endif]-->
    </div>
</div>
<a href="javascript:void(0)" onclick="gotop()"><div class="gotop"><i class="icon-up-open"></i></div></a>
<div class="header">
    <div class="mob">
        <a href="<?php $this->options->siteUrl(); ?>">
            <h2><?php $this->options->title() ?></h2>
        </a>
        <a class="menuicon" href="javascript:void(0);" onclick="menu()" title="Menu">
            <i class="icon-menu"></i>
        </a>
    </div>
</div>