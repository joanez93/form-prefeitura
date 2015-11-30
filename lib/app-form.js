var app = angular.module("appForm", ["ngMessages"]);
app.controller("appFormCtrl", function($scope){
	$scope.estados = [
		{est: "PR"},
		{est: "SC"},
		{est: "SP"},
		{est: "MT"},
		{est: "MS"},
		{est: "RS"},
		{est: "RJ"},
		{est: "ES"},
		{est: "MG"},
		{est: "BA"},
		{est: "AC"},
		{est: "AL"},
		{est: "AP"},
		{est: "AM"},
		{est: "CE"},
		{est: "DF"},
		{est: "GO"},
		{est: "MA"},
		{est: "PA"},
		{est: "PB"},
		{est: "PE"},
		{est: "PI"},
		{est: "RN"},
		{est: "RO"},
		{est: "RR"},
		{est: "TO"},
		{est: "SE"}
	];

	$scope.obterLink = function(){
		console.log("funfando")
	}
});