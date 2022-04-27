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
               <h1>Edit About</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Edit Home Features Videos</li>
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
                  <form action="{{url('admin/home/update_features')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="id" value="{{$home->id}}">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                                 <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Video Title" value="{{$home->title}}" required>
                                 </div>
                                 <div class="form-group">
                                    <label for="content">Description</label>
                                    <textarea name="content" id="content" class="form-control" placeholder="Enter Content" value="{{$home->content}}"  required >{{$home->description}}</textarea>  
                                 </div>
                                 <div class="form-group">
                                    <label for="video">Youtube Video URL</label>
                                    <input type="text" name="video" class="form-control" id="video" value="{{$home->videourl}}" placeholder="Youtube Video URL" required>
                                 </div>
                                 <div class="form-group">
                                    <label for="image">Image (image size should be 1280x720px)</label>
                                    <img src="{{url('public/')}}/{{$home->image}}" style="height: 100px;padding:10px"> 
                                    <div class="input-group">
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image" >
                                       <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                       <span class="input-group-text">Upload</span>
                                    </div>
                                 </div>
                                 <input type="hidden" name="oldimage" class="form-control" value="{{$home->image}}" id="image" placeholder="Image">
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                            </div>
                        </div>
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
   <!-- /.content -->

 
</div>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection
@section('Admin footer')