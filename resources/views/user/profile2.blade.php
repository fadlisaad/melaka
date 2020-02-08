@extends('layouts.user')
@section('content')
            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">EBayar</a></li>
                                        <li class="breadcrumb-item active">Profile</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Profile</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body  met-pro-bg">
                                    <div class="met-profile">
                                        <div class="row">
                                            <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                                <div class="met-profile-main">
                                                    <div class="met-profile-main-pic">
                                                        <img src="../assets/images/users/user-4.jpg" alt="" class="rounded-circle">
                                                        <span class="fro-profile_main-pic-change">
                                                            <i class="fas fa-camera"></i>
                                                        </span>
                                                    </div>
                                                    <div class="met-profile_user-detail">
                                                        <h5 class="met-user-name">Mohd Arizzudin Bin Omar </h5>                                                        
                                                        <p class="mb-0 met-user-name-post">790723046554</p>
                                                    </div>
                                                </div>                                                
                                            </div><!--end col-->
                                            <div class="col-lg-4 ml-auto">
                                                <ul class="list-unstyled personal-detail">
                                                    <li class=""><i class="dripicons-phone mr-2 text-info font-18"></i> <b> phone </b> : +91 23456 78910</li>
                                                    <li class="mt-2"><i class="dripicons-mail text-info font-18 mt-2 mr-2"></i> <b> Email </b> : ariz.omar79@gmail.com</li>
                                                    <li class="mt-2"><i class="dripicons-location text-info font-18 mt-2 mr-2"></i> <b>Location</b> : Malaysia </li>
                                                </ul>
                                                <div class="button-list btn-social-icon">                                                
                                                    <button type="button" class="btn btn-blue btn-round">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </button>
            
                                                    <button type="button" class="btn btn-secondary btn-round ml-2">
                                                        <i class="fab fa-twitter"></i>
                                                    </button>
            
                                                    <button type="button" class="btn btn-pink btn-round  ml-2">
                                                        <i class="fab fa-dribbble"></i>
                                                    </button>
                                                </div>
                                            </div><!--end col-->
                                        </div><!--end row-->
                                    </div><!--end f_profile-->                                                                                
                                </div><!--end card-body-->
            </div>
            <!-- end page content -->
@endsection