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
               <h1>Products Review List</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Products List</li>
               </ol>
            </div>
         </div>
      </div>
   </section>
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="card">
                  <div class="tab-content" id="custom-tabs-three-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                           <table id="example1" class="table table-bordered table-striped">
                              <thead>
                                 <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Star</th>
                                    <th>Product</th>
                                    <th>Status</th>
                                    <th>Review</th>
                                    <th>Actions</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 @php $count=1; @endphp              
                                 @foreach($list as $item)
                                 <tr>
                                    <td>{{$count++}}</td>
                                    <td>{{$item->username}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>
                                       @php
                                          for($i = 1; $i<=5;$i++){
                                             if($i<=$item->star){
                                                 echo '<span class="fa fa-star"></span> ';
                                             } else {
                                                echo '<span class="fa fa-star-o"></span> ';
                                             }
                                            
                                          }

                                       @endphp
                                    </td>
                                    <td><a href="{{url('product/'.$item->product->slug)}}" target="_blank">{{$item->product->name}}</a></td>
                                    <td>
                                       @if($item->status==1)
                                       <span class="badge badge-success">Active</span>
                                       @else
                                       <span class="badge badge-danger">Deactive</span>
                                       @endif
                                    </td>
                                    <td width="300px">{{$item->message}}</td>
                                    
                                    <td>
                                       <div class="btn-group btn-group-sm">
                                          <a href="{{url('admin/review/edit')}}/{{$item->id}}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                                          <a href="{{url('admin/review/delete')}}/{{$item->id}}" class="btn btn-warning" onclick="return confirm('Are you want to delete this record?');" ><i class="fas fa-trash"></i></a>
                                       </div>
                                    </td>
                                 </tr>
                                 @endforeach
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Star</th>
                                    <th>Product</th>
                                    <th>Status</th>
                                    <th>Review</th>
                                    <th>Actions</th>
                                 </tr>
                              </tfoot>
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