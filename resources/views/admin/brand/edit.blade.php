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
	               <h1>Edit Brand Details</h1>
	            </div>
	            <div class="col-sm-6">
	               <ol class="breadcrumb float-sm-right">
	                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
	                  <li class="breadcrumb-item active">Add Brand</li>
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
                     	<a href="{{url('admin/brand/')}}" class="btn btn-info"><i class="fa fa-list"></i> Brand List</a>
                  	</div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('admin/brand/update')}}" method="post"  enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$brand->id}}">
                    <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group"><label for="name">Name</label><input type="text" name="name" class="form-control" value="{{$brand->name}}" id="name" placeholder="Brand name" required></div>
                              <div class="form-group">
                                    <label for="image">Image</label>
                                    <img src="{{url('public/')}}/{{$brand->image}}" style="height: 100px;padding:10px">   
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="hidden" name="oldimage" class="form-control" value="{{$brand->image}}" id="image" placeholder="Image">
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
                              <div class="form-group"><label for="headquarter">Headquarter</label><input type="text" name="headquarter" class="form-control" id="headquarter" placeholder="Headquarters" value="{{$brand->headquarter}}" required></div>
                              <div class="form-group"><label for="founder">Founder</label><input type="text" name="founder" class="form-control" id="founder" placeholder="Blog Founder(s)" value="{{$brand->founder}}" required></div>
                              <div class="form-group"><label for="established">Established</label><input type="text" name="established" class="form-control" id="established" placeholder="Established Since" value="{{$brand->established}}" required></div>
                              <div class="form-group"><label for="website">Website</label><input type="text" name="website" class="form-control" id="website" placeholder="Blog Official Website" value="{{$brand->website}}" required></div>
                              <div class="form-group"><label for="people">Key People</label><input type="text" name="people" class="form-control" id="people" placeholder="Blog Key People" value="{{$brand->people}}" required></div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="metatitle">Meta Title</label>
                                 <input type="text" name="metatitle" class="form-control" id="metatitle" placeholder="Meta Title" value="{{$brand->metatitle}}" required>
                              </div>
                              <div class="form-group">
                                 <label for="metadescription">Meta Description</label>
                                 <textarea name="metadescription" id="metadescription" class="form-control" placeholder="Enter Meta Description" required >{{$brand->headquarter}}</textarea>  
                              </div>
                              <div class="form-group">
                                 <label for="metakeywords">Meta Keywords</label>
                                 <input type="text" name="metakeywords" class="form-control" id="metakeywords" placeholder="Keywords" value="{{$brand->metakeywords}}" required>
                              </div>
                              <div class="form-group clearfix">
                                 <label> Status: </label>
                                 <div class="icheck-success d-inline">
                                    <input type="radio" name="status" value="1" id="radioSuccess1" @if($brand->status == 1)checked="" @endif>
                                    <label for="radioSuccess1" >
                                    Active
                                    </label>
                                 </div>
                                 <div class="icheck-danger d-inline">
                                    <input type="radio" name="status" value="0" @if($brand->status == 0)checked="" @endif id="radioDanger2">
                                    <label for="radioDanger2">
                                    Deactive
                                    </label>
                                 </div>
                              </div>
                              <div class="form-group clearfix">
                                 <label> Popular: </label>
                                 <div class="icheck-success d-inline">
                                    <input type="radio" name="popular" value="1" id="radioSuccess11" @if($brand->popular == 1)checked="" @endif>
                                    <label for="radioSuccess11" >
                                    Active
                                    </label>
                                 </div>
                                 <div class="icheck-danger d-inline">
                                    <input type="radio" name="popular" value="0" @if($brand->popular == 0)checked="" @endif id="radioDanger2 2">
                                    <label for="radioDanger22">
                                    Deactive
                                    </label>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                        <div class="form-group"><label for="blog_slug">Description</label><textarea id="summernote" name="description" required class="form-control" placeholder="Enter blog location">{{$brand->description}}</textarea></div>
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

     <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <a href="{{url('admin/brand/issuecreate')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add New Issue</a>
                  </div>
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Issue Name</th>
                              <th>Image</th>
                              <th>Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                           @php $count=1; @endphp
                           @foreach($brand->brandissue as $item)
                           <tr>
                              <td>{{$count++}}.</td>
                              <td>{{$item->name}}</td>
                              <td><img src="{{url('public/')}}/{{$item->image}}" style="height: 90px;"></td>
                             <td>
                                 @php $itemid= Crypt::encrypt($item->id); @endphp
                                 <div class="btn btn-group">
                                    <a href="{{url('admin/brand/issueedit')}}/{{$itemid}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('admin/brand/issuedelete')}}/{{$itemid}}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
   <!-- /.content -->
</div>
@endsection
@section('Admin footer')