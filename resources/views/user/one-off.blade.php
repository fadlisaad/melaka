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
                            <li class="breadcrumb-item active">One Off Payment </li>
                        </ol>
                    </div>
                    <h4 class="page-title"><span class="mt-0 header-title">One Off Payment </span></h4>
                </div><!--end page-title-box-->
            </div><!--end col-->
        </div>
		<div class="card">
            <div class="card-body">
                <p class="text-muted mb-3">To proceed with your bill payment, please select the account type and agency's name listed below.</p>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-right">Agency</label>
                    <div class="col-sm-10">
                        <select class="form-control">
                            <option>Select</option>
                            <option>Large select</option>
                            <option>Small select</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-right">Bill Payment Type</label>
                    <div class="col-sm-10">
                        <select class="form-control">
                            <option>Select</option>
                            <option>Large select</option>
                            <option>Small select</option>
                        </select>
                    </div>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
    </div> <!-- end col -->
</div>
<!-- end page content -->
@endsection