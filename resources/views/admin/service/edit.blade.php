@extends('layouts.admin')
@section('title', 'Edit service')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Edit service</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Edit service</li>
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
                     <a href="{{url('admin/service/')}}" class="btn btn-info"><i class="fa fa-list"></i> service List</a>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('admin/service/update')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="id" value="{{$service->id}}" required>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">name</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{$service->name}}" placeholder="Service Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="title">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="title" value="{{$service->slug}}" placeholder="Slug" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image (image size should be 770x470px)</label>
                                    <img src="{{url('public/')}}/{{$service->image}}" style="height: 100px;padding:10px">   
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="hidden" name="oldimage" class="form-control" value="{{$service->image}}" id="image" placeholder="Image">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image" >
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                           <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                              <div class="form-group">
                                    <label for="image">Icon (image size should be 65x65px)</label>
                                    <img src="{{url('public/')}}/{{$service->icon}}" style="height: 100px;padding:10px">   
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="hidden" name="oldicon" class="form-control" value="{{$service->icon}}" id="icon" placeholder="Icon">
                                            <input type="file" class="custom-file-input @error('icon') is-invalid @enderror" id="image" name="icon" >
                                            <label class="custom-file-label" for="icon">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                           <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                              <div class="form-group clearfix">
                                <label>
                                    Status: 
                                </label>
                                <div class="icheck-success d-inline">
                                    <input type="radio" name="status" value="1" id="radioSuccess1" @if($service->status==1) checked="" @endif>
                                    <label for="radioSuccess1">
                                        Active
                                    </label>
                                </div>
                                <div class="icheck-danger d-inline">
                                    <input type="radio" name="status" value="0"  id="radioDanger2" @if($service->status==0) checked="" @endif>
                                    <label for="radioDanger2">
                                        Deactive
                                    </label>
                                </div>
                            </div>
                           </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     <label for="metatitle">Meta Title</label>
                                     <input type="text" name="metatitle" class="form-control" id="metatitle" value="{{$service->metatitle}}" placeholder="Meta Title" required>
                                </div>

                                <div class="form-group">
                                     <label for="metadescription">Meta Description</label>
                                     <textarea name="metadescription" id="metadescription" class="form-control" placeholder="Enter Meta Description" required >{{$service->metadescription}}</textarea>  
                                </div>
                                <div class="form-group">
                                     <label for="metakeywords">Meta Keywords</label>
                                     <input type="text" name="metakeywords" class="form-control" id="metakeywords" value="{{$service->metakeywords}}" placeholder="Keywords" required>
                                </div>
                                <div class="form-group">
                                     <label for="alt">Alt</label>
                                     <input type="text" name="alt" class="form-control" id="alt" placeholder="Image Alt Tag" value="{{$service->alt}}" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group">
                             <label for="title">Title</label>
                             <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$service->title}}" required>
                        </div>
                        <div class="form-group"><label for="service_slug">Description</label><textarea id="summernote" name="description" required class="form-control" placeholder="Enter service location">{{$service->description}}</textarea></div>
                     </div>
                     <div class="card-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
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
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection
@section('Admin footer')