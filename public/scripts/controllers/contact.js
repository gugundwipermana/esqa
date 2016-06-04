esqaApp
    .controller('ContactController', function($scope, $http) {
        $http.get('api/v1/contacts')
        .success(function(data, status, headers, config) {
            $scope.contact = data;
        });
    })