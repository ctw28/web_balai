'use strict';

angular.module('menuList').
        component('menuList',{
            templateUrl :'app/menu/menu-list.template.html',
            controller : ['$http',function menuController($http){
                var self = this;
                $http.get('http://localhost/web_balai/data/rest_menu')
                        .then(function (myData) {
                            self.menuData = myData.data;
                        });
            }]
        }
        );



