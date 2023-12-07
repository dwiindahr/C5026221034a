@extends('master2')
@section('judulhalaman','Data Keranjang Belanja')

@section('konten')

	<h2>www.malasngoding.com</h2>
	<h3>Data Keranjang Belanja</h3>

	<a href="/keranjangbelanja/beli" class="btn btn-primary">Beli</a>
    <br>
	<br/>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $k)
		<tr>
			<td>{{ $k->ID }}</td>
			<td>{{ $k->KodeBarang }}</td>
			<td>{{ $k->Jumlah }}</td>
            <td>{{ number_format($k->Harga, 2, ',', '.') }}</td>
            <td>{{ number_format($k->Jumlah * $k->Harga, 2, ',', '.') }}</td>
			<td>
				<a href="/keranjangbelanja/hapus/{{ $k->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
