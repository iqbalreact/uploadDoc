
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIPPRIMA FEB UNTAN</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/core.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/components.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/css/colors.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{asset('assets/js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/core/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/core/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/plugins/ui/nicescroll.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/plugins/ui/drilldown.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{asset('assets/js/plugins/velocity/velocity.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/plugins/velocity/velocity.ui.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/plugins/ui/prism.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('assets/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/pages/animations_velocity_basic.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">
                SIPPRIMA FEB UNTAN
            </a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('../assets/images/image.png')}}" alt="">
                        {{-- admin login name  --}}
                        <span>{{ Auth::user()->name }}</span>
                        <i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
    
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        
                    </ul>
    
                </li>
            </ul>
		</div>
	</div>
    <!-- /main navbar -->
    
	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4>
                    <span class="text-semibold">
                        Daftar Dokumen Terupload
                    </span>
                </h4>
			</div>
		</div>
	</div>
	<!-- /page header -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">
			<!-- Main content -->
			<div class="content-wrapper">
                <div class="panel panel-flat">
                    <div class="p1">
                    @foreach ($p1 as $key => $item)
                       <div class="panel-heading">
                          <h5 class="panel-title">P{{$item[0]->id}} - {{$key}}<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
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
                                     <tr style="background-color:#ced6e0;font-weight:bold">
                                        <td>{{$item[0]->id}}.{{$loop->iteration}}</td>
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
                                             <a href="{{ url('/documents/'.$point->file) }}" target="_blank" class="btn btn-block btn-sm btn-success klikguest">
                                                <i class="icon-file-text2"></i> Lihat Dokumen
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
			</div>
			<!-- /main content -->
		</div>
		<!-- /page content -->
	</div>
	<!-- /page container -->
</body>
</html>
