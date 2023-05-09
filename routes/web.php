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

    // nav
    $data = [
        'comics' => $comics,

        'links' => [
            'characters',
            'comics',
            'movies',
            'tv',
            'games',
            'collectibles',
            'videos',
            'fans',
            'news',
            'shop',
        ],
        // /nav


        // footer
        'columns' => [
            [
                'head' => 'dc comics',

                'links' => [
                    'Characters',
                    'Comics',
                    'Movies',
                    'TV',
                    'Games',
                    'Videos',
                    'News',
                ]
            ],

            [
                'head' => 'shop',

                'links' => [
                    'Shop DC',
                    'Shop DC Collectibles',
                ]
            ],

            [
                'head' => 'dc',

                'links' => [
                    'Therms Of Use',
                    'Privacy policy (New)',
                    'Ad Choices',
                    'Advertising',
                    'Jobs',
                    'Subscriptions',
                    'Talent Workshop',
                    'CPSC Certificares',
                    'Ratings',
                    'Shop Help',
                    'Contact Us',
                ]
            ],

            [
                'head' => 'sites',

                'links' => [
                    'DC',
                    'MAD Magazine',
                    'DC Kids',
                    'DC Universe',
                    'DC Power Visa',
                ]
            ]
        ],
        
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
