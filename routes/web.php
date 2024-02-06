<?php

use App\Livewire\Pendaftaran;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use Stephenjude\FilamentBlog\Models\Post;
use App\Models\Paket;

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
    $posts = Post::published()->latest('published_at')->paginate(3);
    $pakets = Paket::all();

    return view('welcome', compact('posts', 'pakets'));
});

Route::get('/pendaftaran', Pendaftaran::class);

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog-show');

Route::get('/aboutus', function () {
    return view('component.aboutus');
});


Route::get('/contact', function () {
    return view('component.contact');
});

