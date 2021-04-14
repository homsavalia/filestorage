@extends('customer.layout.base')
@section('title', 'File')
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
                  <div class="card-body">
                  <table class="datatables-basic table dataTable no-footer dtr-column" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="width: 1033px;">
                                 <thead>
                                    <tr role="row">
                                       <th class="control sorting_disabled" rowspan="1" colspan="1" style="width: 23px; display: none;" aria-label=""></th>
                                       <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 20px;" aria-label="Name: activate to sort column ascending">Downlode File</th>
                                    </tr>
                                 </thead>
                                 <?php $no=1; ?>
                                 <tbody>
                                 @foreach ($file_uploade as $name)
                                    <tr class="odd">
                                       <td><a href="{{asset('files')}}/{{$name->file_name}}" download="download">
                                          {{ucwords(str_replace('_',' ',$name->file_name))}}</a>
                                       </td>
                                       @endforeach
                                    </tr>
                                 </tbody>
                              </table>
                  </div>
               </div>
  
         </div>
       </section>
    </div>
    </div>  
    </div>
@endsection