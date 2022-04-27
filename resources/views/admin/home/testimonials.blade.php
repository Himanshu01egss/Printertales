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
               <h1>Edit Testimonials</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Edit Testimonials</li>
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
                  <form action="{{url('admin/home/save_tetimonial')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="title" placeholder="Video Title" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="image">Userimage (100x100px)</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image" required>
                                       <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                       <span class="input-group-text">Upload</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="video">Youtube Video URL</label>
                                    <input type="text" name="video" class="form-control" id="video" placeholder="Youtube Video URL" required>
                                </div>

                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                            </div>
                          
                            
                        </div>
                        
                       
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

   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Title</th>
                              <th>Image</th>
                              <th>URL</th>
                              <th>Action</th>
                           </tr>
                        </thead>
                        <tbody>
                           	@php
                              $count=1;
                           	@endphp
                           	@foreach($testimonial as $item)
                           <tr>
                              <td>{{$count++}}</td>
                              <td><b> {{ucwords($item->title)}} </b></td>
                              <td><img src="{{url('public/'.$item->userimage)}}" width="120px"></td>
                              <td>{{$item->videourl}}</td>
                              <td>
                                 <div class="btn btn-group">
                                    <a href="{{url('admin/about/testimonialdelete/'.$item->id)}}" onclick="confirm('Are You Want To Delete This Serivce?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                 </div>
                              </td>
                           </tr>
                           @endforeach
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
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </section>
 
</div>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection
@section('Admin footer')