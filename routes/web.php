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

    // nav
    $data = [
        'comics' => $comics,

        'links' => $linksNav,
        // /nav


        // footer
        'columns' => $footerData,

        'copyright' => 'All Site TM and c 2020 DC Entertainment, unless otherwise noted here. All rights reserved. Cookies Setting',

        // /footer

        // SignUp
        'socialIcons' => [
            '/img/footer-facebook.png',
            '/img/footer-twitter.png',
            '/img/footer-youtube.png',
            '/img/footer-pinterest.png',
            '/img/footer-periscope.png',
        ],

        // /signUp

        // buy
        'buyLinks' => [
            [
                'image' => '/img/buy-comics-digital-comics.png',
                'title' => 'digital comics'
            ],
            [
                'image' => '/img/buy-comics-merchandise.png',
                'title' => 'dc merchandise'
            ],
            [
                'image' => '/img/buy-comics-subscriptions.png',
                'title' => 'subscription'
            ],
            [
                'image' => '/img/buy-comics-shop-locator.png',
                'title' => 'comic shop locator'
            ],
            [
                'image' => '/img/buy-dc-power-visa.png',
                'title' => 'dc power visa'
            ],

        ],
        // /buy
    ];

    return view('home', $data);
});


Route::get('/single-comic', function () {

    $comics = config('comics');
    $nav = config('nav');
    $footerData = config('footer');

    // nav
    $data = [
        'comics' => $comics,

        'links' => $nav,
        // /nav


        // footer
        'columns' => $footerData,

        'copyright' => 'All Site TM and c 2020 DC Entertainment, unless otherwise noted here. All rights reserved. Cookies Setting',

        // /footer

        // SignUp
        'socialIcons' => [
            '/img/footer-facebook.png',
            '/img/footer-twitter.png',
            '/img/footer-youtube.png',
            '/img/footer-pinterest.png',
            '/img/footer-periscope.png',
        ],

        // /signUp

        // buy
        'buyLinks' => [
            [
                'image' => '/img/buy-comics-digital-comics.png',
                'title' => 'digital comics'
            ],
            [
                'image' => '/img/buy-comics-merchandise.png',
                'title' => 'dc merchandise'
            ],
            [
                'image' => '/img/buy-comics-subscriptions.png',
                'title' => 'subscription'
            ],
            [
                'image' => '/img/buy-comics-shop-locator.png',
                'title' => 'comic shop locator'
            ],
            [
                'image' => '/img/buy-dc-power-visa.png',
                'title' => 'dc power visa'
            ],

        ],
        // /buy
    ];

    return view('single-comic' , $data);
})->name('single-comic');