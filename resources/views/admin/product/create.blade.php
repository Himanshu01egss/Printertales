@extends('layouts.admin')
@section('title', 'Shopunity Dashboard')
@section('Admin header')
@section('Admin sidebar')
@section('content')
<div class="content-wrapper">
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>Add Product</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
                  <li class="breadcrumb-item active">Add Product</li>
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
                  <form action="{{url('admin/product/store')}}" method="post"  enctype="multipart/form-data">
                     @csrf
                     <div class="card-body">
                        <div class="row">
                           <div class="form-group col-md-4">
                              <label for="product_name">Product Name</label>
                              <input type="text" name="name" class="form-control" id="name" placeholder="Enter Product Name" required="">
                           </div>
                           <div class="form-group col-md-4">
                              <label for="product_slug">Product Slug</label>
                              <input type="text" class="form-control" id="product_slug" name="slug" placeholder="Enter Product Slug">
                           </div>
                           <div class="form-group col-md-4">
                              <label for="product_slug">Product Regular Price</label>
                              <input type="number" class="form-control" id="product_price" name="price" placeholder="Enter Product Price" required=""  step="0.01">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-4">
                              <label for="stock">Sku</label>
                              <input type="text" name="sku" class="form-control" id="sku">
                           </div>
                           <div class="form-group col-md-4">
                              <label for="product_name">Save Price</label>
                              <select class="form-control" id="on_sale" onchange="on_sale1(this.value)" name="is_sale" required="">
                                 <option value="" selected="" disabled="">Save Price</option>
                                 <option value="0">Price Off</option>
                                 <option value="1">Price On</option>
                              </select>
                           </div>
                           <div class="form-group col-md-4">
                              <label for="product_slug">Save Price</label>
                              <input type="number" class="form-control" id="sale_price" name="sale_price" placeholder="Enter Sale Price" disabled=""  step="0.01">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-4">
                              <label for="amazon">Amazon</label>
                              <input type="number" name="amazoneprice" class="form-control" id="amazon" placeholder="Enter Amazon Price"  step="0.01"><br>
                              <input type="text" name="amazonlink" class="form-control" id="amazonlink" placeholder="Amazon Affiliate Link">
                           </div>
                           <div class="form-group col-md-4">
                              <label for="walmart">Walmart</label>
                              <input type="number" name="walmartprice" class="form-control" id="amazon" placeholder="Enter Walmart Price"  step="0.01"><br>
                              <input type="text" name="walmartlink" class="form-control" id="walmartlink" placeholder="Walmart Affiliate Link">
                           </div>
                           <div class="form-group col-md-4">
                              <label for="other">Other</label>
                              <input type="number" name="otherprice" class="form-control" id="other" placeholder="Enter other Price"  step="0.01"><br>
                              <input type="text" name="otherlink" class="form-control" id="otherlink" placeholder="Other Affiliate Link">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <label for="product_slug">Product Category</label>
                              <select class="form-control" id="category_save1" onchange="load_sub(this.value)" name="category_id"required="">
                                 <option value="" selected="">-- Select Category -- </option>
                                 @foreach($category as $item)
                                 <option value="{{$item->id}}">{{$item->name}}</option>
                                 @endforeach
                              </select>
                           </div>
                           <div class="form-group col-md-6" >
                              <label for="size">Select Platform</label>
                              <select class="select2" id="size" name="size[]" style="width: 100%;" multiple="">
                                 <option>Select Platform</option>
                                 @foreach($size as $size_list)
                                 <option value="{{$size_list->name}}">{{$size_list->name}}</option>
                                 @endforeach
                              </select>
                           </div>

                        </div>
                        <div class="row">
                           <div class="form-group col-md-12"><label for="short_description">Short Description</label>
                              <textarea id="short_description" name="short_description" class="summernote" required ></textarea>
                           </div>
                           <!-- <div class="form-group col-md-6"><label for="long_description">Size Chart</label>
                              <textarea id="long_description" name="description" class="summernote" required></textarea>
                           </div> -->
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12"><label for="additional_information">Additional Information</label>
                              <textarea id="additional_information" name="additional_information" class="description summernote" required></textarea>
                           </div>
                           <div class="form-group col-md-6">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <label for="image">Image</label>
                              <div class="input-group">
                                 <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="image" required="">
                                    <label class="custom-file-label" for="image">Choose file</label>
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
                        <div class="form-group"><label for="meta_title">Meta Title</label>
                           <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="Enter Meta Title" required="">
                        </div>
                        <div class="form-group"><label for="meta_keyword">Meta Keyword</label>
                           <input type="text" class="form-control" id="meta_keyword" name="meta_keyword" placeholder="Enter Meta Keyword" required="">
                        </div>
                        <div class="form-group"><label for="meta_description">Meta Description</label>
                           <textarea class="form-control" id="meta_description" name="meta_description" placeholder="Enter Meta Description" required=""></textarea>
                        </div>
                        <div class="form-group"><label for="alt">Images Alt(Seprate by comma(,))</label>
                           <input type="text" class="form-control" id="image_alt"  name="image_alt" placeholder="alt1, alt2, alt3" required="">
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
                     <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
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