@extends('home.layout')
@section('title', '注册用户-爱淘宝-淘宝网购物分享平台')
@section('description', '爱淘宝是淘宝旗下购物分享综合型网站，致力于为消费者用互联网技术快速发现高性价比优质潮品、特惠活动，更有资深黄钻买手、时尚达人、红人模特分享购物体验、穿搭技巧')
@section('keywords', '爱淘宝,导购,淘宝导购,淘宝达人推荐,购物分享')
@section('staticFile')
    <link rel="stylesheet" href="{{ asset('/home/css/amazeui.css') }}">
    <link rel="stylesheet" href="{{ asset('/home/css/dlstyle.css') }}">
@endsection
@section('content')
    <div class="login-boxtitle">
        <a href="{{ url('/') }}"><img alt="logo" src="{{ asset('/home/images/logobig.png') }}" /></a>
    </div>

    <div class="login-banner">
        <div class="login-main">
            <div class="login-banner-bg"><span></span><img src="{{ asset('/home/images/big.jpg') }}" /></div>
            <div class="login-box">

                <h3 class="title">登录商城</h3>

                <div class="clear"></div>

                <div class="login-form">
                    <form>
                        {{ csrf_field() }}
                        <div class="user-name">
                            <label for="user"><i class="am-icon-user"></i></label>
                            <input type="text" name="user" id="user" placeholder="请输入邮箱/手机号码">
                        </div>
                        <div class="user-pass">
                            <label for="password"><i class="am-icon-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="请输入密码">
                        </div>
                    </form>
                </div>
                <div class="login-links">
                    <label for="remember-me"><input id="remember-me" type="checkbox">记住密码</label>
                    <a href="{{ url('/password/reset')  }}" class="am-fr">忘记密码</a>
                    <a href="{{ url('/register') }}" class="zcnext am-fr am-btn-default">注册</a>
                    <br />
                </div>
                <div class="am-cf">
                    <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm">
                </div>
                <div class="partner">
                    <h3>合作账号</h3>
                    <div class="am-btn-group">
                        <li><a href="#"><i class="am-icon-qq am-icon-sm"></i><span>QQ登录</span></a></li>
                        <li><a href="#"><i class="am-icon-weibo am-icon-sm"></i><span>微博登录</span> </a></li>
                        <li><a href="#"><i class="am-icon-weixin am-icon-sm"></i><span>微信登录</span> </a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('home.public.footer')
    <script>

    </script>
@endsection