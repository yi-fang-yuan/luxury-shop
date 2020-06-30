<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{url('/css/main.css')}}">
    </head>
    <body>
    <div>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark ">
            <a class="navbar-brand ml-70" href="/">YiYi Luxury</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav  ml-5" >
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('shop.index')}}">SHOP <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('cart.index')}}">CART <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--        slide-->
        <div class="bg-dark">
            <div id="carouselExampleIndicators" class="carousel slide pb-5" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner flex justify-content-center">
                    <div class="carousel-item active justify-content-center" >
                        <img class="d-block mx-auto img-fluid"  src="image/gucci.jpg" alt="First slide">

                    </div>
                    <div class="carousel-item">
                        <img class="d-block mx-auto img-fluid" src="image/prada.png" alt="Second slide">
                    </div>
                    <div class="carousel-item justify-content-center">
                        <img class="d-block mx-auto img-fluid" src="image/Dolce.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!--        slide-->
        <div class="container mt-5">
            <h3 class="font-weight-bold text-center">Pick Your Poison</h3>
            <div class="container mt-5">
                <div class="card-deck">
                    <div class="card">
                        <a href="{{route('shop.index',['category'=> 1])}}"><img class="card-img-top" src="image/gucciWallet.jpg" alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="text-center font-weight-bold">Gucci</p>
                        </div>
                    </div>
                    <div class="card">
                        <a href="{{route('shop.index',['category'=> 2])}}"><img class="card-img-top " src="image/pradaBag.png" alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="text-center font-weight-bold">Prada</p>
                        </div>
                    </div>
                    <div class="card">
                        <a href="{{route('shop.index',['category'=> 3])}}"><img class="card-img-top" src="image/hermesBelt.jpg" alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="text-center font-weight-bold">Hermes</p>
                        </div>
                    </div>
                    <div class="card">
                        <a href="{{route('shop.index',['category'=> 4])}}"><img class="card-img-top" src="image/DolceRing.jpg" alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="text-center font-weight-bold">Dolce & Gabbana</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <footer class="mt-5">
            <div class="bg-dark text-light">
                <div class="footer-copyright text-center py-3  ">© 2020 Copyright:
                    Yi Fang Yuan
                </div>
            </div>
        </footer>
    </div>
{{--    Bootstrap Config--}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
