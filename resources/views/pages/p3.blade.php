@extends('layout/master')

@section('title')
    <title>Dashboard - Penataan Sistem Manajemen SDM</title>
@endsection

@section('page-title')

    <div class="page-title">
        <h4>Upload Dokumen Proses</h4>
    </div>

@endsection

@section('breadcrumb')

@endsection


@section('panel-body')
@if (session('success'))
    <div class="alert bg-success alert-styled-right">
        <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
        <span class="text-semibold">Great!</span> {{session('success')}}
    </div>
@elseif (session('error'))
    <div class="alert bg-danger alert-styled-right">
        <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
        <span class="text-semibold">{{session('error')}} !</span> 
    </div>
@endif

<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Penataan Sistem Manajemen SDM<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
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
                        <select class="form-control" name="daftar_sub_id" required>
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
                        <select class="form-control" name="pertanyaan_id" required>
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
                        <textarea rows="3" cols="3" class="form-control" name="prog_evaluasi" placeholder="Program Evaluasi" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Keterangan</label>
                    <div class="col-lg-10">
                        <textarea rows="3" cols="3" class="form-control" name="keterangan" placeholder="Keterangan" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label col-lg-2">Bukti Dokumen</label>
                    <div class="col-lg-10">
                        <input type="file" name="file" class="form-control h-auto" required>
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
