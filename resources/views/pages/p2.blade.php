@extends('layout/master')

@section('title')
    <title>Dashboard - Penataan Tatalaksana</title>
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
        <h5 class="panel-title">Penataan Tatalaksana<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>
    
    <form action="{{route('addberkas')}}" enctype="multipart/form-data" method="POST">
        <div class="panel-body">
            <div class="row">
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Jenis</label>
                    <div class="col-lg-10">
                        <select class="form-control" name="daftar_sub_id">
                            <option value="">Pilih</option> 
                            @foreach ($daftar_sub as $sub_name)
                            <option value="{{$sub_name->id}}">{{$sub_name->nama_daftar}}</option>  
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Penilaian</label>
                    <div class="col-lg-10">
                        <select class="form-control" name="pertanyaan_id">
                            <option value="">Pilih</option>
                            @foreach ($p1 as $item)
                            <option value="{{$item->pertanyaans_id}}">{{$item->daftar_pertanyaan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Program Evaluasi</label>
                    <div class="col-lg-10">
                        <textarea rows="3" cols="3" class="form-control" name="prog_evaluasi" placeholder="Program Evaluasi"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Keterangan</label>
                    <div class="col-lg-10">
                        <textarea rows="3" cols="3" class="form-control" name="keterangan" placeholder="Keterangan"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Bukti Dokumen</label>
                    <div class="col-lg-10">
                        <input type="file" name="file" class="form-control h-auto">
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
