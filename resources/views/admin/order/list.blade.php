@extends('layouts.admin')

@section('title', 'All Orders')

@section('Admin header')

@section('Admin sidebar')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> <?php if(Request::segment(2)=="business-order"){ echo "Business"; } ?> Orders List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active"> <?php if(Request::segment(2)=="business-order"){ echo "Business"; } ?> Order List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
               <h3 class="title"><?php if(Request::segment(2)=="business-order"){ echo "Business"; } ?> Order List</h3>
              </div>
              

              <div class="card-body">
<form action="{{url('admin/order/bulk_action')}}" method="POST">
@csrf
<div class="input-group">
<select name="status" class="form-control" required="">
<option value="">Select Status</option>
<option value="0">Pending</option>
<option value="1">Accept</option>
<option value="2">Complete & Pay</option>
<option value="3">Rejected</option>
<option value="4" class="text-danger">Delete Selected Order</option>
</select>
<div class="input-group-append">
<input type="submit" class="btn btn-primary">
</div>
</div>

<div class="table-responsive mt-2">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><input type="checkbox" name="" id="check_all"></th>
                    <th>#</th>
                    <th>Customer</th>
                    <!-- <th>Business Name</th> -->
                    <th>Order ID</th>
                    <th>Amount</th>
                    <th>Payment Status</th>
                    <th>Status</th>
                    <th>Invoice</th>
                    <th>Created At</th>
                   <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                 

 <?php
$count=1;
 ?>              
@foreach($order as $item)
<?php
$cart_arr=explode(",",$item->cart_ids);
?>
<tr>
<td><input type="checkbox" name="orderids[]" value="{{$item->order_id}}" class="check_all"></td>
<td>{{$count++}}</td>
<td>
<?php
$user_details=DB::table("users")->where('id',$item->user_id)->first();
if($user_details){
    echo $user_details->name;
    if($user_details->role==4){
      echo '<br/><label class="badge badge-info">guest</label>';
    }
}
else {
    echo "";
}

?>
</td>

<td>{{$item->order_id}}</td>
<td>Rs {{$item->total_price}}</td>
<td>
<?php
if($item->payment_status==0){
  echo "<label class='badge badge-danger'>Unpaid</label>";
}
if($item->payment_status==1){
  echo "<label class='badge badge-success'>Paid</label>";
}
?>
</td>
<td>
 <?php
 $status="";
 if($item->status==0){
   $status="<div class='badge badge-danger'>Pending</div>";
 }
 if($item->status==1){
   $status="<div class='badge badge-warning'>Accept</div>";
 }
 if($item->status==2){
   $status="<div class='badge badge-success'>Complete</div>";
 }
 if($item->status==3){
   $status="<div class='badge badge-default'>Rejected</div>";
 }
 echo $status;
 ?>
</td>
<td><center>
<a href="{{url('admin/order/invoice')}}/{{base64_encode($item->order_id)}}" class="text-danger" style="font-size: 15pt;" title="Download Invoice"><i class="fa fa-file-pdf"></i></a>
</center>
</td>
<td>{{$item->created_at}}</td>
<td>
<div class="btn-group btn-group-sm">
<a href="{{url('admin/order/details')}}/{{base64_encode($item->order_id)}}" class="btn btn-success"><i class="fas fa-eye"></i></a>

<a href="{{url('admin/order/delete')}}/{{base64_encode($item->id)}}" class="btn btn-danger" onclick="return confirm('Delete this order User ?')"><i class="fas fa-trash"></i></a>

</div>
</td>
</tr>
@endforeach
                 
                  </tbody>
             
                </table>
              </div>
              </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
 
@endsection

@section('Admin footer')

