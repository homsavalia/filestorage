@extends('company.layout.base')
@section('title', 'Add Customer')
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
                     <h4 class="card-title">Add Customer</h4>
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
                        </ul>
                     </div>
                     @endif
                     @if(session()->get('error'))
                     <div class="alert alert-danger">
                        {{ session()->get('error') }}  
                     </div>
                     @endif
                     <form id="jquery-val-form" method="post"  action="{{url('customer-store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                           <label class="form-label" for="cid">Customer Id *</label>
                           <input type="number" class="form-control" id="cid" name="cid" placeholder="Enter Customer Id" />
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="customer_name">Customer Name *</label>
                           <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter Customer Name" />
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="customer_email">Customer Email *</label>
                           <input type="text" id="customer_email" name="customer_email" class="form-control" placeholder="Enter Customer Email" />
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="customer_number">Contact Number </label>
                           <input type="number" class="form-control" id="customer_number" name="customer_number" placeholder="Enter Contact Number" />
                        </div>
                        <div class="form-group">
                           <label for="country">Country</label>
                           <select class="form-control select2 country" id="country" name="country">
                              <option value="">Select Country</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="state">State</label>
                           <select class="form-control select2 state" id="state" name="state">
                              <option value="">Select state</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <label for="city">City</label>
                           <input type="text" id="city" name="city" class="form-control" placeholder="Enter City" />
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="customer_address">Address *</label>
                           <textarea type="text" class="form-control" id="customer_address" name="customer_address" placeholder="Enter Address" ></textarea>
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="customer_postcode">Post Code *</label>
                           <input type="number" id="customer_postcode" name="customer_postcode" class="form-control" placeholder="Enter Post Code" />
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="username">Username *</label>
                           <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" />
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="password">Password *</label>
                           <input type="password" id="password" name="password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                        </div>
                        <div class="form-group">
                           <label class="form-label" for="confirm-password">Confirm Password *</label>
                           <input type="password" id="confirm-password" name="confirm-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
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