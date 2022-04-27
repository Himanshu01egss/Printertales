@extends('layouts.admin')
@section('title', 'Edit Review')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Edit Review</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Edit Review</li>
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
                     <a href="{{url('admin/review/')}}" class="btn btn-info"><i class="fa fa-list"></i> Review List</a>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('admin/review/update')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="id" value="{{$list->id}}" required>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{$list->username}}" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" value="{{$list->email}}" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="phone" value="{{$list->phone}}" placeholder="Phone Number" required>
                              	</div>
                           	</div>
                            <div class="col-md-6">
                            	<div class="form-group">
                                    <label for="metatitle">Product Link</label>
                                   	<a  href="{{url('product/'.$product->slug)}}" target="_blank">{{$product->name}}</a>
                                </div>    
                                <div class="form-group">
                                    <label for="metatitle">Star</label>
                                    <select name="star" class="form-control" required="">
                                    	<option value=''>-- Select Star --</option>
                                    	<option value='5' @if($list->star==5) selected="" @endif>5</option>
                                    	<option value='4' @if($list->star==4) selected="" @endif>4</option>
                                    	<option value='3' @if($list->star==3) selected="" @endif>3</option>
                                    	<option value='2' @if($list->star==2) selected="" @endif>2</option>
                                    	<option value='1' @if($list->star==1) selected="" @endif>1</option>
                                    </select>
                                </div>
                                <div class="form-group clearfix">
                                <label>
                                    Status: 
                                </label>
	                                <div class="icheck-success d-inline">
	                                    <input type="radio" name="status" value="1" id="radioSuccess1" @if($list->status==1) checked="" @endif>
	                                    <label for="radioSuccess1">
	                                        Active
	                                    </label>
	                                </div>
	                                <div class="icheck-danger d-inline">
	                                    <input type="radio" name="status" value="0"  id="radioDanger2" @if($list->status==0) checked="" @endif>
	                                    <label for="radioDanger2">
	                                        Deactive
	                                    </label>
	                                </div>
                            	</div>	
                            </div>
                            
                        </div>
                        <div class="form-group"><label for="review">Review</label><textarea id="summernote" name="review" required class="form-control" placeholder="Enter Your Review">{{$list->message}}</textarea></div>
                     </div>
                     <div class="card-footer">
                        <button type="submit" class="btn btn-success">Update</button>
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
</div>
@endsection
@section('Admin footer')