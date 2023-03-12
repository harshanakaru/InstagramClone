<?php

    use App\Http\Controllers\PostsController;
    use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilesController;
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

    Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/{user}', [ProfilesController::class, 'index'])->name('profile.show');
    Route::patch('/profile/{user}', [ProfilesController::class, 'update'])->name('profile.update');

Route::get('/p/create', [PostsController::class, 'create'])->name('post.create');
Route::post('/p', [PostsController::class, 'store'])->name('post.store');
Route::get('/p/{post}', [PostsController::class, 'show'])->name('post.show');


require __DIR__ . '/auth.php';
