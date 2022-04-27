@extends('layouts.admin')
@section('title', 'Add Brand')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Edit Brand Issues</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Edit Brand Issues</li>
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
                     <a href="{{url('admin/brand/issues')}}" class="btn btn-info"><i class="fa fa-list"></i>Brand Issues List</a>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('admin/brand/issueupdate')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" value="{{$brandissue->id}}" name="id">
                     <div class="card-body">
                        <div class="row">
                           	<div class="col-md-12">
                              	<div class="form-group"><label for="name">Issue Name</label><input type="text" name="name" class="form-control" id="name" placeholder="Brand name" value="{{$brandissue->name}}" required></div>
                               	<div class="form-group">
                                    <label for="image">Image</label>
                                    <img src="{{url('public/')}}/{{$brandissue->image}}" style="height: 60px;padding:10px">   
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="hidden" name="oldimage" class="form-control" value="{{$brandissue->image}}" id="image" placeholder="Image">
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
                        </div>
                       	<div class="form-group">
                         <label for="brandid">Brand </label>
                         <select name="brandid" class="form-control" id="brandid"  required>
                            <option value="">-- Select Brand--</option>
                            @foreach($brand as $item)
                               <option value="{{$item->id}}" @if($item->id == $brandissue->brand_id) {{"selected"}} @endif> {{$item->name}}</option>
                            @endforeach
                         </select>
                      </div>
	                    <div class="form-group"><label for="description">Description</label><textarea name="description" required class="form-control" placeholder="Enter blog location">{{$brandissue->description}}</textarea></div>
	                    <div class="form-group"><label for="description2">Description 2 (Printer Issue)</label><textarea name="description2" required class="form-control" placeholder="Enter blog location">{{$brandissue->description2}}</textarea></div>
	                        <div class="form-group">
	                         	<label for="metatitle">Meta Title</label>
	                         	<input type="text" name="metatitle" class="form-control" id="metatitle" placeholder="Meta Title" value="{{$brandissue->metatitle}}" required>
	                        </div>
	                      	<div class="form-group">
	                         	<label for="metadescription">Meta Description</label>
	                         	<textarea name="metadescription" id="metadescription" class="form-control" placeholder="Enter Meta Description" required >{{$brandissue->metadescription}}</textarea>  
	                      	</div>
	                      	<div class="form-group">
	                         	<label for="metakeywords">Meta Keywords</label>
	                         	<input type="text" name="metakeywords" class="form-control" id="metakeywords" placeholder="Keywords" value="{{$brandissue->metakeywords}}" required>
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
@endsection
@section('Admin footer')