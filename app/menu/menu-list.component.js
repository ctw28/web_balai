'use strict';

angular.module('menuList').
        component('menuList',{
            template :'<ul>' +
            '<li ng-repeat="menu in $ctrl.menuData">{{menu.nama_menu}}'+
                '<ul>'+
                    '<li ng-repeat="submenu in menu.sub_menu">{{submenu.nama_sub}}</li>'+
                '</ul>'+
            '</li>'+
        '</ul>',
            controller : ['$http',function menuController($http){
                var self = this;
                $http.get('http://localhost/web_balai/data/rest_menu')
                        .then(function (myData) {
                            self.menuData = myData.data;
                        });
            }]
        }
        );



