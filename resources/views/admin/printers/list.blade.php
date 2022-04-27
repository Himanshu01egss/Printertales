@extends('layouts.admin')
@section('title', 'All Printers')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Printers List</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Printers List</li>
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
                     <a href="{{url('admin/blog/create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                  </div>
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Brand</th>
                              <th>Image</th>
                              <th>Status</th>
                              <th>Created At</th>
                              <th>Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                           @php $count=1; @endphp
                           @foreach($printer as $item)
                           <tr>
                              <td>{{$count++}}.</td>
                              <td>{{ucwords($item->name)}}</td>
                              <td>{{$item->brand->name}}
                              <td><img src="{{url('public/')}}/{{$item->image}}" style="height: 90px;"></td>
                              </td>
                              <td>
                                @if($item->status==1)
                                  <span class="badge badge-success">Active</span>
                                @else
                                  <span class="badge badge-danger">Deactive</span>
                                @endif
                              </td>
                              <td>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</td>
                              <td>
                                 <h6> No. of Features : {{count($item->features)}}</h6>
                                 <h6> No. of Errors : {{count($item->errors)}}</h6>
                                 <h6> No. of Faq : {{count($item->faq)}}</h6>
                                 @php $itemid= Crypt::encrypt($item->id); @endphp
                                 <div class="btn btn-group">
                                    <!-- <a href="{{url('admin/blog/view')}}/{{$item->id}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a> -->
                                    <a href="{{url('admin/printer/edit')}}/{{$itemid}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('admin/printer/delete')}}/{{$itemid}}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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