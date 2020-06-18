@extends('layout/master')

@section('title')
    <title>Dashboard - Admin</title>
@endsection

@section('page-title')

    <div class="page-title">
        <h4>Halaman Dashboard</h4>
    </div>

@endsection

@section('breadcrumb')

@endsection

@section('panel-body')

<div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Proses<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>
    
    <form action="{{route('addberkas')}}" enctype="multipart/form-data" method="POST">
    <div class="panel-body">
        @foreach ($penilaians as $items => $key)
            <b>{{$key[0]->nama_sub}}</b>
            <h6>{{$key[0]->nama_daftar}}</h6>
            @foreach ($key as $item)
            <div class="row">
                <div class="pertanyaan">
                    <div class="col-md-12">
                        <p>
                            {{$loop->iteration}} .  
                            {{$item->daftar_pertanyaan}}
                            {{-- {{$item->pertanyaan}} --}}
                        </p>
                    </div>
                        @csrf
                        <div class="col-md-3">
                        <input type="hidden"  value="{{$item->pertanyaans_id}}" name="pertanyaan_id[]">
                        <div class="evaluasi">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Program Evaluasi</label>
                                <textarea name="prog_evaluasi[]" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="keterangan">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Keterangan</label>
                                <textarea name="keterangan[]" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="keterangan">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Bukti Dokumen</label>
                                <textarea name="bukti[]" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group" >
                            <input type="file" name="file[]" multiple class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </div>
                </div>
            </div>          
            @endforeach
            <hr>
            @endforeach
            <div class="form-group">
                <button class="btn btn-primary">
                    Upload Dokumen
                </button>
            </div>
        </div>
    </div>
</form>
    
{{-- <div class="panel panel-flat">
    <div class="panel-heading">
        <h5 class="panel-title">Hasil<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
        <div class="heading-elements">
            <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
                <li><a data-action="close"></a></li>
            </ul>
        </div>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-md-6">
                <h5>Manajemen Perubahan</h5>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-md-6">
                <h4>Upload Berkas</h4>
                <div class="form-group">
                    <input type="file">
                </div>
            </div>
        </div>
    </div>
</div> --}}
    
@endsection
