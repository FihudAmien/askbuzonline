<?php

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

Route::get('/','HomeController@index')
    ->name('home');

Route::get('/BussinesAnalysisContact','PageBaController@index')
    ->name('pageBa');

Route::get('/UiUXDesign','PageSbController@index')
    ->name('pageSb');

Route::get('/ITDevelopment','PageGbController@index')
    ->name('pageGb');

Route::get('/AboutUs','PageaboutusController@index')
    ->name('pageaboutus');

Route::get('/Articlemore','PagearticleusController@index')
    ->name('pagearticleus');

Route::get('/ArticleDetail/{id}','ShowarticleController@index')
    ->name('showarticle');

Route::get('home_packages', 'HomePackagesController@index');
Route::get('about_packages', 'AboutPackagesController@index');
Route::get('contact_packages', 'ContactPackagesController@index');
Route::get('article_packages', 'ArticlePackagesController@index');
Route::get('contactui_packages', 'ContactuiPackagesController@index');
Route::get('contactit_packages', 'ContactitPackagesController@index');
Route::get('aboutus_packages', 'AboutusPackagesController@index');
Route::get('bussines_analysis', 'BussinesAnalysisController@index');
Route::get('uiux_design', 'UiuxDesignController@index');
Route::get('it-development','ItDevelopmentController@index');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(@function(){
        Route::get('/','DashboardController@index')
            ->name('dashboard');

        
        Route::resource('home-packages','HomePackagesController');
        Route::resource('about-packages','AboutPackagesController');
        Route::resource('contact-packages','ContactPackagesController');
        Route::resource('article-packages','ArticlePackagesController');
        Route::resource('contactui-packages','ContactuiPackagesController');
        Route::resource('contactit-packages','ContactitPackagesController');
        Route::resource('aboutus-packages','AboutusPackagesController');
        Route::resource('bussines-analysis','BussinesAnalysisController');
        Route::resource('uiux-design','UiuxDesignController');
        Route::resource('it-development','ItDevelopmentController');
    });

Auth::routes(['verify'=> true]);

