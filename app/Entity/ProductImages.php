<?php
/**
 * File Name: ProductImages.php
 * Description: 数据库product_images 产品图片表模型
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/5
 * Time: 21:19
 */
namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    //指定关联数据库表名
    protected $table = 'product_images';
    //指定关联数据库表主键
    protected $primaryKey = 'id';
}