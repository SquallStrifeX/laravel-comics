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
}) ->name('home');


Route::get('/comics', function(){
    $links = config('links.links');
    $footer_lists = config('footer_list');
    $socials = config('footer_social');
    $comics = config('comics');
    return view(('comics'), compact('links', 'footer_lists', 'socials', 'comics'));
}) -> name('comics');


Route::get('/comics/comics_product/{param}', function ($param) {
    // RECUPERO GLI ARRAY DALLA CARTELLA CONFIG
    $links = config('links.links');
    $footer_lists = config('footer_list');
    $socials = config('footer_social');
    $comics = config('comics');

    // DEFINISCO LA VARIABILIE CHE CONTERRà L'OGGETTO FILTRATO
    $single_comic = NULL;

    // FILTRO L'ARRAY PER OTTENERE L'OGGETTO A CUI L'ID CORRISPONDE AL PARAMETRO PASSATO DA comics.blade.php
    foreach ($comics as $item) {
        if ($item['id'] == $param) {
            $single_comic = $item;
        };
    };

    // E LI INSERISCO PASSANDOLI CON LA FUNZIONE compact()
    return view('comics_product', compact('links', 'footer_lists', 'socials', 'comics', 'single_comic'));
})->name('comics_product');
