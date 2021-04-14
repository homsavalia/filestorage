@extends('admin.layout.base')
@section('title', 'Edit Company')
@section('content')
<div class="app-content content ">
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
   <div class="content-header row">
   </div>
   <div class="content-body">
      <!-- Dashboard Ecommerce Starts -->
      <section id="dashboard-ecommerce">
         <div class="row match-height">
            <!-- Medal Card -->
            <!-- jQuery Validation -->
            <div class="col-md-12 col-12">
               <div class="card">
                  <div class="card-header">
                     <h4 class="card-title">Add Company</h4>
                  </div>
                  <div class="card-body">
                     @if ($errors->any())
                     <div class="alert alert-danger">
                        <ul>
                           @foreach ($errors->all() as $error)
                           <div class="alert alert-error alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              {{ $error }}
                           </div>
                           @endforeach

                     @if(session()->has('msg'))
                     <div class="alert alert-success">
                     {{ session()->get('msg') }}
                     </div>
                     @endif

                        </ul>
                     </div>
                     @endif
                     @if(session()->get('error'))
                     <div class="alert alert-danger">
                        {{ session()->get('error') }}  
                     </div>
                     @endif
                     <form id="jquery-val-form" method="post" enctype="multipart/form-data" action="{{url('company-update',$company->id)}}" >
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                           <label class="form-label" for="company_name">Company Name *</label>
                           <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Company Name" value="{{$company->company_name}}"/>
                        </div>
                        <div class="form-group">
                           <label>Company Logo </label>
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" id="customFile" name="customFile"  value="{{$company->customFile}}"/>
                              <label class="custom-file-label" for="customFile">{{$company->customFile}}</label>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="company_email">Company Email *</label>
                           <input type="text" id="company_email" name="company_email" class="form-control" placeholder="Enter Company Email" value="{{$company->company_email}}"/>
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="company_number">Contact Number </label>
                           <input type="number" class="form-control" id="company_number" name="company_number" placeholder="Enter Contact Number" value="{{$company->company_number}}"/>
                        </div>
                        <div class="form-group">
                           <label for="country">Country</label>
                           <select class="form-control select2 country" id="country" name="country" >
                              <option value="" value="{{$company->country}}">{{$company->country}}</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="state">State</label>
                           <select class="form-control select2 state" id="state" name="state">
                              <option value="{{$company->state}}" >{{$company->state}}</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="city">City</label>
                           <input type="text" id="city" name="city" class="form-control" placeholder="Enter City" value="{{$company->city}}"/>
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="company_address">Address *</label>
                           <textarea type="text" class="form-control" id="company_address" name="company_address" placeholder="Enter Address">{{$company->company_address}}</textarea>
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="company_postcode">Post Code *</label>
                           <input type="number" id="company_postcode" name="company_postcode" class="form-control" placeholder="Enter Post Code" value="{{$company->company_postcode}}"/>
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <!-- /jQuery Validation -->
            <!--/ Medal Card -->
      </section>
      <!-- Dashboard Ecommerce ends -->
      </div>
   </div>
</div>
<!-- END: Content-->
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>
@endsection