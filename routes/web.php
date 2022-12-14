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


          [ "link"=>"partners",
          "text"=>"Partners"]
         ],

         "resources"=>[
          [
             "name"=>"Forge",
              "txt"=>"Server management doesn't have to be a nightmare. Provision and deploy unlimited PHP applications on DigitalOcean, Linode, Vultr, Amazon, Hetzner and more.",
              "img"=>"data:image/png;base64,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"
          ],
          [
             "name"=>"Vapor",
              "txt"=>"Laravel Vapor is a serverless deployment platform for Laravel, powered by AWS. Launch your Laravel infrastructure on Vapor and fall in love with the scalable simplicity of serverless.",
              "img"=>"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQsAAAC8CAMAAABYM3sZAAAAflBMVEX///8lxPKn5/r9/v/T8/zP8vyR4fgAwPGt6fpp0vVDyvMAwfHX9f3b9v06yPNQzfTZ8vzo9/3v+v6P2/fK7fuk4fi66Pp41faD2Pb2/P6Y3vhk0PW/6vrI7fvV8fzm9/2e5Pmu5PmI3fiP4Ph82veJ2feh4Pi66/qA3Pdw1/a86stNAAAOFElEQVR4nNWde2PTOgzF11L6WNKWe8fY2APG2AX6/b/g7Xutf5IsO3Eazr8wy5VPbEknVq6utvh8v7wugNntv1ft4fvDclAAi7svp0YWk6qElcGgmjy05or7UpMcVINPByOfJoVsbO08tuSKZSlPbDD5vDPytaSRtTNuWnHFf2VnOfm6tXJf1spg0sae8U9J7q5R3W3NFLYyqO5b8MVd4QUbTD6srXwrbaUNYvxbesEG1WbH+FLcF9V/jX1R+jleT3JzsD4VN3PYmPLxtTgtBtXTVeETdW+n6VFy08F6bUOM4mb2G1M+PpRfrsFga+lXeadXzaLPhw5meNuZ16tGvijviuMEu3N7Hm47JG4Hu/T+ccxDB7N7P+kY69/NMvGoGKt+ZLvih0aLZe4kZ4twdu8HHaK66lvuxHU+Z/tCXcz8DDic5GkAhLBuefUhC/o2V33Rp2ZCj4vXIUHeJMMN8ixjAjEm37LMWNvcItMXIZ9P8Ji5YqDFWcJ0144Za5vbBrnpsFKEyfecWWLB9vn6Ad9BjBz+6dvcBnnEMGix3uKzfCG49Ayz8D/McnxhzXswec5wxWfzvJ/8kz5LLtgssIkMLYN/sfT/OsMXduW7yiAGafEpNBoGBhlmbD5vN+RUfIuEgetdL3WSWDAezbCabCZeCVm2TIttmSjVF+GCkRY0uz50G1oBJLMm4rWVydfESWLBpAXCLrUOxpKsPIcDXK/CmadGinhw3xA9P6StGGnxWTJ8HZq5SfMF/v51iKAmjRg46QfT13DIKs0VXDDR8hOIkWQFG85iOkWmFh5fNsIIsFpNpyDGr5QVw4JpB30j/nG/eR0OX0CM77JpEdSHhsPhG4iRMklsBFoAiNMmwYywzU2HwykcdKfYloCMcbUZMjRT3SbMEvNRE4MGZoRtbr2IAjH8uhErCZsRSYyBf5J8jlXrTCe8ZmRaSMTwC4qoMM12Q4aGqh/uWWLBjEJCthnkMztaSMTw6kaoPO5oMZyucldMWDDDPssPPjPS6befOYjhFRRRkX7cDzkMTa1XN3PBzMIjdk+fGcjg1eow8XEmMVBwqV6GB2KEzlj4JokFs5UK6EYuM4IMPjxgihDMpxthJsvpcczQ2DpIcC1YOBNbqGD568lhRj799vjJSNHjC5UWa/ei2HLtmSTClZiAhafUYUY7/TRi/HK4AjvXCS2GjO0/O2YZLliUoNi9HWYog89OJ84UwuGLQfg341P3ghjxur1Q347yE6d63Ix2+h1mjtg+Ligi0jmjhXBSR+v2+GGOFyFIjJgZ4/RTiBHXjcI/qH6euxdJX7Ruz9/lOM+wD0bNGNvcbub4ZTFBEZnR9bl3BWJE6vZ4jl0BMJ8r24x5+u0gpBA28FS9BiMihIvW7fMSI+hGthnr9FOJYQuKKLgsQu8KxDDlASyYM2GmbmTJA5HTL4sYQoUM7hWqASkLtnadCwjbLTP26acRY2IJitSH6F0htjfq9lwwb4GNupFuJnb67X2B3NLSjbDkfziimPT5F8xfX0Oar8sDsdPvAExGLD9vQX1I8K4Q2+vyABfMX5CnbqTJA/HT70CM8PfpupFcIeOQ/rq9QzbUAf5pZuKnn0oMTVBUKmQeYmiuwIKlCHiCbiRbgY7A02+/ikIKIQM790ob0lu3pz6UJOwKRQfRiuP0O8CpG7FCpo4oJH3ygqVs3ASiHVGeEuQGZQ0lYsj7Fy6KaLSQkz4XLRJfBHGZIS2k028Pn25klkKixJDKs0IUm+YK4f0BmvGefvtVdAmKyAxn1pBYMaFuzwVLfnEsnLhghseNfPqpxGAcHCmFhHDoRn7ZUAffNwrN+E+//So6BEVUyB7tIcMJsG7PBct40TRqhkGRvs0pxAjzZtICOW+EGGHdXniO010RFRQFWtjzdgiKqJBJyY1JjLBuzwXLejEdp/e5Gb4GGaGFQzeKl0JCXwhJn71geTdZkOee8U+QGyLzlohxY1uM0WIoJn3WguVeZDFVCAZF1um3h5BCNKKFnPSdTDJRNtTBp/fdTFpQdJy5KSi6SiGAJQ9QNsy9+GbJA2lB0REUFE/sDcJ/k0shgXuF2F5/jvMvRPK0P5hJP/32Mzd0I2cpBNDlAcqG+RdlSYyDmdSg6AhDUISbPLSQiHGo2wvyRoML1HwQ9mYyaSGnEDsgA9Jz3nNISd/OF5ANm3RcoGN3ZtKDoiNUQdFdIYN7tdf6SetGDRdwcO7NZJx+h5njN+/yA4c+pEGK7aUFS3qhkqButJGnHLKhDkU3SimFhO5VXuvP1Yc0IG7bmGFQ5NvmdjMPXbGtJySVQkJILwsKC5b2AjYh6UYMipyn3w5CbilU3s1SSOheqW7PsDnl/WsR2JhuMoOi95mHfz55Ti2FhJCSPiQ3zZtbkRgfEBT5t7mtL4TcMrUUEg4pxPbweOpFHgHg30P26XdAOM2K79gmjojYfsDkprkrWC+E2TRaSLklhkyjhUAMDJlx8U8AzIRWX9PmPSQxgOQRGcIFyLkQSiAKCpBKCymFCODKec+HjN0HzbkoLMA2k3T6HWCvoqcUEiJCjNzOAiEi906T1zBKjHRaxIiR2VhAgGnlLWPijBTPhnQnN6cwidEWLSJt6nLmLQiKJ3CWQsIhDWJkNyIRYFhJPf32MIiRRwsp6XtHe64QdKMj8uYtvKx6RELOez6k7t38xkUCVF+spplQiVG95A6pEqNZp7MQah+c/B7R6iq2PmSjRmcCYmFdn9EuLTrpU1cKDRsjEp20jSyDhg0zBXTQTrQMWurJfYpOGhiWQOMGuwLKtx8uglY6coco35a6CFrp1A4Ub1deAg31IQ2l29gXQVN9SEOsGtVHNNWHNPC19d6juT6kwSo69BNtffyE6KDFfLtoQx/SUOR7QQXRhj6kgWr4IhdGzp49ZjhSO/qQBuiWP+d1FuZqcb36Pc+E0LujJKgbjT5modb34ev5KAs1aNGSPqSBXcaznDH6rW/D1e86yxWgRXtCgAxSO8sXtRW3LbOIAVq0pw9p4EXIHGeYGu0khxg1ismlaSHpRnXLtFhHSBnEmCvvBxYFqPiSQQw75Z08JROjFlrGlQd0o0UyMepY+j9LJgZp0ao+pAHEuE0mRqwSMnlOJEaNFWpbCJDB+0aJxKgt5XOHVSIx5ggCW9aHNPAWTSIx4ApspdXHNFpML0MLqU9dEjFGeFNi8YKn/S6JGHO+bNiRL6AbVT9SiDECCd7GeOUziRg1otj29SEN0I2WCcQQaDEej/nOaAIxSIv29SENvJjx208M0mK19gWJ0YgWBfQhDWxg6CbGiCnUeAN46NV9rM6FXkfdgfeN3MRgCrXa+oIdjb2+qNnwvog+pAGB46OTGCO+jzMey8T46XTGXOiN1iV48fPJR4wahbjV3hdM13y7Z42ct5Q+pIEXIV3EGDGFGo81Yry4iDHHm/al9CENvIj2nEeL2dEXcO/CRQxEseX0IQ2oV945iDHii+DjsU6MWwcx5ty6unaF0FjCQYwaSsDsxBdwr4cYpEVBfUgDu99EiTFCCnVKizFujVXDKDHmwqccuwd0oypOC+huj2e+ADEc8kCZ+0OpQMngPkIMCgHVzzNfsCPENEKMOZKbsvqQBl5ES6bFcnwO/ocIMTrXhzQwtzTjrSgtBGJE5IEaGXN5IUAG8gBbN6JsGNJCIIYtD1xAH9LA7h2GMwRavMIXePxNeaB72VAHdSPDF9SHSAuBGJY8QFp0oA9pwFwMQZEtQf8IvvgDYujyQI1OBl3oQxoSdKMaKdS14IrxmJGpSowL6UMaQAxVUHxG7CDRQiKGVgW+jGyow60bUTaUaUFiqPIAadGRPqSBKYRCDPzHN8UX/OChTIwaOW9X+pAGbF+yblQjhVoorhDkgXuRGJQNu9KHNFA3konhpoVEDJEWyHm704c0IAqWiCHrQ25iSPLAJfUhDezANiUxZH1Ig0ceuKw+pMGhG414Wc1whUCMBziDtOhSH9Lg0I3SaCERI9w9BVp0qg9p4IevAmJQNrRpIVSBQ2JQNuxWH9JA3SggBlKos4qvSIzwD4IqsCAbdqwPacCHr86JocuGCcQ4140gG3auD2mgbnQmKFr6kIaIbkTZsHN9SAO/mnBCDEs2TCDGjxNiUDbsXh/SwD51zxYtHuOuIDFO5YFe6EMaUI16140oG6Li6yPGuzxA2fAS+pAG6kZHYlA2lEp7BAvFc50WF9GHNLD95p4YI76Q66IFBcWjPEDZ8DL6kAZVN4rrQxp03Ygl0Uv//HMogqJDH9JA3WgnD9TMeS/94wMgEKwa0kLVjXqkD2kQBUWXPuQnxkYe6I9sqEPUjSgbahVfFzE28kCv9CENmOPNaMQnRxYCZFBQ/CjIhpcVAmSwT11N2TCFFiRGdTefw+UX1Yc0YJYPlA31iq8E6EYVc95LCwEyqBshmbcqvhL46clL3R9KRfTmVCItBGJwyEv/aAWUvRvSQlCaQ1dcWh/SgA87hBO3K74SYrf0Lq8PaYg0MEynBeWBwLuX14c02H3qMmgRI0Yf9CEN0I3OkOEKmxi90Ic0mH3q4hVfCdSNTmjRC31Ig9XAMMsVFjF6og9pMIiRRwuLGH3RhzQg1GxKizHuNL9799I/NgK1T91imQvNF/3RhzR018CwP/qQhs761PVJH9LQVQPDPulDGtinrgj6pQ9p6KaBYb/0IQ3QjUqgb/qQhljRoQ30TwiQEfvwVQvonz6kIfJ9rRbwt9Ai8n2jNtBHfUhDYVf0Uh/SUHjH+FsOkR0eSjpj0t8qp4gvk1J7RjXppWpo4evtY4njZPF4W6ze+z+kp48kwkoxTAAAAABJRU5ErkJggg=="
          ],
           [
             "name"=>"Breeze",
              "txt"=>"Lightweight starter kit scaffolding for new applications with Blade or Inertia.",
              "img"=>"data:image/png;base64,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"
           ],
           [
             "name"=>"Cashier",
              "txt"=>"Take the pain out of managing subscriptions on Stripe or Paddle.",
              "img"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqxxw9uHHfKT_H-TV5ahzlHf6D1BbeHnlFEA&usqp=CAU"
           ],
           [
             "name"=>"Dusk",
              "txt"=>"Automated browser testing to ship your application with confidence.",
              "img"=>"data:image/jpeg;base64,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"
           ],
            [
             "name"=>"Echo",
              "txt"=>"Listen for WebSocket events broadcast by your Laravel application.",
              "img"=>"data:image/png;base64,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"
          ]

         ]

  
    ];
    return view('resources', $data);
})->name("resources");


Route::get('/partners', function(){
    $data = [
         "navLink" => [ 
           ["link"=> "home",
            "text"=> "Home"],
            
           [ "link"=> "highlights", 
            "text" =>"Highlights"],

          [ "link"=>"resources",
          "text"=> "Resources"],


          [ "link"=>"partners",
          "text"=>"Partners"] ],

          "partnersTitle"=>"Hire a Laravel Partner",
          "partnersText"=>"Find a Laravel-endorsed development partner to help with your next project. Find an expert based on your needs and reach out to start a conversation.",


          "partners"=>[
            [
              "name"=>"byte5",
              "country"=>"Europe",
              "txt"=>"byte5 is a web technology company based in Frankfurt, Germany. For over 10 years we have been specializing on innovative open source technologies that give our expert team all the opportunities to create great web applications, sites and shops for our international clients.",
              "img"=>"https://partners.laravel.com/assets/partners/images/byte5.jpg"
            ],
            [
              "name"=>"Codona",
              "country"=>"Europe",
              "txt"=>"We create webapps and business apps in our digital product studio. We do this by enhancing your digital strategy, strong technical development and actively coaching your app launch. From Belgium, we work for customers throughout Europe.",
              "img"=>"https://partners.laravel.com/assets/partners/images/codana.png"
            ],
            [
              "name"=>"Kirshbaum",
              "country"=>"North America",
              "txt"=>"We are a team of carefully curated Laravel experts with a history of delivering practical and efficient solutions to complex problems. We bring products and services to market quickly by leveraging iterative processes and lean development techniques.",
              "img"=>"https://partners.laravel.com/assets/partners/images/kirschbaum.png"
            ],
            [
              "name"=>"Vehikl",
              "country"=>"North America",
              "txt"=>"Vehikl is a team of code-crushing Laravel experts. Over the years we have built a variety of web applications for customers using Laravel as our framework of choice and implemented Lean Agile development techniques to build professional applications that are functional and easy to use.",
              "img"=>"https://partners.laravel.com/assets/partners/images/vehikl.png"
            ],

            [
              "name"=>"Cyber Duck",
              "country"=>"Europe",
              "txt"=>"Our Laravel development services have been trusted by global brands for over 10+ years such as Cancer Research, Eurofighter Typhoon and Cabot Financial. We have produced game changing applications through service design underpinned by a user centred approach and an astute knowledge of Laravel and Vue.js.",
              "img"=>"https://partners.laravel.com/assets/partners/images/cyber-duck2.jpg"
            ]


          ]
    ];
    return view('partners', $data);
})->name("partners");






