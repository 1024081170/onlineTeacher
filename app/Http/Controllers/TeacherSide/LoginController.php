<?php

namespace App\Http\Controllers\TeacherSide;

use App\Model\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Notes:注册首页
     * User: 金辉
     */
    public function register(){
//        return ['font'=>"该账户已被删除",'code'=>2,'icon'=>5]
//        return ['font'=>"登录成功",'code'=>1,'icon'=>6];
        return view('login.register');
    }

    /**
     * Notes:处理注册
     * User: 金辉
     */
    public function doregister(){
        $data = request()->all();
        $phone_check = "/^1[34578]{1}\d{9}$/";
        if(!preg_match($phone_check,$data['phone'])){
            return ['font'=>"手机号有误",'code'=>2,'icon'=>5];
        }
        $data['pwd'] = md5($data['pwd']);
        $res = Teacher::insert($data);
        if($res){
            return ['font'=>"已提交审核，请等待",'code'=>1,'icon'=>6];
        }else{
            return ['font'=>"提交审核失败",'code'=>2,'icon'=>5];
        }
    }

    /**
     * Notes: 登录首页
     * User: 金辉
     */
    public function login(){
        return view('login.login');
    }

    /**
     * Notes: 处理登录
     * User: 金辉
     */
    public function dologin(){

    }
}