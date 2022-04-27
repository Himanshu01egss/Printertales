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
                  <li class="breadcrumb-item active">Edit About</li>
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
                  <form action="{{url('admin/about/updatedetails')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="id" value="{{$about->id}}" required>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="title" value="{{$about->title}}" placeholder="About Title" required>
                                </div>
                                <div class="form-group">
                                    <label for="video">Youtube Video URL</label>
                                    <input type="text" name="video" class="form-control" id="video" value="{{$about->video}}" placeholder="About Video URL" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image (image size should be 470x490px)</label>
                                    <img src="{{url('public/')}}/{{$about->image}}" style="height: 100px;padding:10px">   
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="hidden" name="oldimage" class="form-control" value="{{$about->image}}" id="image" placeholder="Image">
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
                                     <input type="text" name="metatitle" class="form-control" id="metatitle" value="{{$about->metatitle}}" placeholder="Meta Title" required>
                                </div>

                                <div class="form-group">
                                     <label for="metadescription">Meta Description</label>
                                     <textarea name="metadescription" id="metadescription" class="form-control" placeholder="Enter Meta Description" required >{{$about->metadescription}}</textarea>  
                                </div>
                                <div class="form-group">
                                     <label for="metakeywords">Meta Keywords</label>
                                     <input type="text" name="metakeywords" class="form-control" id="metakeywords" value="{{$about->metakeywords}}" placeholder="Keywords" required>
                                </div>
                               
                            </div>
                            
                        </div>
                        
                        <div class="form-group"><label for="service_slug">Content(Side)</label><textarea id="summernote" name="description" required class="form-control" placeholder="Enter service location">{{$about->content}}</textarea></div>
                        <div class="form-group"><label for="service_slug">Content</label><textarea id="summernote" name="description2" required class="form-control" placeholder="Enter service location">{{$about->content2}}</textarea></div>
                        <div class="row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label for="projects">Complete Projects</label>
                              <input type="text" name="projects" class="form-control" id="projects" value="{{$about->projects}}" placeholder="Complete Projects" required>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label for="clients">Permanent Clients</label>
                              <input type="text" name="clients" class="form-control" id="clients" value="{{$about->clients}}" placeholder="Complete Permanent Clients" required>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label for="experts">Expert Professionals</label>
                              <input type="text" name="experts" class="form-control" id="experts" value="{{$about->experts}}" placeholder="Expert Professionals" required>
                           </div>
                        </div>

                     </div>

                     <label for="btntitle">Button Title</label>
                        <input type="text" name="btntitle" class="form-control" id="btntitle" value="{{$about->btntitle}}" placeholder="Button Tittle" required>
                     <label for="btntext">Button Text</label>
                        <input type="text" name="btntext" class="form-control" id="btntitle" value="{{$about->btntext}}" placeholder="Button Text" required>
                     <label for="btnurl">Button Url</label>
                        <input type="btnurl" name="btnurl" class="form-control" id="btntitle" value="{{$about->btnurl}}" placeholder="Button Url" required>
                     

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