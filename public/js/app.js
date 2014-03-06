var app = angular.module('eventApp', ['ngRoute'])




app.config(function($interpolateProvider) { $interpolateProvider.startSymbol('(('); $interpolateProvider.endSymbol('))'); });