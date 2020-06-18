@extends('layouts.master')

@section('title')
    Admin - Lembar Pengesahan
@endsection

@section('breadchrumb')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container ">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Dashboard </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Management Berita Acara </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
            </div>

            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__wrapper">
                    <button type="button" class="btn btn-label-success btn-bold btn-icon-h kt-margin-l-10" data-toggle="modal" data-target="#addBA"> Tambah Lembar Pengesahan</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
    
<div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">
    <!--begin:: Lembar Pengesahan-->

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <div class="kt-portlet kt-portlet">
        <div class="kt-widget14">
            <div class="kt-widget14__header">
                <h5 class="kt-widget14__title">
                    Daftar Lembar Pengesahan
                </h5>
                <span class="kt-widget14__desc">
                    Lorem ipsum dolor sit amet consectetur.
                </span>
            </div>
            <div class="kt-widget14__content">
                <div class="table">
                    <table id="dataTable3" class="text-center" style="width: 100%;overflow-x: auto;">
                            <thead class="text-capitalize">
                            <tr>
                                <th>No</th>
                                <th>Dosen Pembimbing</th>
                                <th>Dosen Penguji</th>
                                <th>Judul</th>
                                <th>Perihal</th>
                                {{-- <th>Status</th> --}}
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            @foreach ($lembarpeng as $item)
                            <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$item->pembimbing_1}} <br> {{$item->pembimbing_2}}</td>
                            <td>{{$item->penguji_1}} <br> {{$item->penguji_2}}</td>
                            <td>{{$item->judul}}</td>
                            <td>{{$item->perihal}}</td>
                            <td><a href="{{url('upload/lembar-pengesahan/'.$item->file)}}" class="btn btn-success" target="_blank">Lihat</a></td>
                                {{-- <td>
                                    <div class="btn-group">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">
                                                <i class="la la-cog"></i>
                                            </a>
                                              <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                                <a class="dropdown-item" href="#"><i class="la la-upload"></i> Upload Lembar Pengesahan</a>
                                                <a class="dropdown-item" href="#"><i class="la la-download"></i> Download Lembar Pengesahan</a>
                                                <a class="dropdown-item" href="#"><i class="la la-print"></i> Print lembar Pengesahan</a>
                                              </div>
                                        </div>
                                        <a class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete" data-toggle="modal" href="#deleteHal">
                                            <i class="la la-trash"></i>
                                        </a>
                                    </div>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--end:: Lembar Pengesahan-->
</div>

<!--begin::Add LP Modal-->
<div class="modal fade" id="addBA" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Input lembar Pengesahan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                <div class="kt-portlet__body">
                    <form method="POST" action="{{route('lembar-pengesahan.post')}}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <input type="hidden" value="{{route('fakultas')}}" id="url_fakultas">
        
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Fakultas</label>
                                <select class="form-control" id="nama-fakultas" name="nama_fakultas">
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Pembimbing 1</label>
                                <select class="form-control" id="pembimbing_1" name="pembimbing_1">
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Pembimbing 2</label>
                                <select class="form-control" id="pembimbing_2" name="pembimbing_2">
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Penguji 1</label>
                                <select class="form-control" id="penguji_1" name="penguji_1">
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Penguji 2</label>
                                <select class="form-control" id="penguji_2" name="penguji_2">
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul">
                              </div>
                              <div class="form-group">
                                <label>Perihal</label>
                                <input type="text" class="form-control" id="perihal" name="perihal">
                              </div>
                              <div class="form-group">
                                <label>Input File</label>
                                <input type="file" class="form-control-file" id="file" name="file" accept="application/pdf">
                              </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Modal-->

<script>
    $(document).ready( function () {
    $('#laravel_datatable').DataTable({
           processing: true,
           serverSide: true,
           ajax: "{{ url('berita-acara/tampil') }}",
           columns: [
                    { data: 'nama', name: 'nama' },
                    { data: 'judul', name: 'judul' },
                    { data: 'perihal', name: 'perihal' },
                    { data: 'file', name: 'file' }
                 ]
        });
     });

    $(document).ready(function(){
        var url_fakultas = $('#url_fakultas').val();

        $.ajax({
            "url": url_fakultas ,
            "type":"GET",
            "success":function(data){
                $('#nama-fakultas').empty();
                $('#nama-fakultas').append('<option disabled selected>-- Pilih Fakultas --</option>');

                $.each(data, function() {
                    $('#nama-fakultas').append('<option value="' +this.idfak+ '">'+ this.fakultas +'</option>');
                });
            }
        });

        $('#nama-fakultas').on('change', function(e) {
            var fakultas_id = e.target.value;
            $.get('/getdosen/'+fakultas_id, function(data){
                $('#pembimbing_1').empty();
                $('#pembimbing_1').append('<option disabled selected>-- Pilih Nama Pembimbing 1 --</option>');
                $('#pembimbing_2').empty();
                $('#pembimbing_2').append('<option disabled selected>-- Pilih Nama Pembimbing 2 --</option>');
                $('#penguji_1').empty();
                $('#penguji_1').append('<option disabled selected>-- Pilih Penguji 1 --</option>');
                $('#penguji_2').empty();
                $('#penguji_2').append('<option disabled selected>-- Pilih Nama Penguji 2 --</option>');

                $.each(data, function() {
                    $('#pembimbing_1').append('<option value="' +this.nama+ '">'+ this.nama +'</option>');
                    $('#pembimbing_2').append('<option value="' +this.nama+ '">'+ this.nama +'</option>');
                    $('#penguji_1').append('<option value="' +this.nama+ '">'+ this.nama +'</option>');
                    $('#penguji_2').append('<option value="' +this.nama+ '">'+ this.nama +'</option>');
                });
            });

        });



    });


</script>

@endsection