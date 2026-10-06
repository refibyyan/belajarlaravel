<?php

use Illuminate\Support\Facades\Route;

Route::get('/index1', function () {
    return view('index',[
        'nama' => 'Refi Ratu Bule',
        'nim' => '181024',
        'kelas' => '3 SMA',
        'status' => 'aktif',
    ]);
});

Route::get('/index', function () {
    return view('index');
});
