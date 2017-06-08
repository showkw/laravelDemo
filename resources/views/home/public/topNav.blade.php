<?php
/**
 * File Name: topNav.blade.php
 * Description: 公共顶部导航模板
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/8
 * Time: 23:14
 */
?>
<!-- 顶部导航开始 -->
<div id="top">
    <div class="ct">
        <div class="top-nav">
            <a href="/">小米商城</a>
            <span class="cut">|</span><a href="/">MIUI</a>
            <span class="cut">|</span><a href="">游戏</a>
            <span class="cut">|</span><a href="">多看阅读</a>
            <span class="cut">|</span><a href="">云服务</a>
            <span class="cut">|</span><a href="">金融</a>
            <span class="cut">|</span><a href="">小米商城移动版</a>
            <span class="cut">|</span><a href="">问题反馈</a>
            <span class="cut">|</span>
            <a href="#">SelectRegion</a>
        </div>
        <div class="top-cart">
            <div class="cart" style="background:#424242;">
                <i class="icon-shopping-cart"> </i>购物车(0)
            </div>
            <div class="top-menu">
                <div class="loading">购物车中还没有商品，赶紧选购吧！</div>
            </div>
        </div>
        <div class="top-login">
            <div class="user">
                <a href="#">
                    <span class="username"></span><span class="user1"></span>
                </a>
                <div class="tuser_menu">
                    <li class="userlink"><a href="#">个人中心</a></li>
                    <li class="userlink"><a href="#">评价晒单</a></li>
                    <li class="userlink"><a href="#">退出登录</a></li>
                </div>
            </div>
            <span class="cut">|</span>
            <a class="message" href="">消息通知</a>
            <span class="cut">|</span>
            <a class="myorders" href="#">我的订单</a>
            <a href="{{ url('/login')  }}">登陆</a>
            <span class="cut">|</span>
            <a href="{{ url('/register')  }}">注册</a>
            <span class="cut">|</span>
            <a class="message" href="">消息通知</a>
        </div>
    </div>
</div>
<!-- 顶部导航结束 -->