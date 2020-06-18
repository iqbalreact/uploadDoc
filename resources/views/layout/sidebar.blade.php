<!-- Main sidebar -->
<div class="sidebar sidebar-main">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="category-content">
                <div class="media">
                    <a href="#" class="media-left"><img src="{{asset('../assets/images/image.png')}}" class="img-circle img-sm" alt=""></a>
                    <div class="media-body">
                        {{-- admin name section --}}
                        <span class="media-heading text-semibold">Hello, Admin</span>
                        <div class="text-size-mini text-muted">
                            <i class="icon-pin text-size-small"></i> &nbsp;Pontianak
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">
                    <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li><a href="{{url('/')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                    <li class="nav-item nav-item-submenu">
                        <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Upload Dokumen Proses</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Layouts" style="display: none;">
                            <li class="nav-item"><a href="{{url('/')}}"><span>MANAJEMEN PERUBAHAN</span></a></li>
                            <li class="nav-item"><a href="{{url('/')}}"><span>PENATAAN TATALAKSANA</span></a></li>
                            <li class="nav-item"><a href="{{url('/')}}"><span>PENATAAN SISTEM MANAJEMEN SDM</span></a></li>
                            <li class="nav-item"><a href="{{url('/')}}"><span>PENGUATAN AKUNTABILITAS</span></a></li>
                            <li class="nav-item"><a href="{{url('/')}}"><span>PENGUATAN PENGAWASAN</span></a></li>
                            <li class="nav-item"><a href="{{url('/')}}"><span>PENINGKATAN KUALITAS PELAYANAN PUBLIK</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
<!-- /main sidebar -->
