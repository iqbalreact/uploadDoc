@extends('layout/master')

@section('title')
    <title>Dashboard - Manajemen Perubahan</title>
@endsection

@section('page-title')

    <div class="page-title">
        <h4>Upload Dokumen Proses</h4>
    </div>

@endsection

@section('breadcrumb')

@endsection

@section('panel-body')

<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Manajemen Perubahan<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>
    
    <form action="#" enctype="multipart/form-data" method="POST">
    <div class="panel-body">
            <div class="row">
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Penilaian</label>
                    <div class="col-lg-10">
                        <select class="form-control">
                            <option value="opt1">Pilih</option>
                            <option value="opt2">Apakah unit kerja telah membentuk tim untuk melakukan pembangunan Zona Integritas ?</option>
                            <option value="opt3">Apakah penentuan anggota Tim selain pimpinan dipilih melalui prosedur/mekanisme yang jelas ?</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Jenis</label>
                    <div class="col-lg-10">
                        <select class="form-control">
                            <option value="opt1">Pilih</option>
                            <option value="opt2">Tim Kerja</option>
                            <option value="opt3">Dokumen Rencana Pembangunan Zona Integritas</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Program Evaluasi</label>
                    <div class="col-lg-10">
                        <textarea rows="3" cols="3" class="form-control" placeholder="Program Evaluasi"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Keterangan</label>
                    <div class="col-lg-10">
                        <textarea rows="3" cols="3" class="form-control" placeholder="Keterangan"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Bukti Dokumen</label>
                    <div class="col-lg-10">
                        <input type="file" class="form-control h-auto">
                    </div>
                </div>
            </div>          
            {{-- @endforeach --}}
            <hr>
            {{-- @endforeach --}}
            <div class="form-group">
                <button class="btn btn-primary">
                    Upload Dokumen
                </button>
            </div>
        </div>
    </div>
</form>    
@endsection
