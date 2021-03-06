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
            //$('<div class="alert alert-success" role="alert">'+data+'</div>').appendTo($('#contact'));
            //alert(data);
        }).error(function (data, status) {
            //alert(data);
        });
        alert("Your email has been sent and we will serve you ASAP !");
    }
})