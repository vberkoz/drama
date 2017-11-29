
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "main.htm",
    })
    .when("/news", {
        templateUrl : "news.htm",
        controller : "newsCtrl"
    })
    .when("/paris", {
        templateUrl : "paris.htm",
        controller : "parisCtrl"
    });
});

app.controller("newsCtrl", function ($scope) {
    $scope.msg = "I love London";
});

app.controller("parisCtrl", function ($scope) {
    $scope.msg = "I love Paris";
});

app.controller('MyCtrl', function($scope, $location) {
    $scope.isActive = function(route) {
        return route === $location.path();
    }
});
