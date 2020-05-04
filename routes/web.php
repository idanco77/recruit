<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
    return 'Hello Larevel';
}); 

Route::get('/student/{id}', function ($id  = 'No student found'){
    return 'We got student with id '.$id;
});

Route::get('/car/{id?}', function ($id  = null){
    if(isset($id)){
        //TODO: validate for integer  
        return "We got car $id";
    } else {
        return 'We need the id to find your car';
    }
});


Route::get('/comment/{id}', function ($id) {
    return view('comment', compact('id'));
});
















