(function(){
  var app = angular.module("MyApp", []);
  app.controller("MainCtrl", function($scope, $http) {
      $scope.items = "";
      
      var getItems = function() {
      $http.get("items.json")
        .then(function(response) {
            var data = response.data.data;
            
            //var pos = data.lastIndexOf("</pre>");
            //var jsonData = data.substring(pos);
            //var json = JSON.parse(jsonData);
            $scope.items = data;
          
        });
    };
    getItems();
  });
}());