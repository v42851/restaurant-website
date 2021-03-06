<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<!-- 

Grill Template 

http://www.templatemo.com/free-website-templates/417-grill

-->
<head>
    <meta charset="utf-8">
    <title>Tash Res</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ asset('restaurant/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('restaurant/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('restaurant/css/templatemo_style.css') }}">
    <link rel="stylesheet" href="{{ asset('restaurant/css/templatemo_misc.css') }}">
    <link rel="stylesheet" href="{{ asset('restaurant/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('restaurant/css/testimonails-slider.css') }}">

    <script src="{{ asset('restaurant/js/vendor/modernizr-2.6.1-respond-1.1.0.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('admins/bower_components/toastr/build/toastr.min.css') }}">
</head>
<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <header>
        <div id="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="home-account">
                            <a href="{{ route('restaurant.home') }}">Home</a>
                            <a href="{{ route('admin.login') }}">Login</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cart-info">
                            <a href="{{ route('restaurant.booking.list') }}" >
                                <i class="fa fa-shopping-cart" style="height: 25px"></i>
                                (<span class="total-items">@yield('items')</span> items)
                            </a>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="#"><img src="{{ asset('restaurant/images/logo.png') }}" title="Grill Template" alt="Grill Website Template" ></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="main-menu">
                            <ul>
                                <li><a href="{{ route('restaurant.home') }}">Home</a></li>                                
                                <li><a href="{{ route('restaurant.food') }}">Food</a></li>
                                <li><a href="{{ route('restaurant.drink') }}">Drinks</a></li>
                                <li><a href="{{ route('restaurant.booking') }}">Booking</a></li>
                                <li><a href="{{ route('restaurant.aboutUs') }}">About</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="search-box">  
                            <form name="search_form" method="get" class="search_form">
                                <input id="search" type="text" />
                                <input type="submit" id="search-button" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    {{-- Index  --}}
    @yield('slider')

    @yield('content')
    

    <footer>
        <div class="container">
            <div class="top-footer">
                <div class="row">
                    <div class="col-md-9">
                        <div class="subscribe-form">
                            <span>Get in touch with us</span>
                            <form method="get" class="subscribeForm">
                                <input id="subscribe" type="text" />
                                <input type="submit" id="submitButton" />
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="social-bottom">
                            <span>Follow us:</span>
                            <ul>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-rss"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-footer">
                <div class="row">
                    <div class="col-md-3">
                        <div class="about">
                            <h4 class="footer-title">About Tash Res</h4>
                            <p>Tash Res is project in subject Technology and Online Service (IT4409) taught by <span class="blue">Dr. Do Ba</span><span class="green">Lam</span> and it is the first project we wrote in PHP language, combine with Ajax, JavaScript,....
                                <br><br>Credit goes to <a rel="nofollow" href="http://unsplash.com">Unsplash</a> for photos used in this template...
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="shop-list">
                            <h4 class="footer-title">Res Categories</h4>
                            <ul>
                                <li><a href="{{ route('restaurant.food') }}"><i class="fa fa-angle-right"></i>Foody</a></li>
                                <li><a href="{{ route('restaurant.drink') }}"><i class="fa fa-angle-right"></i>Drinks</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="recent-posts">
                            <h4 class="footer-title">Recent posts</h4>
                            <div class="recent-post">
                                <div class="recent-post-thumb">
                                    <img src="{{ asset('restaurant/images/recent-post1.jpg') }}" alt="">
                                </div>
                                <div class="recent-post-info">
                                    <h6><a href="#">Delicious and Healthy Menus</a></h6>
                                    <span>24/12/2084</span>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-thumb">
                                    <img src="{{ asset('restaurant/images/recent-post2.jpg') }}" alt="">
                                </div>
                                <div class="recent-post-info">
                                    <h6><a href="#">Simple and effective meals</a></h6>
                                    <span>18/12/2084</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="more-info">
                            <h4 class="footer-title">More info</h4>
                            <p>Tashres.com </p>
                            <ul>
                                <li><i class="fa fa-phone"></i>+84 86.860.33.96</li>
                                <li><i class="fa fa-globe"></i>Number 1 Dai Co Viet, Hai Ba Trung, Hanoi</li>
                                <li><i class="fa fa-envelope"></i><a href="#">anguyen.hust@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer">
                <p>
                 <span>Copyright © 2018 <a href="#">Tash Res</a> 
                    | Design: <a rel="nofollow" href="http://www.templatemo.com" target="_parent"><span class="blue">Tash</span><span class="green"></span></a></span>
                </p>
            </div>

        </div>
    </footer>


    <script src="{{ asset('restaurant/js/vendor/jquery-1.11.0.min.js') }}"></script>
    <!-- jQuery 3 -->
    <script src="{{ asset('admins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('admins/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('restaurant/js/vendor/jquery.gmap3.min.js') }}"></script>
    <script src="{{ asset('restaurant/js/plugins.js') }}"></script>
    <script src="{{ asset('restaurant/js/main.js') }}"></script>
    <script src="{{ asset('admins/bower_components/toastr/toastr.js') }}"></script>
    @yield('js.section')
    <script >
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": false,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
      }
  </script>
</body>
</html>