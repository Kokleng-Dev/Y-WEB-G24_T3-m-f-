
// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/input', function(){
    return view('input');
})->name('input');

Route::get('/user', function(){
   
    $name = '';
    $phone = '';

    return view('users.index', compact('name','phone'));
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



// Route::get('detail/{myId}/{myPhone}', function($myId = '',$myPhone= ''){

//     echo "hello " . $myId;
//     echo "<br>";
//     echo "my phone is " . $myPhone;
// })->name('detail');



// Route::get('myInput',[InputController::class, 'myInput'])
// ->name('myInput');



// Route::get('/',[HomeController::class,'index'])->name('home');
// Route::get('/detail',[HomeController::class,'detail'])->name('detail');

// Route::group(['namespace' => 'App\http\Controllers\Backends\\'], function(){
//     Route::get('/', 'HomeController@index')->name('home');
//     Route::get('/detail', 'HomeController@detail')->name('detail');
// });
// Route::group(['namespace' => 'Frontends\\'], function(){
//     Route::get('/', 'Backends\HomeController@index')->name('home');
//     Route::get('/detail', 'Backends\HomeController@detail')->name('detail');
// });