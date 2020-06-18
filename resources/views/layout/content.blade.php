@extends('layouts.master')

@section('title')
    
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
                    Dashboards </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Default Dashboard </a>

                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
    
<div class="col-lg-12 col-xl-12 order-lg-1 order-xl-1">

    <!--begin:: Widgets/Trends-->
    <div class="kt-portlet kt-portlet--head--noborder kt-portlet--height-fluid">
        <div class="kt-portlet__head kt-portlet__head--noborder">
            <div class="kt-portlet__head-label">
                <h3 class="kt-portlet__head-title">
                    Trends
                </h3>
            </div>
            <div class="kt-portlet__head-toolbar">
                <div class="dropdown dropdown-inline">
                    <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-lg" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="flaticon-more-1"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <ul class="kt-nav">
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-line-chart"></i>
                                    <span class="kt-nav__link-text">Reports</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-send"></i>
                                    <span class="kt-nav__link-text">Messages</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
                                    <span class="kt-nav__link-text">Charts</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-avatar"></i>
                                    <span class="kt-nav__link-text">Members</span>
                                </a>
                            </li>
                            <li class="kt-nav__item">
                                <a href="#" class="kt-nav__link">
                                    <i class="kt-nav__link-icon flaticon2-settings"></i>
                                    <span class="kt-nav__link-text">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="kt-portlet__body kt-portlet__body--fluid kt-portlet__body--fit">
            <div class="kt-widget4 kt-widget4--sticky">
                <div class="kt-widget4__chart">
                    <canvas id="kt_chart_trends_stats" style="height: 240px;"></canvas>
                </div>
                <div class="kt-widget4__items kt-widget4__items--bottom kt-portlet__space-x kt-margin-b-20">
                    <div class="kt-widget4__item">
                        <div class="kt-widget4__img kt-widget4__img--logo">
                            <img src="assets/media/client-logos/logo3.png" alt="">
                        </div>
                        <div class="kt-widget4__info">
                            <a href="#" class="kt-widget4__title">
                                Phyton
                            </a>
                            <span class="kt-widget4__sub">
                                A Programming Language
                            </span>
                        </div>
                        <span class="kt-widget4__ext">
                            <span class="kt-widget4__number kt-font-danger">+$17</span>
                        </span>
                    </div>
                    <div class="kt-widget4__item">
                        <div class="kt-widget4__img kt-widget4__img--logo">
                            <img src="assets/media/client-logos/logo1.png" alt="">
                        </div>
                        <div class="kt-widget4__info">
                            <a href="#" class="kt-widget4__title">
                                FlyThemes
                            </a>
                            <span class="kt-widget4__sub">
                                A Let's Fly Fast Again Language
                            </span>
                        </div>
                        <span class="kt-widget4__ext">
                            <span class="kt-widget4__number kt-font-danger">+$300</span>
                        </span>
                    </div>
                    <div class="kt-widget4__item">
                        <div class="kt-widget4__img kt-widget4__img--logo">
                            <img src="assets/media/client-logos/logo2.png" alt="">
                        </div>
                        <div class="kt-widget4__info">
                            <a href="#" class="kt-widget4__title">
                                AirApp
                            </a>
                            <span class="kt-widget4__sub">
                                Awesome App For Project Management
                            </span>
                        </div>
                        <span class="kt-widget4__ext">
                            <span class="kt-widget4__number kt-font-danger">+$6700</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--end:: Widgets/Trends-->
</div>
@endsection