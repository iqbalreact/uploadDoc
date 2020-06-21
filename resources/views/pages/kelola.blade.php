@extends('layout/master')
@section('title')
<title>Dashboard - Daftar Dokument</title>
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
         <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Pertanyaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($berkas as $item)
                <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{$item->daftar_pertanyaan}}</td>
                     <td>
                        <a href="#modalHapusMhs" data-toggle="modal" id="tombol-hapus-mhs" data-target="#modalHapusMhs" class="btn btn-danger btn-sm" title="Hapus" data-idmhs="{{$item->id}}">
                           Hapus
                        </a>
                     </td>
                </tr>
                @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>

<div class="modal fade" id="modalHapusMhs" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title">Hapus Dokumen</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body">
               <form action="{{route('deleteberkas')}}" method="POST">
                   @csrf
                   <input type="hidden" name="id" id="id-mahasiswa">
                   <p class="text-center mt-3">Apakah Anda Yakin Akan Menghapus ?</p>
               </div>
               <div class="modal-footer">
                   <button type="submit" class="btn btn-danger">Yakin</button>
               </div>
           </form>
       </div>
   </div>
</div>

<script>
   $(document).on("click", "#tombol-hapus-mhs", function() {
       var idMahasiswa = $(this).data('idmhs');
       $('#id-mahasiswa').val(idMahasiswa);

   });
</script>

@endsection