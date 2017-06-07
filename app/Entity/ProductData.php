<?php
/**
 * File Name: ProductData.php
 * Description:数据库product_data  产品详情表模型
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/5
 * Time: 21:18
 */
namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class ProductData extends Model
{
    //指定关联数据库表名
    protected $table = 'product_data';
    //指定关联数据库表主键
    protected $primaryKey = 'id';
}
