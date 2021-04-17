@extends('company.layout.base')
@section('title', 'Table')
@section('content')
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
   <!-- BEGIN: Head-->
   <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>DataTables - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{asset('app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->
   <!-- BEGIN: Body-->
   <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">
      <!-- BEGIN: Content-->
      <div class="app-content content ">
         <div class="content-overlay"></div>
         <div class="header-navbar-shadow"></div>
         <div class="content-wrapper">
            <div class="content-header row">
               <div class="content-header-left col-md-9 col-12 mb-2">
                  <div class="row breadcrumbs-top">
                     <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">DataTables</h2>
                        <div class="breadcrumb-wrapper">
                           <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="index.html">Home</a>
                              </li>
                              <li class="breadcrumb-item"><a href="#">Datatable</a>
                              </li>
                              <li class="breadcrumb-item active">Basic
                              </li>
                           </ol>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="content-body">
               <div class="row">
                  <div class="col-12">
                     <p>Read full documnetation <a href="https://datatables.net/" target="_blank">here</a></p>
                  </div>
               </div>

               @if(session()->has('msg'))
                     <div class="alert alert-success">
                     {{ session()->get('msg') }}
                     </div>
                     @endif
                     
               <!-- Basic table -->
               <section id="basic-datatable">
                  <div class="row">
                     <div class="col-12">
                        <div class="card">
                           <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                              <div class="card-header border-bottom p-1">
                                 <div class="head-label">
                                    <h6 class="mb-0">DataTable with Buttons</h6>
                                 </div>
                                 <div class="dt-action-buttons text-right">
                                    <div class="dt-buttons d-inline-flex">
                                       <button class="dt-button buttons-collection btn btn-outline-secondary dropdown-toggle mr-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="true">
                                          <span>
                                             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-share font-small-4 mr-50">
                                                <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                                                <polyline points="16 6 12 2 8 6"></polyline>
                                                <line x1="12" y1="2" x2="12" y2="15"></line>
                                             </svg>
                                             Export
                                          </span>
                                       </button>
                                       <a class="btn btn-primary" href="{{ url('customer-add') }}" >
                                             Add New Record
                                       </a>
                                    </div>
                                 </div>
                              </div>
                              <div class="d-flex justify-content-between align-items-center mx-0 row">
                                 <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="DataTables_Table_0_length">
                                       <label>
                                          Show 
                                          <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select form-control">
                                             <option value="7">7</option>
                                             <option value="10">10</option>
                                             <option value="25">25</option>
                                             <option value="50">50</option>
                                             <option value="75">75</option>
                                             <option value="100">100</option>
                                          </select>
                                          entries
                                       </label>
                                    </div>
                                 </div>
                                 <div class="col-sm-12 col-md-6">
                                    <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_0"></label></div>
                                 </div>
                              </div>
                              <table class="datatables-basic table dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1033px;">
                                 <thead>
                                    <tr role="row">
                                       <th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 23px; display: none;" aria-label=""></th>
                                       <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 20px;" aria-label="Name: activate to sort column ascending">No</th>
                                       <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 50px;" aria-label="Name: activate to sort column ascending">Customer Name</th>
                                       <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 50px;" aria-label="Email: activate to sort column ascending">Customer Email</th>
                                       <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 118px;text-align: center;" aria-label="Actions">Actions</th>
                                    </tr>
                                 </thead>
                                 <?php $no=1; ?>
                                 <tbody>
                                    @foreach($customer as $customers)
                                    <tr class="odd">
                                    <td>{{ $no++ }}</td>
                                       <td>{{ $customers->customer_name }}</td>
                                       <td>{{ $customers->customer_email }}</td>
                                       <td><a class="btn btn-secondary"  href="{{ url('customer-view',$customers->id) }}">View</a>
                                       <a class="btn btn-danger" href="{{ url('customer-delete',$customers->id) }}">Delete</a>
                                       <a class="btn btn-primary" href="{{ url('customer-edit',$customers->id) }}">Edit</a>
                                       <a class="btn btn-info" href="{{ url('customer-viewfile',$customers->id) }}">View File</a></td>
                                       @endforeach
                                    </tr>
                                 </tbody>
                              </table>
                              <div class="d-flex justify-content-between mx-0 row">
                                 <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                 </div>
                                 <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                       <ul class="pagination">
                                          <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">&nbsp;</a></li>
                                          <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">&nbsp;</a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
      </div>
      <!-- END: Content-->
   </body>
   <!-- END: Body-->
</html>
@endsection