esqaApp
    .controller('ShopController', function() {
        
    })
    .controller('ShopCategoryController', function ($scope, $routeParams, $http, DataService) {
        $scope.cart = DataService.cart;

        $http.get('json/products.json').
        success(function(data, status, headers, config) {
            $scope.products = data;
        });

        $scope.getProduct = function(slug) {
            $http.get('json/'+slug+'.json').
            success(function(data, status, headers, config) {
                $scope.detproducts = data;
            });
        }
    })
    .controller('ShopDetailController', function ($scope, $routeParams, $http, DataService) {
        $scope.cart = DataService.cart;

        $http.get('json/'+$routeParams.slug+'.json').
        success(function(data, status, headers, config) {
            $scope.detproducts = data;
        });

        $http.get('json/relatedproducts.json').
        success(function(data, status, headers, config) {
            $scope.relatedproducts = data;
        });

    });