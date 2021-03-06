@extends('layouts.admin')
@section('title', 'Edit blog User')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Edit blog</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('admin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Edit blog</li>
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
                     <a href="{{url('admin/blog/')}}" class="btn btn-info"><i class="fa fa-list"></i> Blog List</a>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('admin/blog/update')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                     <input type="hidden" name="id" value="{{$blog->id}}" required>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" id="title" value="{{$blog->title}}" placeholder="Title" required>
                                </div>
                                <div class="form-group">
                                    <label for="title">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="title" value="{{$blog->slug}}" placeholder="Slug" required>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image (image size should be 800x450px)</label>
                                    <img src="{{url('public/')}}/{{$blog->image}}" style="height: 100px;padding:10px">   
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="hidden" name="oldimage" class="form-control" value="{{$blog->image}}" id="image" placeholder="Image">
                                            <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image" >
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                           <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                              </div>
                              <div class="form-group">
                                 <label for="brandid">Brand </label>
                                 <select name="brandid" class="form-control" id="brandid"  required>
                                    <option value="">-- Select Brand--</option>
                                    @foreach($brand as $item)
                                       <option value="{{$item->id}}" @if($item->id == $blog->brand_id) {{"selected"}} @endif> {{$item->name}}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                     <label for="metatitle">Meta Title</label>
                                     <input type="text" name="metatitle" class="form-control" id="metatitle" value="{{$blog->metatitle}}" placeholder="Meta Title" required>
                                </div>

                                <div class="form-group">
                                     <label for="metadescription">Meta Description</label>
                                     <textarea name="metadescription" id="metadescription" class="form-control" placeholder="Enter Meta Description" required >{{$blog->metadescription}}</textarea>  
                                </div>
                                <div class="form-group">
                                     <label for="metakeywords">Meta Keywords</label>
                                     <input type="text" name="metakeywords" class="form-control" id="metakeywords" value="{{$blog->metakeywords}}" placeholder="Keywords" required>
                                </div>
                                <div class="form-group">
                                     <label for="alt">Alt</label>
                                     <input type="text" name="alt" class="form-control" id="alt" placeholder="Image Alt Tag" value="{{$blog->alt}}" required>
                                </div>
                            </div>
                            <div class="form-group clearfix">
                                <label>
                                    Status: 
                                </label>
                                <div class="icheck-success d-inline">
                                    <input type="radio" name="status" value="1" id="radioSuccess1" @if($blog->status==1) checked="" @endif>
                                    <label for="radioSuccess1">
                                        Active
                                    </label>
                                </div>
                                <div class="icheck-danger d-inline">
                                    <input type="radio" name="status" value="0"  id="radioDanger2" @if($blog->status==0) checked="" @endif>
                                    <label for="radioDanger2">
                                        Deactive
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"><label for="blog_slug">Description</label><textarea id="summernote" name="description" required class="form-control" placeholder="Enter blog location">{{$blog->description}}</textarea></div>
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
                     <h3 class="card-title">FAQ for {{$blog->title}} </h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('admin/blog/savefaq')}}" method="post">
                  @csrf
                     <input type="hidden" value="{{$blog->id}}" name="blogid">
                     <div class="card-body">
                        @foreach($faq as $faqs)
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
                              <div class="col-sm-1">
                                 <div class="form-check"><input type="button" id="removeRow" class="btn btn-danger" value="x"></div>
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
                        <button type="submit" class="btn btn-info">Save</button>
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
       html += '<div class="repeatable "><div class="row"><div class="col-sm-10"><div class="form-group row"><label for="question" class="col-sm-1 col-form-label">Q.</label><div class="col-sm-11"><input type="text" class="form-control" id="question" name="question[]" placeholder="Question" required=""></div></div><div class="form-group row"><label for="answer" class="col-sm-1 col-form-label">A.</label><div class="col-sm-11"><textarea name="answer[]" class="form-control" id="answer" placeholder="Answer" required=""></textarea></div></div></div><div class="col-sm-2"><div class="form-check"><input type="button" id="removeRow" class="btn btn-danger" value="x"></div></div></div></div>';
       $('#newRow').append(html);
   });
   
   // remove row
   $(document).on('click', '#removeRow', function () {
       $(this).closest('.repeatable').remove();
   });
</script>
</div>
@endsection
@section('Admin footer')