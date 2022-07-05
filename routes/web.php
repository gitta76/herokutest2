<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/index');
});

Route::get('/sample/test', function () {
    return view('pages/sample');
});

// ログイン
Route::get('/admin/auth/login', function () {
    return view('pages/admin/auth/login');
});

// 顧客
Route::get('/admin/user_list', function () {
    return view('pages/admin/user_list');
});

Route::get('/admin/user_detail/plan', function () {
    return view('pages/admin/user_detail/plan');
});

Route::get('/admin/user_detail/plan/modify', function () {
    return view('pages/admin/user_detail/plan/modify');
});

Route::get('/admin/user_detail/plan/confirm', function () {
    return view('pages/admin/user_detail/plan/confirm');
});

Route::get('/admin/user_detail', function () {
    return view('pages/admin/user_detail');
});

Route::get('/admin/user_detail/modify', function () {
    return view('pages/admin/user_detail/modify');
});

Route::get('/admin/user_detail/confirm', function () {
    return view('pages/admin/user_detail/confirm');
});

Route::get('/admin/user_detail/history', function () {
    return view('pages/admin/user_detail/history');
});

Route::get('/admin/user_detail/questionnaire/list', function () {
    return view('pages/admin/user_detail/questionnaire/list');
});

Route::get('/admin/user_detail/questionnaire/result', function () {
    return view('pages/admin/user_detail/questionnaire/result');
});

// メンテナンス情報
Route::get('/admin/maintenance_info', function () {
    return view('pages/admin/maintenance_info');
});

Route::get('/admin/maintenance_info/modify', function () {
    return view('pages/admin/maintenance_info/modify');
});
