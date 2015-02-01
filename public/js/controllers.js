app.controller('adminCtrl', function($rootScope, $scope, $location, $http) {
	
	
	// $rootScope.$on('databank-ready', function() {
	// 	$rootScope.users = $rootScope.db.users;


	// });
	$scope.articles =[];

	$http.get('/api/articles').
	    success(function(data, status, headers, config) {
	      $scope.articles = data;
	      
	    }).
	    error(function(data, status, headers, config) {
	      // log error
    });

	$scope.greeting = "Hello Wassup";
	$scope.article = [];
	$scope.ctags = [];

	// console.log($scope.posts);

	$scope.addTag = function(ctag) {
		var loopCount = $scope.ctags.length;
		var canpush = 0;

		if(loopCount == 0) {
			canpush = 0;
		} else {
			for (i=0; i<loopCount; i++) {
				if(ctag == $scope.ctags[i]) {
					canpush ++;
				}
			}

		}

		if (canpush == 0) {
			$scope.ctags.push(ctag);
			$scope.ctag = '';
		} else {
			UIkit.notify({
			    message : 'Tag already added!',
			    status  : 'danger',
			    timeout : 3000,
			    pos     : 'top-center'
			});

		}
		console.log($scope.ctags);
	}

	$scope.delTag = function($index) {
		$scope.ctags.splice($index, 1);
		console.log($scope.ctags);
	}


	$scope.createArticle = function() {

		$scope.article.tags = $scope.ctags;
		
		console.log($scope.article);


	}

});

app.controller('homeController', function($rootScope, $scope, $location) {
	console.log("I am here");
});

