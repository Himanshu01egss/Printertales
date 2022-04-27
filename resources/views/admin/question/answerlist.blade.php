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
               <h1>Answers List</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Answers List</li>
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
                     <form method="post" action="{{url('admin/answer/bulkdelte')}}">
                        @csrf
                        <table id="example1" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 @if(count($answer)>0)
                                 <th>#</th>
                                 @endif
                                 <th>#</th>
                                 <th>Question</th>
                                 <th>Posted By</th>
                                 <th>Answer</th>
                                 <th>Status</th>
                                 <th>Date</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @php
                                 $count=1;
                              @endphp
                              @foreach($answer as $item)
                              <tr>
                                 <td>
                                    <input type="checkbox" name="checked[]" value="{{$item->id}}">
                                 </td>
                                 <td>{{$count++}}.</td>
                                 <td>
                                    @if(isset($item->question->id))
                                       <a href="{{url('admin/question/edit/'.$item->question->id)}}" target="_blank"><u>{{$item->question->question}}</u></a>
                                    @else
                                       <span class="badge badge-danger">Question Deleted</span>
                                    @endif
                                 </td>
                                 <td>{{$item->user->name}}</td>
                                 
                                 <td>{!! substr(strip_tags($item['answer']),'0','100') !!}...</td>
                                 <td>
                                    @if(!isset($item->question->id))
                                       <span class="badge badge-warning">Pending</span>
                                    @else
                                       @if($item->status==1)
                                          <span class="badge badge-success">Active</span>
                                       @else
                                          <span class="badge badge-danger">Deactive</span>
                                       @endif
                                    @endif
                                 	
                                 </td>
                                 <td>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</td>
                                 
                                 <td>
                                    @php $itemid= Crypt::encrypt($item->id); @endphp
                                    <div class="btn btn-group">
                                       <!-- <a href="{{url('admin/question/view')}}/{{$item->id}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a> -->
                                       @if(isset($item->question->id)) 
                                          <a href="{{url('admin/answer/edit')}}/{{$itemid}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                       @endif
                                       <a href="{{url('admin/answer/delete')}}/{{$itemid}}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                    </div>
                                 </td>
                              </tr>
                              @endforeach                 
                           </tbody>
                        </table>
                        @if(count($answer)>0)
                           <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                        @endif
                     </form>
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