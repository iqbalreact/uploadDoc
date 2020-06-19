@extends('layout/master')

@section('title')
    <title>Dashboard - Daftar Dokumen</title>
@endsection

@section('page-title')

    <div class="page-title">
        <h4>Daftar Dokumen Proses</h4>
    </div>

@endsection

@section('breadcrumb')

@endsection

@section('panel-body')

<div class="panel panel-flat">
    <div class="p1">
        <div class="panel-heading">
            <h5 class="panel-title">Manajemen Perubahan<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body">
    
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Penilaian</th>
                            <th>Jenis</th>
                            <th>Program Evaluasi</th>
                            <th>Keterangan</th>
                            <th>File</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p1 as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->daftar_pertanyaan}}</td>
                            <td>{{$item->nama_daftar}}</td>
                            <td>{{$item->prog_evaluasi}}</td>
                            <td>{{$item->keterangan}}</td>
                            <td>
                                <a href="{{ url('/documents/'.$item->file) }}" class="btn btn-primary" target="_blank">Open</a>
                            </td>
                            <td>Hapus</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    
        </div>
    </div>

    <div class="p2">
        <div class="panel-heading">
            <h5 class="panel-title">Penataan Tatalaksana<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Penilaian</th>
                            <th>Jenis</th>
                            <th>Program Evaluasi</th>
                            <th>Keterangan</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p2 as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->daftar_pertanyaan}}</td>
                            <td>{{$item->nama_daftar}}</td>
                            <td>{{$item->prog_evaluasi}}</td>
                            <td>{{$item->keterangan}}</td>
                            <td>
                                <a href="{{ url('/documents/'.$item->file) }}" class="btn btn-primary" target="_blank">Open</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="p3">
        <div class="panel-heading">
            <h5 class="panel-title">Penataan Sistem Manajemen SDM<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body">
    
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Penilaian</th>
                            <th>Jenis</th>
                            <th>Program Evaluasi</th>
                            <th>Keterangan</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p3 as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->daftar_pertanyaan}}</td>
                            <td>{{$item->nama_daftar}}</td>
                            <td>{{$item->prog_evaluasi}}</td>
                            <td>{{$item->keterangan}}</td>
                            <td>
                                <a href="{{ url('/documents/'.$item->file) }}" class="btn btn-primary" target="_blank">Open</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    
        </div>
    </div>  

    <div class="p4">
        <div class="panel-heading">
            <h5 class="panel-title">Penguatan Akuntabilitas<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body">
    
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Penilaian</th>
                            <th>Jenis</th>
                            <th>Program Evaluasi</th>
                            <th>Keterangan</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p4 as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->daftar_pertanyaan}}</td>
                            <td>{{$item->nama_daftar}}</td>
                            <td>{{$item->prog_evaluasi}}</td>
                            <td>{{$item->keterangan}}</td>
                            <td>
                                <a href="{{ url('/documents/'.$item->file) }}" class="btn btn-primary" target="_blank">Open</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    
        </div>
    </div>
    
    <div class="p5">
        <div class="panel-heading">
            <h5 class="panel-title">Penguatan Pengawasan<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body">
    
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Penilaian</th>
                            <th>Jenis</th>
                            <th>Program Evaluasi</th>
                            <th>Keterangan</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p5 as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->daftar_pertanyaan}}</td>
                            <td>{{$item->nama_daftar}}</td>
                            <td>{{$item->prog_evaluasi}}</td>
                            <td>{{$item->keterangan}}</td>
                            <td>
                                <a href="{{ url('/documents/'.$item->file) }}" class="btn btn-primary" target="_blank">Open</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    
        </div>
    </div>

    <div class="p6">
        <div class="panel-heading">
            <h5 class="panel-title">Peningkatan Kualitas Pelayanan Publik<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
        <div class="panel-body">
    
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Penilaian</th>
                            <th>Jenis</th>
                            <th>Program Evaluasi</th>
                            <th>Keterangan</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p6 as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->daftar_pertanyaan}}</td>
                            <td>{{$item->nama_daftar}}</td>
                            <td>{{$item->prog_evaluasi}}</td>
                            <td>{{$item->keterangan}}</td>
                            <td>
                                {{-- <a href="{{ URL::asset('public/documents/$item->file') }}"></a> --}}
                                <a href="{{ url('/documents/'.$item->file) }}" class="btn btn-primary" target="_blank">Open</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    
        </div>
    </div>
</div>
@endsection
