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

    <title>Admin : Mobel Design Studio</title>
  </head>
  <body>
    
     <div class="top-section">
        <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <span>Welcome <strong>John Doe</strong> to admin page</span>
              </div>
              <div class="col-lg-6 d-flex justify-content-lg-end">
                  <ul class="userlogin">
                      <li><a href="/home">logout?</a></li>                 
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
                      <a class="nav-link" href="/products">Products</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/orders">Orders</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/messages">Messages</a>
                    </li>
                                    
                  </ul>
                </div>
              </div>
            </nav>

            

     </header><!-- ./header -->

