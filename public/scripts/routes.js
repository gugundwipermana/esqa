var esqaApp = angular.module('Client', ['ngResource', 'ngRoute', 'slick', 'ngSanitize'])
    .config(function($routeProvider) {
        $routeProvider
        .when('/', {
            templateUrl: 'views/main/index.html',
            controller: 'IndexController'
        })
        //-----------------------------------------------------------------------------------
        .when('/shop', {
            templateUrl: 'views/shop/index.html',
            controller: 'ShopController'
        })
        .when('/shop/category/:slug', {
            templateUrl: 'views/shop/category.html',
            controller: 'ShopCategoryController'
        })
        .when('/shop/product/:slug', {
            templateUrl: 'views/shop/detail.html',
            controller: 'ShopDetailController'
        })
        //-----------------------------------------------------------------------------------
        .when('/article/:slug', {
            templateUrl: 'views/article/detail.html',
            controller: 'ArticleDetailController'
        })
        //-----------------------------------------------------------------------------------
        .when('/cart', {
            templateUrl: 'views/cart/index.html',
            controller: 'CartController'
        })
        .when('/cart/login', {
            templateUrl: 'views/cart/login.html',
            controller: 'CartController'
        })
        .when('/cart/address', {
            templateUrl: 'views/cart/address.html',
            controller: 'CartController'
        })
        .when('/cart/payment', {
            templateUrl: 'views/cart/payment.html',
            controller: 'CartController'
        })
        .when('/cart/ordersuccess', {
            templateUrl: 'views/cart/ordersuccess.html',
            controller: 'CartController'
        })
        .when('/cart/paymentconf', {
            templateUrl: 'views/cart/paymentconf.html',
            controller: 'CartController'
        })
        //-----------------------------------------------------------------------------------
        .when('/about', {
            templateUrl: 'views/about/index.html',
            controller: 'AboutController'
        })
        .when('/contact', {
            templateUrl: 'views/contact/index.html',
            controller: 'ContactController'
        })
        //-----------------------------------------------------------------------------------
        .when('/auth', {
            templateUrl: 'views/auth/index.html',
            controller: 'AuthController'
        })
        .when('/register', {
            templateUrl: 'views/auth/register.html',
            controller: 'AuthController'
        })
        .when('/profile', {
            templateUrl: 'views/auth/profile.html',
            controller: 'AuthController'
        })
        .when('/forgetpassword', {
            templateUrl: 'views/auth/forgetpassword.html',
            controller: 'AuthController'
        })
        .when('/changepassword', {
            templateUrl: 'views/auth/changepassword.html',
            controller: 'AuthController'
        })
        .when('/confirmpayment', {
            templateUrl: 'views/auth/confirmpayment.html',
            controller: 'AuthController'
        })

        .otherwise({
            redirectTo: '/'
        });
    });




    // INSTAGRAM
    esqaApp.factory('instagram', ['$http', function($http) {
            return {
                fetchPopular: function(callback) {

                    var endPoint = "https://api.instagram.com/v1/media/popular?client_id=642176ece1e7445e99244cec26f4de1f&callback=JSON_CALLBACK";

                    $http.jsonp(endPoint).success(function(response) {
                        callback(response.data);
                    });
                }
            }
        }
    ]);

    // CART
    esqaApp.factory("DataService", function() {
        var myCart = new shoppingCart("AngularStore");

        return {
            cart: myCart
        };
    });

    // FORMAT TANGGAL
    esqaApp.filter('formatDate', function(dateFilter) {
       var formattedDate = '';
       return function(dt) {
         console.log(new Date(dt.split('-').join('/'))); 
         formattedDate = dateFilter(new Date(dt.split('-').join('/')), 'MMMM d, y');   
         return formattedDate;
       }
    }); 