@extends('layouts.admin')
@section('title', 'Dashboard')
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
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
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
           
            <div class="col-12 col-sm-6 col-md-6">
               <div class="info-box mb-3">
                  <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-blog"></i></span>
                  <div class="info-box-content">
                     <span class="info-box-text">Blog</span>
                     <span class="info-box-number">#</span>
                  </div>
               </div>
            </div>
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-6">
               <div class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-edit"></i></span>
                  <div class="info-box-content">
                     <span class="info-box-text">Contact Us</span>
                     <span class="info-box-number">#</span>
                  </div>
               </div>
            </div>
            <div class="clearfix hidden-md-up"></div>

         </div>
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
                                 <th>Subject</th>
                                 <th>Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                                @php
                                    $count=1;
                                @endphp             
                              @foreach($contact as $item)
                              <tr>
                                 <td><input type="checkbox" class="check_all" name="ids[]" value="{{$item->id}}"></td>
                                 <td>{{$count++}}</td>
                                 <td>{{$item->name}}</td>
                                 <td>{{$item->email}}</td>
                                 <td>{{$item->phone}}</td>
                                 <td>{!!\Illuminate\Support\Str::words($item->message, 20, '...')!!}</td>
                                 <td>
                                    <div class="btn-group btn-group-sm">
                                       <a href="{{url('admin/contact/view')}}/{{base64_encode($item->id)}}" class="btn btn-success"><i class="fas fa-eye"></i></a>
                                       <a href="{{url('admin/contact/delete')}}/{{base64_encode($item->id)}}" class="btn btn-danger" onclick="return confirm('Delete this Business User ?')"><i class="fas fa-trash"></i></a>
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
   </section>
</div>
@endsection
@section('Admin footer')