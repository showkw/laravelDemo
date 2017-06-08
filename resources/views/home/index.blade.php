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

@section('title', '首页')
@section('staticFile')
    @parent
    <link rel="stylesheet" href="{{ asset('/home/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('/home/css/foot.css') }}">
@endsection
@section('content')
    @include( 'home.public.topNav' )
    <!-- 首页头部开始 -->
    <div id="header">
        <div class="ct">
            <div class="head-logo">
                <a href="#"><img src="{{ asset( '/images/home/logo.png' ) }}"></a>
            </div>
            <div class="head-nav">
                <div class="ad1"></div>
                <div class="claer"></div>
                <div class="allsp" style='display:none'>
                    <span class="sptab" style='display:none'><a>全部商品分类</a></span>
                    <div class="allsp">
                        <span class="sptab"><a>全部商品分类</a></span>
                        <div id="nav">
                            <ul class='nav-ul'>
                                <li>
                                    <a href="">
                                        <div class="t1">
                                            手机 电话卡<span><i class="icon-chevron-right"></i></span>
                                        </div>
                                    </a>
                                    <div class="t-list" style="width:805px;">
                                        <ul class='t-list-ul clear'>
                                            <volist name='hd_nav_xmsj' id="vo">
                                                <li>
                                                    <a class="t-list-ul-li-a" href="#">
                                                        <img src="#">
                                                        <span class="sp-tit">#</span>
                                                    </a>
                                                    <a class="btn-buy" href="#">选购</a>
                                                </li>
                                            </volist>
                                        </ul>
                                        <ul class='t-list-ul clear'>
                                            <volist name='hd_nav_hm' id="vo">
                                                <li>
                                                    <a class="t-list-ul-li-a" href="#">
                                                        <img src="#">
                                                        <span class="sp-tit">#</span>
                                                    </a>
                                                    <a class="btn-buy" href="#">选购</a>
                                                </li>
                                            </volist>
                                            <li>
                                                <a href=""  class="t-list-ul-li-a">
                                                    <img src="{{ asset( '/images/home/compare.jpg' ) }}">
                                                    <a class="btn-buy" href="">对比手机</a>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class='t-list-ul clear'>
                                            <li>
                                                <a href=""  class="t-list-ul-li-a">
                                                    <img src="{{ asset( '/images/home/mimobile.jpg' ) }}">
                                                    <span class="sp-tit">小米移动 电话卡</span>
                                                </a>
                                                <a class="btn-buy" href="">选购</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="t1">
                                            笔记本 平板<span><i class="icon-chevron-right"></i></span>
                                        </div>
                                    </a>
                                    <div class="t-list">
                                        <ul>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="t1">
                                            电视 盒子<span><i class="icon-chevron-right"></i></span>
                                        </div>
                                    </a>
                                    <div class="t-list2" style="width:755px;">
                                        <ul>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="t1">
                                            路由器 智能硬件<span><i class="icon-chevron-right"></i></span>
                                        </div>
                                    </a>
                                    <div class="t-list2" style="width:992px;">
                                        <ul>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="t1">
                                            移动电源 电池 插线板<span><i class="icon-chevron-right"></i></span>
                                        </div>
                                    </a>
                                    <div class="t-list2" style="width:530px;">
                                        <ul>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="t1">
                                            耳机 音响<span><i class="icon-chevron-right"></i></span>
                                        </div>
                                    </a>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="t1">
                                            保护套 贴膜<span><i class="icon-chevron-right"></i></span>
                                        </div>
                                    </a>
                                    <div class="t-list2" style="width:265px;">
                                        <ul>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="t1">
                                            线材 支架 存储卡<span><i class="icon-chevron-right"></i></span>
                                        </div>
                                    </a>
                                    <div class="t-list2" style="width:265px;">
                                        <ul>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="t1">
                                            箱包 服饰<span><i class="icon-chevron-right"></i></span>
                                        </div>
                                    </a>
                                    <div class="t-list2" style="width:265px;">
                                        <ul>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="">
                                        <div class="t1">
                                            米兔 生活周边<span><i class="icon-chevron-right"></i></span>
                                        </div>
                                    </a>
                                    <div class="t-list2" style="width:265px;">
                                        <ul>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="hd-tab">
                        <li>
                            <span class="sp-tab ">小米手机</span>
                            <ol></ol>
                        </li>
                        <li>
                            <span class="sp-tab">红米</span>
                            <ol></ol>
                        </li>
                        <li>
                            <span class="sp-tab">平板·笔记本</span>
                            <ol>
                                <li>
                                    <div class="ti">
                                        <div class="flag">新品</div>
                                    </div>
                                    <span class="tablist-img"><img src="/Uploads/Goods/2017-04-09/58ea48d525f89.png"></span>
                                    <span class="tablist-title">小米笔记本Air 13.3"</span>
                                    <span class="pr">4599元</span>
                                </li>
                                <li>
                                    <div class="ti">
                                        <div class="flag">新品</div>
                                    </div>
                                    <span class="tablist-img"><img src="/Uploads/Goods/2017-04-09/58ea48d525f89.png"></span>
                                    <span class="tablist-title">小米笔记本Air 13.3" 尊享版</span>
                                    <span class="pr">5999元</span>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <span class="sp-tab">电视</span>
                            <ol>
                                <li>
                                    <span class="tablist-img"><img src="__UPLOAD__Goods/2017-04-09/tvall.png"></span>
                                    <span class="tablist-title">查看全部<br>小米电视</span>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <span class="sp-tab">盒子·影音</span>
                            <ol>
                            </ol>
                        </li>
                        <li>
                            <span class="sp-tab">路由器</span>
                            <ol></ol>
                        </li>
                        <li>
                            <span class="sp-tab">智能硬件</span>
                            <ol>
                                <a href=""><li>
                                        <span class="first"><img src="{{ asset( '/images/home/air2!160x110.jpg' ) }}"></span>
                                        <span class="tablist-title">查看全部<br>小米电视</span>
                                    </li></a>
                            </ol>
                        </li>
                        <div class="sp-tab"><a href="">服务</a></div>
                        <div class="sp-tab"><a href="">社区</a></div>
                    </div>
                </div>
                <div class="head-search">
                    <form action="" method="get">
                        <input name="s_word" type="search" value="" maxlength="100" autocomplete="off" list="hot_word">
                        <input type="submit" value="">
                        <!-- 				<datalist id="hot_word">
                                            <option value="小米5s Plus">小米5s Plus</option>
                                        </datalist> -->
                        <!-- 					<div class="hot_word">
                                                <li><a href="#">小米5s Plus<span class="sp1">约有5件</span></a></li>
                                                <li><a href="#">小米Max<span class="sp1">约有8件</span></a></li>
                                                <li><a href="#">小米手机5<span class="sp1">约有10件</span></a><li>
                                                <li><a href="#">空气进化器2<span class="sp1">约有3件</span></a></li>
                                                <li><a href="#">活塞耳机<span class="sp1">约有3件</span></a></li>
                                                <li><a href="#">小米路由器<span class="sp1">约有6件</span></li></a>
                                                <li><a href="#">移动电源<span class="sp1">约有14件</span></li></a>
                                                <a href=""><li>运动相机<span class="sp1">约有11件</span></li></a>
                                                <a href=""><li>小蚁摄像机<span class="sp1">约有2件</span></li></a>
                                                <a href=""><li>小米体重秤<span class="sp1">约有1件</span></li></a>
                                                <a href=""><li>小米插线板<span class="sp1">约有10件</span></li></a>
                                                <a href=""><li>配件优惠套装<span class="sp1">约有23件</span><li></a>
                                            </div> -->
                    </form>
                </div>
            </div>
        </div>
    <!-- 首页头部结束 -->
    @include( 'home.public.footer' )
@endsection
