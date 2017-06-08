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
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')"/>
        <meta name="keywords" content="@yield('keywords')"/>
        <meta name="viewport" content="width=1226" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
        <meta http-equiv="pragram" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="shortcut icon" href="favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        @section('staticFile')
            <link rel="stylesheet" href="{{ asset('/static/css/font-awesome.min.css') }}">
            <link rel="stylesheet" href="{{ asset('/static/css/bootstrap.min.css') }}">
        @show
        <script type="text/javascript" src="{{ asset('/static/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('/static/plugin/layui/layui.js') }}"></script>
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


