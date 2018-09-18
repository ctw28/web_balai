<html>
    <head>
        <title>BWS SULAWESI IV KENDARI</title>
    </head>
    <body ng-app="menu" ng-controller="menuController">
        <ul>
            <li ng-repeat="menu in menuData">{{menu.nama_menu}}
                <ul>
                    <li ng-repeat="submenu in menu.sub_menu">{{submenu.nama_sub}}</li>
                </ul>
            </li>
        </ul>    
        <script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js'></script>
    
    <script>
        var app = angular.module('menu', []);
        
        app.controller('menuController', function($scope, $http){
            $http.get('http://localhost/web_balai/index.php/data/rest_menu')
                    .then(function(myData){
                        console.log(myData);
                        $scope.menuData = myData.data;
                    });
            
        });
        
        
    </script>
    </body>
</html>

<!--<div ng-repeat="(key, value) in travelSchedules">
    <h1>{{key}}</h1>
    <table>
      <tr ng-repeat="row in value">
        ...
      </tr>
    </table>
</div>-->