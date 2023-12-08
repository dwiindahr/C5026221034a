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

    @foreach($lipstick as $l)
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="Foto_produk_lipstick.jpg">
            </div>
            <div class="col-9">
                <form action="/lipstick/view3" method="post" class="form-horizontal" method="view">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $l->kodelipstick }}"> <br/>

                    <div class="form-group row">
                        <label class="control-label col-sm-2" >Merk Lipstick</label>
                        <div class="col-sm-10">
                            <output type="text" id="merklipstick" name="merklipstick" required="required">
                                : {{ $l->merklipstick }}
                            </output>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2" >Stock Lipstick</label>
                        <div class="col-sm-10">
                            <output type="number" id="stocklipstick" name="stocklipstick" required="required">
                                : {{ $l->stocklipstick }}
                            </output>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-2" >Tersedia</label>
                        <div class="col-sm-10">
                            <output type="text" id="tersedia" name="tersedia" required="required">
                                : {{ $l->tersedia }}
                            </output>
                        </div>
                    </div>

                </form>

                <div class="row" style="justify-content:center">
                    <a href="/lipstick"target="_blank" class="btn btn-primary" style="margin-bottom: 2rem; width: 150px">OK</a>
                </div>
            </div>
        </div>
    </div>

    @endforeach
@endsection
