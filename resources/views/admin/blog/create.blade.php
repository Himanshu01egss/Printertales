@extends('layouts.admin')
@section('title', 'Add blog User')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Add Blog</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Add blog</li>
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
                     <a href="{{url('admin/blog/')}}" class="btn btn-info"><i class="fa fa-list"></i> Blog List</a>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('admin/blog/store')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group"><label for="title">Title</label><input type="text" name="title" class="form-control" id="title" placeholder="Blog title" required></div>
                              <div class="form-group"><label for="slug">Slug</label><input type="text" name="slug" class="form-control" id="slug" placeholder="Blog slug" required></div>
                              <div class="form-group">
                                 <label for="image">Image (image size should be 800x450px)</label>
                                 <div class="input-group">
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image" required>
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
                                 <label for="category">Brand</label>
                                 <select name="brandid" class="form-control" id="brandid"  required>
                                    <option value="" selected="selected">-- Select Brand --</option>
                                    @foreach($brand as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="metatitle">Meta Title</label>
                                 <input type="text" name="metatitle" class="form-control" id="metatitle" placeholder="Meta Title" required>
                              </div>
                              <div class="form-group">
                                 <label for="metadescription">Meta Description</label>
                                 <textarea name="metadescription" id="metadescription" class="form-control" placeholder="Enter Meta Description" required ></textarea>  
                              </div>
                              <div class="form-group">
                                 <label for="metakeywords">Meta Keywords</label>
                                 <input type="text" name="metakeywords" class="form-control" id="metakeywords" placeholder="Keywords" required>
                              </div>
                              <div class="form-group">
                                 <label for="alt">Alt</label>
                                 <input type="text" name="alt" class="form-control" id="alt" placeholder="Image Alt Tag" required>
                              </div>
                           </div>
                           <div class="form-group clearfix">
                              <label>
                              Status: 
                              </label>
                              <div class="icheck-success d-inline">
                                 <input type="radio" name="status" value="1" id="radioSuccess1">
                                 <label for="radioSuccess1">
                                 Active
                                 </label>
                              </div>
                              <div class="icheck-danger d-inline">
                                 <input type="radio" name="status" value="0" checked="" id="radioDanger2">
                                 <label for="radioDanger2">
                                 Deactive
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="form-group"><label for="blog_slug">Description</label><textarea id="summernote" name="description" required class="form-control" placeholder="Enter blog location"></textarea></div>
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
@endsection
@section('Admin footer')