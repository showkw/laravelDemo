<?php
/**
 * File Name: HomeController.php
 * Description: 前台Home控制器
 * Created by PhpStorm.
 * Auth: Showkw
 * Date: 2017/6/4
 * Time: 18:38
 */

namespace App\Http\Controllers\Home;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function __construct()
    {
//        $this->middleware( 'auth');
    }

    public function  index( Request $request )
    {
//        dump($request->session()->all());
        return view( 'home.index' );
    }


}
