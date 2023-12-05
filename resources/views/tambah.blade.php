@extends('master2')
@section('judulhalaman','Data Pegawai')

@section('konten')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label class="control-label col-sm-1" >Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-1" >Jabatan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-1" >Umur</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="umur" name="umur">
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-1" >Alamat</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" rows="4" id="alamat" name="alamat"></textarea>
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection


