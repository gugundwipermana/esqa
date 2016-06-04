esqaApp
    .controller('ArticleDetailController', function($scope, $routeParams, $http) {
        $http.get('api/v1/infos/'+$routeParams.slug)
        .success(function(data, status, headers, config) {
            $scope.info = data;
        });

        $http.get('api/v1/infos').
        success(function(data, status, headers, config) {
            $scope.infos = data;
        });
    });