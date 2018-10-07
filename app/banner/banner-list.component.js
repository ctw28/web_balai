'use strict';
angular.module('bannerList')
       .component('bannerList', {
            templateUrl: 'app/banner/banner-list.template.html',
            controller: ['$http', function bannerController($http) {
                var self = this;
                $http.get('http://localhost/web_balai/data/banner_rest')
                     .then(function (myData) {
                        self.bannerData = myData.data;
                     });
        }]
});