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
         <div class="col-md-12 col-12">
               <div class="card">
                  <div class="card-header">
                     <!-- <h4 class="card-title">Add Customer</h4> -->
                  </div>
                  @if(session()->has('msg'))
                     <div class="alert alert-success">
                     {{ session()->get('msg') }}
                     </div>
                     @endif
                  <div class="card-body">
                    
                     <form id="jquery-val-form" method="post"  action="{{ url('company-fileuploade') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                           <label for="uid">Customer Name</label>
                           <select class="form-control select2 state" id="uid" name="uid">
                           <option value="">Customer Name</option>
                           @foreach ($customer as $name)
                              <option value="{{$name->id}}">{{$name->customer_name}}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="form-group">
                           <label>File </label>
                           <div class="custom-file">
                              <input type="file" id="file_name" name="file_name[]" multiple/>
                              <label class="custom-file-label" for="file_name">File Uploade</label>
                           </div>
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
       </section>
    </div>
    </div>  
    </div>
@endsection