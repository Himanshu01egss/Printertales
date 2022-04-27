@extends('layouts.admin')
@section('title', 'Contact View')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Dashboard</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Home</a></li>
                  <li class="breadcrumb-item active">Dashboard v1</li>
               </ol>
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <h3>Order From - {{$list->fname}} {{$list->lname}}</h3>
                  </div>
                  <div class="card-body">
                     <table id="example11" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th style="width: 150px;">Name</th>
                              <td>{{$list->fname}} {{$list->lname}}</td>
                           </tr>
                           <tr>
                              <th style="width: 150px;">Email</th>
                              <td>{{$list->email}}</td>
                           </tr>
                           <tr>
                              <th style="width: 150px;">Phone</th>
                              <td>{{$list->phone}}</td>
                           </tr>
                           <tr>
                              <th style="width: 150px;">MC</th>
                              <td>{{$list->mc}}</td>
                           </tr>
                           <tr>
                              <th style="width: 150px;">DOT</th>
                              <td>{{$list->dot}}</td>
                           </tr>
                           <tr>
                              <th style="width: 150px;">Pick Up</th>
                              <td>{{$list->pickup}}</td>
                           </tr>
                           <tr>
                              <th style="width: 150px;">Drop Off</th>
                              <td>{{$list->dropoff}}</td>
                           </tr>
                           <tr>
                              <th style="width: 150px;">Shipment Type</th>
                              <td>{{$list->type}}</td>
                           </tr>
                           <tr>
                              <th style="width: 150px;">Weight Of Shipment</th>
                              <td>{{$list->weight}}</td>
                           </tr>
                           <tr>
                              <th style="width: 150px;">Expected Delivery Time</th>
                              <td>{{$list->deliverytime}}</td>
                           </tr>
                           <tr>
                              <th style="width: 150px;">Type Of Truck</th>
                              <td>{{$list->trucktype}}</td>
                           </tr>
                           <tr>
                              <th style="width: 150px;">Price</th>
                              <td>{{$list->amount}}</td>
                           </tr>
                           <tr>
                              <th style="width: 150px;">Status</th>
                              <td>{{$list->status}}</td>
                           </tr>
                            <tr>
                              <td colspan=2><a href="{{url('admin/orders')}}" class="btn btn-warning"> Back</a></td>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <!-- /.card-body -->
               </div>
               <!-- /.card -->
               <!-- /.card -->
            </div>
            <!-- /.col -->
         </div>
      </div>
   </section>
</div>
@endsection
@section('Admin footer')