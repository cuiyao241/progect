<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class AdminLoginController extends Controller
{
    //
    public function getIndex()
    {
        return view('admins.login');

    }

    public function postTest(Request $request)
    {
        //获取表单信息
    	$postUser = $request->except('_token');
    	$newName = $postUser['username']; 
    	$newPassword = $postUser['password']; 

        //通过用户名查询密码
    	$user = DB::table('user')->where('User_name',$newName)->first();
        // var_dump($user);die;
    	
        //用户名判断
        if (!$user) {

            return back()->with('admin_login','用户不存在');

        } else {
             //密码判断
            if($user->Password == $newPassword){
             // if(Hash::check($user->Password,$newPassword)){
                //存值
                session(['username'=>$newName]);
                return redirect('admin')->with('admin_logins','登录成功');
            } else {
                return back()->with('admin_login','登录失败,密码错误!');
        }


        }

       

    }

    //退出
    public function getClose()
    {
        session(['username'=>null]);
        return redirect('login');
    }


}