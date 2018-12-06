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
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li>
                      <a href='{{url("/")}}'>Home</a>
                    </li>
                    <li>
                      <!-- <a href='{{url("/profile")}}'>Profile</a> -->
                        <?php $user = Auth::user(); ?>
                      <a href="/profile/<?php echo $user->id ?>">Profile</a>
                    </li>
                    <li>
                      <a href='{{url("/book")}}'>Booking</a>
                    </li>
                    <li>
                      <a href='{{url("/pricelist")}}'>Price List</a>
                    </li>
                    <li>
                      <a href='{{url("/contact")}}'>Contact</a>
                    </li>
                    @auth
                    <li>
                      <a class="btn btn-danger btn-fill" href='{{url("/logout")}}'>Logout  </a>
                    </li>
                    @endauth
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

      <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover overlay" style="background-image: url(images/service1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <h1 class="mb-5">Photo<br><strong>Studio</strong></h1>
              <p>
                <a href="#" class="btn btn-primary py-3 px-5 rounded-0">Book Now</a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url(images/service2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <h1 class="mb-5">Wedding<br><strong>Ceremony</strong></h1>
              <p>
                <a href="#" class="btn btn-primary py-3 px-5 rounded-0">Book Now</a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url(images/service3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <h1 class="mb-5"><strong>Engagement</strong></h1>
              <p>
                <a href="#" class="btn btn-primary py-3 px-5 rounded-0">Book Now</a>
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>


</div>

 <div class="site-section">

      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-12 text-center">
            <h2 class="font-weight-light text-black display-4">Our Works</h2>
          </div>
        </div>
        <div class="row no-gutters align-items-stretch h-100">
          <div class="col-lg-6">
            <div class="row no-gutters align-items-stretch h-100 half-sm">
              <div class="col-md-6 bg-image bg-sm-height" style="background-image: url('images/works_ayu4.jpg');" data-aos="fade" data-aos-delay="0"></div>
              <div class="col-md-6 bg-image bg-sm-height" style="background-image: url('images/works_ayu3.jpg');" data-aos="fade" data-aos-delay="0"></div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row no-gutters align-items-stretch h-100 half-sm">
              <div class="col-md-6 bg-image order-md-2 order-lg-1 bg-sm-height" style="background-image: url('images/works_ayu2.jpg');" data-aos="fade" data-aos-delay="200"></div>
              <div class="col-md-6 bg-light text order-md-1 order-lg-2">
                <div class="p-4">
                  <h2 class="h5 mb-3 text-black line-height-sm">Engagement</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsum error perspiciatis odit ullam officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, cupiditate officia recusandae velit sint totam.</p>
                  <p class="mb-0"><a href="#" class=""><small class="text-uppercase font-weight-bold text-black">Read More</small></a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="row no-gutters align-items-stretch h-100 half-sm">
              <div class="col-md-6 bg-image order-md-1 order-lg-2 bg-sm-height" style="background-image: url('images/works_studio1.jpg');" data-aos="fade" data-aos-delay="300"></div>
              <div class="col-md-6 bg-image order-md-1 order-lg-2 bg-sm-height" style="background-image: url('images/works_studio2.jpg');" data-aos="fade" data-aos-delay="300"></div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row no-gutters align-items-stretch h-100 half-sm">
              <div class="col-md-6 bg-image order-md-2 bg-sm-height" style="background-image: url('images/works_studio3.jpg');" data-aos="fade" data-aos-delay="400"></div>
              <div class="col-md-6 bg-light text order-md-1">
                <div class="p-4">
                  <h2 class="h5 mb-3 text-black line-height-sm">Photo Studio</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ipsum error perspiciatis odit ullam officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ullam est alias minus, expedita autem.</p>
                  <p class="mb-0"><a href="#" class=""><small class="text-uppercase font-weight-bold text-black">Read More</small></a></p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

    <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover overlay" style="background-image: url(images/ps_header1a.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <h2 class="mb-5"></h2>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="slide-one-item home-slider owl-carousel">

<div class="site-blocks-cover overlay" style="background-image: url(images/aboutus.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-10">
        <h1 class="mb-5"><strong>About Us<br></strong></h1>
        <h3>Magnam iure fugit recusandae nobis a amet, officiis laboriosam repudiandae? Quis nostrum numquam ducimus Magnam iure fugit recusandae nobis a amet, officiis laboriosam repudiandae? Quis nostrum numquam ducimus Magnam iure fugit recusandae nobis a amet, officiis laboriosam repudiandae? Quis nostrum numquam ducimus</h3>
      </div>
    </div>
  </div>
</div>

</div>




    <div class="promo py-5 bg-primary" data-aos="fade">
      <div class="container text-center">
        <h2 class="d-block mb-0 font-weight-light text-white"><a href="#" class="text-white d-block">Contact us for quotations</a></h2>
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">


        <div class="row">
          <div class="col-lg-7">
            <div class="row">
              <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Company</h3>
                <ul class="list-unstyled">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Approach</a></li>
                  <li><a href="#">Sustainability</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Navigations</h3>
                <ul class="list-unstyled">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Approach</a></li>
                  <li><a href="#">Sustainability</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-4 col-lg-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Quick Menu</h3>
                <ul class="list-unstyled">
                  <li><a href="#">About</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Approach</a></li>
                  <li><a href="#">Sustainability</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="row mb-5">
              <div class="col-md-12"><h3 class="footer-heading mb-4">Europe</h3></div>
              <div class="col-md-6">
                <p>London - 2398 <br> 10 Japson Street</p>
              </div>
              <div class="col-md-6">
                Tel. + (123) 3240-345-9348 <br>
                Mail. europe@youdomain.com
              </div>
            </div>

            <div class="row">
              <div class="col-md-12"><h3 class="footer-heading mb-4">USA</h3></div>
              <div class="col-md-6">
                <p>New York - 2398 <br> 10 Hadson Carl Street</p>
              </div>
              <div class="col-md-6">
                Tel. + (123) 3240-345-9348 <br>
                Mail. usa@youdomain.com
              </div>
            </div>

          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>
  <div class="site-navbar-wrap bg-white">
      <div class="site-navbar-top">
        <div class="container py-2">
          <div class="row align-items-center">
            <div class="col-6">
              <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
            </div>
            <div class="col-6">
              <div class="d-flex ml-auto">
                <a href="#" class="d-flex align-items-center ml-auto mr-4">
                  <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">youremail@domain.com</span>
                </a>
                <a href="#" class="d-flex align-items-center">
                  <span class="icon-envelope mr-2"></span>
                  <span class="d-none d-md-inline-block">+1 291 2830 302</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  </body>
</html
