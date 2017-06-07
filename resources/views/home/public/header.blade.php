<?php
/**
 * File Name: header.blade.php
 * Description: 公共头部模板
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/5
 * Time: 22:38
 */
?>

<!--- 头部 start---->

    <div class="hmtop">

        <!--顶部导航条 -->

        <div class="am-container header">
            <ul class="message-l">
                <div class="topMessage">
                    <div class="menu-hd">
                        @if(!Auth::check())
                            <a href="/login" target="_top" class="h">亲，请登录</a>
                            <a href="/register" target="_top">免费注册</a>
                        @else
                            <a href="/logout" target="_top">退出</a>
                        @endif
                    </div>
                </div>
            </ul>
            <ul class="message-r">
                <div class="topMessage home">
                    <div class="menu-hd"><a href="/" target="_top" class="h">商城首页</a></div>
                </div>
                <div class="topMessage my-shangcheng">
                    <div class="menu-hd MyShangcheng"><a href="/member" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
                </div>
                <div class="topMessage mini-cart">
                    <div class="menu-hd"><a id="mc-menu-hd" href="/cart" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a></div>
                </div>
                <div class="topMessage favorite">
                    <div class="menu-hd"><a href="/favorites" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>
                </div></ul>
        </div>

        <!--悬浮搜索框-->

        <div class="nav white">
            <div class="logo"><img src="{{ URL::asset('/home/images/logo.png') }}"></div>
            <div class="logoBig">
                <li class=""><img src="{{ URL::asset('/home/images/logobig.png') }}"></li>
            </div>

            <div class="search-bar pr">
                <a name="index_none_header_sysc" href="#"></a>
                <form>
                    <input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
                    <input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
                </form>
            </div>
        </div>
        <div class="clear"></div>
    </div>

<!--- 头部 end  ---->
