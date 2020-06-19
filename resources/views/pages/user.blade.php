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
               </tr>
            </thead>
            <tbody>
                @foreach ($p1 as $key => $item)
                    <tr style="background-color:#ada795;font-weight:bold">
                       <td>1. {{$loop->iteration}}</td>
                       </td>
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

@endsection