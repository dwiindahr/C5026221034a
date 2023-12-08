@extends('master2')
@section('judulhalaman','Data Lipstick')

@section('konten')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Lipstick</h3>

	<a href="/lipstick"> Kembali</a>

	<br/>
	<br/>

	<form action="/lipstick/store3" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label class="control-label col-sm-2" >Merk Lipstick</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="merklipstick" name="merklipstick">
            </div>
        </div>

        <div class="form-group row">
            <label class="control-label col-sm-2" >Stock Lipstick</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="stocklipstick" name="stocklipstick">
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection


