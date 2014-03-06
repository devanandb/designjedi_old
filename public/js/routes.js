app.config(function($routeProvider) {
$routeProvider

	// route for the home page
	.when('/', {
		templateUrl : 'pages/home.html',
		controller  : 'homeController'
	})
	.otherwise({ redirectTo : '/'})
	.when('/leadership', {
		templateUrl: 'pages/leadership.html'
	})
});