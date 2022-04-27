@extends('layouts.admin')
@section('title', 'Shopunity Sub Category')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1 class="m-0">Edit Category</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#a">Home</a></li>
                  <li class="breadcrumb-item active">Edit category</li>
               </ol>
            </div>
            <!-- /.col -->
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <!-- left column -->
            <div class="col-md-12">
               <!-- general form elements -->
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Update Category</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('admin/product/update_category')}}" method="post" enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="id" id="id" value="{{$cate['id']}}">
                     <div class="card-body">
                        <div class="form-group">
                           <label for="name">Category Name</label>
                           <input type="text" name="name" value="{{$cate['name']}}" class="form-control" id="name" placeholder="Enter Category">
                        </div>
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                     </div>
                  </form>
               </div>
               <!-- /.card -->
            </div>

         </div>
      </div>
</div>

</section>     

<!-- /.content -->
</div>

@endsection
@section('Admin footer')