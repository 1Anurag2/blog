<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;

Route::get('/', function () {
    return view('home');
});
// Route::view('/about','about');

Route::get('/about/{name}', function ($name) {
    echo $name;                          // dynamic pass routing argument
    return view('about', ['name' => $name]);
});
Route::redirect('/', 'contact');

Route::view('/contact', 'contact');

Route::get('user',[Usercontroller::class,'getuser']);
Route::get('aboutuser',[Usercontroller::class,'aboutuser']);
Route::get('username/{name}',[Usercontroller::class,'getusername']);
Route::get('firstname/{name}',[Usercontroller::class,'firstname']);
Route::get('admin',[Usercontroller::class,'admin']);
Route::get('last',[Usercontroller::class,'lastuser']);


