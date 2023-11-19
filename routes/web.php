<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

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
})->name('home.info');

Route::get('contact', function () {
    return "contact";
})->name('home.contact');
Route::get('product', [ProductController::class, 'index'])->name('home.product');

Route::get('product/{id}', [ProductController::class, 'show']);

/*Route::get('posts/{post}', function ($slug) {

    $path = resource_path("posts/{$slug}.html");

    //$path = __DIR__ . "/../resources/posts/{$post}.html";

    $post = file_get_contents($path);

    if (file_exists($post)) {
        dd('File does not exist');
    }
    echo $post;
    return view('post', ['post' => $post]);
});*/

Route::get('views/{id}', function ($id) {
    $path = resource_path('views/'); // Verwende / als Pfadseparator

    $newPath = $path . $id;

    if (!file_exists($newPath . '.html') && !file_exists($newPath . '.blade.php')) {
        Log::error("Die Datei $id existiert nicht!"); // Logge den Fehler
        abort(404);
    }

    return view($id);
})->where('id', '[A-Za-z0-9]+'); // Sicherheitsüberprüfung für ID



Route::get('posts/{$id}', function ($id) {
    $path = resource_path('posts/');

    $newPath = $path . $id;

    if (!file_exists($newPath . '.html') && !file_exists($newPath . '.blade.php')) {
        echo "Die file $id existiert nicht!";
        dd($id);
    }
    return view($id);
});
