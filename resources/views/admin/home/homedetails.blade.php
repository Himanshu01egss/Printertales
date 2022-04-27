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
               <h1>Edit Home</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Edit Home</li>
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
                  <form action="{{url('admin/home/updatedetails')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="id" value="{{$home->id}}" required>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label for="bannerheading">Banner Head</label>
                                    <input type="text" name="bannerheading" class="form-control" id="bannerheading" value="{{$home->bannerheading}}" placeholder="Banner Heading" required>
                                </div>
                                <div class="form-group">
                                    <label for="bannersubheading">Banner Subheading</label>
                                    <input type="text" name="bannersubheading" class="form-control" id="bannersubheading" value="{{$home->bannersubheading}}" placeholder="Banner Sub Heading" required>
                                </div>
                                <div class="form-group">
                                    <label for="bannertext">Banner Text</label>
                                    <input type="text" name="bannertext" class="form-control" id="bannertext" value="{{$home->bannertext}}" placeholder="Banner text" required>
                                </div>
                                <div class="form-group">
                                    <label for="bannerbtnurl">Banner Button URL</label>
                                    <input type="text" name="bannerbtnurl" class="form-control" id="bannerbtnurl" value="{{$home->bannerbtnurl}}" placeholder="Banner Button URL" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Banner Image (image size should be 1800x800px)</label>
                                    <img src="{{url('public/')}}/{{$home->bannerimage}}" style="height: 100px;padding:10px">   
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="hidden" name="oldimage" class="form-control" value="{{$home->image}}" id="image" placeholder="Image">
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
                           </div>
                          	<div class="col-md-6">
                                <div class="form-group">
                                     <label for="metatitle">Meta Title</label>
                                     <input type="text" name="metatitle" class="form-control" id="metatitle" value="{{$home->metatitle}}" placeholder="Meta Title" required>
                                </div>

                                <div class="form-group">
                                     <label for="metadescription">Meta Description</label>
                                     <textarea name="metadescription" id="metadescription" class="form-control" placeholder="Enter Meta Description" required >{{$home->metadescription}}</textarea>  
                                </div>
                                <div class="form-group">
                                     <label for="metakeywords">Meta Keywords</label>
                                     <input type="text" name="metakeywords" class="form-control" id="metakeywords" value="{{$home->metakeywords}}" placeholder="Keywords" required>
                                </div>
                               
                            </div>
                            
                        </div>
                        <hr/>
                        <hr/>
                        <div class="form-group">
                           <label for="layouthead">Layout Heading</label>
                           <input type="text" name="layouthead" class="form-control" id="layouthead" value="{{$home->layouthead}}" placeholder="Layout Heading" required>
                        </div>
                        <div class="form-group">
                           <label for="layouttext">Layout Text</label><textarea id="summernote" name="description" required class="form-control" placeholder="Enter service location">{{$home->layouttext}}</textarea>
                        </div>
                        <div class="form-group">   
                           <label for="videourl">Layout Video URL</label>
                           <input type="text" name="layouturl" class="form-control" id="btntitle" value="{{$home->videourl}}" placeholder="Video URL" required>
                        </div>

                        <div class="form-group">
                           <label for="image">Layout Video Image</label>
                           <img src="{{url('public/')}}/{{$home->layoutimage}}" style="height: 100px;padding:10px">   
                           <div class="input-group">
                               <div class="custom-file">
                                   <input type="hidden" name="oldlayoutimage" class="form-control" value="{{$home->image}}" id="image" placeholder="Image">
                                   <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="layoutimage" >
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