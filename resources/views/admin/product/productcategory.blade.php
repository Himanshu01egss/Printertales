@extends('layouts.admin')
@section('title', 'Product Category')
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
               <h1 class="m-0">Product Category</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Category</li>
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
                     <h3 class="card-title">Add Category</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form role="form" action="{{url('admin/save_product_cateogry')}}" method="post" enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="form-group">
                           <label for="name">Category Name</label>
                           <input type="text" name="name" class="form-control" id="name" placeholder="Enter Category" required="">
                        </div>
                     </div>
                     <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                  </form>
               </div>
               <!-- /.card -->
            </div>
            <div class="col-md-8">
               <!-- general form elements -->
               <div class="card">
                  <div class="card-header">
                     <h3 class="card-title">All Category</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                     <div class="table-responsive">
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                 <th>#</th>
                                 <th>Name</th>
                                 <th>Status</th>
                                 <th>Actions</th>
                              </tr>
                           </thead>
                           <tbody>
                              @php
                                 $count=1;
                              @endphp
                              @foreach($category as $cate)
                              <?php
                                 $active="";
                                 if($cate->status==0){
                                  $active="btn-success";
                                 }
                                 if($cate->status==1){
                                 $active="btn-danger";
                                 }
                               ?>
                              <tr>
                                 <td>{{$count++}}.</td>
                                 <td>{{$cate['name']}}</td>
                                <td>
                                    <select class="btn btn-sm {{$active}}" onchange="change_status(<?=$cate->id?>,this.value)">
                                       <option value="0" <?php if($cate->status==0){ echo "selected"; } ?> >Active</option>
                                       <option value="1" <?php if($cate->status==1){ echo "selected"; } ?> >Deactive</option>
                                    </select>
                                 </td>
                                 <td>
                                    <div class="btn-group btn-group-sm">
                                       <a href="{{url('admin/produtct/edit_productcategory/'.$cate['id'])}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                       <a href="{{url('admin/produtct/delete_productcategory/'.$cate['id'])}}" class="btn btn-danger"><i class="fas fa-trash" onclick="return confirm('Delete this Category?')"></i></a>
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