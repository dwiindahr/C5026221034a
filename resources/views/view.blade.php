@extends('master2')
@section('judulhalaman','Data Chat')

@section('konten')

	<h2>www.malasngoding.com</h2>
	<h3>Chat</h3>
    <br>
	<br/>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>pesan</th>
		</tr>
		@foreach($chat as $c)
		<tr>
			<td>{{ $c->pesan }}</td>
		</tr>
		@endforeach
	</table>

@endsection
