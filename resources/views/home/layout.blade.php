<?php
/**
 * File Name: layout.blade.php
 * Description: 布局主文件
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/4
 * Time: 18:38
 */
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title') - 红米Note 4X、小米5c、小米MIX、小米笔记本官方网站-乐威克斯-www.lvcus.cn</title>
        <meta name="description" content="@section('description')爱淘宝是淘宝旗下购物分享综合型网站，致力于为消费者用互联网技术快速发现高性价比优质潮品、特惠活动，更有资深黄钻买手、时尚达人、红人模特分享购物体验、穿搭技巧@show"/>
        <meta name="keywords" content="@section('keywords')小米,小米5c,红米Note4X,小米MIX,小米商城@show"/>
        <meta name="viewport" content="width=1226" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
        <meta http-equiv="pragram" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="shortcut icon" href="favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <script type="text/javascript" src="{{ asset('/static/js/jQuery.min.js') }}"></script>
        @section('staticFile')
            <link rel="stylesheet" href="{{ asset('/static/css/font-awesome.min.css') }}">
        @show

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    @yield('content')
    </body>
</html>


