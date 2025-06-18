<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

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

//PageController 
Route::get('/',[PageController::class, 'index'])->name('index.page');
Route::get('/about',[PageController::class, 'about'])->name('about.page');
Route::get('/contact',[PageController::class, 'contact'])->name('contact.page');
Route::get('/post/{slug}',[PageController::class, 'post'])->name('post.page');
Route::get('/postdetail/{slug}',[PageController::class, 'postdetail'])->name('postdetail.page');
Route::get('/service',[PageController::class, 'service'])->name('service.page');
Route::get('/project',[PageController::class, 'project'])->name('project.page');

//HomeController 
Route::get('/ksfjfnvkdkwe5485rnfk/home',[HomeController::class, 'index'])->name('home.page');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
