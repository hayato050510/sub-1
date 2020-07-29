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
//本番用
Route::get('jobs', function () {
    // return view('facebook.check');
    return redirect('https://a-trade.jp/redirect/biscor?media=G16531'); //Biscor(Aトレード)リダイレクト
});

//LP確認用
Route::get('cccheck', function () {
    return view('facebook.check');
});