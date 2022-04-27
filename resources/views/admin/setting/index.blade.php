@extends('layouts.admin')
@section('title', 'Site Settings')
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
                  <form action="{{url('admin/settings/save')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="id" @if($setting) value="{{$setting->id}}" @endif >
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group"><label for="name">Site Name</label><input type="text" name="name" class="form-control" id="name" placeholder="Site name" @if($setting) value="{{$setting->sitename}}" @endif required></div>
                              <div class="form-group"><label for="email">Email</label><input type="email" name="email" @if($setting) value="{{$setting->email}}" @endif class="form-control" id="email" placeholder="Site Email" required></div>
                              <div class="form-group"><label for="usnum">US Number</label><input type="text" name="usnum" class="form-control" @if($setting) value="{{$setting->usnum}}" @endif id="usnum" placeholder="US Nunber" required></div>
                              <div class="form-group"><label for="uknum">UK Number</label><input type="text" name="uknum"  @if($setting) value="{{$setting->uknum}}" @endif class="form-control" id="uknum" placeholder="UK Nunber" required></div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="image">Site Logo</label>
                                    @if($setting)
                                       <img src="{{url('public/')}}/{{$setting->logo}}" style="height: 100px;padding:10px">  
                                       <input type="hidden" name="oldimage" class="form-control" value="{{$setting->logo}}">
                                    @endif
                                 <div class="input-group">
                                    <div class="custom-file">
                                       
                                       <input type="file" class="custom-file-input @error('logo') is-invalid @enderror" id="image" name="image">
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
                                 <label for="fevicon">Site Fevicon</label>
                                 @if($setting)
                                    <img src="{{url('public/')}}/{{$setting->fevicon}}" style="height: 60px;padding:10px">  
                                    <input type="hidden" name="oldfev" class="form-control" value="{{$setting->fevicon}}">
                                 @endif
                                 <div class="input-group">
                                    <div class="custom-file">
                                       
                                       <input type="file" class="custom-file-input @error('fevicon') is-invalid @enderror" id="fevicon" name="fevicon">
                                       <label class="custom-file-label" for="fevicon">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                       <span class="input-group-text">Upload</span>
                                    </div>
                                 </div>
                                 @error('fevicon')
                                 <div class="alert alert-danger">{{ $message }}</div>
                                 @enderror
                              </div>
                           </div>
                           
                        </div>
                        <div class="form-group"><label for="blog_slug">Footer Content</label><textarea id="summernote" name="content" required class="form-control summernote" placeholder="Enter blog location">@if($setting) {{$setting->footercontent}} @endif</textarea></div>
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