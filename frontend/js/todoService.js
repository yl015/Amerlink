var app = angular.module('todoService', []);

app.factory('TodoService', ['$http', function($http) {
	var api_v1 = 'api/v1/';
	return {
		add: function (task) {
			var model = {
				task: task,
				status: 'pending'
			}
			return $http.post(api_v1+'todos', model);
		},
		getAllCompletedTodos: function() {
			return $http.get(api_v1+'todos/completed');
		},
		getActiveTodos: function () {
			return $http.get(api_v1+'todos/active');
		},
		get: function () {
			return $http.get(api_v1+'todos');
		},
		update: function(id, status, task) {
			var model = {
				task: task,
				status: status
			}
			return $http.put(api_v1+'todos/'+id, model);
		}
	};
}]);