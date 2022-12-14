<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Partners</title>
     <!-- BootStrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
    
</body>
</html>