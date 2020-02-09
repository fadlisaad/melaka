@extends('layouts.user')

@section('css')
<!-- DataTables -->
<link href="/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
@endsection

@section('content')
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-right">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">EBayar</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card crm-data-card">
                                <div class="card-body"> 
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="data-icon">
                                                <i class="fas fa-dollar-sign rounded-circle bg-soft-warning"></i>
                                            </div>
                                        </div><!-- end col-->
                                        <div class="col-8">
                                            <h3>63</h3>
                                            <p class="text-muted font-14 mb-0">Total Transaction</p>
                                        </div><!-- end col-->
                                    </div><!-- end row-->                                                                                  
                                </div><!--end card-body--> 
                            </div><!--end card-->   
                        </div><!-- end col-->
                        <div class="col-md-6">
                            <div class="card crm-data-card">
                                <div class="card-body"> 
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="data-icon ">
                                                <i class="far fa-user rounded-circle bg-soft-success"></i>
                                            </div>
                                        </div><!-- end col-->
                                        <div class="col-8">
                                            <h3>10k</h3>
                                            <p class="text-muted font-14 mb-0">New Customers</p>
                                        </div><!-- end col-->
                                    </div><!-- end row-->
                                </div><!--end card-body--> 
                            </div><!--end card-->
                        </div><!-- end col-->
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card crm-data-card">
                                <div class="card-body"> 
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="data-icon">
                                                <i class="far fa-handshake rounded-circle bg-soft-secondary"></i>
                                            </div>
                                        </div><!-- end col-->
                                        <div class="col-8">
                                            <h3>720</h3>
                                            <p class="text-muted font-14 mb-0">New Deals</p>
                                        </div><!-- end col-->
                                    </div><!-- end row-->                                                                                     
                                </div><!--end card-body--> 
                            </div><!--end card-->                                      
                        </div><!-- end col-->
                        <div class="col-md-6">
                            <div class="card crm-data-card">
                                <div class="card-body"> 
                                    <div class="row">
                                        <div class="col-4 align-self-center">
                                            <div class="data-icon">
                                                <i class="far fa-registered rounded-circle bg-soft-pink"></i>
                                            </div>
                                        </div><!-- end col-->
                                        <div class="col-8">
                                            <h3>964</h3>
                                            <p class="text-muted font-14 mb-0">New Register</p>
                                        </div><!-- end col-->
                                    </div><!-- end row-->
                                </div><!--end card-body--> 
                            </div><!--end card-->   
                        </div><!-- end col-->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-border">
                        <div class="card-body">
                            <h4 class="card-title mt-0">Announcement</h4>
                            <p class="card-text text-muted">New service has been added. You can now choose your favourite payment and pay</p>
                            <a href="/user/fav" class="btn btn-primary">Go to Favourite Payment</a>   
                        </div><!--end card -body-->
                    </div>
                </div>
            </div><!--end row-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-3">Transaction History</h4>
                            <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th width="227">TxnID</th>
                                    <th>Agency</th>
                                    <th>Acc Number </th>
                                    <th width="448">Acc Holder Name </th>
                                    <th>Date and Time </th>
                                    <th>Amount (RM) </th>
                                    <th width="78">Action</th>
                                </tr>
                                </thead>


                                <tbody>
                                <tr>
                                  <td height="20" width="29">1</td>
                                  <td>040108PN000530510M100900194</td>
                                  <td width="55">PTGNM</td>
                                  <td width="130">1417097687</td>
                                  <td>MOHD ARIZZUDIN BIN ALI </td>
                                  <td width="190">2020-02-01 12:15:30 </td>
                                  <td width="107"><div align="right">250.00</div></td>
                                  <td>
                                      <div align="center"><a href=""><i class="far fa-eye text-info mr-1" title="View Detail"></i></a> </div></td>
                                </tr>
                                <tr>
                                  <td height="20">2</td>
                                  <td>040108PN000530510M100900194</td>
                                  <td>PTGNM</td>
                                  <td>1417097687</td>
                                  <td>MOHD ARIZZUDIN BIN ALI </td>
                                  <td>2020-02-01 02:16:00 </td>
                                  <td><div align="right">82.00</div></td>
                                  <td>
                                      <div align="center"><a href=""><i class="far fa-eye text-info mr-1" title="View Detail"></i></a> </div></td>
                                </tr>
                                </tbody>
                            </table>  
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->

@endsection

@section('js')
<script src="/assets/plugins/moment/moment.js"></script>
<script src="/assets/plugins/apexcharts/apexcharts.min.js"></script>
<script src="/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="/assets/pages/jquery.crm_dashboard.init.js"></script>

<!-- Required datatable js -->
<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="/assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables/jszip.min.js"></script>
<script src="/assets/plugins/datatables/pdfmake.min.js"></script>
<script src="/assets/plugins/datatables/vfs_fonts.js"></script>
<script src="/assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="/assets/plugins/datatables/buttons.print.min.js"></script>
<script src="/assets/plugins/datatables/buttons.colVis.min.js"></script>
<!-- Responsive examples -->
<script src="/assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
<script src="/assets/pages/jquery.datatable.init.js"></script>
@endsection