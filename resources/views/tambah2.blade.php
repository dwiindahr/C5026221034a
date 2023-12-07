@extends('master2')
@section('judulhalaman','Data Keranjang Belanja')

@section('konten')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Keranjang Belanja</h3>

	<a href="/keranjangbelanja"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}

        <div class="form-group row">
            <label class="control-label col-sm-2" >Kode Barang</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="KodeBarang" name="KodeBarang">
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" >Jumlah Pembelian</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="Jumlah" name="Jumlah">
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" >Harga per item</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="Harga" name="Harga">
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection


