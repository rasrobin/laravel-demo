<?php

namespace Oneshoe\ShoesDemo;

use Oneshoe\ShoesDemo\Models\Shoe;

class ShoeController
{
    public function index()
    {
        $data = [
            'shoe' => Shoe::all()->first(),
        ];

        return view('Oneshoe\ShoesDemo::shoes', $data);
    }
}
