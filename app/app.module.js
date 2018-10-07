'use strict';


angular.module('home', ['newsList','menuList','bannerList']);

//var app = angular.module('home', []);
//
//app.controller('menuController', function ($scope, $http) {
//    $http.get('http://localhost/web_balai/data/rest_menu')
//            .then(function (myData) {
//                $scope.menuData = myData.data;
//            });
//
//});
//
//app.controller('newsController', function ($scope, $http) {
//    $http.get('http://localhost/web_balai/admin/berita_rest')
//            .then(function (myData) {
//                console.log(myData);
//                $scope.newsData = myData.data;
//            });
//
//});
