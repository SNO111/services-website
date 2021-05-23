<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\PHeaderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;

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
Route::get('/home',function () {
    return view('front.index');
})->name('home');
Route::get('/contact', [ContactController::class,'createForm'])->name('contact');
Route::post('/contact', [ContactController::class,'ContactUsForm'])->name('contact.store');

Route::get('/services', function () {
    return view('frontend.blog');
})->name('services');
Route::get('/portfolio', function () {
    return view('frontend.blog');
})->name('portfolio');
Route::get('/pricing', function () {
    return view('frntend.blog');
})->name('pricing');
Route::get('/about-us', function () {
    return view('frntend.blog');
})->name('about-us');
Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');
Route::get('/privacy-policy', function () {
    return view('frontend.privacy_policy');
})->name('privacy-policy');
Route::get('/help-center', function () {
    return view('frontend.helpcenter');
})->name('help-center');
Route::get('/sitemap', function () {
    return view('frontend.sitemap');
})->name('sitemap');

Auth::routes();

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('profile', [ 'as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', [ 'as' => 'profile.update', 'uses' =>  'App\Http\Controllers\ProfileController@update']);
    Route::put('profile/password', [ 'as' => 'profile.password', 'uses' =>  'App\Http\Controllers\ProfileController@password']);
    Route::resource('pheader', PHeaderController::class);
    Route::resource('feature', FeaturesController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('about', AboutController::class);
    Route::resource('blog', BlogController::class);
    Route::get('status',[BlogController::class, 'CountAll']);
    Route::get('mailbox',[ContactController::class, 'index'])->name('mailbox');
    Route::get('mailbox/show/{id}', [ContactController::class, 'show'])->name('mailshow');
    
});
