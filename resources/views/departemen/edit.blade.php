@extends('dashboard')

@section('content')

<div class="d-flex justify-content-between mt-5 mb-5">
    <div>
        <h2>Edit Departemen</h2>
    </div>
    <div>
        <a class="btn btn-secondary" href="{{ route('departemen.index') }}"> Back</a>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('departemen.update',$departemen->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('departemen.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">

                                    <label class="font-weightbold">Nama Manager</label>
                                        <input type="text" class="form-control @error('nama_manager') is-invalid @enderror" name="nama_manager" value="{{ old('nama_manager') }}" placeholder="Masukkan Nama Manager">
                                        @error('nama_manager')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
            
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                    <label class="font-weightbold">Nama Departemen</label>
                                        <input type="text" class="form-control @error('nama_departemen') is-invalid @enderror" name="nama_departemen" value="{{ old('nama_departemen') }}" placeholder="Masukkan Nama Departemen">
                                        @error('nama_departemen')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="font-weightbold">Jumlah Pegawai</label>
                                        <input type="number" class="form-control @error('jumlah_pegawai') is-invalid @enderror" name="jumlah_pegawai" value="{{ old('jumlah_pegawai') }}" placeholder="Masukkan Jumlah Pegawai">
                                        @error('jumlah_pegawai')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
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
    </div>

</form>
@endsection