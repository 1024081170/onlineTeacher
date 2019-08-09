<?php
//教师端首页
Route::get('/','TeacherSide\IndexController@index');//->middleware('login');//启动验证开启

//教师注册登录
Route::prefix('/log')->group(function(){
    Route::get('/register','TeacherSide\LoginController@register');
    Route::post('/doregister','TeacherSide\LoginController@doregister');
    Route::get('/login','TeacherSide\LoginController@login');
    Route::post('/dologin','TeacherSide\LoginController@dologin');
});


