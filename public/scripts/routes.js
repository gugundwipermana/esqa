var esqaApp = angular.module('Client', ['ngResource', 'ngRoute', 'slick'])
    .config(function($routeProvider) {
        $routeProvider
        .when('/', {
            templateUrl: 'views/main/index.html',
            controller: 'IndexController'
        })
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
        .when('/cart', {
            templateUrl: 'views/cart/index.html',
            controller: 'CartController'
        })
        .when('/cart/login', {
            templateUrl: 'views/cart/login.html',
            controller: 'CartLoginController'
        })
        .when('/cart/address', {
            templateUrl: 'views/cart/address.html',
            controller: 'CartAddressController'
        })
        .when('/cart/payment', {
            templateUrl: 'views/cart/payment.html',
            controller: 'CartPaymentController'
        })
        .when('/about', {
            templateUrl: 'views/about/index.html',
            controller: 'AboutController'
        })
        .when('/contact', {
            templateUrl: 'views/contact/index.html',
            controller: 'ContactController'
        })
        .when('/auth', {
            templateUrl: 'views/auth/index.html',
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

                    /*var endPoint = "https://api.instagram.com/v1/media/popular?client_id=642176ece1e7445e99244cec26f4de1f&callback=JSON_CALLBACK";

                    $http.jsonp(endPoint).success(function(response) {
                        callback(response.data);
                    });*/
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

    esqaApp.controller('CartInjectController', function($scope, DataService) {
        $scope.cart = DataService.cart;
    });