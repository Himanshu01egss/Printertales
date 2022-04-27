@extends('layouts.admin')
@section('title', 'Edit Answer')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Edit Answer</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Edit Answer</li>
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
               @php
                     $ansstatus = $answer->status;
               @endphp   
               <div class="ribbon-wrapper ribbon-lg">
                     <div class="ribbon @if($ansstatus == 1) bg-success @else bg-danger @endif  text-lg">@if($ansstatus == 1) Active @else Pending @endif</div>
                </div>
               <!-- general form elements -->
               <div class="card">
                  <div class="card-header @if($ansstatus == 1) bg-success @else bg-danger @endif">
                     <a href="{{url('admin/answer/')}}" class="btn btn-info"><i class="fa fa-list"></i> All Answer</a>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('admin/answer/update')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="id" value="{{$answer->id}}" required>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                                 <div class="form-group">
                                    <label for="title">Question</label>
                                    <input type="text" name="questionid" class="form-control" id="title" value="{{$answer->question->question}}" placeholder="Title" readonly>
                                    @if($answer->question->status == 1)
                                       <a href="{{url($answer->question->slug)}}" target="_blank"><strong><u>View Question</u></strong></a>
                                    @endif
                                 </div>
                                 <div class="form-group">
                                    <label for="title">User</label>
                                    <input type="text" name="slug" class="form-control" id="title" value="{{$answer->user->name}}" placeholder="Slug" readonly>
                                 </div>
	                            <div class="form-group clearfix">
	                                <label>
	                                    Status: 
	                                </label>
	                                <div class="icheck-success d-inline">
	                                    <input type="radio" name="status" value="1" id="radioSuccess1" @if($answer->status==1) checked="" @endif>
	                                    <label for="radioSuccess1">
	                                        Active
	                                    </label>
	                                </div>
	                                <div class="icheck-danger d-inline">
	                                    <input type="radio" name="status" value="0"  id="radioDanger2" @if($answer->status==0) checked="" @endif>
	                                    <label for="radioDanger2">
	                                        Deactive
	                                    </label>
	                                </div>
	                            </div>    
                                
                           </div>

                        </div>
                        <div class="form-group"><label for="question_slug">Answer</label><textarea id="summernote" name="description" required class="form-control" placeholder="Enter question location">{{$answer->answer}}</textarea></div>
                         <div class="form-group">
                           @php $newtime = strtotime($answer->created_at); @endphp
                           <label for="question_slug">Published At:</label> {{ date('M d, Y',$newtime) }}
                        </div>
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

</div>

@endsection
@section('Admin footer')