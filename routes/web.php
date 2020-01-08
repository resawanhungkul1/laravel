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
    return view('welcome');
    });
    

//Route basic
Route::get('/about', function () {
    return '<h1>Hallo</h1>'.
    'selamat datanng di web app saya<br>'.
    'Laravel, emang keren. ';
});

Route::get('profil',function()
{
    return view('biodata');
});
Route::get('profil2',function()
{
    return view('biodata2');
});
Route::get('profil3',function()
{
    return view('biodata3');
});
Route::get('profil4',function()
{
    return view('biodata4');
});
Route::get('profil5',function()
{
    return view('biodata5');
});
//Route parameter
Route::get('pesan/{makan}',function($mkn)
{
    return "makanan yang saya pesan adalah " .$mkn;
});
Route::get('latihan/{makan}/{minum}/{bayar}',function($a,$b,$c)
{
    return "saya pesan ".$a.'<br>'.
     "saya  minnum ".$b.'<br>'.
     "total harga Rp. ".$c;
});
