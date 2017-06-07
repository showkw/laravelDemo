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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        @section('staticFile')
            <link rel="stylesheet" href="{{ asset('/home/css/amazeui.css') }}">
            <link rel="stylesheet" href="{{ asset('/home/css/admin.css') }}">
            <link rel="stylesheet" href="{{ asset('/home/css/hmstyle.css') }}">
            <link rel="stylesheet" href="{{ asset('/home/css/skin.css') }}">
            <link rel="stylesheet" href="{{ asset('/home/basic/css/demo.css') }}">
        @show
        <script type="text/javascript" src="{{ URL::asset('/pub/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('/home/js/amazeui.min.js') }}"></script>
{{--        <script type="text/javascript" src="{{ URL::asset('/home/basic/js/quick_links.js') }}"></script>--}}
    </head>
    <body>
    @section('content')
        @include('home.public.header')
        @include('home.public.footer')
    @show
    </body>
</html>


