	// create the module and name it scotchApp
	var scotchApp = angular.module('HRModuleApp', ['ngRoute']);

	// configure our routes
	scotchApp.config(function($routeProvider) {
		$routeProvider

			.when('/', {
				templateUrl : 'pages/home.html',
				controller  : 'mainController'
			})
			// route for the home page
			.when('/home', {
				templateUrl : 'pages/home.html',
				controller  : 'mainController'
			})

			// route for the about page
			.when('/profile', {
				templateUrl : 'pages/profile.php',
				controller  : 'aboutController'
			})

			// route for the vacations_datatable page
			.when('/vacations_datatable', {
				templateUrl : 'pages/vacations_datatable.html',
				controller  : 'aboutController'
			})

			// route for the activities page
			.when('/activities', {
				templateUrl : 'pages/activities.php',
				controller  : 'contactController'
			})
			
			// route for the employees page
			.when('/employees_datatable', {
				templateUrl : 'pages/employees_datatable.html',
				controller  : 'contactController'
			})
	
				// route for the contact page
			.when('/teambuilding', {
				templateUrl : 'pages/teambuilding.html',
				controller  : 'contactController'
			})

				// route for the contact page
			.when('/public_profile', {
				templateUrl : 'pages/public_profile.html',
				controller  : 'contactController'
			})
			// route for the add user page
			.when('/add_user', {
				templateUrl : 'pages/add_user.html',
				controller  : 'aboutController'
			})

			// route for the contact page
			.when('/add_user', {
				templateUrl : 'pages/add_user.html',
				controller  : 'contactController'
			});
	});

	// create the controller and inject Angular's $scope
	scotchApp.controller('mainController', function($scope) {
		// create a message to display in our view
		$scope.message = 'Ili možda nešto nalik na dashboard';
	});

	scotchApp.controller('aboutController', function($scope) {
		$scope.message = 'Ovo ce biti neki profile page.... ono sto je Dino pravio';
	});

	scotchApp.controller('contactController', function($scope) {
		$scope.message = 'Contact us! JK. This is just a demo.';
	});