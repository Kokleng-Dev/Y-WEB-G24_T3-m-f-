<?php

use Illuminate\Support\Facades\Route;
use Request;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/input', function(){
    return view('input');
})->name('input');

Route::get('/user', function(){
    $data = [
        'name' => '', 
        'phone' => ''
    ];
    return view('users.index', $data);
})->name('user');

Route::post('/user/store', function(){
   $getAllData = request()->all(); // => array
   $getByGetMethod = request()->get('myname');
   $getByObject = request()->myname;
   $viaPhpRaw = $_POST['myname'];
   
   $myname = $getByGetMethod;

//    return view('users.show', compact('myname'));
    // return view('users.show', [
    //     'mysms' => $myname,
    //     'my_phone' => request()->myphone
    // ]);
    $data = [
        'name' => request()->myname, 
        'phone' => request()->phone
    ];

    return view('users.index',$data);

})->name('user.store');



Route::get('detail/{myId}/{myPhone}', function($myId = '',$myPhone= ''){

    echo "hello " . $myId;
    echo "<br>";
    echo "my phone is " . $myPhone;
})->name('detail');


Route::fallback(function(){
//    return view('not_found');
   return redirect()->route('home');
});
    