<?php

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

Route::get('/webhome','Web\WebController@homepage');
Route::get('/who-we-are','Web\WebController@who_we_are');
Route::get('/technology','Web\WebController@technology');
Route::get('/single-service','Web\WebController@view_service');
Route::get('/solution','Web\WebController@solution');
Route::get('/portfolio','Web\WebController@portfolio');
Route::get('/portfolio_category','Web\WebController@portfolio_category');
Route::get('/contact','Web\WebController@contact');
Route::post('/contact/submit','Web\WebController@contact_submit');

Route::get('/admin', function(){
	return view('layouts.masterdashboard');
});

// -------------------------XXX-----------------------

// ===================ADMIN ROUTES=====================
Route::prefix('admin')->group(function () {
   // Homepage
	Route::get('/homepage','Admin\HomepageController@index');
	Route::get('/homepage/create','Admin\HomepageController@create');
	Route::post('/homepage/submit','Admin\HomepageController@submit');
	Route::get('/homepage/edit','Admin\HomepageController@edit');
	Route::post('/homepage/update','Admin\HomepageController@update');

	//Contact
	Route::get('/contact','Admin\HomepageController@show_contact_details');

	//About
	Route::get('/about','Admin\AboutController@index');
	Route::get('/about/edit','Admin\AboutController@edit');
	Route::post('/about/update','Admin\AboutController@update');

	//Footer
	Route::get('/footer','Admin\FooterController@index');
	Route::get('/footer/edit','Admin\FooterController@edit');
	Route::post('/footer/update','Admin\FooterController@update');
	
	// PortfolioCategory
	Route::get('/portfolio_category','Admin\PortfolioCategoryController@index');
	Route::get('/portfolio_category/create','Admin\PortfolioCategoryController@create');
	Route::post('/portfolio_category/submit','Admin\PortfolioCategoryController@submit');
	Route::get('/portfolio_category/edit','Admin\PortfolioCategoryController@edit');
	Route::post('/portfolio_category/update','Admin\PortfolioCategoryController@update');
	Route::get('/portfolio_category/delete', 'Admin\PortfolioCategoryController@delete');

	// Portfolio
	Route::get('/portfolio','Admin\PortfolioController@index');
	Route::get('/portfolio/create','Admin\PortfolioController@create');
	Route::post('/portfolio/submit','Admin\PortfolioController@submit');
	Route::get('/portfolio/edit','Admin\PortfolioController@edit');
	Route::post('/portfolio/update','Admin\PortfolioController@update');
	Route::get('/portfolio/delete', 'Admin\PortfolioController@delete');

	// Service
	Route::get('/service','Admin\ServiceController@index');
	Route::get('/service/create','Admin\ServiceController@create');
	Route::post('/service/submit','Admin\ServiceController@submit');
	Route::get('/service/edit','Admin\ServiceController@edit');
	Route::post('/service/update','Admin\ServiceController@update');
	Route::get('/service/delete', 'Admin\ServiceController@delete');

	// Solution
	Route::get('/solution','Admin\SolutionController@index');
	Route::get('/solution/create','Admin\SolutionController@create');
	Route::post('/solution/submit','Admin\SolutionController@submit');
	Route::get('/solution/edit','Admin\SolutionController@edit');
	Route::post('/solution/update','Admin\SolutionController@update');

	// Sub Service
	Route::get('/sub_service','Admin\SubServiceController@index');
	Route::get('/sub_service/create','Admin\SubServiceController@create');
	Route::post('/sub_service/submit','Admin\SubServiceController@submit');
	Route::get('/sub_service/edit','Admin\SubServiceController@edit');
	Route::post('/sub_service/update','Admin\SubServiceController@update');
	Route::get('/sub_service/delete','Admin\SubServiceController@delete');
	
});

// ========================END========================
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
