@extends('dashboard')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Proyek</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ url('departemen')}}">Proyek</a>
                        </li>
                        <li class="breadcrumb-item active">Index</li>
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
                            <div class="table-responsive p-0">
                                <table class="table table-hover textnowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nama Proyek</th>
                                            <th class="text-center">Departemen Penanggung Jawab</th>
                                            <th class="text-center">Waktu Mulai</th>
                                            <th class="text-center">Waktu Selesai</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse ($proyeks as $item)
                                            <tr>
                                                <td class="text-center">{{ $item->nama_proyek }}</td>
                                                <td class="text-center">{{ $item->nama_departemen }}</td>
                                                <td class="text-center">{{ $item->waktu_mulai }}</td>
                                                <td class="text-center">{{ $item->waktu_selesai }}</td>                                               
                                                @if($item->status==0)
                                                <td>Selesai</td>
                                                @else
                                                <td>Berjalan</td>
                                                @endif
                                            </tr>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data Proyek belum tersedia
                                        </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
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
<!-- /.container-fluid -->
</div>
    </div>
@endsection