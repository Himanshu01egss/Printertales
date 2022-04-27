@extends('layouts.admin')
@section('title', 'Edit question User')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Edit Question</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Edit Question</li>
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
                     $qstatus = $question->status;
               @endphp 
               <div class="ribbon-wrapper ribbon-lg">
                     <div class="ribbon @if($qstatus == 1) bg-success @else bg-danger @endif  text-lg">@if($qstatus == 1) Active @else Pending @endif</div>
                </div> 
               <!-- general form elements -->
               <div class="card">
                  <div class="card-header @if($qstatus == 1) bg-success @else bg-danger @endif">
                     <a href="{{url('admin/question/')}}" class="btn btn-info"><i class="fa fa-list"></i> Question List</a>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('admin/question/update')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="id" value="{{$question->id}}" required>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="title">Question</label>
                                    <input type="text" name="question" class="form-control" id="title" value="{{$question->question}}" placeholder="Title" required>
                                 </div>
                                 <div class="form-group">
                                    <label for="title">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="title" value="{{$question->slug}}" placeholder="Slug" required>
                                 </div>
                                
                                 <div class="form-group">
                                    <label for="category">Category</label>
                                    <select name="category" class="form-control" id="category"  required>
                                       <option value="">Select Category</option>
                                       @foreach($category as $item)
                                          @php
                                             $sel="";
                                          @endphp    
                                          @if($item->id==$question->category_id)
                                             @php
                                                   $sel="selected";
                                             @endphp
                                          @endif   
                                          
                                          <option value="{{$item->id}}" {{$sel}}> {{$item->name}}</option>
                                       @endforeach
                                    </select>
                                 </div>

                                 <div class="form-group">
                                    <label for="title">User</label>
                                    <input type="text" name="name" class="form-control" id="title" value="{{$question->user->name}}"Readonly>
                                 </div>
                           </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     <label for="metatitle">Meta Title</label>
                                     <input type="text" name="metatitle" class="form-control" id="metatitle" value="{{$question->metatitle}}" placeholder="Meta Title" required>
                                </div>

                                <div class="form-group">
                                     <label for="metadescription">Meta Description</label>
                                     <textarea name="metadescription" id="metadescription" class="form-control" placeholder="Enter Meta Description" required >{{$question->metadescription}}</textarea>  
                                </div>
                                <div class="form-group">
                                     <label for="metakeywords">Meta Keywords</label>
                                     <input type="text" name="metakeywords" class="form-control" id="metakeywords" value="{{$question->metakeywords}}" placeholder="Keywords" required>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label>
                                    Status: 
                                </label>
                                <div class="icheck-success d-inline">
                                    <input type="radio" name="status" value="1" id="radioSuccess1" @if($question->status==1) checked="" @endif>
                                    <label for="radioSuccess1">
                                        Active
                                    </label>
                                </div>
                                <div class="icheck-danger d-inline">
                                    <input type="radio" name="status" value="0"  id="radioDanger2" @if($question->status==0) checked="" @endif>
                                    <label for="radioDanger2">
                                        Deactive
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label for="question_slug">Description</label><textarea id="summernote" name="description" required class="form-control" placeholder="Enter question location">{{$question->description}}</textarea></div>
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
   <section class="content">
  <div class="card">
    <div class="card-header bg-warning">
      <h3 class="card-title">Projects Detail</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12 order-2 order-md-1">
          <div class="row">
            <div class="col-6 col-sm-6">
              <div class="info-box bg-light">
                <div class="info-box-content">
                  <span class="info-box-text text-center text-muted">Total Answers</span>
                  <span class="info-box-number text-center text-muted mb-0">{{count($question->answers)}}</span>
                </div>
              </div>
            </div>
            <div class="col-6 col-sm-6">
              <div class="info-box bg-light">
                <div class="info-box-content">
                  <span class="info-box-text text-center text-muted">Total Views spent</span>
                  <span class="info-box-number text-center text-muted mb-0">{{$question->views}}</span>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
               <h4>Recent Activity</h4>
               <br>
               @foreach($question->answers as $anslist)
               <div class="post">
                  <div class="user-block">
                     <img class="img-circle img-bordered-sm" src="{{url('public/storage/upload/6217495a331cc_ri-404072-user.png')}}" alt="user image">
                     <span class="username">
                        <a href="#">{{$anslist->user->name}}</a>
                     </span>
                     <span class="description">Published at - {{ \Carbon\Carbon::parse($anslist->created_at)->diffForHumans() }}</span>
                  </div>
                  <div class="desc">
                     {!! $anslist->answer !!}
                  </div>
                  @php $itemid= Crypt::encrypt($anslist->id); @endphp
                  @if($anslist->status==1)
                     <span class="badge badge-success">Active</span>
                  @else
                     <span class="badge badge-danger">Deactive</span>
                  @endif 
                  | <a href="{{url('admin/answer/edit')}}/{{$itemid}}" target="_blank">Edit</a>
               </div>
               @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>     
</div>

@endsection
@section('Admin footer')