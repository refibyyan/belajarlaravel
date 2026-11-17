<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function () {
    return view('pages.about', [
        'nama'=> 'Sendy Prayogo',
        'kelas'=> 'TSM-00',
        'nim' => '0123456789',
    ]);
});

Route::view('/contact', 'pages.contact');

// satu controller bisa memiliki beberapa method (perintah)

//untuk menampilkan data dari database
Route::get('/product', [ProductController::class, 'index']);

//menampilkan halaman form insert data
Route::get('/product/addProduct', [ProductController::class, 'addProduct']);

//memasukan data dari form yang diisikan ke dalam database
Route::post('/product', [ProductController::class, 'store']);
