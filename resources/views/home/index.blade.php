<?php

/**
 * File Name: index.blade.php
 * Description: 前台首页模板文件
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/4
 * Time: 16:24
 */

?>

@extends('home.layout')

@section('title', '首页 - 红米Note 4X、小米5c、小米MIX、小米笔记本官方网站-乐威克斯-www.lvcus.cn')
@section('description', '爱淘宝是淘宝旗下购物分享综合型网站，致力于为消费者用互联网技术快速发现高性价比优质潮品、特惠活动，更有资深黄钻买手、时尚达人、红人模特分享购物体验、穿搭技巧')
@section('keywords', '小米,小米5c,红米Note4X,小米MIX,小米商城')
@section('staticFile')
    @parent
    <link rel="stylesheet" href="{{ asset('/home/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('/home/css/foot.css') }}">
@endsection
@section('content')
    @include( 'home.public.footer' );
@endsection
