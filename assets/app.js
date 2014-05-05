var app = angular.module('myApp', ['ngRoute', 'ui.bootstrap', 'checklist-model']);
app.config(function($routeProvider) {
  $routeProvider
    .when('/task', {
      controller:'TaskInputCtrl',
      templateUrl: 'page/task'
    })
    .when('/reports', {
      controller:'ReportCtrl',
      templateUrl:'page/reports'
    })
    .when('/projects', {
      controller:'ProjectsCtrl',
      templateUrl:'page/projects'
    })
    .when('/users', {
      controller:'UsersCtrl',
      templateUrl:'page/users'
    })
    .otherwise({
      redirectTo:'/task'
    });
});

// Example {{items | total:'price'}}
app.filter("total", function() {
    return function(items, field) {
    	if(typeof items == 'undefined') {
    		return 0;
    	}
		var total = 0, i = 0;
		for (i = 0; i < items.length; i++) total += parseFloat(items[i][field]);
		return total;
    }
});
app.controller('NavCtrl', function($scope, $http, $location) {

	// Load the menu
	$http.get('api/menu').
		success(function(data) {
			$scope.menu = data;
		});

	$scope.isActive = function(path) {
		path = path.replace('#', '');

		if ($location.path().search(path) > -1) {
	    	return true;
	    } 
	    else {
	    	return false;
	    }
	}
});
app.controller('TaskInputCtrl', function($scope, $http, $filter) {
	var loadTasks = function() {
		var filters = {
			startDate : $scope.date,
			endDate : $scope.date
		};
		$http.get('api/my_tasks/?' + $.param(filters)).
			success(function(data) {
				$scope.tasks = data;
			});
	}
	$scope.date = $filter('date')(Date.now(), 'yyyy-MM-dd');
	
	$scope.$watch('date', function(newValue, oldValue) {
 		if(newValue != oldValue) {
 			loadTasks();
 		}
	});
	

	$scope.projects = [];
	$scope.tasks = [];

	// Load the projects
	$http.get('api/projects').
		success(function(data) {
			$scope.projects = data;
			$scope.project = $scope.projects[0].id;
	});

	// Load the tasks
	loadTasks();

	$scope.deleteTask = function(taskID) {
		// Delete the tasks
		$http.delete('api/task/' + taskID);

		// Remove the deleted item from the tasks
		$scope.tasks = $filter('filter')($scope.tasks, {id: '!' + taskID});
	}

	$scope.addTask = function() {	
		var projectName = $filter('filter')($scope.projects, {id: parseInt($scope.project)}, true)[0].name;

		var task = {
			date: $scope.date,
			project: $scope.project,
			task: $scope.task,
			hours: $scope.hours,
			notes: $scope.notes
		};

		// Send the task to the backend
		$http.post('api/task', task).
		    success(function(data, status, headers, config) {
		    	task.id = data.id;
		    	// Display the project name instead of the id in the ui
				task.project = projectName; 
				$scope.tasks.unshift(task);
		    }).
		    error(function(data, status, headers, config) {
		      // called asynchronously if an error occurs
		      // or server returns response with an error status.
		    });

		$scope.task = "";
		$scope.notes = "";
		$scope.hours = 0;

		$('input#task').focus();
	}

	$('input#task').focus();
});
app.controller('ReportCtrl', function($scope, $http, $filter) {
	// Load the projects
	$http.get('api/projects').
		success(function(data) {
			$scope.projects = data;
			$scope.project = $scope.projects[0].id;
		});

	// Load the users
	$http.get('api/users').
		success(function(data) {
			$scope.users = data;
			//$scope.user = $scope.users[0].id;
		});

	$scope.selectedUsers = [];
	$scope.startDate = $filter('date')(Date.now(), 'yyyy-MM-dd');
	$scope.endDate = $filter('date')(Date.now(), 'yyyy-MM-dd');

	$scope.showReport = function(event) {

		var report = {
			project : $scope.project,
			startDate : $scope.startDate,
			endDate : $scope.endDate,
			users : $scope.selectedUsers
		};

		// Get tasks for the report
		var url = 'api/tasks/?' + $.param(report);
		$http.get(url).
			success(function(data) {
				$scope.tasks = data;
			});
	}
});
app.controller('ProjectsCtrl', function($scope, $http, $filter) {
	// Load the projects
	$http.get('api/projects').
		success(function(data) {
			$scope.projects = data;
		});

	$scope.addProject = function() {	
		var project = {
			name: $scope.project
		};

		// Send the project to the backend
		$http.post('api/project', project).
		    success(function(data, status, headers, config) {
		    	// Display the project name instead of the id in the ui
				$scope.projects.unshift(project);
		    }).
		    error(function(data, status, headers, config) {
		      // called asynchronously if an error occurs
		      // or server returns response with an error status.
		    });

		$scope.project = "";
		$('input#project').focus();
	}

	$scope.deleteProject = function(projectID) {
		// Delete the tasks
		$http.delete('api/project/' + projectID);

		// Remove the deleted item from the tasks
		$scope.projects = $filter('filter')($scope.projects, {id: '!' + projectID});
	}
});
app.controller('UsersCtrl', function($scope, $http, $filter) {
	// Load the projects
	$http.get('api/users_admin').
		success(function(data) {
			$scope.users = data;
		});

	$scope.addUser = function() {	
		var user = $scope.user;

		// Send the project to the backend
		$http.post('api/user', user).
		    success(function(data, status, headers, config) {
		    	// Display the project name instead of the id in the ui
				$scope.users.unshift(user);
		    }).
		    error(function(data, status, headers, config) {
		      // called asynchronously if an error occurs
		      // or server returns response with an error status.
		    });

		$scope.project = "";
		$('input#project').focus();
	}

	$scope.deleteProject = function(projectID) {
		// Delete the tasks
		$http.delete('api/project/' + projectID);

		// Remove the deleted item from the tasks
		$scope.projects = $filter('filter')($scope.projects, {id: '!' + projectID});
	}
});