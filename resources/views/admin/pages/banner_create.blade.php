@extends('layouts.admin')

@section('title', 'Add banner User')

@section('Admin header')

@section('Admin sidebar')


@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add banner</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add banner</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
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
               <a href="{{url('admin/banner/')}}" class="btn btn-info"><i class="fa fa-list"></i> banner List</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
<form action="{{url('admin/banner/banner_store')}}" method="post"  enctype="multipart/form-data">
@csrf

<div class="card-body">

<div class="form-group"><label for="title">Banner Title</label><input type="text" name="title" class="form-control" id="title" placeholder="Enter Banner Title" required=""></div>

<div class="form-group"><label for="sub_title">Banner Sub Title</label><input type="text" name="sub_title" class="form-control" id="sub_title" placeholder="Enter Banner Sub Title" required=""></div>

<div class="form-group"><label for="image">Banner Image</label>
<input type="file" name="image" class="form-control" id="image"  required="">
</div>

<div class="form-group"><label for="link">Shop Now Link</label><input type="text" name="link" class="form-control" id="link" placeholder="Enter Shop Now link" required=""></div>
           




</div>
              
                

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
@endsection

@section('Admin footer')

