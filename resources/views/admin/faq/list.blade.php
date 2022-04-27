@extends('layouts.admin')
@section('title', 'All Blogs')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>FAQ List</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">FAQ List</li>
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
                     <a href="{{url('admin/faq/create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                  </div>
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Title</th>
                              <th>Description</th>
                              <th>No. of Ques</th>
                              <th>Actions</th>
                           </tr>
                        </thead>
                        <tbody>
	                        @php
	                           $count=1;
                           	@endphp
                           	@foreach($faq as $item)
                           <tr>
                              <td>{{$count++}}.</td>
                              <td>{{$item->question}}</td>
                              <td>{!! $item->answer !!}</td>
                              <td>
                              	@php
                              		$fid = $item->id;
                              		$subfaq = DB::table('subfaqs')->where('faq_id',$fid)->count();
                              	@endphp
                              	{{$subfaq}}
                              </td>
                              <td>
                                 <div class="btn btn-group">
                                    <a href="{{url('admin/faq/edit')}}/{{$item->id}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('admin/faq/delete')}}/{{$item->id}}" onclick="return confirm('Are you Want to delete?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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