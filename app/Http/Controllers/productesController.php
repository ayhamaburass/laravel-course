<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productesController extends Controller
{
    public function index()
    {
        $produuctes=[

            ['name'=>'laptop','price'=>1500],
            ['name'=>'headset','price'=>120],
            ['name'=>'keyboard','price'=>75],
        ];
        return $produuctes;
    }
    public function 

}
