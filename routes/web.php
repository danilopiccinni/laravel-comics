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

    $comics = config('comics');
    $linksNav = config('nav');
    $footerData = config('footer');
    $signUpData = config('signUp');
    $buyData = config('buy');


    $data = [
        'comics' => $comics,
        
        // nav
        'links' => $linksNav,
        // /nav


        // footer
        'columns' => $footerData,
        'copyright' => 'All Site TM and c 2020 DC Entertainment, unless otherwise noted here. All rights reserved. Cookies Setting',
        // /footer

        // SignUp
        'socialIcons' => $signUpData,
        // /signUp

        // buy
        'buyLinks' => $buyData,
        // /buy
    ];

    return view('home', $data);
});


Route::get('/single-comic', function () {

    $comics = config('comics');
    $nav = config('nav');
    $footerData = config('footer');
    $signUpData = config('signUp');

    $data = [
        'comics' => $comics,
        
        // nav
        'links' => $nav,
        // /nav

        // footer
        'columns' => $footerData,
        'copyright' => 'All Site TM and c 2020 DC Entertainment, unless otherwise noted here. All rights reserved. Cookies Setting',
        // /footer

        // SignUp
        'socialIcons' => $signUpData,
        // /signUp

    ];


    

    return view('single-comic' , $data);
})->name('single-comic');