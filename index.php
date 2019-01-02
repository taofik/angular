<!DOCTYPE html>
<html ng-app="arsipApp">
<head>
	<title>Angular</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body>

	<div class="container">
		<h2>Belajar Angular</h2>
		<hr>
		<div ng-controller="arsipController as arsip">
			<input type="text" ng-model="arsip.cari" class="form-control" placeholder="Masukan kata yang dicari">
			<hr>
			<h5>Tambah Data</h5>
			<form name="formArsip" ng-submit="arsip.tambah()">
				<div class="row">
					<div class="col">
						<input type="text" ng-model="arsip.inputKode" class="form-control" placeholder="Input Kode" required>
					</div>
					<div class="col">
						<input type="text" ng-model="arsip.inputJudul" class="form-control" placeholder="Input Judul" required>
					</div>
					<div class="col">
						<input type="submit" class="btn btn-primary" ng-disabled="formArsip.$invalid" class="form-control" placeholder="Input Kode">
					</div>
				</div>
			</form>
			<hr/>
      <div class="alert alert-info">Jumlah total arsip {{arsip.total()}}</div>
      <table class="table table-bordered table-striped">
        <thead>
          <tr><th>Kode</th><th>Judul</th><th> </th></tr>
        </thead>
        <tbody>
          <tr ng-repeat="data in arsip.data | filter:arsip.cari track by data.kode">
            <td>{{data.kode}}</td>
            <td>{{data.judul}}</td>
            <td><button type="button" class="btn btn-danger" ng-click="arsip.hapus(data.kode)">Hapus</button></td>
          </tr>
        </tbody>
      </table>
		</div>
		
	</div>

	<script type="text/javascript" src="angular.min.js"></script>
	<script type="text/javascript" src="controllers/arsip.js"></script>
</body>
</html>