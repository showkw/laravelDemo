<?php
/**
 * File Name: SmsController.php
 * Description:
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/8
 * Time: 11:36
 */
namespace App\Http\Controllers;

use App\Http\Controllers\CodeController;
use Gregwar\Captcha\PhraseBuilder;
use Session;

class SmsController extends Controller
{

    //API请求url前半部分
    public $baseUrl = '';
    //API请求ACCOUNT_SID
    public $accoutSid = '';
    //API请求AUTH_TOKEN
    public $authToken = '';
    //API请求的内容类型
    public $contentType = '';
    //期望服务器响应的内容类型，可以是application/json或application/xml
    public $accept = '';

    //初始化配置
    //获得App\Config\sms.php中的配置信息
    public function __construct()
    {
        $cen = config( 'sms.default' );
        $center = config('sms.center.'.$cen);
        $this->baseUrl =$center['BASE_URL'];
        $this->accoutSid = $center['ACCOUNT_SID'];
        $this->authToken = $center['AUTH_TOKEN'];
        $this->contentType = $center['CONTENT_TYPE'];
        $this->accept = $center['ACCEPT'];
    }

    /**
     * 创建url
     *
     * @param funAndOperate
     *            请求的功能和操作
     * @return
     */
    function createUrl($funAndOperate)
    {
        return $this->baseUrl.$funAndOperate;
    }


    /*
     *
     * 生成一部分要POST的数据的 body
     */
    function createBasicAuthData()
    {
        date_default_timezone_set("Asia/Shanghai");
        $timestamp = date("YmdHis");
        //生成sig
        $sig = $sig = md5($this->accoutSid.$this->authToken.$timestamp);

        return array("accountSid" => $this->accoutSid, "timestamp" => $timestamp, "sig" => $sig, "respDataType"=> "JSON");
    }

    /**
     * 创建请求头
     * @return $headers
     */
    function createHeaders()
    {
        $headers = array('Content-type: ' . $this->contentType, 'Accept: ' . $this->accept);

        return $headers;
    }


    /**
     * 发送post请求
     *
     * @param funAndOperate
     *            功能和操作
     * @param body
     *            要post的数据
     * @return
     * @throws IOException
     */
    function post($funAndOperate, $body)
    {
        // 构造请求数据
        $url = $this->createUrl($funAndOperate);
        $headers = $this->createHeaders();
        // post请求的消息体为&拼接的字符串，所以做下面转换
        $fields_string = "";
        foreach ($body as $key => $value) {
            $fields_string .= $key . '=' . $value . '&';
        }
        rtrim($fields_string, '&');

        // 提交请求
        $con = curl_init();
        curl_setopt($con, CURLOPT_URL, $url);
        curl_setopt($con, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($con, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($con, CURLOPT_HEADER, 0);
        curl_setopt($con, CURLOPT_POST, 1);
        curl_setopt($con, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($con, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($con, CURLOPT_POSTFIELDS, $fields_string);
        $result = curl_exec($con);
        curl_close($con);

        return $result;
    }


    //测试
    public function send()
    {
        //生成code;
        $codeCon = new CodeController('5','123456789');
        $code = $codeCon->getCodeString();
        //把验证码写入session,便于前台验证
        Session::put('RegMobile', $code);
        //API请求url中{function}/{operation}?部分
        $funAndOperate = "industrySMS/sendSMS";
        //生成Body
        $body = $this->createBasicAuthData();
        // 在基本认证参数的基础上添加短信内容和发送目标号码的参数
        $body['smsContent'] = urlencode("【乐维克斯】您的验证码为".$code."，请于5分钟内正确输入，如非本人操作，请忽略此短信。");
        $body['to'] = '15091877533';
        // 提交请求
        $result = $this->post($funAndOperate, $body);
    }
}