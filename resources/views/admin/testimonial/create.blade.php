@extends('layouts.admin')
@section('title', 'Add Testimonials')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Add Testimonials</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Add Testimonials</li>
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
                     <a href="{{url('admin/testimonials/')}}" class="btn btn-info"><i class="fa fa-list"></i> Testimonials List</a>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('admin/testimonials')}}" method="post">
                     @csrf
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group"><label for="Name">Name</label><input type="text" name="name" class="form-control" id="Name" placeholder="User Name" required></div>
                              <div class="form-group">
                                 <label for="category">Brand</label>
                                 <select name="brandid" class="form-control" id="brandid"  required>
                                    <option value="" selected="selected">-- Select Brand --</option>
                                    @foreach($brand as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                 </select>
                              </div>
                              <div class="form-group">
                                 <label for="comment">Comments</label>
                                 <textarea name="comment" id="comment" class="form-control" placeholder="Add Comment" required ></textarea>  
                              </div>
                           </div>
                           
                        </div>
                        
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