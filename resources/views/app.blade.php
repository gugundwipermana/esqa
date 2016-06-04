<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ESQA</title>

    <!-- CSS -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
    <link href="{{ asset('bower_components/slick-carousel/slick/slick.css') }}" rel="stylesheet">

    <link href="{{ asset('bower_components/angular-bootstrap/ui-bootstrap-csp.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    
    <!-- AngularJS -->
    <script src="{{ asset('bower_components/angular/angular.min.js') }}"></script>
    <script src="{{ asset('bower_components/angular-resource/angular-resource.min.js') }}"></script>
    <script src="{{ asset('bower_components/angular-route/angular-route.min.js') }}"></script>
    <script src="{{ asset('bower_components/angular-sanitize/angular-sanitize.min.js') }}"></script>
    <script src="{{ asset('js/angular-locale_id-id.js') }}"></script>


    <script src="{{ asset('scripts/routes.js') }}"></script>

    <script src="{{ asset('scripts/controllers/about.js') }}"></script>
    <script src="{{ asset('scripts/controllers/contact.js') }}"></script>
    <script src="{{ asset('scripts/controllers/main.js') }}"></script>
    <script src="{{ asset('scripts/controllers/shop.js') }}"></script>
    <script src="{{ asset('scripts/controllers/cart.js') }}"></script>
    <script src="{{ asset('scripts/controllers/article.js') }}"></script>

    <script src="{{ asset('scripts/shoppingCart.js') }}" type="text/javascript"></script>


</head>
<body ng-app="Client">

    <div class="logo">
        <a class="navbar-brand page-scroll" href="#page-top"><img src="{{ asset('img/logo.png') }}" height="30" style="margin:5px 0 5px 10px;"></a>
    </div>

    <div class="account" ng-controller = "CartInjectController">
        <a href="#/auth">LOGIN | SIGNUP</a>
        <a href="" id="show-cart"><img src="{{ asset('img/cart.png') }}" width="25"></a>
        
        <p class="cart-amount" ng-if="cart.getTotalCount() > 0"><a href="">@{{cart.getTotalCount()}}</a></p>

    </div>

    <div class="sosial">
        <a href="#"><i class="ion-social-facebook"></i></a>
        <a href="#"><i class="ion-social-instagram-outline"></i></a>
        <a href="#"><i class="ion-social-twitter"></i></a>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-costum" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <!--  <a class="navbar-brand" href="/">
                   <img src="{{ asset('img/logo.png') }}" height="40">
               </a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li>
                        <a href="#shop">Shop</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="" style="font-style: italic; font-size:16px; pointer-events: none; cursor: default;">Blog</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div ng-include="'views/partials/box-cart.html'"></div>

    <div ng-view></div>


    <!-- Javascript -->
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('bower_components/slick-carousel/slick/slick.js') }}"></script>
    <script src="{{ asset('bower_components/angular-slick/dist/slick.min.js') }}"></script>

    <script src="{{ asset('bower_components/angular-animate/angular-animate.min.js') }}"></script>
    <script src="{{ asset('bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js') }}"></script>


    <script>
        /*
         * --------------------------------------------
         * SHOW HIDE CART
         *---------------------------------------------
         */
        $('#show-cart').click(function() {
            if($('.cart-box.active').is(":visible")) {
                $(".cart-box").removeClass("active");
            } else {
                $(".cart-box").addClass("active");
            }
        });

    </script>

</body>
</html>