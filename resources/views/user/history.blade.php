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
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Ebayar</a></li>
                                        <li class="breadcrumb-item active">Transaction History  </li>
                                    </ol>
                                </div>
                                <h4 class="page-title"><span class="breadcrumb-item active">List of Transaction </span> History </h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <!--<h4 class="mt-0 header-title">Senarai Agensi</h4>-->
                                    <p class="text-muted mb-4 font-13">All transaction view within 1 year</p>
<p class="text-muted mb-4 font-13">Click on Account Number to view or print Transaction Statements</p>
    
                                    <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th width="227">TxnID</th>
                                            <th>Agency</th>
                                            <th>Acc Number </th>
                                            <th width="448">Acc Holder Name </th>
                                            <th>Payment Date and Time </th>
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
                              </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->  

                </div><!-- container -->

               </div>
            <!-- end page content -->
        @endsection