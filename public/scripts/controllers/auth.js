esqaApp
    .controller('AuthController', function($scope, $location, $http, $window) {

        if ($window.sessionStorage.getItem('token')) {            
            $location.path('/cart/address');
        }

        $scope.signin = function(loginForm) {
            var formData = {
                email: $scope.email,
                password: $scope.password
            };

            console.log(formData);

            $http({
                header: {
                    'Content-Type': 'application/json'
                },
                url: 'api/authenticate', 
                method: "POST",
                data: formData
            }).success(function (data) {
                // Stores the token until the user closes the browser window.
                $window.sessionStorage.setItem('token', data.token);
                //$location.path('/');
                //this.document.location.href = 'http://localhost/WEB/ESQA/public';

                window.location.reload();

            }).error(function () {
                $window.sessionStorage.removeItem('token');
                // TODO: Show something like "Username or password invalid."
            });
        };

        
    })
    .controller('AuthInjectController', function($scope, $http) {
        $http.get('api/v1/users/getUser')
        .success(function(data, status, headers, config) {
            if(data) {
                $scope.user = data;
            } else {
                $scope.user = '';
            }
            
            console.log(data);
        });
    });