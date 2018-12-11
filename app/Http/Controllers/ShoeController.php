<?php

namespace App\Http\Controllers;

use App\Shoe;

class ShoeController
{
    public function index()
    {
        $data = [
            'shoe' => Shoe::all()->first(),
        ];

        return view('shoes', $data);
    }
}
