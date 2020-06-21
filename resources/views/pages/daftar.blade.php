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
                                {{-- <a href="#modalHapusMhs" data-toggle="modal" id="tombol-hapus-mhs" data-target="#modalHapusMhs" class="btn btn-danger btn-sm" title="Hapus" data-idmhs="{{$item->id}}"><i class="icon-trash"></i></a> --}}
                            </td>
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


<div class="modal fade" id="modalHapusMhs" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    @csrf
                    <input type="hidden" name="id_mahasiswa" id="id-mahasiswa">
                    <p class="text-center mt-3">Apakah Anda Yakin Akan Menghapus ?</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Yakin</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
