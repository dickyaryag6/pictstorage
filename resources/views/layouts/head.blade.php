<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PictStorage  </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">


    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->



      <div class="site-navbar bg-light">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-2" style="#">
              <h2 class="mb-0 site-logo">

                <a href='{{url("/")}}'> <img src="images/navbar_logo.png" alt="" class="img-fluid" ></a>
              </h2>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  @guest
                  <a href='{{url("/login")}}' class="btn btn-danger btn-fill">Login</a>
                  <a href='{{url("/register")}}' class="btn btn-danger btn-fill">Register</a>
                  @endguest
                  @auth
                      <a class="btn btn-danger btn-fill" href='{{url("/logout")}}'>Logout  </a>
                  @endauth
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li>
                      <a href='{{url("/")}}'>Home</a>
                    </li>
                    @auth
                    <li>
                      <!-- <a href='{{url("/profile")}}'>Profile</a> -->
                        <?php $user = Auth::user(); ?>
                      <!-- <a href='/pictstorage/public/profile/<?php echo $user->id ?>'>Profile</a> -->
                      <a href='{{url("/profile")}}/<?php echo $user->id ?>'>Profile</a>
                    </li>
                    @endauth
                    <li>
                      <a href='{{url("/book")}}'>Booking</a>
                    </li>
                    <li>
                      <a href='{{url("/pricelist")}}'>Price List</a>
                    </li>
                    <li>
                      <a href='{{url("/contact")}}'>Contact</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>