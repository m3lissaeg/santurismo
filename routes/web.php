<?php

use Illuminate\Support\Facades\Route;
use App\Article;
use App\Bird;
use App\Guide;

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
    
    $articles = Article::all();
    $birds = Bird::all();
    $guides = Guide::all();
    return view('welcome')->with([
        'articles'=> $articles,
        'birds'=> $birds,
        'guides'=> $guides
    ]) ;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', 'HomeController@create')->name('create');
Route::post('/store', 'HomeController@store')->name('store');
Route::delete('/destroy/{id}', 'HomeController@destroy')->name('destroy');
