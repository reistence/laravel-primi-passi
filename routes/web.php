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
    $data = [
        "jumbotronImg" => "https://cloudonhire.com/wp-content/uploads/2020/01/Laravel_Framework-copy.png",
        "navLink" => [ 
           ["link"=> "home",
            "text"=> "Home"],
            
           [ "link"=> "highlights", 
            "text" =>"Highlights"],

          [ "link"=>"resources",
          "text"=> "Resources"],

          [ "link"=>"ecosystem",
          "text"=>"Ecosystem"],

          [ "link"=>"partners",
          "text"=>"Partners"] ],
        "sections" => [
            ["title" => "Write code for the joy of it.",
            "text" => "Laravel values beauty. We love clean code just as much as you do. Simple, elegant syntax puts amazing functionality at your fingertips. Every feature has been thoughtfully considered to provide a wonderful developer experience."]
            ,
              ["title" => "Monolith or API — the choice is yours.",
            "text" => "Build robust, full-stack applications in PHP using Laravel and Livewire. Love JavaScript? Build a monolithic React or Vue driven frontend by pairing Laravel with Inertia.Or, let Laravel serve as a robust backend API for your Next.js application, mobile application, or other frontend. Either way, our starter kits will have you productive in minutes."],
             ["title" => "Everything you need to be amazing",
            "text" => "Our vast library of meticulously maintained packages means you're ready for anything. Let Laravel Octane supercharge your application's performance, and experience infinite scale on Laravel Vapor, our serverless deployment platform powered by AWS Lambda."],
            ["title" => "Move fast...with confidence.",
            "text" => "Laravel is committed to delivering the best testing experience you can imagine. No more brittle tests that are a nightmare to maintain. Beautiful testing APIs, database seeding, and painless browser testing let you ship with confidence."]
            ],
        
    ];

    return view('home', $data);
})->name("home");

Route::get('/highlights', function(){
    $data = [
         "navLink" => [ 
           ["link"=> "home",
            "text"=> "Home"],
            
           [ "link"=> "highlights", 
            "text" =>"Highlights"],

          [ "link"=>"resources",
          "text"=> "Resources"],

          [ "link"=>"ecosystem",
          "text"=>"Ecosystem"],

          [ "link"=>"partners",
          "text"=>"Partners"] ],

        
          "teamTitle" => "The Laravel Team",
          "teamText" => "Laravel is a team of passionate developers from all around the world. We love building tools that make your life as a developer enjoyable, fun, and fulfilling. Follow us on Twitter and GitHub to keep up with what we're working on!",

          "members" =>[
            ["name"=> "Taylor Otwell",
            "img"=> "https://unavatar.io/github/taylorotwell",
            "country" => "United States"],
            ["name"=> "Dries Vints",
            "img"=> "https://unavatar.io/github/driesvints",
            "country" => "Belgium"],
            ["name"=> "James Brooks",
            "img"=> "https://unavatar.io/github/jamesbrooks",
            "country" => "United States"],
            ["name"=> "Nuno Maduro",
            "img"=> "https://unavatar.io/github/nunomaduro",
            "country" => "Portugal"],


          ]
    ];
    return view('highlights', $data);
})->name("highlights");

Route::get('/resources', function(){
    $data = [
         "navLink" => [ 
           ["link"=> "home",
            "text"=> "Home"],
            
           [ "link"=> "highlights", 
            "text" =>"Highlights"],

          [ "link"=>"resources",
          "text"=> "Resources"],

          [ "link"=>"ecosystem",
          "text"=>"Ecosystem"],

          [ "link"=>"partners",
          "text"=>"Partners"] ],
    ];
    return view('resources', $data);
})->name("resources");

Route::get('/ecosystem', function(){
    $data = [
         "navLink" => [ 
           ["link"=> "home",
            "text"=> "Home"],
            
           [ "link"=> "highlights", 
            "text" =>"Highlights"],

          [ "link"=>"resources",
          "text"=> "Resources"],

          [ "link"=>"ecosystem",
          "text"=>"Ecosystem"],

          [ "link"=>"partners",
          "text"=>"Partners"] ],
    ];
    return view('ecosystem', $data);
})->name("ecosystem");

Route::get('/partners', function(){
    $data = [
         "navLink" => [ 
           ["link"=> "home",
            "text"=> "Home"],
            
           [ "link"=> "highlights", 
            "text" =>"Highlights"],

          [ "link"=>"resources",
          "text"=> "Resources"],

          [ "link"=>"ecosystem",
          "text"=>"Ecosystem"],

          [ "link"=>"partners",
          "text"=>"Partners"] ],
    ];
    return view('partners', $data);
})->name("partners");






