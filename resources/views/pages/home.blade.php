
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
                <p>Selamat Datang di</p>
				<h4>
                    <span class="text-semibold">SIPPRIMA FEB Universitas Tanjungpura</span>
                </h4>
                <span class="text-semibold">
                    Solid, Integritas, Prima, Profesional, Ramah, Integritas, Melayani dan Akuntabel
                </span>
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
                    <img src="{{asset('assets/images/banner.jpg')}}" alt=""
                        style="align-items: center"
                        width="100%";
                    >
                </div>
				<!-- Border animation -->
				<div class="panel panel-flat">
					<div class="panel-heading">
                        <h5 class="panel-title">
                            <span class="text-semibold">
                                Menu Pengungkit
                            </span>
                        </h5>
                        <span>Fakultas Ekonomi dan Bisnis Universitas Tanjungpura</span>
					</div>
					<div class="panel-body">
                        <div class="panel-group" id="accordion-styled">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="panel panel-body border-top-teal text-center">
                                        <h6 class="no-margin text-semibold">P1 - Manajemen Perubahan</h6>
                                        <p class="mb-15 text-muted">Zona Integritas Fakultas Ekonomi dan Bisnis Universitas Tanjungpura</p>            
                                        
                                        <form action="{{route('cekberkas')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="1">
                                            <button type="submit" class="btn btn-block bg-teal">Lihat Dokumen</button>
                                        </form>
                                        
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="panel panel-body border-top-indigo text-center">
                                        <h6 class="no-margin text-semibold">P2 - Penataan Tatalaksana</h6>
                                        <p class="mb-15 text-muted">Zona Integritas Fakultas Ekonomi dan Bisnis Universitas Tanjungpura</p>            
                                         <form action="{{route('cekberkas')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="2">
                                            <button type="submit" class="btn btn-block bg-indigo">Lihat Dokumen</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="panel panel-body border-top-blue text-center">
                                        <h6 class="no-margin text-semibold">P3 - Penataan Sistem Manajemen SDM</h6>
                                        <p class="mb-15 text-muted">Zona Integritas Fakultas Ekonomi dan Bisnis Universitas Tanjungpura</p>            
                                        <form action="{{route('cekberkas')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="3">
                                            <button type="submit" class="btn btn-block bg-blue">Lihat Dokumen</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                                                
                                <div class="col-md-4">
                                    <div class="panel panel-body border-top-orange text-center">
                                        <h6 class="no-margin text-semibold">P4 - Penguatan Akuntabilitas</h6>
                                        <p class="mb-15 text-muted">Zona Integritas Fakultas Ekonomi dan Bisnis Universitas Tanjungpura</p>            
                                        <form action="{{route('cekberkas')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="4">
                                            <button type="submit" class="btn btn-block bg-orange">Lihat Dokumen</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="panel panel-body border-top-success text-center">
                                        <h6 class="no-margin text-semibold">P5 - Penguatan Pengawasan</h6>
                                        <p class="mb-15 text-muted">Zona Integritas Fakultas Ekonomi dan Bisnis Universitas Tanjungpura</p>            
                                        <form action="{{route('cekberkas')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="5">
                                            <button type="submit" class="btn btn-block bg-success">Lihat Dokumen</button>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="panel panel-body border-top-warning text-center">
                                        <h6 class="no-margin text-semibold">P6 - Peningkatan Kualitas Pelayanan Publik</h6>
                                        <p class="mb-15 text-muted">Zona Integritas Fakultas Ekonomi dan Bisnis Universitas Tanjungpura</p>            
                                        <form action="{{route('cekberkas')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="6">
                                            <button type="submit" class="btn btn-block bg-warning">Lihat Dokumen</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
						</div>
					</div>
				</div>
				<!-- /border animation -->
			</div>
			<!-- /main content -->
		</div>
		<!-- /page content -->
	</div>
	<!-- /page container -->
</body>
</html>
