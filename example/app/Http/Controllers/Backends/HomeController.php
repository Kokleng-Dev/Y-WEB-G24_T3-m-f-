<?php

namespace App\Http\Controllers\Backends;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(Request $r){


        $data = [
            'name' => 'Rithy',
            'isChild' => true,
            'template' => $r->v ? $r->v : 'v2'
        ];


        return view('home', $data);
    }

    public function detail(Request $r){
        $data = [
            'template' => $r->v ? $r->v : 'v2'
        ];
        return view('detail', $data);
    }
}
