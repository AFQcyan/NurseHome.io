<?php

use src\App\Route;

// 메인페이지
Route::get('/', 'ViewController@index');

Route::get('/notice', 'ViewController@notice');
Route::get('/notice/list/{idx}', 'ViewController@notice_list');

Route::get('/news', 'ViewController@news');
Route::get('/news/list/{idx}', 'ViewController@news_list');
// 스토어
Route::get('/donate', 'ViewController@donate');
Route::get('/donate/list/{idx}', 'ViewController@donate');

Route::get('/equip', 'ViewController@equip');
Route::get('/gallary', 'ViewController@gallary');


// 캡차 이미지
Route::get('/captcha', 'ViewController@captcha');

if(user()){
    Route::get('/user/logout', 'UserController@logout');
    Route::post('/notice/insert', 'InsertController@notice');
    Route::post('/news/insert', 'InsertController@news');
    Route::post('/gallary/insert', 'InsertController@gallary');
}

Route::post('/user/register', 'UserController@register');
Route::post('/user/login', 'UserController@login');