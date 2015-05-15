var app = angular.module('app', []);

app.controller('MainCtrl', function ($scope, $http) {
    $scope.formData = {};
    $scope.submitContact = function() {
        $http({
            method: 'POST',
            url: emailUrl,
            data    : $.param($scope.formData),  // pass in data as strings
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
        }).success(function (data, status) {
            alert(data);
        }).error(function (data, status) {
            alert(data);
        });
    }
})