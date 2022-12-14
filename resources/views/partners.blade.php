<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Partners</title>
     <!-- BootStrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box
        }

        img{
            max-width: 100%;
        }

        header{
        height: 90px;
        }

        header nav{
            height: 100%
        }

        .navbar-brand{
            width: 3em;
            height: 100%;
            align-self: center;
        }

         .jumbo{
            width: 50%;
            margin: 2em 0;
        }

        .jumbo h2{
            color: #ef3b2d;
        }

        .card{
            min-height: 495px
        }
        </style>
</head>
<body>
     <header>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="https://asset.brandfetch.io/ide68-31CH/idlxAUbIOo.jpeg" alt="Laravel Logo" srcset="">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @foreach ($navLink as $link)
                        <li class="nav-item">
                        <a class="nav-link"  href="{{route($link["link"])}}">{{$link["text"]}}</a>
                        </li>
                            
                        @endforeach
                      
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-danger" type="submit">Search</button>
                    </form>
                </div>
                </div>
             </nav>
    </header>
    <div class="container">
        <div class="jumbo">
            <h2>{{$partnersTitle}}</h2>
            <p>{{$partnersText}}</p>
        </div>
         <div class="row row-cols-3 g-2">
            @foreach ($partners as $partner)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$partner["name"]}}</h5>
                        <p class="card-text"><i class="fa-solid fa-earth-europe"></i> {{$partner["country"]}}</p>
                        <p class="card-text">{{$partner["txt"]}}</p>
                        
                        <img src="{{$partner["img"]}}" class="card-img-top" alt="...">
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
    
</body>
</html>