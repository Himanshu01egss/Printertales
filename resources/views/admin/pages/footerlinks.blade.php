@extends('layouts.admin')
@section('title', 'Footer Links')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Footer Links</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Footer Links</li>
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
               <div class="card card-info">
                  <div class="card-header">
                     <h3 class="card-title">Footer Links</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="form-horizontal"  action="{{url('admin/setting/updatefooterlinks')}}" method="post">
                    @csrf
                    <div class="card-body">
                        @foreach($flinks as $flinks)
                        <div class="repeatable ">
                           <div class="row">
                              <div class="col-sm-10">
                                 <div class="form-group row">
                                    <label for="name" class="col-sm-2 col-form-label">Page Name.</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" id="name" name="name[]" placeholder="Link Name" value="{{$flinks->name}}" required=""></div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="link" class="col-sm-2 col-form-label">Page Link.</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" id="link" name="link[]" placeholder="Page Link" value="{{$flinks->link}}" required=""></div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="form-check"><input type="button" id="removeRow" class="btn btn-danger" value="Delete Link"></div>
                              </div>
                           </div>
                        </div>
                        @endforeach
                        <div id="newRow"></div>
                        <div class="form-group row">
                           <div class="form-check">
                              <input type="button" id="addRow" class="btn btn-info" value="Add Link"> 
                           </div>
                        </div>
                     </div>
                     <!-- /.card-body -->
                     <div class="card-footer">
                        <button type="submit" class="btn btn-info">Submit</button>
                     </div>
                     <!-- /.card-footer -->
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section>
</div>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
   // add row
   $("#addRow").click(function () {
       var html = '';
       html += '<div class="repeatable "><div class="row"><div class="col-sm-10"><div class="form-group row"><label for="name" class="col-sm-2 col-form-label">Page Name.</label><div class="col-sm-10"><input type="text" class="form-control" id="name" name="name[]" placeholder="Link Name" required=""></div></div><div class="form-group row"><label for="link" class="col-sm-2 col-form-label">Page Link.</label><div class="col-sm-10"><input type="text" class="form-control" id="link" name="link[]" placeholder="Page Link" value="" required=""></div></div></div><div class="col-sm-2"><div class="form-check"><input type="button" id="removeRow" class="btn btn-danger" value="Delete Link"></div></div></div></div>';
       $('#newRow').append(html);
   });
   
   // remove row
   $(document).on('click', '#removeRow', function () {
       $(this).closest('.repeatable').remove();
   });
</script>
@endsection
@section('Admin footer')