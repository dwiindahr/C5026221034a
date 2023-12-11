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

    @foreach($pegawai as $p)
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="Foto Pegawai.jpg">
            </div>
            <div class="col-9">
                <form action="/pegawai/view" method="post" class="form-horizontal" method="view">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

                    <div class="form-group row">
                        <label class="control-label col-sm-1" >Nama</label>
                        <div class="col-sm-10">
                            <output type="text" id="nama" name="nama" required="required">
                                : {{ $p->pegawai_nama }}
                            </output>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-1" >Jabatan</label>
                        <div class="col-sm-10">
                            <output type="text" id="jabatan" name="jabatan" required="required">
                                : {{ $p->pegawai_jabatan }}
                            </output>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-1" >Umur</label>
                        <div class="col-sm-10">
                            <output type="number" id="umur" name="umur" required="required">
                                : {{ $p->pegawai_umur }}
                            </output>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="control-label col-sm-1" >Alamat</label>
                        <div class="col-sm-10">
                            <output type="text" id="alamat" name="alamat" required="required">
                                : {{ $p->pegawai_alamat }}
                            </output>
                        </div>
                    </div>
                </form>

                <div class="row" style="justify-content:center">
                    <a href="/pegawai"target="_blank" class="btn btn-primary" style="margin-bottom: 2rem; width: 150px">OK</a>
                </div>
            </div>
        </div>
    </div>

    @endforeach
@endsection
