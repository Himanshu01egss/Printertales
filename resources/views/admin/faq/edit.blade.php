@extends('layouts.admin')
@section('title', 'Add blog User')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Add FAQ</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Add Faq</li>
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
                     <a href="{{url('admin/faq/')}}" class="btn btn-info"><i class="fa fa-list"></i> FAQ List</a>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('admin/faq/update')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-12">
                              <div class="form-group"><label for="title">FAQ Title</label><input type="text" name="title" class="form-control" id="title" value="{{$faq->question}}" placeholder="FAQ title" required></div>
                           </div>
                        </div>
                        <div class="form-group"><label for="blog_slug">FAQ Description</label><textarea id="summernote" name="description" required class="form-control" placeholder="Enter blog location">{{$faq->answer}}</textarea></div>
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
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <!-- left column -->
            <div class="col-md-12">
               <div class="card card-info">
                  <div class="card-header">
                     <h3 class="card-title">Add Questions</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="form-horizontal"  action="{{url('admin/faq/save_subfaq')}}" method="post">
                     @csrf
                     <input type="hidden" value="{{$faq->id}}" name="faqid">
                     <div class="card-body">
                        @foreach($subfaq as $faqs)
                        <div class="repeatable ">
                           <div class="row">
                              <div class="col-sm-10">
                                 <div class="form-group row">
                                    <label for="question" class="col-sm-1 col-form-label">Q.</label>
                                    <div class="col-sm-11"><input type="text" class="form-control" id="question" name="question[]" placeholder="Question" value="{{$faqs->question}}" required=""></div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="answer" class="col-sm-1 col-form-label">A.</label>
                                    <div class="col-sm-11"><textarea name="answer[]" class="form-control" id="answer" placeholder="Answer" required="">{{$faqs->answer}}</textarea></div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="form-check"><input type="button" id="removeRow" class="btn btn-danger" value="Delete Question"></div>
                              </div>
                           </div>
                        </div>
                        @endforeach
                        <div id="newRow"></div>
                        <div class="form-group row">
                           <div class="form-check">
                              <input type="button" id="addRow" class="btn btn-warning" value="Add Question"> 
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
       html += '<div class="repeatable "><div class="row"><div class="col-sm-10"><div class="form-group row"><label for="question" class="col-sm-1 col-form-label">Q.</label><div class="col-sm-11"><input type="text" class="form-control" id="question" name="question[]" placeholder="Question" required=""></div></div><div class="form-group row"><label for="answer" class="col-sm-1 col-form-label">A.</label><div class="col-sm-11"><textarea name="answer[]" class="form-control" id="answer" placeholder="Answer" required=""></textarea></div></div></div><div class="col-sm-2"><div class="form-check"><input type="button" id="removeRow" class="btn btn-danger" value="Delete Question"></div></div></div></div>';
       $('#newRow').append(html);
   });
   
   // remove row
   $(document).on('click', '#removeRow', function () {
       $(this).closest('.repeatable').remove();
   });
</script>
@endsection
@section('Admin footer')