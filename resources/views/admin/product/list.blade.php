@extends('layouts.admin')
@section('title', 'All Products')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Products List</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Products List</li>
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
            <div class="col-12">
               <div class="card">
                  <div class="card-header">
                     <a href="{{url('admin/product/create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add New</a>
                     <a href="{{url('admin/product/import')}}" class="btn btn-info btn-sm"><i class="fa fa-file-import"></i> Import</a> 
                     <a href="{{url('public/csv_files/product/sample.csv')}}" class="btn btn-primary btn-sm" download=""><i class="fa fa-download"></i> CSV Format</a> 
                  </div>
                  <div class="card-body">
                     <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Active Products</a></li>
                        <li class="nav-item"><a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Trash</a></li>
                     </ul>
                     <div class="tab-content" id="custom-tabs-three-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>SKU</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    $count=1;
                                     ?>              
                                 @foreach($product as $item)
                                 <tr>
                                    <td>{{$count++}}</td>
                                    <td><img src="{{url('public/')}}/{{$item->image}}" style="height: 70px;"></td>
                                    <td>{{$item->name}}</td>
                                    <td>$ 
                                       {{$item->price}}
                                    </td>
                                    <td>{{$item->sku}}</td>
                                    <td>
                                       <?php
                                          $category=DB::table("product_categories")->where("id",$item->category_id)->get();
                                          foreach($category as $ct){
                                          echo $ct->name;
                                          }
                                            ?>
                                    </td>
                                    <td>
                                         @if($item->status==1)
                                           <span class="badge badge-success">Active</span>
                                         @else
                                           <span class="badge badge-danger">Deactive</span>
                                         @endif
                                    </td>
                                    <td>
                                       <div class="btn-group btn-group-sm">
                                          <a href="{{url('admin/product/edit')}}/{{$item->id}}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                          <a href="{{url('admin/product/delete')}}/{{$item->id}}" onclick="return confirm('Are you want to delete this product?')" class="btn btn-warning"><i class="fas fa-trash"></i></a>
                                       </div>
                                    </td>
                                 </tr>
                                 @endforeach
                              </tbody>
                           </table>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                           <table id="example2" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    $count=1;
                                    ?>              
                                 @foreach($trash as $item)
                                 <tr>
                                    <td>{{$count++}}</td>
                                    <td><img src="{{url('public/')}}/{{$item->image}}" style="height: 70px;"></td>
                                    <td>{{$item->name}}</td>
                                    <td>$ {{$item->price}}</td>
                                    <td>
                                       <?php
                                          $category=DB::table("product_categories")->where("id",$item->category_id)->get();
                                          foreach($category as $ct){
                                          echo $ct->name;
                                          }
                                          ?>
                                    </td>
                                    <td>
                                       <div class="btn-group btn-group-sm">
                                          <a href="{{url('admin/product/product_restore')}}/{{$item->id}}" class="btn btn-success"><i class="fas fa-trash-restore"></i></a>
                                          <a href="{{url('admin/product/product_force_delete')}}/{{$item->id}}" class="btn btn-danger" onclick="return confirm('This Product will be permanently deleted')"><i class="fas fa-trash"></i></a>
                                       </div>
                                    </td>
                                 </tr>
                                 @endforeach
                              </tbody>
                           </table>
                        </div>
                     </div>
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