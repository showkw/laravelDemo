<?php
/**
 * File Name: Category.php
 * Description: 数据库category 产品分类表模型
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/5
 * Time: 21:19
 */
namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //指定关联数据库表名
    protected $table = 'category';
    //指定关联数据库表主键
    protected $primaryKey = 'id';
}
