@extends('admin.layout.base')
@section('title', 'Display Company')
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
      <title>User View - Vuexy - Bootstrap HTML admin template</title>
      <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
      <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

      <!-- BEGIN: Vendor CSS-->
      <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
      <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
      <!-- END: Vendor CSS-->

      <!-- BEGIN: Theme CSS-->
      <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
      <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
      <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
      <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
      <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/bordered-layout.css">
      <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

      <!-- BEGIN: Page CSS-->
      <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
      <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-invoice-list.css">
      <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/app-user.css">
      <!-- END: Page CSS-->

      <!-- BEGIN: Custom CSS-->
      <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
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
            </div>
            <div class="content-body">
                <section class="app-user-view">
                    <!-- User Card & Plan Starts -->
                    <div class="row">
                        <!-- User Card starts-->
                        <div class="col-xl-12 col-lg-10 col-md-10">
                            <div class="card user-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
                                            <div class="user-avatar-section">
                                                <div class="d-flex justify-content-start">
                                                <img src="{{ asset('uplode/companylogo/' .  $company->customFile) }}" alt="image" width="114px;" height="104px;"/>
                                                    <div class="d-flex flex-column ml-1" >
                                                        <div class="user-info mb-1" style="margin-left:80px;">
                                                            <h4 class="mb-0">{{$company->company_name}}</h4>
                                                            <span class="card-text">{{$company->company_email}}</span>
                                                        </div>
                                                        <div class="d-flex flex-wrap" style="margin-left:80px;">
                                                        <a class="btn btn-primary" href="{{ url('company-edit',$company->id) }}">Edit</a>
                                                            <a class="btn btn-secondary" href="{{ url('company-list') }}" style="margin-left:20px;">Back</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between mb-50" style="padding-top:30px;">
                                             <h3>File Storage</h3>
                                          </div>
                                          <h5>{{$last}} GB of 15 GB used </h5>
                                          <div class="progress progress-bar-primary progress-md mb-0" style="height: 10px">
                                             <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="70" aria-valuemax="100" style="width:{{$last}}%"></div>
                                          </div>
                                       </div>
                                        <div class="col-xl-6 col-lg-12 mt-10 mt-xl-0" >
                                            <div class="user-info-wrapper" style="margin-left:90px;">
                                                <div class="d-flex flex-wrap">
                                                    <div class="user-info-title">
                                                        <i data-feather="user" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">Address</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{$company->company_address}}</p>
                                                </div>
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="check" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">Postcode</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{$company->company_postcode}}</p>
                                                </div>
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="flag" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">Country</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{$company->country}}</p>
                                                </div>
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="star" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">Role</span>
                                                    </div>
                                                    <p class="card-text mb-0">Company</p>
                                                </div>
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="flag" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">State</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{$company->state}}</p>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <div class="user-info-title">
                                                        <i data-feather="phone" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">Contact</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{$company->company_number}}</p>
                                                </div>
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="flag" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">City</span>
                                                    </div>
                                                    <p class="card-text mb-0">{{$company->city}}</p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /User Card Ends-->
                    </div>
                    <!-- User Card & Plan Ends -->


             
</body>
<!-- END: Body-->
</html>
@endsection