@extends('layouts.app')
@section('content')
@php
   $setting = DB::table('settings')->first();
@endphp
<div class="clearfix"></div>
<div class="about-area faq-area inc-shape default-padding pt-0">
   <div class="container">
      <h1 class="text-center py-4"> </h1>
      <div class="mainform">
         <div class="row align-items-center">
            <div class="col-lg-6">
               <div class="callss">
                  <h1>Call Us.</h1>
                  <h2 class="text-dark"><strong>US / CA : </strong> <a class="text-danger" href="tel:{{$setting->usnum}}"></a>{{$setting->usnum}}</h2>
                  <h2 class="text-dark"><strong>UK : </strong><a class="text-danger" href="tel:{{$setting->uknum}}"></a> {{$setting->uknum}}</h2>
               </div>
            </div>
            <div class="col-lg-6 brd">
               <form action="{{url('contact')}}" method="post">
                  @csrf
                  <h3 class="mb-4">Get a Call Back</h3>
                  <div class="row">
                     <div class="col-sm-3 mb-4 text-center">
                        <label for="name">Name : </label>
                     </div>
                     <div class="col-sm-9 mb-4">
                        <input type="text" class="form-control" id="name" name="name" placeholder=" " required="">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-3 mb-4 text-center">
                        <label for="name">Mobile : </label>
                     </div>
                     <div class="col-sm-9 mb-4">
                        <input type="text" class="form-control" id="name" name="phone" placeholder=" " required="">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-sm-3 mb-4 text-center">
                        <label for="name"> Email : </label>
                     </div>
                     <div class="col-sm-9 mb-4">
                        <input type="email" class="form-control" id="name" name="email" placeholder=" " required="">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-3 mb-4 text-center">
                        <label for="name">Date : </label>
                     </div>
                     <div class="col-sm-9 mb-4">
                        <input type="date" class="form-control" name="date" id="" placeholder=" " required="">
                     </div>
                     <input type="hidden" class="form-control" id="name" name="" value="" placeholder=" ">
                     <div class="col-sm-12 text-center">
                        <button class="btn btn-primary w-50" name="submit" type="submit">Submit </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<section class=" padd-bot-0 padd-top-0 custom-card support">
   <div class="container-full">
      <div class="row align-items-center cst-mt mb-5">
         <div class="col-sm-12 col-md-8">
            <div class="row align-items-center cta">
               <div class="col-sm-8 text-center">
                  <h4 class="text-white"><strong>
                  Get Professional help to resolve your printer issues </strong></h4>
               </div>
               <div class="col-sm-4 link-box package-plan btn-sucess  text-center">
                  <a href="https://tawk.to/chat/61f40112b9e4e21181bc61ff/1fqgi8d3q" class="theme-btn btn-light text-center">Start Chat</a>
                  <p class="text-center text-white mb-0"><strong>(Click to Start Chat)</strong></p>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-4 text-center">
            <div class="buy-support">
               <h4 class="mb-0"><a class="text-dark" href="tel:+1-877-469-0297"><i><img src="assets/images/phone.png" alt=""></i>+1-877-469-0297</a></h4>
               <p class="text-sucess mb-0">[ Helpdesk ]</p>
            </div>
         </div>
      </div>
      <div class="row align-items-center cst-mt mb-5">
         <div class="col-sm-12 col-md-8">
            <div class="row align-items-center cta">
               <div class="col-sm-8 text-center">
                  <h4 class="text-white"><strong>   Do you need to get your printer driver  issues fixed  </strong></h4>
               </div>
               <div class="col-sm-4 link-box package-plan btn-sucess  text-center">
                  <a href="https://tawk.to/chat/61f40112b9e4e21181bc61ff/1fqgi8d3q" class="theme-btn btn-light text-center">Start Chat</a>
                  <p class="text-center text-white mb-0"><strong>(Click to Start Chat)</strong></p>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-4 text-center">
            <div class="buy-support">
               <h4 class="mb-0"><a class="text-dark" href="tel:+1-877-469-0297"><i><img src="assets/images/phone.png" alt=""></i>+1-877-469-0297</a></h4>
               <p class="text-sucess mb-0">[ Helpdesk ]</p>
            </div>
         </div>
      </div>
      <div class="row align-items-center cst-mt mb-5">
         <div class="col-sm-12 col-md-8">
            <div class="row align-items-center cta">
               <div class="col-sm-8 text-center">
                  <h4 class="text-white"><strong>  Need help in setup installation of your printer </strong></h4>
               </div>
               <div class="col-sm-4 link-box package-plan btn-sucess  text-center">
                  <a href="https://tawk.to/chat/61f40112b9e4e21181bc61ff/1fqgi8d3q" class="theme-btn btn-light text-center">Start Chat</a>
                  <p class="text-center text-white mb-0"><strong>(Click to Start Chat)</strong></p>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-4 text-center">
            <div class="buy-support">
               <h4 class="mb-0"><a class="text-dark" href="tel:+1-877-469-0297"><i><img src="assets/images/phone.png" alt=""></i>+1-877-469-0297</a></h4>
               <p class="text-sucess mb-0">[ Helpdesk ]</p>
            </div>
         </div>
      </div>
      <div class="row align-items-center cst-mt mb-5">
         <div class="col-sm-12 col-md-8">
            <div class="row align-items-center cta">
               <div class="col-sm-8 text-center">
                  <h4 class="text-white"><strong>    Do you need free consultaion  </strong></h4>
               </div>
               <div class="col-sm-4 link-box package-plan btn-sucess  text-center">
                  <a class="theme-btn btn-light text-center" href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal"> BOOK FREE CONSULTATION</a>
                  <p class="text-center text-white mb-0"><strong>(Click to Book Now )</strong></p>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-4 text-center">
            <div class="buy-support">
               <h4 class="mb-0"><a class="text-dark" href="tel:+1-877-469-0297"><i><img src="assets/images/phone.png" alt=""></i>+1-877-469-0297</a></h4>
               <p class="text-sucess mb-0">[ Helpdesk ]</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end main support -->
<!-- for free consultation -->
<section class="calls">
   <div class="container">
      <div class="row align-items-center">
         <div class="col-sm-4">
            <h2 class="text-dark"><strong>Free Consultaion </strong></h2>
         </div>
         <div class="col-sm-8">
            <h2 class="text-dark"><strong>US / CA : </strong> <a class="text-danger" href="tel:{{$setting->usnum}}"></a> {{$setting->usnum}}</h2>
            <h2 class="text-dark"><strong>UK : </strong><a class="text-danger" href="tel:{{$setting->uknum}}"></a> {{$setting->uknum}}</h2>
         </div>
      </div>
   </div>
</section>
<!-- end free consultaion -->
@endsection