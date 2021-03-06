<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});





//后台登录
Route::controller('login','AdminLoginController');

//分组-后台
Route::group(['middleware'=>'Login'],function(){

	//后台用户
	Route::get('admin','AdminController@index');
	//用户操作
	Route::controller('admin/user','AdminUserController');
	//订单详情
	Route::controller('admin/order','OrderController');
	//分类详情
	Route::controller('admin/cate','AdminCateController');
	//商品详情
	Route::controller('admin/goods','AdminGoodsController');
	//网站配置
	Route::controller('admin/conf','AdminConfController');
	//首页轮播
	Route::controller('admin/adv', 'AdminAdvController');
	//友情链接
	Route::controller('admin/friends', 'AdminFriendsController');

});

//前台登录
Route::controller('logined','HomeLoginController');


//分组-前台
Route::group(['middleware'=>'404'],function(){

	//前台用户
	Route::get('home','HomeController@index');
	//用户操作 注册
	Route::controller('home/user','HomeRegisterController');
	//购物车
	Route::controller('home/cart','HomeCartController');
	//订单详情
	Route::controller('home/order','HomeOrderController');
	//商品详情
	Route::controller('home/introduce','HomeIntroduceController');
	//商品列表页
	Route::controller('home/list', 'HomeListController');
	//个人中心
	Route::controller('home/personal','HomePersonalController');
	//收货地址
	Route::controller('home/address','HomeAddressController');
	//忘记密码
	Route::controller('home/forgetpwd','HomeforgetpwdController');
});

//404
Route::get('404',function(){

	abort('404');
	
});