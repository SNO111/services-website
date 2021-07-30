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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\StatisticsController;
use App\Http\Controllers\PortfolioController;
use Spatie\Analytics\Period;

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

Route::get('/',[LandingPageController::class, 'indexpage'])->name('home');
Route::get('/home', [LandingPageController::class, 'indexpage'])->name('home');

Route::get('/contact', [ContactController::class,'createForm'])->name('contact');
Route::post('/contact', [ContactController::class,'ContactUsForm'])->name('contact.store');

Route::get('/services', [ServiceController::class,'frontIndex'])->name('services');
Route::get('/portfolio',[PortfolioController::class, 'Portfolio'])->name('portfolio');
Route::get('/pricing', function () {
    return view('front.pricing');
})->name('pricing');
Route::get('/about-us', [AboutController::class, 'LandingAboutindex'])->name('about-us');
Route::get('/blog', [BlogController::class, 'allPost'])->name('blog');
Route::get('article/{id}', [BlogController::class, 'show'])->name('single-article');
Route::get('/privacy-policy', function () {
    return view('front.privacy_policy');
})->name('privacy-policy');
Route::get('/help-center', function () {
    return view('front.helpcenter');
})->name('help-center');
Route::get('/sitemap', function () {
    return view('front.sitemap');
})->name('sitemap');


Auth::routes();
    Route::get('dashboard', [HomeController::class, 'Counter']);
    Route::get('dashboard', [HomeController::class, 'latest_added']);
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
    Route::resource('admin/blog', BlogController::class);
    Route::get('status',[BlogController::class, 'CountAll']);
    Route::get('mailbox',[ContactController::class, 'index'])->name('mailbox');
    Route::get('mailbox/show/{id}',[ContactController::class, 'show'])->name('mailshow');
   
    Route::get('/data', function ()
    {
        $analyticsData = Analytics::fetchMostVisitedPages(Period::days(7));
        dd(print_r($analyticsData));

    });
    Route::get('/statistics', [HomeController::class, 'latest_added'])->name('statistics');
    Route::resource('landing', LandingPageController::class);
    Route::get('admin/stats', [StatisticsController::class, 'index'])->name('stats');
    Route::get('admin/stats/edit/{id}', [StatisticsController::class, 'edit'])->name('statsedit');
    Route::patch('admin/stats/update/{id}', [StatisticsController::class, 'update'])->name('statsupdate');

    Route::resource('admin/portfolio', PortfolioController::class);
    Route::get('portfolio/show/{id}', [PortfolioController::class, 'show'])->name('portfolio_projecr');


});
