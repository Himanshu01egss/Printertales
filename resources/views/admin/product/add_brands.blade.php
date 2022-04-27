@extends('layouts.admin')
@section('title', 'Product Brands')
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
               <h1 class="m-0">Product Brands</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Brands</li>
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
            <div class="col-md-4">
               <!-- general form elements -->
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">Add Brand</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" action="{{url('admin/product/save_brand')}}" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label for="name">Brand Name</label>
                           <input type="text" name="name" class="form-control" id="name" placeholder="Enter Category" required="">
                        </div>
                     
                        <div class="form-group">
                           <label for="image">Select Image</label>
                           <input type="file" name="image" class="form-control" id="image" placeholder="Image" required="">
                        </div>
                     </div>
                     <div class="card-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
                     </div>
                  </form>
               </div>
               <!-- /.card -->
            </div>
            <div class="col-md-8">
               <!-- general form elements -->
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">All Brand</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Name</th>
                                 <th>Image</th>
                                 <!-- <th>Status</th> -->
                                 <th>Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 $i=1;
                              ?>
                              @foreach($brand as $list)
                              <?php
                                 $active="";
                                 if($list->status=='deactive'){
                                  $active="btn-danger";
                                 }
                                 if($list->status=='active'){
                                 $active="btn-success";
                                 }
                               ?>
                              <tr>
                                 <td>{{$i++}}.</td>
                                 <td>{{$list['name']}}</td>
                                 <td><img src="{{url('public/'.$list->image)}}" width="100px" ></td>
                                <!-- <td>
                                    <select class="btn btn-sm {{$active}}" onchange="change_status_brand(<?=$list->id?>,this.value)">
                                       <option value="active" <?php if($list->status=='active'){ echo "selected"; } ?> >Active</option>
                                       <option value="deactive" <?php if($list->status=='deactive'){ echo "selected"; } ?> >Deactive</option>
                                    </select>
                                 </td> -->
                                 <td>
                                    <div class="btn-group btn-group-sm">
                                       <a href="{{url('admin/produtct/edit_brand/'.$list['id'])}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                       <a href="{{url('admin/produtct/delete_brand/'.$list['id'])}}" class="btn btn-danger"><i class="fas fa-trash" onclick="return confirm('Delete this Brands?')"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <!-- /.card-body -->
               </div>
            </div>
         </div>
      </div>
</section>      
<!-- /.content -->
</div>
@endsection
@section('Admin footer')