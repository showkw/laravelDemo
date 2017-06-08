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
<div id="top">
<div class="ct">
<div class="top-nav">
<volist name='top_nav' id='vo'>
<a href="{$vo['url']}">{$vo['name']}</a>
<span class="cut">|</span>
</volist>
<a href="">SelectRegion</a>
</div>
<div class="top-cart">
</div>
<div class="top-menu">
    <div class="cartlist">
        <volist name="cartlist" id='vo'>
            <div id="cart{$key}" class='alert'>
                <div class='c_img left'><img src="{$vo['picimg']}" width='60' height='60'></div>
                <div class='c_name left'>{$vo['goodname']}{$vo['version']}{$vo['color']}</div>
                <div class='c_price left'>{$vo['price']}元 x{$vo['number']}</div>
                <div class='c_close left'><a href="{:U('/Home/Index/index?cart_del&scid='.$key)}" class="close" data-dismiss="alert" style="float:none;color:#000;font-size: 24px;vertical-align: middle;margin-left: 10px;">&times;</a></div>
            </div>
            <?php $knum = count($cartlist);$total1 +=($vo['price']*$vo['number']); ?>
        </volist>
    </div>
    <div class='total-info'>
        <div class='num-info left'>
							<span>共计<span class='kunm'>{$knum}</span>件
							<span class='t_price'>{$total1}元</span>
							</span>
        </div>
        <div class='right'>
            <a class='btn' href="{:U('/Home/Index/cart')}">去购物车结算</a>
        </div>
    </div>
</div>
</div>
<div class="cart" style="background:#424242;">
    <i class="icon-shopping-cart"> </i>购物车(0)
</div>
<div class="top-menu">
    <div class="loading">购物车中还没有商品，赶紧选购吧！</div>
</div>
</div>
<div class="top-login">
    <?php
    if(isset($_SESSION['userinfo'])){
        // print_r('$');
        echo '<div class="user"><a href="'.U('/Home/User/index').'"><span class="username">'.$_SESSION['userinfo']['name'].'</span><span class="user1"></a><div class="tuser_menu">';
        echo '<li class="userlink"><a href="'.U('/Home/User/index').'">个人中心</a></li>';
        echo '<li class="userlink"><a href="#">评价晒单</a></li>';
        echo '<li class="userlink"><a href="'.U('/Home/User/logout').'">退出登录</a></li>';
        echo '</div></div><span class="cut">|</span><a class="message" href="">消息通知</a>
					<span class="cut">|</span><a class="myorders" href="'.U('/Home/User/order').'">我的订单</a>
			    ';
    }else{
        echo '<a href="'.U('/Home/User/login').'">登陆</a><span class="cut">|</span><a href="'.U('/Home/User/regsiter').'">注册</a><span class="cut">|</span><a class="message" href="">消息通知</a>';
    }
    ?>

</div>
</div>
</div>
<!-- 顶部结束 -->