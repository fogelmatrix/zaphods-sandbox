var squareApp = angular.module('squareApp', []);

squareApp.controller('BookListController', ['$scope', '$http', function($scope, $http) {  
	$http.get('data/connector.php').success(function(response) {
		$scope.booklist = response.books;
		$scope.bookOrder = 'title';
		$scope.numLimit = 8;
		console.log('GO!');

	});
}]);

var jdata = $.getJSON("data/connector.php");

var jstring = JSON.stringify(jdata.responseText);


console.log(jstring);
