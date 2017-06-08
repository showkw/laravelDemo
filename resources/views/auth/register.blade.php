<?php
/**
 * File Name: register.blade.php
 * Description:
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/9
 * Time: 0:10
 */
?>
@extends('home.layout')
@section('title', '注册 - 用户中心')
@section('staticFile')
    <link rel="stylesheet" href="{{ asset('/home/css/reg.css') }}">
    <link rel="stylesheet" href="{{ asset('/static/plugin/layui/css/layui.css') }}">
    <script type="text/javascript" src="{{ asset('/static/plugin/layui/layui.js') }}"></script>

@endsection
@section('content')
    <div class="wapper">
        <div class="wrap">
            <img src="{{ asset( '/images/home/logo.png' ) }}">
            <p>注册小米帐号</p>
            <div class="regbox">
                <form action="" method="POST">
                    <br>
                    <input id='mb' class='input' type="text" name="phone" placeholder="请输入手机号码!" maxlength="11">
                    <input id='nm' class='input' type="text" name="username" id="1" placeholder="请输入用户名!" maxlength="12">
                    <input id='pwd' class='input' type="password" name="password" id="1" placeholder="请输入最少6位密码!" maxlength="16">
                    <input type="text" name="verify" placeholder="验证码" value="">
                    <img id="imgVerify" src="" onclick='this.src=this.src+"?c="+Math.random()' title="点击刷新"/>
                    <br>
                    <input type="submit" name="submit" value="下一步">
                    <!-- 					<div class="msg">点击“立即注册”，即表示您同意并愿意遵守小米 <a href="">用户协议</a> 和 <a href="">隐私政策</a> </div> -->
                </form>
            </div>
        </div>
        <div class="foot">
            简体 | 繁体 | English | 常见问题<br>&copy;2017 版权所有-京ICP备10046444-<img src="{{ asset( '/images/home/ghs.png' ) }}" />京公网安备11010802020134号-京ICP证110507号
        </div>
    </div>
    <script>
        layui.use('layer', function() {
            var $ = layui.jquery, layer = layui.layer;
            $('#mb').on('mouseover', function () {
                layer.tips('请输入正确的11位手机号码', '#mb', {
                    tips: [2, '#3595CC'],
                    time: 2000
                });
            });
            $('#nm').on('mouseover', function () {
                layer.tips('仅允许注册以字母开头的用户名', '#nm', {
                    tips: [2, '#78BA32'],
                    time: 2000
                });
            });
            $('#pwd').on('mouseover', function () {
                layer.tips('请输入6-16位密码', '#pwd', {
                    tips: [2, '#F52579'],
                    time: 2000
                });
            });
            $('#imgVerify').on('mouseover', function () {
                layer.tips('看不清？点击刷新', '#imgVerify', {
                    tips: [2, '#FF6633'],
                    time: 2000
                });
            });
        });
    </script>
    </body>
@endsection
