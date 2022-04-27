@extends('layouts.admin')

@section('title', 'Add Offer banner User')

@section('Admin header')

@section('Admin sidebar')


@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Offer banner</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Add Offer banner</li>
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
               <a href="{{url('admin/offerbanner/')}}" class="btn btn-info"><i class="fa fa-list"></i> Offer Banner List</a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
<form action="{{url('admin/offerbanner/banner_store')}}" method="post"  enctype="multipart/form-data">
@csrf

<div class="card-body">

<div class="form-group"><label for="title_one">Title One</label><input type="text" name="title_one" class="form-control" id="title_one" placeholder="Enter Title One" required=""></div>

<div class="form-group"><label for="title_two">Title Two</label><input type="text" name="title_two" class="form-control" id="title_two" placeholder="Enter Title Two" required=""></div>

<div class="form-group"><label for="title_three">Title Three</label><input type="text" name="title_three" class="form-control" id="title_three" placeholder="Enter Title Three" required=""></div>

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

