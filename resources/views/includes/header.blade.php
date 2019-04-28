<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- icofont -->
    <link rel="stylesheet" href="{{ asset('vendor/icofont/icofont.min.css')}}">

    <!-- owl-carousel -->
    <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/owlcarousel/owl.theme.default.min.css')}}">

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    <title>Mobel Design Studio</title>
  </head>
  <body>
    
     <div class="top-section">
        <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <span>100% furniture made to measure without surcharge</span>
              </div>
              <div class="col-lg-6 d-flex justify-content-lg-end">
                  <ul class="userlogin">
                      <li><a href="/login">login</a></li>
                      <li><a href="/register">Register</a></li>
                   
                  </ul>
              </div>
          </div>
        </div>
     </div><!-- ./top-section --> 


     <header id="header">
          <nav class="navbar navbar-expand-lg navbar-light mds-navbar">
            <div class="container">
                <a class="navbar-brand" href="/home">Mobel Design Studio</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mds" aria-controls="mds" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mds">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Promotion</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" id="show-search"><i class="icofont-search"></i></a>
                    </li>
                    <li class="nav-item cart-menu">
                      <a class="nav-link" href="#" id="show-cart"><i class="icofont-shopping-cart"></i></a>
                      <div class="cart-box">

                            <ul class="cart-list">
                                <li><a href="#"><img src="img/face.png">  Item Name   <span>$100</span></a></li>
                               <li><a href="#"><img src="img/face.png">  Item Name   <span>$100</span></a></li>
                               <li><a href="#"><img src="img/face.png">  Item Name   <span>$100</span></a></li>
                            </ul><!-- ./cart-list -->

                            <ul class="cart-action list-unstyled mt-3">
                                <li><a href="#" class="btn btn-main btn-sm">Checkout</a> <span>   $3000</span></li>
                            </ul><!-- ./cart-action -->


                      </div><!-- ./cart-box -->
                    </li>                 
                  </ul>
                </div>
              </div>
            </nav>

            

     </header><!-- ./header -->



     <section id="search">
         <div class="container">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
              </div>
            </div>
         </div> 
     </section><!-- ./ search--> 