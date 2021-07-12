<?php
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\RelationsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Customer\MainController;



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

Auth::routes(['verify'=> true]);

Route::get('/user' ,[MainController::class , 'index'])->middleware('auth' ,'check.user')->name('user');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/email' , function(){
    Mail::to('ebn.nawar2002@gmail.com')->send(new WelcomeMail());
    return new WelcomeMail();
});

Route::middleware('auth','check.user')->prefix("user")->group(function(){
    Route::get('/addToCard/{product}', [App\Http\Controllers\Customer\MainController::class, 'addToCard'])->name('card.add');
    Route::get('shopping-card', [App\Http\Controllers\Customer\MainController::class, 'showcard'])->name('card.show');
    Route::resource("/profile", 'App\Http\Controllers\Customer\MainController');
    Route::get('/search', [App\Http\Controllers\SearchController::class, 'index'])->name('search');   

});

// Route::prefix("admin")->group(function(){
//     Route::get("/user" , function(){
//         return "hello";
//     });
// });

// GOOGLE login
Route::get( 'login/google' , [App\Http\controllers\Auth\loginController::class , 'redierctToGoogle'])->name('login.google');
Route::get( 'login/google/callback' , [App\Http\controllers\Auth\loginController::class , 'handleGoogleCallback']);
// FACEBOOK login
Route::get( 'login/facebook' , [App\Http\controllers\Auth\loginController::class , 'redierctToFacebook'])->name('login.facebook');
Route::get( 'login/facebook/callback' , [App\Http\controllers\Auth\loginController::class , 'handleFacebookCallback']);


Auth::routes();