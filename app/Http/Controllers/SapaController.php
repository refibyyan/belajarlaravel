<?php

namespace App\Http\Controllers;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Refi Abyyan';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}

