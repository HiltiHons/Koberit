<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('info', function () {
    return view("subfolder.info");
});

Route::get('contact', function () {
    return "contact";
});
Route::get('product', [ProductController::class, 'index']);

Route::get('product/{id}', [ProductController::class, 'show']);


Route::get('posts/{post}', function($slug)
{
    $path = __DIR__."/../resources/posts/{$slug}.html" ;

    echo $path;
    $post = file_get_contents($path);

    return view('post', ['post' => $post]);
});

