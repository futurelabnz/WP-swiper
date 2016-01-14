(function () {
  var app = angular.module('swiper', ['ngTouch', 'ngRoute', 'pagesControllers', 'pageLoadController']);

  app.config(['$routeProvider',
    function ($routeProvider) {
      $routeProvider.
        when('/', {
          templateUrl: 'app/partials/pagecontainer.html',
          controller: 'pagesCtrl'
        }).
        otherwise({
          redirectTo: '/'
        });
    }]);
})();
