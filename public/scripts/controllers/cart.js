esqaApp
    .controller('CartController', function($scope, DataService, $http, $location) {
        $scope.cart = DataService.cart;

        $scope.saveOrder = function() {

            var dataOrder = {
                code: 'ESQA'+Date.now()+Math.floor((Math.random() * 100) + 1),
                address: 'Kuningan',
                status: '0'
            }
            console.log(dataOrder);

            var retrievedObject = localStorage.getItem('AngularStore_items');
            console.log(JSON.parse(retrievedObject));
            var dataOrderDet = JSON.parse(retrievedObject);

            $http({
                method: 'POST',
                url: 'api/v1/orders',
                headers: {
                    'Content-Type': 'application/json'
                },
                data: dataOrder
            }).success(function(data) {
                console.log('save order success'); 
            }).error(function(){
                console.log('save order field');
            });
            
            //-------------------------------------------------
            $http({
                method: 'POST',
                url: 'api/v1/orderdetails',
                headers: {
                    'Content-Type': 'application/json'
                },
                data: dataOrderDet
            }).success(function(data) {
                console.log(data);
                console.log('save orderdet success'); 
            }).error(function(data){
                console.log(data);
                console.log('save orderdet field');
            });


            DataService.cart.clearItems();

            $location.path('/cart/ordersuccess');
        }

    })
    .controller('CartInjectController', function($scope, DataService) {
        $scope.cart = DataService.cart;
    });