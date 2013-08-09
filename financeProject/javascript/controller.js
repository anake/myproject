/*var clubModule = angular.module('clubApp', []);
var playerModule = angular.module('playerApp',[]);

clubModule.controller('listClubs', function($scope)
{
	$scope.clubs = [{name:'mu', negara:'inggris'}, {name:'juventus', negara:'italia'}];
});

playerModule.controller('listPlayers', function($scope)
{
	$scope.players=[{name:'beckham',umur:38,negara:'inggris'},{name:'giggs',umur:40,negara:'wales'},{name:'del piero',umur:40,negara:'italia'}];
});*/
/*function StartUpController($scope) {
	$scope.computeNeeded = function() {
		$scope.needed = $scope.startingEstimate * 10;
	};
	$scope.requestFunding = function() {
		window.alert("Sorry, please get more customers first.");
	};
	$scope.reset = function() {
		$scope.startingEstimate = 0;
	};
}*/

/*function CalcController($scope)
{
	$scope.input1 = {angka:3};
	$scope.input2 = {angka:2};
	//$scope.hasil = 5;
	$scope.tambah = function()
	{
		$scope.hasil = $scope.input1.angka + $scope.input2.angka;// + ($scope.varExtend*1);
	}
	$scope.kurang = function()
	{
		$scope.hasil = $scope.input1.angka - $scope.input2.angka;
	}
	$scope.kali = function()
	{
		$scope.hasil = $scope.input1.angka * $scope.input2.angka;
	}
	$scope.bagi = function()
	{
		$scope.hasil = $scope.input1.angka / $scope.input2.angka;
	}
}*/

/*function swalayanController($scope)
{
	$scope.diskonbelanja = 0.2;
	$scope.items=[{nama:'gelas', harga:'20', total:0}, {nama:'piring', harga:'10', total:0}, {nama:'sendok', harga:'30', total:0}, {nama:'gelas kaca', harga:'70', total:0}];
	
	$scope.totalHarga = function()
	{
		var totalharga = 0;
		var jumitem = $scope.items.length;
		for(i=0;i<jumitem;i++)
			totalharga += $scope.items[i].harga * $scope.items[i].total ;//* $scope.items[1].total;
		return totalharga;
	}
	
	$scope.subTotal = function()
	{
		var subtotal = 0;
		subtotal = $scope.totalHarga() * $scope.diskonbelanja;
		return subtotal;
	}
}*/

function filterController($scope)
{
	$scope.students = [ {nama:'lia', umur:25},{nama:'nake', umur:25}, {nama:'icha', umur:4}];
}