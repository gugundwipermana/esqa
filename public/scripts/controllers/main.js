esqaApp
  .controller('IndexController', function($scope, $interval, instagram, $http, $timeout, $routeParams, DataService) {
    $scope.cart = DataService.cart;

      // INFO
      $http.get('api/v1/infos').
        success(function(data, status, headers, config) {
          $timeout(function() {
            $scope.infos = data;
          }, 1000);
        });

      // TOP SELLERS
      $http.get('api/v1/products').
        success(function(data, status, headers, config) {
          $timeout(function() {
            $scope.topsellers = data;
          }, 1000);
        });


      // responsive slick
        $scope.breakpoints = [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          }, {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ];

        // INSTAGRAM
        $scope.pics = [];
        $scope.have = [];
        $scope.orderBy = "-likes.count";
        $scope.getMore = function() {
            instagram.fetchPopular(function(data) {
                //for(var i=0; i<data.length; i++) {
                for(var i=0; i<8; i++) {
                  if (typeof $scope.have[data[i].id]==="undefined") {
                    $scope.pics.push(data[i]) ;
                    $scope.have[data[i].id] = "1";
                  }
                }
            });
          };
        $scope.getMore();
        
    });