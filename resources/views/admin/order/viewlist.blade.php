@extends('layouts.admin')

@section('title', 'All Orders')

@section('Admin header')

@section('Admin sidebar')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> <?php if(Request::segment(2)=="business-order"){ echo "Business"; } ?> Orders List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active"> <?php if(Request::segment(2)=="business-order"){ echo "Business"; } ?> Order List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <h3>Contact List</h3>
                  </div>
                  <form action="{{url('admin/contact/delete_all')}}" method="POST">
                     @csrf
                     <div class="form-group">
                        <button type="submit" class="btn btn-danger mt-2 ml-2" onclick="return confirm('Are you sure to Want to Delete')">Delete</button>
                     </div>
                     <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th><input type="checkbox" name="id" value="" id="check_all"></th>
                                 <th>#</th>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Phone</th>
                                 <th>Shipment Delivery</th>
                                 <th>Status</th>
                                 <th>Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                                @php
                                    $count=1;
                                @endphp             
                              @foreach($order as $item)
                              <tr>
                                 <td><input type="checkbox" class="check_all" name="ids[]" value="{{$item->id}}"></td>
                                 <td>{{$count++}}</td>
                                 <td>{{$item->fname}} {{$item->lname}}</td>
                                 <td>{{$item->email}}</td>
                                 <td>{{$item->phone}}</td>
                                 <td>{{$item->dropoff}} : {{$item->deliverytime}} </td>
                                 <td>{{$item->status}}</td>
                                 
                                 <td>
                                    <div class="btn-group btn-group-sm">
                                       <a href="{{url('admin/orders/view')}}/{{$item->id}}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                       <a href="{{url('admin/orders/delete')}}/{{$item->id}}" class="btn btn-danger" onclick="return confirm('Delete this?')"><i class="fas fa-trash"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </form>
                  <!-- /.card-body -->
               </div>
               <!-- /.card -->
               <!-- /.card -->
            </div>
            <!-- /.col -->
         </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
@endsection

@section('Admin footer')

