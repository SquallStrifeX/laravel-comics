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
    $links = config('links.links');
    $footer_lists = config('footer_list');
    $socials = config('footer_social');
    return view(('home'), compact('links', 'footer_lists', 'socials'));
});


Route::get('/comics,' function()){

}
