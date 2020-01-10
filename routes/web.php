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
//ROute optional parameter
Route::get('halo/{nama?}',function($nama='nurhadi')
{
   return 'Halo Nama saya adalah '.$nama; 
});
Route::get('sha/{nama?}/{minum?}/{harga?}',function($makan=null,$minum=null,$harga=null)
{
    if ($makan) {
        echo 'anda mememsan '.$makan;
    }if($minum){
        echo ' & '.$minum;
    }if ($harga) {
        echo '<br>jumlah harga '.$harga;
    }
    if(!$makan && !$minum && !$harga) {
        echo "anda tidak memesan";
 
    }

});
//mencari semua model
Route::get('/testmodel', function()
 {
      $query = App\Post::all() ;
       return $query; 
});
//mencari model berdasarkan id
Route::get('testmodel1',function()
{
    $query1=App\Post::find(1);
    return $query1;
});
//mencari model berdasarkan title
Route::get('testmodel2',function()
{
    $query2=App\post::where('title','like','%amalan%')->get();
    return $query2;
});
//mengubah record,(hapus semua isi function)
Route::get('testmodel3',function()
{
    $post=App\post::find(1);
    $post->title="Tips Cepat Nikahdsasddasdasads";
    $post->save();
    return $post;
});
//mehapusnghapus record,(hapus semua isi function)
Route::get('testmodel4',function()
{
    $post=App\post::find(3);
    $post->delete();
});
//menambah record
Route::get('testmodel5',function()
{
    $post=new App\post;
    $post->title="7 amalan pembuka jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;
});
Route::get('gaji',function()
{
    $post=App\penggajian::all();
    return $post;

});