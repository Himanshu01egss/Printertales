@extends('layouts.admin')
@section('title', 'Edit Product Details')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Edit Product</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Edit Product</li>
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
                     <a href="{{url('admin/product/')}}" class="btn btn-info"><i class="fa fa-list"></i> Product List</a>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{url('admin/product/update')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <input type="hidden" name="id" required="" value="{{$product->id}}">
                        <div class="row">
                           <div class="form-group col-md-4">
                              <label for="product_name">Product Name</label>
                              <input type="text" name="name" class="form-control" id="name" placeholder="Enter Product Name" required="" value="{{$product->name}}">
                           </div>
                           <div class="form-group col-md-4">
                              <label for="product_slug">Product Slug</label>
                              <input type="text" class="form-control" id="product_slug" name="slug" placeholder="Enter Product Slug" required="" value="{{$product->slug}}">
                           </div>
                           <div class="form-group col-md-4">
                              <label for="product_slug">Product Price</label>
                              <input type="number" class="form-control" id="product_price" name="price" placeholder="Enter Product Slug" required="" value="{{$product->price}}" step="0.01">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-4">
                              <label for="stock">Sku</label>
                              <input type="text" name="sku" class="form-control" id="sku" required="" value="{{$product->sku}}">
                           </div>
                           <div class="form-group col-md-4">
                              <label for="product_name">Save Price</label>
                              <select class="form-control" id="on_sale" onchange="on_sale1(this.value)" name="is_sale" required="">
                                 <option value="" selected="" disabled="">Select Save Option</option>
                                 <option value="0" <?php if($product->is_sale==0){ echo "selected"; } ?> >Save Price Off</option>
                                 <option value="1" <?php if($product->is_sale==1){ echo "selected"; } ?> >Save Price On</option>
                              </select>
                           </div>
                           <div class="form-group col-md-4">
                              <label for="product_slug">Save Price</label>
                              <input type="number" class="form-control" id="sale_price"  value="{{$product->sale_price}}" name="sale_price" placeholder="Enter Sale Price" <?php if($product->is_sale==0){ echo "disabled"; } ?>>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-4">
                              <label for="amazon">Amazon</label>
                              <input type="number" name="amazoneprice" class="form-control" id="amazon" placeholder="Enter Amazon Price" value="{{$product->amazoneprice}}"  step="0.01"><br>
                              <input type="text" name="amazonlink" class="form-control" id="amazonlink" placeholder="Amazon Affiliate Link" value="{{$product->amazonlink}}">
                           </div>
                           <div class="form-group col-md-4">
                              <label for="walmart">Walmart</label>
                              <input type="number" name="walmartprice" class="form-control" id="amazon" placeholder="Enter Walmart Price" value="{{$product->walmartprice}}"  step="0.01"><br>
                              <input type="text" name="walmartlink" class="form-control" id="walmartlink" placeholder="Walmart Affiliate Link" value="{{$product->walmartlink}}">
                           </div>
                           <div class="form-group col-md-4">
                              <label for="other">Other</label>
                              <input type="number" name="otherprice" class="form-control" id="other" placeholder="Enter other Price" value="{{$product->otherprice}}"  step="0.01"><br>
                              <input type="text" name="otherlink" class="form-control" id="otherlink" placeholder="Other Affiliate Link" value="{{$product->otherlink}}">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6"><label for="product_slug">Product Category</label>
                              <select class="form-control" id="category_save" name="category_id"required="">
                              @foreach($category as $cate_list)
                              <?php
                                 $sel="";
                                 if($product->category_id==$cate_list->id){
                                 $sel="selected";
                                 }
                                 ?>
                              <option value="{{$cate_list->id}}" {{$sel}}>{{$cate_list->name}}</option>
                              @endforeach
                              </select>
                           </div>
                           <div class="form-group col-md-6" >
                              <label for="size">Select Platform</label>
                              <?php
                                 $count = 0;
                                 $sizes = json_decode($product->size);
                                 ?>
                              <input type="hidden" name="old_size" value="{{$product->size}}">
                              <select class="select2" id="size" name="size[]" style="width: 100%;" multiple="">
                                 <option value="">Select Platform</option>
                                 @foreach($size as $size_list) 
                                 <option value="{{$size_list->name}}">{{$size_list->name}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12"><label for="short_description">Short Description</label>
                              <textarea id="short_description" name="short_description" class="summernote" required>{{$product->short_description}}</textarea>
                           </div>
                           <!-- <div class="form-group col-md-6"><label for="long_description">Size Chart</label>
                              <textarea id="long_description" name="description" class="summernote" required>{{$product->size_table}}</textarea>
                           </div> -->
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12"><label for="additional_information">Additional Information</label>
                              <textarea id="additional_information" name="additional_information" class="summernote" required>{{$product->description}}</textarea>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <label for="exampleInputFile">Image</label>
                              <div class="input-group">
                                 <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group col-md-6">
                              <label for="multiple_image">Mulitple Image</label>
                              <div class="input-group">
                                 <div class="custom-file">
                                    <input type="file" name="an_img[]" multiple class="custom-file-input" id="multiple_image">
                                    <label class="custom-file-label" for="multiple_image">Choose file</label>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <label for=""></label>
                              <img src="{{url('public/'.$product->image)}}" style="height: 70px;border-radius: 3px;">
                           </div>
                           <div class="form-group col-md-6">
                              <label for=""></label>
                              <?php
                                 $images=DB::table("productimages")->orderBy('sort_id','ASC')->where("product_id",$product->id)->get();
                                 ?>
                              <ul class="sort_menu list-group">
                                 @foreach ($images as $row)
                                 <li class="list-group-item" data-id="{{$row->id}}">
                                    <span class="handle text-info">
                                    <img src="{{url('public')}}/{{$row->image}}" style="height: 70px;border-radius: 3px;"> 
                                    <a href="{{url('admin/product/delete_img')}}/{{$row->id}}" class="text-danger" style="float: right;" onclick="return confirm('Want to delete this image ?')"><i class="fa fa-times"></i> </a>
                                    </span>
                                 </li>
                                 @endforeach
                              </ul>
                           </div>
                        </div>
                        <div class="form-group"><label for="meta_title">Meta Title</label>
                           <input type="text" class="form-control" id="meta_title" value="{{$product->meta_title}}" name="meta_title" placeholder="Enter Meta Title" required="">
                        </div>
                        <div class="form-group"><label for="meta_keyword">Meta Keyword</label>
                           <input type="text" class="form-control" id="meta_keyword" value="{{$product->meta_keyword}}" name="meta_keyword" placeholder="Enter Meta Keyword" required="">
                        </div>
                        <div class="form-group"><label for="meta_description">Meta Description</label>
                           <textarea class="form-control" id="meta_description"  name="meta_description" placeholder="Enter Meta Description" required="">{{$product->meta_description}}</textarea>
                        </div>
                        <div class="form-group"><label for="alt">Images Alt(Seprate by comma(,))</label>
                           <input type="text" class="form-control" id="image_alt" value="{{$product->alt}}"  name="image_alt" placeholder="alt1, alt2, alt3" required="">
                        </div>
                     </div>
                     <div class="form-group clearfix">
                        <label>
                           Status: 
                        </label>
                        <div class="icheck-success d-inline">
                           <input type="radio" name="status" value="1" id="radioSuccess1" @if($product->status==1) checked="" @endif>
                           <label for="radioSuccess1">
                               Active
                           </label>
                        </div>
                        <div class="icheck-danger d-inline">
                           <input type="radio" name="status" value="0"  id="radioDanger2" @if($product->status==0) checked="" @endif>
                           <label for="radioDanger2">
                               Deactive
                           </label>
                        </div>
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
   <!-- /.content -->
   <section class="content">
      <div class="container-fluid">
         <div class="row">
            <!-- left column -->
            <div class="col-md-12">
               <div class="card card-info">
                  <div class="card-header">
                     <h3 class="card-title">FAQ for {{$product->name}} </h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form class="form-horizontal"  action="{{url('admin/product/savefaq')}}" method="post">
                     @csrf
                     <input type="hidden" value="{{$product->id}}" name="proid">
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
<script type="text/javascript">
   var i=0;
   $('#add').click(function(){
    i++;
   
     $('#dynamic_field').append('<div class="row" id="mul"><div class="form-group col-md-6"><label for="color">Product Color</label><select class="form-control" id="color" name="color[]" required="">  <option value="" selected="">Select Color</option>  @foreach($color as $item)  <option value="{{$item->id}}">{{$item->name}}</option>  @endforeach </select> </div>  <div class="form-group col-md-5" id="subcat"><label for="size">Product Size</label> <select class="form-control" id="size" name="size['+i+'][]" multiple required="">    <option value="" selected="">Select Size</option>    @foreach($size as $item)  <option value="{{$item->id}}">{{$item->name}}</option>  @endforeach </select></div><div class="form-group col-md-1"><br/>  <button type="button" name="remove" id="" class="btn btn-danger btn-sm btn_remove pull-right mb-2" style="background:#dc3545;">X</button></div></div>');
    
     });
   
     $(document).on('click', '.btn_remove', function(){
     var button_id = $(this).attr("id");
     $('#mul').remove();
   });
</script>
@endsection
@section('Admin footer')