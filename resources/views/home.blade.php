<!DOCTYPE html>
<html>
<head>
	<title>Daftar Barang</title>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/bootstrap.min.css')}}">
	<script type="text/javascript"src="{{asset('/css/bootstrap.min.js')}}"></script>
	<style>
	.navbar-brand{
		margin: auto;
	}
	tr>th,tr>td{
		text-align: center;
	}
	.table-content{
		margin-left: 100px;
		margin-right: 100px;
	}
	</style>
</head>
<body>
	<div class="container ">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">KELOLA DATA BARANG</a>
		</nav>
		<br>
		<br>
		<br>
		<div class="table-content">
			<h5 class="float-left">Data Barang</h5>
			<a href="{{('/tambah')}}">
				<button type="button" class="btn btn-success float-right">Tambah</button>
			</a>
			<br>
			<br>
			<br>
			<table class="table table-bordered">
					<tr>
						<th>Kode</th>
						<th>Nama</th>
						<th>Harga</th>
						<th>Aksi</th>
					</tr>

					@foreach ($barang as $barang)
					<tr>
						<td>{{($barang->kode)}}</td>
						<td>{{($barang->nama)}}</td>
						<td>Rp. {{($barang->harga)}},00</td>
						<td>
							<a href="/ubah/{{ $barang->id }}">Edit</a>
							<a href="/hapus/{{ $barang->id }}" style="margin-left: 40px; color: red;" onclick="return confirm('Sure To Delete This?')">Hapus</a>
						</td>
					</tr>
					@endforeach

			</table>
			
		</div>
	</div>
</body>
</html>