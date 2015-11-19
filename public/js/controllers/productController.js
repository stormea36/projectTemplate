/**
 * Created by admin on 10/28/15.
 */
$(document).ready(function() {
    $.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
    });

})
productApp.controller('ProductController',
    function ProductController($scope, $http, RefreshData) {
        var base_url = "http://sierrapn:8888";

        $scope.info = {
            name: 'Sierra Patient Network',
            times: [
                {
                    'Monday': '9am - 8pm',
                    'Tuesday': '9am - 8pm',
                    'Wednesday': '9am - 8pm',
                    'Thursday': '9am - 8pm',
                    'Friday': '9am - 8pm',
                    'Saturday': '9am - 8pm',
                    'Sunday': '9am - 8pm'
                }
            ]
        }

        $scope.qtySort = "gram";

        //
        //This stuff down here is more for data management
        //

        $http.get( "/inventory.json").success(function(data) {
            $scope.items = data;
        }).error(function () {
            console.log('error loading data');
        })
        $scope.test = [];
        RefreshData.getInventory()
            .success(function(arrItems) {
                $scope.test = arrItems;
        });

        $scope.newProduct = {
            "name" : "",
            "description" : "",
            "type": "",
            "active" : "",
            "price":""

        }
        $scope.priceFormat = 1;
        $scope.switchPrice = function() {
            $scope.priceFormat === 1? $scope.priceFormat=2:$scope.priceFormat=1;
        }
        $scope.priceValue = [
            {
                "value":""
            },
            {
                "gram": "",
                "eighth": "",
                "quarter": "",
                "half": "",
                "oz": ""
            }
        ];

        $scope.save = function() {
            RefreshData.checkInventory($scope.newProduct.name, $scope.newProduct, base_url);
        }

    });


