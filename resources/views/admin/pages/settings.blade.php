@extends('layouts.admin')
@section('title', 'Edit Settings')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Site Settings</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Site Settings</li>
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <!-- left column -->
            <div class="col-md-12">
               <!-- general form elements -->
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Store Settings</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('admin/settings/update')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                     @foreach($setting as $item)
                     <div class="card-body">
                        <input type="hidden" name="id"  required="" value="{{$item->id}}">
                        <div class="form-group"><label for="store_name">Site Name</label><input type="text" name="store_name" class="form-control" id="store_name" placeholder="Enter Store Name" required="" value="{{$item->store_name}}"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group"><label for="image">Site Logo</label>
                                   <input type="file" name="image" class="form-control" id="image"  >
                                   <input type="hidden" name="oldimage" value="{{$item->store_logo}}" class="form-control" id="image"  >
                                   <img src="{{url('public')}}/{{$item->store_logo}}" style="max-height: 100px;max-width:220px;background: black;padding: 10px;border-radius: 5px;margin: 10px;">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group"><label for="image">Site Footer Logo</label>
                                   <input type="file" name="footerlogo" class="form-control" id="image"  >
                                   <input type="hidden" name="oldfooterimage" value="{{$item->footerlogo}}" class="form-control" id="image"  >
                                   <img src="{{url('public')}}/{{$item->footerlogo}}" style="max-height: 100px;max-width:220px;background: black;padding: 10px;border-radius: 5px;margin: 10px;">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group"><label for="image">Fevicon</label>
                                   <input type="file" name="fevicon" class="form-control" id="image"  >
                                   <input type="hidden" name="oldfevicon" value="{{$item->fevicon}}" class="form-control" id="image"  >
                                   <img src="{{url('public')}}/{{$item->fevicon}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group"><label for="store_phone">Site Phone</label><input type="text" name="store_phone" class="form-control" id="store_phone" placeholder="Enter Store Phone" required="" value="{{$item->store_phone}}"></div>
                        <div class="form-group"><label for="store_email">Site Email</label><input type="text" name="store_email" class="form-control" id="store_email" placeholder="Enter Store Email" required="" value="{{$item->store_email}}"></div>
                        <div class="form-group"><label for="store_address">Site Address</label>
                           <textarea name="store_address" class="form-control" id="store_address" placeholder="Enter Store Address" required="">{{$item->store_address}}</textarea>
                        </div>
                     </div>
                     @endforeach
                     <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                  </form>
               </div>
               <!-- /.card -->
            </div>
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- /.content -->
</div>
@endsection
@section('Admin footer')