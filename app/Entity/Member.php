<?php

/**
 * File Name: Member.php
 * Description: 数据库member 会员表模型
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/5
 * Time: 21:17
 */
namespace App\Entity;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Member extends Authenticatable
{
    //指定关联数据库表名
    protected $table = 'member';
    //指定关联数据库表主键
    protected $primaryKey = 'id';

    //必填项
    protected $fillable = [
        'phone', 'password',
    ];

    //隐藏项
    protected $hidden = [
        'password', 'remember_token',
    ];
}
