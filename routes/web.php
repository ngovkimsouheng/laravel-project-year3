<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/hello/{name}', function ($name) {
//     return view(('hello'), compact('name'));
// });




Route::get('/sum/{a}/{b}', function ($a, $b) {
    $total = $a + $b;
    return "<h1>total = $total</h1>";
});

use App\Http\Controllers\HelloController;
Route::get('/hello', [HelloController::class, 'sayHello']);

use App\Http\Controllers\StudentController;
Route::get('/students', [StudentController::class, 'index']);
