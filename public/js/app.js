var app = angular.module('jedi', ['articleService']);




app.config(function($interpolateProvider) { $interpolateProvider.startSymbol('(('); $interpolateProvider.endSymbol('))'); });