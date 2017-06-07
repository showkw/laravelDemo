<?php
/**
 * File Name: Product.php
 * Description: 数据库product 产品表模型
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/5
 * Time: 21:17
 */

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //指定关联数据库表名
    protected $table = 'product';
    //指定关联数据库表主键
    protected $primaryKey = 'id';
}
