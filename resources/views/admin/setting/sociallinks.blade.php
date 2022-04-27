@extends('layouts.admin')
@section('title', 'Update Social Links')
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
                  <li class="breadcrumb-item active">Social Links</li>
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <!-- left column -->
            <div class="col-md-12">
               <div class="card card-info">
                  <div class="card-header">
                     <h3 class="card-title">Socail Links</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('admin/settings/updatesociallinks')}}" method="post">
                  @csrf
                    <div class="card-body">
                        @foreach($link as $links)
                        <div class="repeatable ">
                           <div class="row">

                              <div class="col-sm-10">
                                 <div class="form-group row">
                                    <label for="name" class="col-sm-1 col-form-label">Name</label>
                                    <div class="col-sm-11">
                                    	<select name="name[]" class="form-control">
                                    		<option value="facebook" @if($links->name == 'facebook') selected @endif>Facebook</option>
                                    		<option value="instagram" @if($links->name == 'instagram') selected @endif>Instagram</option>
                                    		<option value="linkedin" @if($links->name == 'linkedin') selected @endif>Linkedin</option>
                                    		<option value="youtube" @if($links->name == 'youtube') selected @endif>Youtube</option>
                                    		<option value="pinterest" @if($links->name == 'pinterest') selected @endif>Pinterest</option>
                                    		<option value="twitter" @if($links->name == 'twitter') selected @endif>Twitter</option>
                                    	</select>
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label for="answer" class="col-sm-1 col-form-label">URL</label>
                                    <div class="col-sm-11"><input type="text" class="form-control" id="url" name="url[]" placeholder="Social Link URL" value="{{$links->link}}" required=""></div>
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
       html += '<div class="repeatable "><div class="row"><div class="col-sm-10"><div class="form-group row"><label for="name" class="col-sm-1 col-form-label">Name</label><div class="col-sm-11"><select name="name[]" class="form-control"><option value="facebook">Facebook</option><option value="instagram">Instagram</option><option value="linkedin">Linkedin</option><option value="youtube">Youtube</option><option value="pinterest">Pinterest</option><option value="twitter">Twitter</option></select></div></div><div class="form-group row"><label for="answer" class="col-sm-1 col-form-label">URL</label><div class="col-sm-11"><input type="text" class="form-control" id="url" name="url[]" placeholder="Social Link URL" required=""></div></div></div><div class="col-sm-2"><div class="form-check"><input type="button" id="removeRow" class="btn btn-danger" value="x"></div></div></div></div>';
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