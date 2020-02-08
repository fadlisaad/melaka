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
                                        <li class="breadcrumb-item active">Carian Persendirian </li>
                                    </ol>
                                </div>
                                <h4 class="page-title"><span class="breadcrumb-item active">List of Carian Persendirian</span></h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <h4 class="mt-0 header-title">Agency : Pejabat Tanah Negeri Melaka</h4>
                                    <p class="text-muted mb-4 font-13">Notice*
Private search can be printed only 3 times.</p>
    
                                    <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Account Number </th>
                                            <th width="517">Account Holder Name </th>
                                            <th>Bill Name </th>
                                            <th width="158">Action</th>
                                        </tr>
                                        </thead>
    
    
                                        <tbody>
                                        <tr>
                                          <td height="20" width="279">040108PN000530510M100900194</td>
                                          <td>MOHD ARIZZUDIN BIN ALI </td>
                                          <td width="326"><div align="center">Cukai Tanah (PTGNM) </div></td>
                                          <td>
                                              <a href=""><i class="fas fa-print" title="Cetak Carian"></i></a>                                            </td>
                                        </tr>
                                        <tr>
                                          <td height="20">040108PN000530510M100901976</td>
                                          <td>MOHD ARIZZUDIN BIN ALI </td>
                                          <td><div align="center">Zakat (MAIM) </div></td>
                                          <td>
                                              <a href=""><i class="fas fa-print" title="Cetak Carian"></i></a>    </a> </td>
                                        </tr>
                                        <tr>
                                          <td height="20">040108PN000530510M100911254</td>
                                          <td>MOHD ARIZZUDIN BIN ALI </td>
                                          <td><div align="center">Cukai Petak (PTGNM) </div></td>
                                          <td>
                                              <a href=""><i class="fas fa-print" title="Cetak Carian"></i></a>    </a>                                            </td>
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