@extends('master2')
@section('judulhalaman','Data Chat')

@section('konten')

	<h2>www.malasngoding.com</h2>
	<h3>Chat</h3>
    <br>
	<br/>
	<br/>

	<div>
        @foreach($chats as $chat)
        <p>{!! $chat->pesan !!}</p>
    @endforeach
    </div>

@endsection
