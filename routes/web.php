<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productesController;

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/ayham',function(){
    return 'ayham';
});
Route:: get('/name/{name}',function(){
     return 'hello' .request('name');
});
///  used I have a topic that you can take the ID fo
Route:: get("/productes/{id}", function($id){
    return "productesid:$id ";

});
Route::get('/productes', [productesController::class,'index'])->name('producte');

