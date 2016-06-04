esqaApp.controller('AboutController', function($scope, $http) {
        $http.get('api/v1/abouts')
        .success(function(data, status, headers, config) {
            $scope.about = data;
        });
    });