<?php
/**
 * File Name: sms.php
 * Description: 短信验证码配置文件
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/8
 * Time: 11:26
 */

return [
    'default' => env( 'SMS_CENTER', 'miaodi' ),
    //平台配置中心
    'center'=>[
        //秒嘀云平台:https://www.miaodiyun.com
        'miaodi'=>[
            //API请求url前半部分
            'BASE_URL' => "https://api.miaodiyun.com/20150822/",
            //API请求ACCOUNT_SID
            'ACCOUNT_SID' => "d108264bc4864b6b8799a3583b7b6f10",
            //API请求AUTH_TOKEN
            'AUTH_TOKEN' => "de99d453ee304fbfb3c3d7212199dbc0",
            //API请求的内容类型
            'CONTENT_TYPE' => "application/x-www-form-urlencoded",
            //期望服务器响应的内容类型，可以是application/json或application/xml
            'ACCEPT' => 'application/json',
        ],
    ],
];