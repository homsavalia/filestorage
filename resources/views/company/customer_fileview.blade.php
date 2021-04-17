@extends('company.layout.base')
@section('title', 'File List')
@section('content')
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/plugins/extensions/ext-component-tree.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/pages/app-file-manager.css')}}">
    <!-- END: Page CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern content-left-sidebar navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">

    <!-- BEGIN: Content-->
    <div class="app-content content file-manager-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-area-wrapper">
            <div class="sidebar-left">
                
            </div>
            <div class="content-right">
                <div class="content-wrapper">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <!-- overlay container -->
                        <div class="body-content-overlay"></div>

                        <!-- file manager app content starts -->
                        <div class="file-manager-main-content" style="width:1047px;">
                            <!-- search area start -->
                            <div class="file-manager-content-header d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="sidebar-toggle d-block d-xl-none float-left align-middle ml-1">
                                        <i data-feather="menu" class="font-medium-5"></i>
                                    </div>
                                    <div class="input-group input-group-merge shadow-none m-0 flex-grow-1">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text border-0">
                                                <i data-feather="search"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control files-filter border-0 bg-transparent" placeholder="Search" />
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="file-actions">
                                        <i data-feather="arrow-down-circle" class="font-medium-2 cursor-pointer d-sm-inline-block d-none mr-50"></i>
                                        <i data-feather="trash" class="font-medium-2 cursor-pointer d-sm-inline-block d-none mr-50"></i>
                                        <i data-feather="alert-circle" class="font-medium-2 cursor-pointer d-sm-inline-block d-none" data-toggle="modal" data-target="#app-file-manager-info-sidebar"></i>
                                        <div class="dropdown d-inline-block">
                                            <i class="font-medium-2 cursor-pointer" data-feather="more-vertical" role="button" id="fileActions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            </i>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="fileActions">
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i data-feather="move" class="cursor-pointer mr-50"></i>
                                                    <span class="align-middle">Open with</span>
                                                </a>
                                                <a class="dropdown-item d-sm-none d-block" href="javascript:void(0);" data-toggle="modal" data-target="#app-file-manager-info-sidebar">
                                                    <i data-feather="alert-circle" class="cursor-pointer mr-50"></i>
                                                    <span class="align-middle">More Options</span>
                                                </a>
                                                <a class="dropdown-item d-sm-none d-block" href="javascript:void(0);">
                                                    <i data-feather="trash" class="cursor-pointer mr-50"></i>
                                                    <span class="align-middle">Delete</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i data-feather="plus" class="cursor-pointer mr-50"></i>
                                                    <span class="align-middle">Add shortcut</span>
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i data-feather="folder-plus" class="cursor-pointer mr-50"></i>
                                                    <span class="align-middle">Move to</span>
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i data-feather="star" class="cursor-pointer mr-50"></i>
                                                    <span class="align-middle">Add to starred</span>
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i data-feather="droplet" class="cursor-pointer mr-50"></i>
                                                    <span class="align-middle">Change color</span>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="javascript:void(0);">
                                                    <i data-feather="download" class="cursor-pointer mr-50"></i>
                                                    <span class="align-middle">Download</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn-group btn-group-toggle view-toggle ml-50" data-toggle="buttons">
                                        <label class="btn btn-outline-primary p-50 btn-sm active">
                                            <input type="radio" name="view-btn-radio" data-view="grid" checked />
                                            <i data-feather="grid"></i>
                                        </label>
                                        <label class="btn btn-outline-primary p-50 btn-sm">
                                            <input type="radio" name="view-btn-radio" data-view="list" />
                                            <i data-feather="list"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- search area ends here -->

                            <div class="file-manager-content-body">

                                <!-- Files Container Starts -->
                                <div class="view-container">
                                    <h6 class="files-section-title mt-2 mb-75">Files</h6>
                                    @foreach ($file as $name)
                                    <div class="card file-manager-item file">
                                        <div class="card-img-top file-logo-wrapper">
                                            <div class="d-flex align-items-center justify-content-center w-100">
                                            <div class="avatar bg-light-primary">
                                                <div class="avatar-content" style="font-size:large;height:60px;width:60px;">
                                                    {{strtoupper(substr(strrchr($name->file_name,'.'),1,1))}}
                                                </div>
                                             </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="content-wrapper">
                                                <p class="card-text file-name mb-0" style="text-align:center;">
                                                <a href="{{asset('files')}}/{{$name->uid}}/{{$name->file_name}}" download="{{$name->file_name}}">
                                                {{ucwords(str_replace('_',' ',$name->file_name))}}
                                                </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                </div>
                                <!-- /Files Container Ends -->         

                            </div>
                        </div>
                        
                        <!-- file manager app content ends -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/app-file-manager.js')}}"></script>
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>
@endsection