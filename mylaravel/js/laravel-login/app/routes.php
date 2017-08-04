<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::group(array("prefix"=>"check"),function(){
	Route::post("check-username",function(){
		if(User::check_username(Input::get("username")))
			return "true";
		else return "false";
	});
	Route::post("check-email",function(){
		if(User::check_email(Input::get("email")))
			return "true";
		else return "false";
	});
});

Route::filter("check-login",function(){
	if(!Session::has("logined"))
		return Redirect::to("login");
});
Route::get("edit-profile",array("before"=>"check-login",function(){
	return View::make("edit-profile");
}));
Route::get("register",function(){
	if(Session::has("logined"))
		return Redirect::to('edit-profile');
	//Nếu tồn tại session đăng nhập sẽ trả về edit-profile
	return View::make("register");
});
Route::post("register",function(){
	$rules=array(
		"username"=>"required|min:3",
		"password"=>"required|min:6",
		"email"=>"required|email");

	if(!Validator::make(Input::all(),$rules)->fails()){
		if(!User::check_username(Input::get("username")) && !User::check_email(Input::get("email"))){
		$user=new User();
		$user->username=Input::get("username");
		$user->password=md5(sha1(Input::get("password")));
		$user->email=Input::get("email");
		$user->save();
		Session::put("register_success",Input::get('username')." đã đăng ký thành công");
		return Redirect::to("login");
		}
	}
});

Route::get("login",function(){
	if(Session::has("logined"))
		return Redirect::to('edit-profile');
	//Nếu tồn tại session đăng nhập sẽ trả về edit-profile
	return View::make("login");
});
Route::post("login",function(){
	if(User::check_login(Input::get("user_input"),md5(sha1(Input::get("password")))))
	{
		//Đăng nhập thành công
		Session::put("logined","true");
		//Tạo session login
		return Redirect::to("edit-profile");
	}
	else return View::make("login")->with("error_message","Tên đăng nhập hoặc mật khẩu không đúng");
	//Thông báo lõi
});

Route::get("logout",function(){
	Session::forget("logined");
	//Xóa session đăng nhập
	return Redirect::to("login");
});
