<?php

use App\Http\Controllers\admin\aboutController;
use App\Http\Controllers\admin\articleController;
use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\admin\faqController;
use App\Http\Controllers\admin\memberController;
use App\Http\Controllers\admin\posterController;
use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\stokController;
use App\Http\Controllers\akun\loginController;
use App\Http\Controllers\akun\registerController;
use App\Http\Controllers\view\viewController;
use App\Models\article;
use App\Models\member;
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

// route::get('/home', [viewController::class, 'home']);
route::get('/', [viewController::class, 'home']);
route::get('/article', [viewController::class, 'article']);
route::get('/product', [viewController::class, 'product']);
route::get('/about', [viewController::class, 'about']);

route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
>>>>>>> 3cbba8048a35b518e9852c587c37d38ce4afec4b
route::post('/login', [loginController::class, 'authenticate']);
route::post('/logout', [loginController::class, 'logout']);
Route::resource('register', registerController::class)->middleware('guest');

// route::get('/catalog', [home::class, 'catalog']);
// route::get('/faq', [home::class, 'faq']);
// route::get('/about', [home::class, 'about']);
// route::get('/member', [home::class, 'member']);
// route::get('/index', [home::class, 'index']);


// route::get('/login', [loginController::class, 'index']);
// Route::get('/register', [registerController::class, 'index']);
// Route::post('/register', [registerController::class, 'store']);



Route::resource('adminFaq', faqController::class)->middleware('auth');
Route::resource('adminPoster', posterController::class);
Route::resource('adminArticle', articleController::class);
Route::resource('adminAbout', aboutController::class);
Route::resource('adminMember', memberController::class);
Route::resource('adminCategory', categoryController::class);
Route::resource('adminProduct', productController::class);
Route::resource('adminStock', stokController::class);


// Route::resource('adminAbout', aboutController::class);
// Route::resource('adminArticle', articleController::class);
// Route::get('/login', function () {
//     return view('login.index');
// });
