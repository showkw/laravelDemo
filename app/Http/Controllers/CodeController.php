<?php
/**
 * File Name: CodeController.php
 * Description: 验证码控制器类
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/6
 * Time: 21:17
 */
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//引用对应的命名空间
use Gregwar\Captcha\CaptchaBuilder;
use Session;

class CodeController extends Controller
{

    public function __construct( $width = 100, $height = 30, $font = null )
    {
        //生成验证码图片的Builder对象，配置相应属性
        $this->builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $this->builder->build( $width, $height, $font );

    }

    /**
     * 生成一个验证码
     *
     * @return Response
     */
    public function getCode($tmp)
    {
        //获取验证码的内容
        $phrase = $this->builder->getPhrase();

        //把内容存入session
        Session::flash('RegCode', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $this->builder->output();
    }

    /**
     * 检查验证码是否正确
     *
     * @return Response
     */
    public function checkCode(Request $request)
    {
        $userInput = $request->get('code');

        if($this->builder->testPhrase($userInput)) {
            //用户输入验证码正确
            return true;
        } else {
            //用户输入验证码错误
            return false;
        }
    }

}