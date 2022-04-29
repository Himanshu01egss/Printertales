@extends('layouts.admin')
@section('title', 'Add Printers')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Add Printers</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Add Printers</li>
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
         <h3><a href="{{url('admin/printer/')}}" class="btn btn-info"><i class="fa fa-list"></i> Go To Printers List</a></h3>
         <div class="row">
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">All Features</span>
                      <span class="info-box-number text-center text-muted mb-0">{{count($printer->features)}}</span>
                     <a href="#features" class="text-center small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>

                  </div>

                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">All Errors</span>
                      <span class="info-box-number text-center text-muted mb-0">{{count($printer->errors)}}</span>
                      <a href="#errors" class="text-center small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">All FAQ's</span>
                      <span class="info-box-number text-center text-muted mb-0">{{count($printer->faq)}}</span>
                      <a href="#faq" class="text-center small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
              </div>
         <div class="row">
            <!-- left column -->

            <div class="col-md-12">
               <!-- general form elements -->
               <div class="card card-primary">
                 
                  <div class="card-header">
                     <strong>Printer Descriptions</strong>
                     <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                     </div>
                  </div>
                  <div class="card-body" style="display: block;">
                     <form action="{{url('admin/printer/update')}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$printer->id}}">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group"><label for="name">Name</label><input type="text" name="name" class="form-control" value="{{$printer->name}}" id="name" placeholder="Printer Name" required></div>
                              <div class="form-group"><label for="slug">Slug</label><input type="text" name="slug" class="form-control" value="{{$printer->slug}}" id="slug" placeholder="Printer slug" required></div>
                              <div class="form-group">
                                 <label for="image">Image (image size should be 800x450px)</label>
                                 <img src="{{url('public/')}}/{{$printer->image}}" style="height: 100px;padding:10px">   
                                 <div class="input-group">
                                    <div class="custom-file">
                                       <input type="hidden" name="oldimage" class="form-control" value="{{$printer->image}}" id="image" placeholder="Image">
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
                                 <label for="category">Brand</label>
                                 <select name="brandid" class="form-control" id="brandid"  required>
                                    <option value="" selected="selected">-- Select Brand --</option>
                                    @foreach($brand as $item)
                                    <option value="{{$item->id}}" @if($item->id == $printer->brand_id) {{"selected"}} @endif> {{$item->name}}</option>
                                    @endforeach
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group"><label for="technology">Technology</label><input type="text" name="technology" class="form-control" id="technology" placeholder="Technology" value="{{$printer->technology}}" required></div>
                              <div class="form-group"><label for="inktype">Inktype</label><input type="text" name="inktype" class="form-control" id="inktype" placeholder="Inktype" value="{{$printer->inktype}}" required></div>
                              <div class="form-group"><label for="slug">Support Number</label><input type="text" name="supportnum" class="form-control" id="supportnum" value="{{$printer->supportnum}}" placeholder="Support Number" required></div>
                              <div class="form-group">
                                 <label for="alt">Alt</label>
                                 <input type="text" name="alt" class="form-control" id="alt" placeholder="Image Alt Tag" value="{{$printer->alt}}" required>
                              </div>
                              <div class="form-group ">
                                 <label> Status: </label>
                                 <div class="icheck-success d-inline">
                                    <input type="radio" name="status" value="1" @if($printer->status==1) checked="" @endif id="radioSuccess1">
                                    <label for="radioSuccess1">
                                    Active
                                    </label>
                                 </div>
                                 <div class="icheck-danger d-inline">
                                    <input type="radio" name="status" @if($printer->status==0) checked="" @endif value="0" id="radioDanger2">
                                    <label for="radioDanger2">
                                    Deactive
                                    </label>
                                 </div>
                              </div>
                              <br/>
                              <div class="form-group ">
                                 <label> Popular: </label>
                                 <div class="icheck-success d-inline">
                                    <input type="radio" name="popular" value="1" id="radioSuccess11" @if($printer->popular == 1)checked="" @endif>
                                    <label for="radioSuccess11" >
                                    Active
                                    </label>
                                 </div>
                                 <div class="icheck-danger d-inline">
                                    <input type="radio" name="popular" value="0" @if($printer->popular == 0)checked="" @endif id="radioDanger2 2">
                                    <label for="radioDanger22">
                                    Deactive
                                    </label>
                                 </div>
                              </div>
                           </div>
                           
                        </div>
                        <div class="form-group"><label for="blog_slug">Description</label><textarea id="summernote" name="description" required class="form-control" placeholder="Enter blog location">{{$printer->description}}</textarea></div>
                        <div class="form-group">
                           <label for="metatitle">Meta Title</label>
                           <input type="text" name="metatitle" class="form-control" id="metatitle" placeholder="Meta Title" value="{{$printer->metatitle}}" required>
                        </div>
                        <div class="form-group">
                           <label for="metadescription">Meta Description</label>
                           <textarea name="metadescription" id="metadescription" class="form-control" placeholder="Enter Meta Description" required >{{$printer->metadescription}}</textarea>  
                        </div>
                        <div class="form-group">
                           <label for="metakeywords">Meta Keywords</label>
                           <input type="text" name="metakeywords" class="form-control" id="metakeywords" value="{{$printer->metakeywords}}"placeholder="Keywords" required>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>
                     </form>
                  </div>
               </div>
               <!-- /.card -->
            </div>
         </div>
         <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   </section>

   <section class="content" id="features">
      <div class="container-fluid">
         <div class="row">
            <!-- left column -->
            <div class="col-md-12">
               <div class="card card-info">
                  <div class="card-header">
                    <strong>Features for {{$printer->name}}</strong>
                     <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                     </div>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <div class="card-body">
                     <form action="{{url('admin/printer/savefeatures')}}" method="post">
                        @csrf
                        <input type="hidden" value="{{$printer->id}}" name="printerid">
                        @foreach($feature as $features)
                        <div class="repeatable ">
                           <div class="row">
                              <div class="col-sm-10">
                                 <div class="form-group row">
                                    <div class="col-sm-1">-</div>
                                    <div class="col-sm-10"><input type="text" class="form-control headtitle" id="feature" name="feature[]" placeholder="Features" value="{{$features->feature}}" required=""></div>
                                 </div>
                              </div>
                              <div class="col-sm-2">
                                 <div class="form-check"><input type="button" id="removefeature" class="btn btn-danger" value="x"></div>
                              </div>
                           </div>
                        </div>
                        @endforeach
                        <div id="newfeature"></div>
                        <div class="form-group row">
                           <div class="form-check">
                              <input type="button" id="addfeatures" class="btn btn-warning" value="Add Feature"> 
                           </div>
                        </div>
                        <div class="card-footer">
                           <button type="submit" class="btn btn-success">Save Feature</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- /.content -->
   <section class="content" id="errors">
      <div class="container-fluid">
         <div class="row">
            <!-- left column -->
            <div class="col-md-12">
               <div class="card card-info">
                  <div class="card-header">
                    <strong>Error for {{$printer->name}}</strong>
                     <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                     </div>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <div class="card-body">
                     <form action="{{url('admin/printer/saveerror')}}" method="post">
                        @csrf
                        <input type="hidden" value="{{$printer->id}}" name="printerid">
                        @foreach($error as $errors)
                        <div class="repeatable ">
                           <div class="row">
                              <div class="col-sm-10">
                                 <div class="form-group row">
                                    <label for="Title" class="col-sm-2 col-form-label">Title:</label>
                                    <div class="col-sm-10"><input type="text" class="form-control headtitle" id="title" name="title[]" placeholder="Error Title" value="{{$errors->title}}" required=""></div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="descriptions" class="col-sm-2 col-form-label">Description:</label>
                                    <div class="col-sm-10"><textarea name="descriptions[]" class="form-control summernote" id="descriptions" placeholder="Error Description" required="">{{$errors->description}}</textarea></div>
                                 </div>
                              </div>
                              <div class="col-sm-1">
                                 <div class="form-check"><input type="button" id="removeerrors" class="btn btn-danger" value="x"></div>
                              </div>
                           </div>
                        </div>
                        @endforeach
                        <div id="newerror"></div>
                        <div class="form-group row">
                           <div class="form-check">
                              <input type="button" id="adderrors" class="btn btn-warning" value="Add Errors"> 
                           </div>
                        </div>
                        <div class="card-footer">
                           <button type="submit" class="btn btn-success">Save Errors</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="content" id="faq">
      <div class="container-fluid">
         <div class="row">
            <!-- left column -->
            <div class="col-md-12">
               <div class="card card-info">
                  <div class="card-header">
                    <strong>FAQ for {{$printer->name}}</strong>
                     <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                     </div>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <div class="card-body">
                     <form action="{{url('admin/printer/savefaq')}}" method="post">
                        @csrf
                        <input type="hidden" value="{{$printer->id}}" name="printerid">
                        @foreach($faq as $faqs)
                        <div class="repeatable ">
                           <div class="row">
                              <div class="col-sm-10">
                                 <div class="form-group row">
                                    <label for="question" class="col-sm-2 col-form-label">Q.</label>
                                    <div class="col-sm-10"><input type="text" class="form-control headtitle" id="question" name="question[]" placeholder="Question" value="{{$faqs->question}}" required=""></div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="answer" class="col-sm-2 col-form-label">A.</label>
                                    <div class="col-sm-10"><textarea name="answer[]" class="form-control" id="answer" placeholder="Answer" required="">{{$faqs->answer}}</textarea></div>
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
                        <div class="card-footer">
                           <button type="submit" class="btn btn-success">Save FAQ</button>
                        </div>
                     </form>
                  </div>
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
       html += '<div class="repeatable "><div class="row"><div class="col-sm-10"><div class="form-group row"><label for="question" class="col-sm-2 col-form-label">Q.</label><div class="col-sm-10"><input type="text" class="form-control headtitle" id="question" name="question[]" placeholder="Question" required=""></div></div><div class="form-group row"><label for="answer" class="col-sm-2 col-form-label">A.</label><div class="col-sm-10"><textarea name="answer[]" class="form-control" id="answer" placeholder="Answer" required=""></textarea></div></div></div><div class="col-sm-2"><div class="form-check"><input type="button" id="removeRow" class="btn btn-danger" value="x"></div></div></div></div>';
       $('#newRow').append(html);
   });
   
   // remove row
   $(document).on('click', '#removeRow', function () {
       $(this).closest('.repeatable').remove();
   });
</script>

<script type="text/javascript">
   // add row
   $("#adderrors").click(function () {
       var html = '';
       html += '<div class="repeatable "><div class="row"><div class="col-sm-10"><div class="form-group row"><label for="title" class="col-sm-2 col-form-label">Title: </label><div class="col-sm-10"><input type="text" class="form-control headtitle" id="title" name="title[]" placeholder="Title" required=""></div></div><div class="form-group row"><label for="descriptions" class="col-sm-2 col-form-label">Description: </label><div class="col-sm-10"><textarea name="descriptions[]" class="form-control summernote" id="descriptions" placeholder="Description" required=""></textarea></div></div></div><div class="col-sm-2"><div class="form-check"><input type="button" id="removeerrors" class="btn btn-danger" value="x"></div></div></div></div>';
       $('#newerror').append(html);
   });
   
   // remove row
   $(document).on('click', '#removeerrors', function () {
       $(this).closest('.repeatable').remove();
   });
</script>

<script type="text/javascript">
   // add row
   $("#addfeatures").click(function () {
       var html = '';
       html += '<div class="repeatable "><div class="row"><div class="col-sm-10"><div class="form-group row"><div class="col-sm-1">-</div><div class="col-sm-10"><input type="text" class="form-control headtitle" id="feature" name="feature[]" placeholder="Features" value="{{$errors->feature}}",required=""></div></div></div><div class="col-sm-2"><div class="form-check"><input type="button" id="removefeature" class="btn btn-danger" value="x"></div></div></div></div>';
       $('#newfeature').append(html);
   });
   
   // remove row
   $(document).on('click', '#removefeature', function () {
       $(this).closest('.repeatable').remove();
   });
</script>

</div>
@endsection
@section('Admin footer')