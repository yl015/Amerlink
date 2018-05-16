var app = angular.module('mainApp', ['mainRoutes', 'todoService', 'ngAnimate', 'toastr', 'ui.bootstrap']);


app.controller('mainController', ['$scope', '$http', 'toastr', 'TodoService', function($scope, $http, toastr, TodoService) {
    $scope.lists = [];
    $scope.completedTodos = [];
    $scope.allTodos = [];

    var initializeTodos = function() {  
        TodoService.getActiveTodos().success(function (data) {
            $scope.lists = data;
            $scope.anyActiveTodos = $scope.lists.length;
        });
        TodoService.get().success(function (data) {
            $scope.allTodos = data;
        });
        TodoService.getAllCompletedTodos().success(function (data) {
            $scope.completedTodos = data;
        });
    }

    initializeTodos();

    $scope.addTodos = function () {
        var input = $scope.myinput;

        TodoService.add(input).success(function (data) {
            $scope.myinput = "";
            toastr.success('Successfully added!', 'Success');
            $scope.anyActiveTodos = true;
            
            initializeTodos();
            $scope.lists.push({
                id: data.id,
                task: input,
                status: 'pending'
            });     
        }).error(function () {
            toastr.error('Failed');
        });
    }

    $scope.done = function (list) {
        console.log('task done!');
        console.log(list.status);

        var todoIndex = $scope.lists.indexOf(list);

        TodoService.update(list.id, 'complete', list.task).success(function() {
            $scope.anyActiveTodos = $scope.lists.length;

            initializeTodos();
            toastr.success('Task completed');
        });

    }

    $scope.showDone = function (list) {
        if (list.status == 'complete') {
            return true;
        } else if (list.status == 'pending') {
            return false;
        }
    }

}]);