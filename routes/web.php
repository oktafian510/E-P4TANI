<?php

use App\Http\Controllers\admin\aboutController;
use App\Http\Controllers\admin\articleController;
use App\Http\Controllers\admin\faqController;
use App\Http\Controllers\akun\loginController;
use App\Http\Controllers\akun\registerController;
use App\Http\Controllers\view\home;
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

// route::get('/home', [home::class, 'home']);
// route::get('/article', [home::class, 'article']);
// route::get('/catalog', [home::class, 'catalog']);
// route::get('/faq', [home::class, 'faq']);
// route::get('/about', [home::class, 'about']);
// route::get('/member', [home::class, 'member']);
// route::get('/index', [home::class, 'index']);


// route::get('/login', [loginController::class, 'index']);
// Route::get('/register', [registerController::class, 'index']);
// Route::post('/register', [registerController::class, 'store']);



Route::resource('adminFaq', faqController::class);
// Route::resource('adminAbout', aboutController::class);
// Route::resource('adminArticle', articleController::class);
// Route::get('/login', function () {
//     return view('login.index');
// });
