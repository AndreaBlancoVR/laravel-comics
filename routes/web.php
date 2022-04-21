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
    $headerMenu = [
        [
            "text" => "Character",
            "href" => "#",
        ],
        [
            "text" => "Comics",
            "href" => "#",
        ],
        [
            "text" => "Movies",
            "href" => "#",
        ],
        [
            "text" => "TV",
            "href" => "#",
        ],
        [
            "text" => "Games",
            "href" => "#",
        ],
        [
            "text" => "Collectibles",
            "href" => "#",
        ],
        [
            "text" => "Videos",
            "href" => "#",
        ],
        [
            "text" => "Fans",
            "href" => "#",
        ],
        [
            "text" => "News",
            "href" => "#",
        ],
        [
            "text" => "Shop",
            "href" => "#",
        ],
    ];
    $mainMenu = [
        [
          "text" => "Digital Comics",
          "href" => "#",
          "image" => "/img/buy-comics-digital-comics.png"
        ],
        [
          "text" => "DC Merchandise",
          "href" => "#",
          "image" => "/img/buy-comics-merchandise.png"
        ],
        [
          "text" => "Subscription",
          "href" => "#",
          "image" => "/img/buy-comics-subscriptions.png"
        ],
        [
          "text" => "Comic Shop Locator",
          "href" => "#",
          "image" => "/img/buy-comics-shop-locator.png"
        ],
        [
          "text" => "DC Power VISA",
          "href" => "#",
          "image" => "/img/buy-dc-power-visa.svg"
        ],
        
    ];
    $UlOne = [
        [
          "text" => "Characters",
          "href" => "#",
        ],
        [
          "text" => "Comics",
          "href" => "#",
        ],
        [
          "text" => "Movies",
          "href" => "#",
        ],
        [
          "text" => "TV",
          "href" => "#",
        ],
        [
          "text" => "Games",
          "href" => "#",
        ],
        [
          "text" => "Videos",
          "href" => "#",
        ],
        [
          "text" => "News",
          "href" => "#",
        ],
        [
          "text" => "DC Shop",
          "href" => "#",
        ],        
    ];
    $UlTwo = [
        [
          "text" => "Shop DC",
          "href" => "#",
        ],
        [
          "text" => "Shop DC Collectibles",
          "href" => "#",
        ],
    ];
    $UlThree = [
        [
          "text" => "Terms of Use",
          "href" => "#",
        ],
        [
          "text" => "Privacy Policy (New)",
          "href" => "#",
        ],
        [
          "text" => "Ad Choices",
          "href" => "#",
        ],
        [
          "text" => "Advertising",
          "href" => "#",
        ],
        [
          "text" => "Jobs",
          "href" => "#",
        ],
        [
          "text" => "Subscriptions",
          "href" => "#",
        ],
        [
          "text" => "CPSC Certificates",
          "href" => "#",
        ],
        [
          "text" => "Ratings",
          "href" => "#",
        ],
        [
          "text" => "Shop Help",
          "href" => "#",
        ],  
        [
          "text" => "Contact Us",
          "href" => "#",
        ],          
    ];
    $UlFour = [
        [
          "text" => "DC",
          "href" => "#",
        ],
        [
          "text" => "MAD Magazine",
          "href" => "#",
        ],
        [
          "text" => "DC Kids",
          "href" => "#",
        ],
        [
          "text" => "DC Universe",
          "href" => "#",
        ],
        [
          "text" => "DC Power Visa",
          "href" => "#",
        ],
    ];
    $UlIcons = [
        [
          "icon" => "/img/footer-facebook.png",
        ],
        [
          "icon" => "/img/footer-twitter.png",
        ],
        [
          "icon" => "/img/footer-youtube.png",
        ],
        [
          "icon" => "/img/footer-pinterest.png",
        ],
        [
          "icon" => "/img/footer-periscope.png",
        ],
    ];

    return view('pages.homepage', [
        'comics' => $comics,
        'headerMenu' => $headerMenu, 
        'mainMenu' => $mainMenu,  
        'UlOne' => $UlOne,
        'UlTwo' => $UlTwo,
        'UlThree' => $UlThree,
        'UlFour' => $UlFour,
        'UlIcons' => $UlIcons,

    ])
    // ->name('home')
    //->with('headerMenu', $headerMenu);
;

});

Route::get('single/{id}', function($id) {

    $comics = config('comics');
    $headerMenu = [
      [
          "text" => "Character",
          "href" => "#",
      ],
      [
          "text" => "Comics",
          "href" => "#",
      ],
      [
          "text" => "Movies",
          "href" => "#",
      ],
      [
          "text" => "TV",
          "href" => "#",
      ],
      [
          "text" => "Games",
          "href" => "#",
      ],
      [
          "text" => "Collectibles",
          "href" => "#",
      ],
      [
          "text" => "Videos",
          "href" => "#",
      ],
      [
          "text" => "Fans",
          "href" => "#",
      ],
      [
          "text" => "News",
          "href" => "#",
      ],
      [
          "text" => "Shop",
          "href" => "#",
      ],
    ];
    $mainMenu = [
        [
          "text" => "Digital Comics",
          "href" => "#",
          "image" => "/img/buy-comics-digital-comics.png"
        ],
        [
          "text" => "DC Merchandise",
          "href" => "#",
          "image" => "/img/buy-comics-merchandise.png"
        ],
        [
          "text" => "Subscription",
          "href" => "#",
          "image" => "/img/buy-comics-subscriptions.png"
        ],
        [
          "text" => "Comic Shop Locator",
          "href" => "#",
          "image" => "/img/buy-comics-shop-locator.png"
        ],
        [
          "text" => "DC Power VISA",
          "href" => "#",
          "image" => "/img/buy-dc-power-visa.svg"
        ],
        
    ];
    $UlOne = [
        [
          "text" => "Characters",
          "href" => "#",
        ],
        [
          "text" => "Comics",
          "href" => "#",
        ],
        [
          "text" => "Movies",
          "href" => "#",
        ],
        [
          "text" => "TV",
          "href" => "#",
        ],
        [
          "text" => "Games",
          "href" => "#",
        ],
        [
          "text" => "Videos",
          "href" => "#",
        ],
        [
          "text" => "News",
          "href" => "#",
        ],
        [
          "text" => "DC Shop",
          "href" => "#",
        ],        
    ];
    $UlTwo = [
      [
        "text" => "Shop DC",
        "href" => "#",
      ],
      [
        "text" => "Shop DC Collectibles",
        "href" => "#",
      ],
    ];
    $UlThree = [
        [
          "text" => "Terms of Use",
          "href" => "#",
        ],
        [
          "text" => "Privacy Policy (New)",
          "href" => "#",
        ],
        [
          "text" => "Ad Choices",
          "href" => "#",
        ],
        [
          "text" => "Advertising",
          "href" => "#",
        ],
        [
          "text" => "Jobs",
          "href" => "#",
        ],
        [
          "text" => "Subscriptions",
          "href" => "#",
        ],
        [
          "text" => "CPSC Certificates",
          "href" => "#",
        ],
        [
          "text" => "Ratings",
          "href" => "#",
        ],
        [
          "text" => "Shop Help",
          "href" => "#",
        ],  
        [
          "text" => "Contact Us",
          "href" => "#",
        ],          
    ];
    $UlFour = [
        [
          "text" => "DC",
          "href" => "#",
        ],
        [
          "text" => "MAD Magazine",
          "href" => "#",
        ],
        [
          "text" => "DC Kids",
          "href" => "#",
        ],
        [
          "text" => "DC Universe",
          "href" => "#",
        ],
        [
          "text" => "DC Power Visa",
          "href" => "#",
        ],
    ];
    $UlIcons = [
        [
          "icon" => "/img/footer-facebook.png",
        ],
        [
          "icon" => "/img/footer-twitter.png",
        ],
        [
          "icon" => "/img/footer-youtube.png",
        ],
        [
          "icon" => "/img/footer-pinterest.png",
        ],
        [
          "icon" => "/img/footer-periscope.png",
        ],
    ];

    abort_if( !isset($comics[ $id ]), 404 );

    // if( isset($comics[ $id ]) ) {
    //     // dd($comics[ $id ]);
    //     return 'Comic n. ' .$id;
    // } 
    // else {
    //     abort(404);
    // }

    $single = $comics[ $id ]; 

    return view('pages.single', [
      'comics' => $comics,
      'headerMenu' => $headerMenu, 
      'mainMenu' => $mainMenu,  
      'UlOne' => $UlOne,
      'UlTwo' => $UlTwo,
      'UlThree' => $UlThree,
      'UlFour' => $UlFour,
      'UlIcons' => $UlIcons,  
      // 'single' => $single,
    ])   
    ->with('single', $single);
  
})->where('id','[0-9]+')->name('comics.show');

Route::get('/shop', function () {
    return view('shop');
});

