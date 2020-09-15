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
Route::get('app', function () {
    return view('facebook.check');
    // return view('facebook.noMatch'); //獲得LP(4)
    
    // return view('facebook.uraApp'); //獲得LP(3)
    // return view('facebook.uranai'); //獲得LP(2) - 占い案件LP
    // return view('facebook.job'); //獲得LP(1)
    // return redirect('https://a-trade.jp/redirect/biscor?media=G16531'); //Biscor(Aトレード)リダイレクト
});

//LP確認用
Route::get('cccheck', function () {
    return view('facebook.noMatch'); //獲得LP(4)
    
    // return view('facebook.uraApp'); //獲得LP(3)
    // return view('facebook.uranai');
});