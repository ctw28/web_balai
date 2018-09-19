'use strict';

angular.module('newsList')
       .component('newsList', {
            templateUrl: 'app/berita/berita-list.template.html',
            controller: ['$http', function newsController($http) {
                var self = this;
                $http.get('http://localhost/web_balai/admin/berita_rest')
                     .then(function (myData) {
                        self.newsData = myData.data;
                     });
        }]
});