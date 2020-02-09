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
                        </div>
                    </div>
                    <div class="row">                        
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="setFullName">Full Name</label>
                                            <input type="text" class="form-control" id="setFullName" placeholder="Full Name">
                                        </div><!--end form-group-->                                        
                                        <div class="form-group">
                                            <label for="setEmail">Email address</label>
                                            <input type="email" class="form-control" id="setEmail" placeholder="Enter email">
                                        </div><!--end form-group-->
                                        <div class="form-group">
                                            <label for="setPassword">Password</label>
                                            <input type="password" class="form-control" id="setPassword" placeholder="Password">
                                        </div><!--end form-group-->
                                        <button type="submit" class="btn btn-secondary btn-sm">Save Change</button>
                                    </form> <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="setLinkAc">Linked Account</label>
                                            <select class="form-control" id="setLinkAc">
                                                <option>PayPal</option>
                                                <option>VISA</option>
                                                <option>ICICI</option>
                                                <option>HDFC</option>
                                            </select>
                                        </div><!--end form-group-->      
                                        <div class="form-group">
                                            <label for="setCurrency">Collect Currency</label>
                                            <select class="form-control" id="setCurrency">
                                                <option>US Dollar</option>
                                                <option>Pounds</option>
                                                <option>Euro</option>
                                                <option>Yen</option>
                                            </select>
                                        </div>  <!--end form-group-->                                                       
                                        <div class="form-group">
                                            <label for="setChangePassword">Change Wallet Password</label>
                                            <input type="password" class="form-control" id="setChangePassword" placeholder="Password">
                                        </div> <!--end form-group-->                                                   
                                        <button type="submit" class="btn btn-secondary btn-sm">Save Change</button>
                                    </form> <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 mb-3 header-title">Notification Setting</h4>
                                    <div class="text-center">
                                        <img src="../assets/images/widgets/notify.svg" alt="" class="mb-3" height="115">
                                    </div>
                                    <form>
                                        <div class="custom-control custom-switch switch-success mb-2">
                                            <input type="checkbox" class="custom-control-input" id="ICOnotify" checked="">
                                            <label class="custom-control-label" for="ICOnotify">Get notification, New coin ICO in crypto market</label>
                                        </div>
                                        <div class="custom-control custom-switch switch-success mb-2">
                                            <input type="checkbox" class="custom-control-input" id="notyfySound">
                                            <label class="custom-control-label" for="notyfySound">Notification with sound</label>
                                        </div>
                                        <div class="custom-control custom-switch switch-success mb-2">
                                            <input type="checkbox" class="custom-control-input" id="notifyF_friends">
                                            <label class="custom-control-label" for="notifyF_friends">Get notification, Only my facebook's friends</label>
                                        </div>
                                        <div class="custom-control custom-switch switch-success">
                                            <input type="checkbox" class="custom-control-input" id="autoLockWallet" checked="">
                                            <label class="custom-control-label" for="autoLockWallet">Auto lock my wallet</label>
                                        </div>
                                    </form> <!--end form-->
                                </div><!--end card-body-->
                            </div><!--end card-->
                        </div><!--end col-->
                    </div>
@endsection