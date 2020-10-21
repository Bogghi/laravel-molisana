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
    return redirect('/home');    
});

Route::get('/home', function ($url = "Home") {
    $data = config("pasta");
    $pasta = [];

    foreach ($data as $key => $value){
        $value["id"] = array_search($value,$data);
        $pasta[$value["tipo"]][] = $value;
    }
    // dd($pasta);
    return view('welcome',["container" => $pasta],["url" => $url]);
})->name('home');

Route::get('/products', function ($url = "Prodotti") {
    return view('products',["url" => $url]);
})->name('products');

Route::get('products/{id}', function ($id, $url = "Prodotti") {
    $pasta = config("pasta.$id");
    // dd($pasta);
    return view('single-product',['id' => $id, "pasta" => $pasta, 'url' => $url]);
});

Route::get('/news', function ($url = "News") {
    return view('news',["url" => $url]);
})->name('news');
