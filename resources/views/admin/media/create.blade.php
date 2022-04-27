@extends('layouts.admin')
@section('title', 'All Blogs')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Media List</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Media List</li>
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
                  <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group"><label for="title">Title / Alt</label><input type="text" name="title" class="form-control" id="title" placeholder="Title / Alt" required></div>
                              <div class="form-group">
                                 <label for="image">Image</label>
                                 <div class="input-group">
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image" required>
                                       <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                       <span class="input-group-text">Upload</span>
                                    </div>
                                 </div>
                              </div>
                              @error('image')
                              <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
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
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th width="50px">#</th>
                              <th width="150px">Image</th>
                              <th>Url</th>
                              <th width="150px">Alt</th>
                              <th width="100px" >Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                           @php
                           $count=1;
                           @endphp
                           @foreach($media as $item)
                           <tr>
                              <td>{{$count++}}.</td>
                              <td>
                                 <a href="{{url('public/')}}/{{$item->image}}" data-toggle="lightbox" data-title="{{$item->alt}}" data-gallery="gallery">
                                 <img src="{{url('public/')}}/{{$item->image}}" style="height: 90px;">
                                 </a>
                              </td>
                              <td>
                                 {{url('public/')}}/{{$item->image}}
                              </td>
                              <td>
                                 {{$item->alt}}
                              </td>
                              <td>
                                 <div class="btn btn-group">
                                    <a href="{{url('admin/media/delete')}}/{{$item->id}}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> 
                                 </div>
                              </td>
                           </tr>
                           @endforeach                 
                        </tbody>
                        <tr>
                           <th width="50px">#</th>
                           <th width="150px">Image</th>
                           <th>Url</th>
                           <th width="150px">Alt</th>
                           <th width="100px" >Actions</th>
                        </tr>
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
@endsection
@section('Admin footer')