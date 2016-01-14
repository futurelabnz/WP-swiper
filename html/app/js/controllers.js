var pagesControllers = angular.module('pagesControllers', []);
var pageLoadController = angular.module('pageLoadController', []);

pagesControllers.controller('pagesCtrl', ['$scope', '$http',
  function ($scope, $http) {
    current_pages = swiper.getCurrentPages();

    $scope.goLeft = function () {
      console.log(swiper.getCurrentPages());
    };
    $scope.goRight = function () {
      swiper.getCurrentPages();
    };

    $scope.orderProp = 'age';
  }]);

pageLoadController.controller('pageLoadCtrl', ['$scope', '$http',
  function ($scope, $http) {
    current_pages = swiper.getCurrentPages();

    $scope.goLeft = function () {
      console.log(swiper.getCurrentPages());
    };
    $scope.goRight = function () {
      swiper.getCurrentPages();
    };

    $scope.orderProp = 'age';
  }]);