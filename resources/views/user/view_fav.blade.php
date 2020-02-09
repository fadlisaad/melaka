@extends('layouts.user')
@section('content')
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Ebayar</a></li>
                                        <li class="breadcrumb-item active">Favourite Payment List </li>
                                    </ol>
                                </div>
                                <h4 class="page-title"><span class="breadcrumb-item active">List of Favourite Payee</span></h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div>
                    <!-- end page title end breadcrumb -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
								<form id="addfav" action="/user/add_fav">
                                    <button class="btn btn-primary px-4 btn-rounded float-right mt-0 mb-3" type="submit">+ Add Favourite Payee</button></form>
    
                                    <!--<h4 class="mt-0 header-title">Senarai Agensi</h4>-->
                                    <p class="text-muted mb-4 font-13">Below are the list of bills that you have registered. You may view the details of payee or delete the bill account.</p>
    
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
                                              <a href=""><i class="far fa-edit text-info mr-1" title="Kemaskini Agensi"></i></a>
                                              <a href=""><i class="far fa-trash-alt text-danger" title="Nyahaktif Agensi"></i></a>                                            </td>
                                        </tr>
                                        <tr>
                                          <td height="20">040108PN000530510M100901976</td>
                                          <td>MOHD ARIZZUDIN BIN ALI </td>
                                          <td><div align="center">Zakat (MAIM) </div></td>
                                          <td><a href=""><i class="far fa-edit text-info mr-1" title="Kemaskini Agensi"></i></a> <a href=""><i class="far fa-trash-alt text-danger" title="Nyahaktif Agensi"></i></a> </td>
                                        </tr>
                                        <tr>
                                          <td height="20">040108PN000530510M100911254</td>
                                          <td>MOHD ARIZZUDIN BIN ALI </td>
                                          <td><div align="center">Cukai Petak (PTGNM) </div></td>
                                          <td>
                                              <a href=""><i class="far fa-edit text-info mr-1"></i></a>
                                              <a href=""><i class="far fa-trash-alt text-danger"></i></a>                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>        
                              </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->  
          @endsection