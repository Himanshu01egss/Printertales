@extends('layouts.admin')
@section('title', 'Add Question')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Add Question</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Add Question</li>
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
               <!-- general form elements -->
               <div class="card">
                  <div class="card-header">
                     <a href="{{url('admin/question/')}}" class="btn btn-info"><i class="fa fa-list"></i> Question List</a>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('admin/question/store')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group"><label for="title">Question</label><input type="text" name="title" class="form-control" id="title" placeholder="question" required></div>
                              <div class="form-group"><label for="slug">Slug</label><input type="text" name="slug" class="form-control" id="slug" placeholder="question slug" required></div>
                              <div class="form-group">
                                 <label for="title">Category</label>
                                 <select name="category" class="form-control" required>
                                    <option value=""> -- Select Category -- </option>
                                  @foreach($category as $list)
                                    <option value="{{$list->id}}"> {{$list->name}} </option>
                                  @endforeach                                        
                                 </select>
                              </div>
                              
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="metatitle">Meta Title</label>
                                 <input type="text" name="metatitle" class="form-control" id="metatitle" placeholder="Meta Title" required>
                              </div>
                              <div class="form-group">
                                 <label for="metadescription">Meta Description</label>
                                 <textarea name="metadescription" id="metadescription" class="form-control" placeholder="Enter Meta Description" required ></textarea>  
                              </div>
                              <div class="form-group">
                                 <label for="metakeywords">Meta Keywords</label>
                                 <input type="text" name="metakeywords" class="form-control" id="metakeywords" placeholder="Keywords" required>
                              </div>
                           </div>
                           <div class="form-group clearfix">
                              <label>
                              Status: 
                              </label>
                              <div class="icheck-success d-inline">
                                 <input type="radio" name="status" value="1" id="radioSuccess1">
                                 <label for="radioSuccess1">
                                 Active
                                 </label>
                              </div>
                              <div class="icheck-danger d-inline">
                                 <input type="radio" name="status" value="0" checked="" id="radioDanger2">
                                 <label for="radioDanger2">
                                 Deactive
                                 </label>
                              </div>
                           </div>
                        </div>
                        <div class="form-group"><label for="question_slug">Description</label><textarea id="summernote" name="description" required class="form-control" placeholder="Enter question location"></textarea></div>
                     </div>
                     <div class="card-footer">
                        <button type="submit" class="btn btn-success">Submit</button>
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
   <!-- /.content -->
</div>
@endsection
@section('Admin footer')