<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
Route::get('/project',[PageController::class, 'project'])->name('project.page')->middleware('auth.basic');
Route::get('/special/posts',[PageController::class, 'specialPosts'])->name('special.posts')->middleware('can:update-post');
Route::get('/popular/posts',[PageController::class, 'popularPosts'])->name('popular.posts')->middleware('throttle:5'); // ddos attakalarni oldini olish uchun


//AuthController
Route::get('/register/page',[AuthController::class, 'registerPage'])->name('register.page');
Route::post('/register/save',[AuthController::class, 'registerSave'])->name('register.save');
Route::get('/login/page',[AuthController::class, 'loginPage'])->name('login.page');
Route::post('/login/check',[AuthController::class, 'loginCheck'])->name('login.check');

//HomeController 
Route::get('/ksfjfnvkdkwe5485rnfk/home',[HomeController::class, 'index'])->name('home.page')->middleware('auth');

//Laravel Breeze 
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//AdminController 
Route::get('/admin/index',[AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::get('/logout',[AdminController::class, 'logout'])->name('logout.page')->middleware('auth');



//Resource Controllers
Route::resources([

    'user' => UserController::class,
    'category' => CategoryController::class,
    'posts' => PostController::class,
    'tag' => TagController::class,
    'comment' => CommentController::class,
]);


