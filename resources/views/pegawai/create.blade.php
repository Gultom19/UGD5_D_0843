@extends('dashboard')
@section('content')
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0">Tambah Pegawai</h1>
</div>
<!-- /.col -->
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item">
<a href="#">Pegawai</a>
</li>
<li class="breadcrumb-item active">Create</li>
</ol>
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-body">
<form action="{{ route('pegawai.store') }}"
method="POST" enctype="multipart/form-data">
@csrf
<div class="form-row">
<div class="form-group col-md-12">
<label class="font-weightbold">Nama Pegawai</label>
<input type="text" class="form-control @error('nama_pegawai') is-invalid @enderror" name="nama_pegawai" value="{{ old('nama_pegawai') }}" placeholder="Masukkan Nama Pegawai" maxlength="15">
@error('nama_pegawai')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label class="font-weightbold">Nama Pegawai</label>
<input type="telepon" class="form-control @error('telepon') is-invalid @enderror" name="telepon" value="{{ old('telepon') }}" placeholder="Masukkan Telepon" pattern="[0][8][0-9]{4,5}">
value="{{ old('telepon') }}" placeholder="telepon">
@error('Telepon')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>
<div class="form-group col-md-6">
<label class="font-weightbold">Email</label>
<input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email">
name="email" value="{{ old('email') }}"
placeholder="Masukkan Email">
@error('Email')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror
</div>
</div>
<button type="submit" class="btn btn-md
btn-primary">SIMPAN</button>
</form>
</div>
<!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col-md-6 -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
@endsection