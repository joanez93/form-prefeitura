var app = angular.module("appContato", []);
app.controller("appContatoCtrl", function($scope){
	$scope.outrosLinks = [
		{title: "Assembléia Legislativa"},
		{title: "Câmara dos deputados"},
		{title: "Câmara Municipal"},
		{title: "Consulta CEP"},
		{title: "Detran-PR"},
		{title: "Governo do Paraná"},
		{title: "Imposto de Renda"},
		{title: "Municipios do Paraná"},
		{title: "Procon-PR"},
		{title: "Tribunal Eleitoral Regional"}
	];
});