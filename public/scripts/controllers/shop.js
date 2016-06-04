esqaApp
    .controller('ShopController', function() {
        
    })
    .controller('ShopCategoryController', function ($scope, $routeParams, $http, DataService) {
        $scope.cart = DataService.cart;

        $http.get('api/v1/products').
        success(function(data, status, headers, config) {
            $scope.products = data;
        });

        $scope.getProduct = function(slug) {
            $http.get('api/v1/products/'+slug).
            success(function(data, status, headers, config) {
                $scope.detproducts = data;
            });

            $http.get('api/v1/products/vote/'+slug).
            success(function(data, status, headers, config) {
                $scope.vote = data;
            });
        }
    })
    .controller('ShopDetailController', function ($scope, $routeParams, $http, DataService) {
        $scope.cart = DataService.cart;

        $http.get('api/v1/products/'+$routeParams.slug)
        .success(function(data, status, headers, config) {
            $scope.detproducts = data;
        });

        $http.get('api/v1/products/vote/'+$routeParams.slug).
            success(function(data, status, headers, config) {
                $scope.vote = data;
            });

        $http.get('api/v1/products/relateds')
        .success(function(data, status, headers, config) {
            $scope.relatedproducts = data;
        });

    });