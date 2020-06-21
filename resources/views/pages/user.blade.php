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
                  <th>Kode</th>
                  <th colspan="2">Sub Pengungkit</th>
                  <th>Lampiran Link(Document)</th>
                  <th>Aksi</th>
               </tr>
            </thead>
            <tbody>
                @foreach ($p1 as $key => $item)
                    <tr style="background-color:#ada795;font-weight:bold">
                       <td>1. {{$loop->iteration}}</td>
                       </td>
                       <td colspan="4">{{$key}}</td>
                    </tr>
                    @foreach ($item as $key2 => $point)
                    <tr>
                        <td></td>
                        <td>{{$loop->iteration}}</td>
                        <td>
                            {{$point->daftar_pertanyaan}}
                        <td>
                            <a href="{{ url('/documents/'.$point->file) }}" target="_blank" class="btn btn-block btn-sm btn-info klikguest">
                              Open
                            </a>
                        </td>
                        <td>     
                           <a href="#modalHapusMhs" data-idmhs="{{$point->id}}" class="btn btn-danger" data-toggle="modal" id="tombol-hapus-mhs" data-target="#modalHapusMhs" class="btn btn-danger btn-sm" title="Hapus" data-idmhs="">
                              Hapus
                           </a>
                        </td>
                    </tr>
                    @endforeach
                @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>

<div class="panel panel-flat">
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
          <table class="table table-bordered">
             <thead>
                <tr>
                   <th>Kode</th>
                   <th colspan="2">Sub Pengungkit</th>
                   <th>Lampiran Link(Document)</th>
                </tr>
             </thead>
             <tbody>
                 @foreach ($p2 as $key => $item)
                     <tr style="background-color:#ada795;font-weight:bold">
                        <td>2. {{$loop->iteration}}</td>
                        <td colspan="3">{{$key}}</td>
                     </tr>
                     @foreach ($item as $key2 => $point)
                     <tr>
                         <td></td>
                         <td>{{$loop->iteration}}</td>
                         <td>
                             {{$point->daftar_pertanyaan}}
                         <td>
                             <a href="{{ url('/documents/'.$point->file) }}" target="_blank"><button class="btn btn-block btn-sm btn-info klikguest" data-idsub="2" id="klikguest"><i class="ace-icon fa fa-file-text-o bigger-1"></i>
                                 <span>File</span></button>
                             </a>
                         </td>
                     </tr>
                     @endforeach
                 @endforeach
             </tbody>
          </table>
       </div>
    </div>
</div>

<div class="panel panel-flat">
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
          <table class="table table-bordered">
             <thead>
                <tr>
                   <th>Kode</th>
                   <th colspan="2">Sub Pengungkit</th>
                   <th>Lampiran Link(Document)</th>
                </tr>
             </thead>
             <tbody>
                 @foreach ($p3 as $key => $item)
                     <tr style="background-color:#ada795;font-weight:bold">
                        <td>3. {{$loop->iteration}}</td>
                        <td colspan="3">{{$key}}</td>
                     </tr>
                     @foreach ($item as $key2 => $point)
                     <tr>
                         <td></td>
                         <td>{{$loop->iteration}}</td>
                         <td>
                             {{$point->daftar_pertanyaan}}
                         <td>
                             <a href="{{ url('/documents/'.$point->file) }}" target="_blank"><button class="btn btn-block btn-sm btn-info klikguest" data-idsub="2" id="klikguest"><i class="ace-icon fa fa-file-text-o bigger-1"></i>
                                 <span>File</span></button>
                             </a>
                         </td>
                     </tr>
                     @endforeach
                 @endforeach
             </tbody>
          </table>
       </div>
    </div>
</div>

<div class="panel panel-flat">
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
          <table class="table table-bordered">
             <thead>
                <tr>
                   <th>Kode</th>
                   <th colspan="2">Sub Pengungkit</th>
                   <th>Lampiran Link(Document)</th>
                </tr>
             </thead>
             <tbody>
                 @foreach ($p4 as $key => $item)
                     <tr style="background-color:#ada795;font-weight:bold">
                        <td>4. {{$loop->iteration}}</td>
                        <td colspan="3">{{$key}}</td>
                     </tr>
                     @foreach ($item as $key2 => $point)
                     <tr>
                         <td></td>
                         <td>{{$loop->iteration}}</td>
                         <td>
                             {{$point->daftar_pertanyaan}}
                         <td>
                             <a href="{{ url('/documents/'.$point->file) }}" target="_blank"><button class="btn btn-block btn-sm btn-info klikguest" data-idsub="2" id="klikguest"><i class="ace-icon fa fa-file-text-o bigger-1"></i>
                                 <span>File</span></button>
                             </a>
                         </td>
                     </tr>
                     @endforeach
                 @endforeach
             </tbody>
          </table>
       </div>
    </div>
</div>

<div class="panel panel-flat">
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
          <table class="table table-bordered">
             <thead>
                <tr>
                   <th>Kode</th>
                   <th colspan="2">Sub Pengungkit</th>
                   <th>Lampiran Link(Document)</th>
                </tr>
             </thead>
             <tbody>
                 @foreach ($p5 as $key => $item)
                     <tr style="background-color:#ada795;font-weight:bold">
                        <td>5. {{$loop->iteration}}</td>
                        <td colspan="3">{{$key}}</td>
                     </tr>
                     @foreach ($item as $key2 => $point)
                     <tr>
                         <td></td>
                         <td>{{$loop->iteration}}</td>
                         <td>
                             {{$point->daftar_pertanyaan}}
                         <td>
                             <a href="{{ url('/documents/'.$point->file) }}" target="_blank"><button class="btn btn-block btn-sm btn-info klikguest" data-idsub="2" id="klikguest"><i class="ace-icon fa fa-file-text-o bigger-1"></i>
                                 <span>File</span></button>
                             </a>
                         </td>
                     </tr>
                     @endforeach
                 @endforeach
             </tbody>
          </table>
       </div>
    </div>
</div>

<div class="panel panel-flat">
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
          <table class="table table-bordered">
             <thead>
                <tr>
                   <th>Kode</th>
                   <th colspan="2">Sub Pengungkit</th>
                   <th>Lampiran Link(Document)</th>
                </tr>
             </thead>
             <tbody>
                 @foreach ($p6 as $key => $item)
                     <tr style="background-color:#ada795;font-weight:bold">
                        <td>6. {{$loop->iteration}}</td>
                        <td colspan="3">{{$key}}</td>
                     </tr>
                     @foreach ($item as $key2 => $point)
                     <tr>
                         <td></td>
                         <td>{{$loop->iteration}}</td>
                         <td>
                             {{$point->daftar_pertanyaan}}
                         <td>
                             <a href="{{ url('/documents/'.$point->file) }}" target="_blank"><button class="btn btn-block btn-sm btn-info klikguest" data-idsub="2" id="klikguest"><i class="ace-icon fa fa-file-text-o bigger-1"></i>
                                 <span>File</span></button>
                             </a>
                         </td>
                         
                     </tr>
                     @endforeach
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