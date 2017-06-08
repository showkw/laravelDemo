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
use Gregwar\Captcha\PhraseBuilder;

class CodeController extends Controller
{


    public function __construct( $length = 5, $string = 'abcdefghijklmnpqrstuvwxyz123456789', $width = 100, $height = 30, $font = null )
    {
        $bu = new PhraseBuilder($length, $string);
        //生成验证码图片的Builder对象，配置相应属性
        $this->builder = new CaptchaBuilder(null, $bu);
        //可以设置图片宽高及字体
        $this->builder->build( $width, $height, $font );

    }

    /*
     *
     * 获取输出的验证码字符串
     */
    public function getCodeString()
    {
        return $this->builder->getPhrase();
    }


    /**
     * 生成一个图片验证码
     *
     * @return
     */
    public function getImageCode()
    {
        session(['RegCode'=>null]);
        //获取验证码的内容
        $phrase = $this->getCodeString();
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $this->builder->output();
        //把验证码存入session
        session(['RegCode'=>$phrase]);
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
            return 0;
        } else {
            //用户输入验证码错误
            return 1;
        }
    }

}