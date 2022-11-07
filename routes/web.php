<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/Main', function () {
    $foodName = ['Cumi Goreng Tepung', 'Udang Asam Manis', 'Kepiting Saos Padang'];
    $imagePath = ['https://assets-pergikuliner.com/PGWOG7iaph4z_mxl607acgsDnk4=/385x290/smart/https://assets-pergikuliner.com/uploads/image/picture/457311/picture-1486363497.jpg', 
    'https://www.sajianbunda.com/wp-content/uploads/2016/03/Resep-Udang-Asam-Manis.jpg', 
    'https://img.qraved.co/v2/image/data/Indonesia/jakarta/Green_Ville/Pondok_Pangandaran/15034812_1832483430374812_3849147324148219904_n.14973249871080.810-m.jpg'];
    $stock = ['0', '12', '9'];
    return view('main')
    ->with('fn', $foodName)->with('img', $imagePath)->with('stk', $stock);
});