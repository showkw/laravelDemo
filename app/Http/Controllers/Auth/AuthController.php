<?php

namespace App\Http\Controllers\Auth;

use App\Entity\Member;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
//        $this->middleware('auth', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
//        dump( $data );
//        exit;
        //判断是通过手机注册还是邮箱注册
        if( array_key_exists('phone', $data) ){
            return Validator::make($data, [
                'phone' => [
                    'required',
                    'unique:member',
                    'regex:/^1[3-8][\d]{9}/',
                ],
                'password' => [
                    'required',
                    'confirmed',
                    'min:6',
                    'alpha_num',
                    'regex:/^[a-zA-Z]/',
                ],
            ]);
        }else{
            return Validator::make($data, [
                'email' =>[
                    'required',
                    'unique:member',
                    'email',
                ],
                'password' => [
                    'required',
                    'min:6',
                    'confirmed',
                    'alpha_num',
                    'regex:/^[a-zA-Z]/',
                ],
            ]);
        }
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Member
     */
    protected function create(array $data)
    {
        if ( array_key_exists('phone', $data) ) {
            return Member::create([
                'nickname'=> $data['nickname'],
                'phone' => $data['phone'],
                'password' => bcrypt($data['password']),
            ]);
        }else{
            return Member::create([
                'nickname'=> $data['nickname'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);
        }
    }
}
