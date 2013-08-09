<html ng-app>
<head><title>angular js</title></head>
<script language="javascript" src="<?php echo $this->config->base_url();?>javascript/angular.min.js"></script>
<script language="javascript" src="<?php echo $this->config->base_url();?>javascript/controller.js"></script>
<body>
	<!--<div ng-app="clubApp">
		<div ng-controller="listClubs">
			<div ng-repeat="club in clubs">
				<h1>{{club.name}}</h1>
			</div>
		</div>
	</div>-->
	<!--<div ng-app="playerApp">
		<div ng-controller="listPlayers">
			<div ng-repeat = "player in players">
				<h1>{{player.name}}</h1>
			</div>
		</div>
	</div>-->
	<!--<form ng-submit="requestFunding()" ng-controller="StartUpController">
		Starting: <input ng-change="computeNeeded()" ng-model="startingEstimate">
		Recommendation: {{needed}}
		<button>Fund my startup!</button>
		<button ng-click="reset()">Reset</button>
	</form>-->
	
	<!-- calculator
	<div ng-controller="CalcController">
		<input ng-model="input1.angka" />
		<input ng-model="input2.angka" />
		<!--<input ng-model="varExtend" />
		<span>{{hasil | currency:'Rp'}}</span>
		<button ng-click="tambah()">tambah</button>
		<button ng-click="kurang()">kurang</button>
		<button ng-click="kali()">kali</button>
		<button ng-click="bagi()">bagi</button>
	</div>
	-->
	
	<!--aplikasi swalayan-->
	<!--<div ng-controller="swalayanController">
		<div ng-repeat="barang in items">
			<span>{{barang.nama}}</span>
			<input style="width:20px;" ng-model="barang.total"/>
			<span>{{barang.harga | currency:'Rp'}}</span>
			<span>{{barang.total * barang.harga | currency:'Rp'}}</span>
		</div>
		<div>Total : {{totalHarga() | currency:'Rp'}}</div>
		<div>diskon : {{diskonbelanja * 100}}%</div>
		<div>Total setelah diskon : {{subTotal() | currency:'Rp'}}</div>
	</div>
	<!--ending-->
	<!--aplikasi filter-->
	<div ng-controller="filterController">
		<input ng-model="filternama" />
		<div ng-repeat="murid in students | orderBy:'nama' | filter:filternama">
			<div>nama : {{murid.nama}} umur : {{murid.umur}}</div>			
		</div>
	</div>
</body>
</html>
