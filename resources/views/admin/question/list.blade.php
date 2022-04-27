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
               <h1>Question List</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Question List</li>
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
                     <a href="{{url('admin/question/create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                  </div>
                  <div class="card-body">
                     <table id="example1" class="table table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Question</th>
                              <th>Posted By</th>
                              <th>Category</th>
                              <th>Answer</th>
                              <th>Status</th>
                              <th>Date</th>
                              <th>Actions</th>
                           </tr>
                        </thead>
                        <tbody>
                           @php
                              $count=1;
                           @endphp
                           @foreach($question as $item)
                           <tr>
                              <td>{{$count++}}.</td>
                              <td>{{$item->question}}</td>
                              <td>{{$item->user->name}}</td>
                              <td>
                                 @foreach($category as $ct)
                                    {{$ct->name}}
                                 @endforeach
                              </td>
                              <td>{{$item->answers_count}}</td>
                              <td>
                                @if($item->status==1)
                                  <span class="badge badge-success">Active</span>
                                @else
                                  <span class="badge badge-danger">Deactive</span>
                                @endif
                              </td>
                              <td>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</td>
                              <td>
                                 <div class="btn btn-group">
                                    @if($item->status==1)
                                    <a href="{{url($item->slug)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                    @endif
                                    <a href="{{url('admin/question/edit')}}/{{$item->id}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                    <a href="{{url('admin/question/delete')}}/{{$item->id}}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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