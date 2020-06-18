@extends('layout/master')

@section('title')
    <title>Berita Acara - Admin</title>
@endsection

@section('page-title')

    <div class="page-title">
        <h4>Halaman Berita Acara Kerja Praktek</h4>
    </div>

@endsection

@section('breadcrumb')

    <div class="breadcrumb-line breadcrumb-line-component">
        {{-- {{ Breadcrumbs::render('kriteria') }} --}}
    </div>

@endsection


@section('panel-body')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Data Berita Acara</h5>
    </div>

    <div class="panel-body">
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias fugit, animi iste atque similique perferendis unde ipsam laborum minima vel?</span><br><br>
        <button type="button" class="btn bg-teal-400 btn-labeled" data-toggle="modal" data-target="#AddBA"><b><i class="icon-user-plus"></i></b> Tambah Berita Acara</button>

    </div>

    <table class="table table-striped">
        <thead class="text-capitalize">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Program Studi</th>
            <th>Nama Dosen</th>
            <th>Nama Mahasiswa</th>
            <th>Tanggal Berita Acara</th>
            <th>Aksi</th>
            {{-- <th>Status</th> --}}
        </tr>
        </thead>
        <tbody>

        @foreach ($data as $item)
        <tr>
            <td scope="row">{{$loop->iteration}}</td>
            <td>{{$item->judul}}</td>
            <td>{{$item->nama_progdi}}</td>
            <td>{{$item->nama_dosen}}</td>
            <td>{{$item->nama_mhs}}</td>
            <td>{{ Carbon\Carbon::parse($item->tgl_ba)->format('d M Y') }}</td>
            <td>
                <a href="{{url('upload/berita-acara/kerja-praktek/'.$item->file)}}" class="btn btn-primary btn-sm btn-icon" target="_blank"><i class="icon-pencil7"></i></a>
                <a href="{{url('upload/berita-acara/'.$item->file)}}" class="btn btn-warning btn-sm btn-icon" target="_blank"><i class="icon-pencil7"></i></a>
                <a href="{{route('berita-acara.delete', $item->id)}}" class="btn btn-danger btn-sm btn-icon"><i class="icon-trash"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>


<!-- Add/Success modal -->
<div id="AddBA" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-teal-400">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h6 class="modal-title">Tambah Data</h6>
            </div>

            <form method="POST" action="{{route('berita-acara.post')}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" value="{{route('fakultas')}}" id="url_fakultas">

                <div class="modal-body">
                    <div class="form-group">
                        <label>Fakultas</label>
                        <select class="form-control" id="fakultas" name="idfak"></select>
                    </div>
                    <div class="form-group">
                        <label>Program Studi</label>
                        <select class="form-control" id="nama-prodi" name="idprogdi"></select>
                    </div>
                    <div class="form-group">
                        <label>Nomor</label>
                        <input type="text" class="form-control" name="no_ba" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tgl_ba" required>
                    </div>
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label>Nama Dosen</label>
                        <select class="form-control" id="nama-dosen" name="iddosen" required></select>
                    </div>
                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="nama_mhs" required>
                    </div>
                    <label>Input File</label>
                    <div class="form-group">
                        <input type="file" class="form-control-file" id="file" name="file" accept="application/pdf" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" data-dismiss="modal"><i class="icon-cross"></i> Tidak</button>
                    <button type="submit" class="btn btn-success" id="postfile"><i class="icon-check add"></i> Ya</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /success modal -->
<script>
    $(document).ready(function(){
            var url_fakultas = $('#url_fakultas').val();
    
            $.ajax({
                "url": url_fakultas ,
                "type":"GET",
                "success":function(data){
                    $('#fakultas').empty();
                    $('#fakultas').append('<option disabled selected>-- Pilih Fakultas --</option>');
    
                    $.each(data, function() {
                        $('#fakultas').append('<option value="' +this.idfak+ '">'+ this.fakultas +'</option>');
                    });
                }
            });
    
            $('#fakultas').on('change', function(e) {
                var fakultas_id = e.target.value;
                $.get('/getprodi/'+fakultas_id, function(data){
                    $('#nama-prodi').empty();
                    $('#nama-prodi').append('<option disabled selected>-- Pilih Program Studi --</option>');
    
                    $.each(data, function() {
                        $('#nama-prodi').append('<option value="' +this.idprogdi+ '">'+ this.progdi +'</option>');
                    });
                });
    
            });
    
            $('#nama-prodi').on('change', function(e) {
                var idprogdi = e.target.value;
                $.get('/getdosen/'+idprogdi, function(data){
                    $('#nama-dosen').empty();
                    $('#nama-dosen').append('<option disabled selected>-- Pilih Nama Dosen --</option>');
    
                    $.each(data, function() {
                        $('#nama-dosen').append('<option value="' +this.iddosen+ '">'+ this.nama +'</option>');
                    });
                });
    
            });
        });
    </script>
@endsection
