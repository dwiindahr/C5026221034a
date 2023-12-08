@extends('master2')
@section('judulhalaman','Data Lipstick')

@section('konten')

	<h2>www.malasngoding.com</h2>
	<h3>Data Lipstick</h3>

	<a href="/lipstick/tambah3" class="btn btn-primary">+ Tambah Produk Lipstick</a>
    <br>
	<br/>
    <p>Cari Data Lipstick :</p>
	<form action="/lipstick/cari3" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Merk Lipstick.." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info" style="margin-top: 0.5rem">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Lipstick</th>
			<th>Merk Lipstick</th>
			<th>Stock Lipstick</th>
			<th>Tersedia</th>
            <th>Action</th>
		</tr>
		@foreach($lipstick as $l)
		<tr>
			<td>{{ $l->kodelipstick }}</td>
			<td>{{ $l->merklipstick }}</td>
			<td>{{ $l->stocklipstick }}</td>
            <td>{{ $l->tersedia }}</td>
			<td>
                <a href="/lipstick/view3/{{ $l->kodelipstick }}" class="btn btn-success">View</a>
                |
                <a href="/lipstick/edit3/{{ $l->kodelipstick }}" class="btn btn-warning">Edit</a>
                |
				<a href="/lipstick/hapus3/{{ $l->kodelipstick }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{$lipstick-> links()}}

@endsection
