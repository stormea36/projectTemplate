/**
 * Created by admin on 11/5/15.
 */
productApp.factory('RefreshData', function($http) {

    this.getInventory = function(){
        return $http.get( "/test.json")
            .success(function(response) {
                console.log(response);
                return response.data;
            });
    }



    this.checkInventory = function(val, object, url) {
        return $http.get( "/test.json")
            .success(function(data) {
                var duplicate = false;
                for(item in data) {
                    if(data[item].name === val) {
                        console.log('this name already exists!');
                        duplicate = true;
                        break;
                    }
                }
                if (duplicate != true) {
                    //data does not exist
                    console.log('no data so all good');
                    $http.post(url+'/ajax/save', object).then(function() {
                        window.location.reload(true);
                    });
                }
            }
        )
        //@TODO add logic for searching through the name values to compare to the 'val' given
    }

    return this;
});