<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Hash;

class HomePersonalController extends Controller
{

     public function getIndex()
    {
        // $id = $request->only('id');
        // $data = DB::table('user')->where('User_id',20)->first();
        return view('homes.pers.index');
    }
    // public function postIndex(Request $request)
    // {
    //     $data = $request->except('_token');
    //     // dd($data);
       
    // }

    
    //修改个人信息
    public function getEdit(Request $request)
    {
        $id = $request->only('id');
        $data = DB::table('user')->where('User_id',69)->first();
        // dd($data);
        return view('homes.pers.edit',['data'=>$data]);
    }
  
    public function postUpdate(Request $request)
    {
        $data = $request->except('User_id','_token');
        // dd($data);
        $id = $request->input('User_id');
        $res = DB::table('user')->where('User_id',$id)->update($data);
        if($res){
            return back()->with('info','修改成功');
        }else{
            return back()->with('info','修改失败');

        }
    }

    //修改头像
     public function getProedit($id)
    {
        $data = DB::table('user')->where('User_id',$id)->first();
        // dd($id);
        return view('homes.pers.profile',['data'=>$data]);
    }
    
    public function postProupdate(Request $request)
    {   

        $data = $request->except('_token');
        $id = $request->input('User_id');
        // dd($id);
        if($request->hasFile('Profile')){
            //自定义上传的文件名
            $names = rand(1111,9999).time();
          
            //获取上传文件的后缀
            $suffix = $request->file('Profile')->getClientOriginalExtension();

            $request->file('Profile')->move('./upload/',$names.'.'.$suffix);

              //把上传的图片存储到数据库中
            $res['profile'] = '/upload/'.$names.'.'.$suffix;
        }
         $pro = DB::table('user')->where('User_id',$id)->update($res);

        if($pro){
            return back()->with('info','修改成功');
        }else{
            return back()->with('info','修改失败!');
        }
    }


    //修改密码
    public function getPwdedit($id)
    {
        $data = DB::table('user')->where('User_id',$id)->first();
        // dd($data);
        return view('homes.pers.Setpassword',['data'=>$data]);
    }
  
    public function postPwdupdate(Request $request)
    {   

        // 表单验证
        $this->validate($request,[

            'oldPassword'=>'required',
            'Password' => 'required|regex:/^\w{5,12}$/',
            'rePassword'=>'required|same:Password',
            ],[      
            'oldPassword.required' => '旧密码不能为空',
            'Password.required' => '密码不能为空',
            'Password.regex' => '密码格式不正确',
            'rePassword.required' => '确认密码不能为空',
            'rePassword.same' => '俩次密码不一致',
        ]);
        $res = $request->except('_token','rePassword','oldPassword');
        
        $id = $request->input('User_id');

        $opwd = $request->input('oldPassword');

        $data = DB::table('user')->where('User_id',$id)->first();

        $pwd = $data->Password;
        // dd($pwd);
        if (Hash::check($opwd, $pwd)) {

             //哈希加密密码
             $res['Password'] = Hash::make($request->input('Password'));
             // dd($res);
             $pro = DB::table('user')->where('User_id',$id)->update($res);

              return back()->with('info','修改成功');
         } else {

            return back()->with('info','修改失败');
        }
    }   

}
