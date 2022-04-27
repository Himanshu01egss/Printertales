@extends('layouts.admin')

@section('title', 'Orders Details')

@section('Admin header')

@section('Admin sidebar')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('superadmin')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   

 <section class="content">
      <div class="container-fluid">
        <div class="row justify-content-center">

          <div class="col-sm-8">
            


            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <!--{{config('app.name')}}-->
                    <img src="{{ url('public') }}/{{ \App\Models\Admin\Setting::first()->store_logo }}">
                    <small class="float-right">Date: {{date('d-M-Y',strtotime($invoice->created_at))}}</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info"  style="margin-top: 30px;">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>{{config('app.name')}}</strong><br>
                    {{$settings->store_address}}<br/>
                    Phone: {{$settings->store_phone}}<br>
                    Email: {{$settings->store_email}}
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>{{$user->name}}</strong><br>
                    {{$billing->address1}}, {{$billing->address2}}<br>
                    {{$billing->city}}, {{$billing->state}} @if(!empty($user->zip_code)){{$user->zip_code}} @else {{$billing->zip_code}} @endif<br>
                    Phone: @if(empty($billing->phone)) {{$user->phone}} @else {{$billing->phone}} @endif <br>
                    Email: {{$user->email}}
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice: {{sprintf("%08d", $invoice->id)}}</b><br>
                  <br>
                  <b>Order ID:</b> {{$invoice->order_id}}<br>
                  <b>Payment Status:</b> <?php
if($order->payment_status==0){
  echo "<label class='badge badge-danger'>Unpaid</label>";
}
else if($order->payment_status==1){
  echo "<label class='badge badge-success'>Paid</label>";
}
else{
  echo "On Hold";
}
                  ?><br>
                  <!-- <b>Account:</b> 968-34567 -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row" style="margin-top: 50px;">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Product</th>
                      <th>Qty</th>
                      <th>Net Price</th>
                      @if (\Str::lower($billing->state)=='delhi' || \Str::lower($billing->state)=='dl')
                        <th>CGST</th>
                        <th>SGST</th>
                        @else
                        <th>IGST</th>
                      @endif
                      <th class="text-right">Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
<?php
$cart_id=$order->cart_ids;
$arr=explode(",",$cart_id);
$g_total=0;
$count=1;
for($j=0;$j<count($arr);$j++){
$cartId=$arr[$j]; 
$cart_detail=DB::table("carts")->where("id",$cartId)->get();

foreach($cart_detail as $crt){
  $gst = new \App\Libraries\Gst($crt->price);
$sub_total=0;
$sub_total+=$crt->price*$crt->qty;
$g_total+=$sub_total;        
?>
<tr>
<td>{{$count++}}</td>
<td>{{$crt->product_name}} <br/>
  <small><b>SKU : {{ \App\Models\Admin\Product::where('id',$crt->product_id)->first()->sku }}</b></small><br/>
  @if (isset(json_decode($crt->attributes,true)['size']))      
  <small><b>Size : {{json_decode($crt->attributes,true)['size']}}</b></small>
  @endif
</td>
<td>{{$crt->qty}}</td>
<td>Rs {{$gst->net_price()}}</td>  
@if (\Str::lower($billing->state)=='delhi' || \Str::lower($billing->state)=='dl')                  
<td>Rs {{$gst->cgst()}}</td>
<td>Rs {{$gst->sgst()}}</td>
@else
<td>Rs {{$gst->gst()}}</td>
@endif
<td class="text-right" class="text-right">Rs {{$crt->price}}</td>                    
</tr>
<?php
    }
  }
?> 
                   
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
              
                <!-- /.col -->
                <div class="col-sm-6 offset-sm-6">
                  <!-- <p class="lead">Amount Due 2/22/2014</p> -->

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td class="text-right">Rs {{$g_total}}.00</td>
                      </tr>
                      <!-- <tr>
                        <th>Tax (9.3%)</th>
                        <td>$10.34</td>
                      </tr>-->
                      <tr>
                        <th style="width:50%">Discount:</th>
                        <td class="text-right">-Rs {{$order->discount_charge}}</td>
                      </tr>
                      <tr>
                        <th style="width:50%">Shipping:</th>
                        <td class="text-right">Rs {{$order->shipping_charge}}</td>
                      </tr>
                      <tr>
                        <th style="width:50%">Total:</th>
                        <td class="text-right">Rs {{$order->total_price}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <!-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a> -->
                  <button  class="btn btn-default" onclick="print()"><i class="fas fa-print"></i> Print</button>
                  
                 
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>




  </div>
 
@endsection

@section('Admin footer')

