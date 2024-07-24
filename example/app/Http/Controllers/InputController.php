<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function myInput(){

        $data = [
            'name' => 'kokleng',
            'phone' => '016855002'
        ];
        return view('inputs.index', $data);
    }
}
