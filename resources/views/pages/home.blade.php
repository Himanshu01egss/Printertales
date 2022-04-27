@extends('layouts.app')
@section('content')
<div class="banner-area top-pad-60-responsive border-shadow text-center content-less text-large cst-sec1" style="background-image:url({{url('public/assets/images/home-banner.jpg')}}); ">
   <div class="container-fluid">
      <div class="banner-search cst-search">
         <h1 class="text-white">Welcome To Printer Tales</h1>
         <form class='prsearch' method="post" >
            <input type="text" id="search" placeholder="How Can We Help You..." class="form-control rounded-5" name="str" autocomplete="off" required />
            <button type="submit" name="submit" class="btn btn-secondary input-group-append">  <i class="fa fa-arrow-right" aria-hidden="true"></i> </button>
         </form>
         <div class="manual-list">
            <ul class="list-unstyled">
            </ul>
         </div>
      </div>
   </div>
</div>

<div class="section default-padding brand-sec">
   <div class="container-fluid">
      <div class="row align-items-center justify-content-center">
        <h3>Popular Brands</h3>
        <ul class="brand-list owl-brand owl-theme">
        	@foreach($brand as $list)
            <li classs="col-md-2">
             	<a class='brandsh item' href="{{url($list->slug)}}">
             		{{$list->name}}
                </a>
            </li>
            @endforeach
        </ul>
      </div>
   </div>
</div>

<div class="section default-padding pt-0 sec-cat-4">
   <div class="container-full">
      <div class="row">
         <div class="col-lg-8 offset-lg-2">
            <div class="site-heading text-center">
                <h3>Popular Printer</h3>
            </div>
         </div>
      </div>
      <div class="row">
          
        
      </div>
   </div>
</div>

<div class="section default-padding features-blog-sec" style="background:#f9f9f9;">
   <div class="container-full">
      <div class="row align-items-center">
          <div class="col-lg-6 col-md-5">
              <img src="{{url('public/assets/images/home-sec.jpg')}}" alt="printertales">
          </div>
          
          <div class="col-lg-6 col-md-7">
              <h2>Why Choose Our Support Service?</h2>
              <p>Our support team of certified and experienced printer experts provides solutions to all kinds of printer issues. We provide troubleshooting guides for almost all top printer brands, including HP, Canon, Brother, Epson, Panasonic, Toshiba, Samsung, Fujitsu, Xerox, etc. We are available 24/7 to answer your queries in real-time as a printer can show errors anytime. With Printer Tales, you’ve expert help right at your fingertips whenever and wherever you want. Just give us a call any time of the day, and we’ll ensure that your printer issue gets solved as soon as possible.</p>
             
          </div>
       </div>
    </div>
</div>

<div class="section default-padding features-blog-sec">
   <div class="container-full">
      	<div class="row">
         	<div class="col-lg-8 offset-lg-2">
            	<div class="site-heading text-center">
               	<h2>Learning and training</h2>
            	</div>
         	</div>
      	</div>
      <div class="row ">
        @foreach($blog as $list)
        <div class="col-lg-6 col-md-6 mt-20">
            <div class="row align-items-center">
               <div class="thumb col-lg-6">
                  <a href="{{url('knowledgebase/'.$list->slug)}}">
                  <img src="{{url('public/'.$list->image)}}" alt="{{$list->alt}}">
                  </a>
               </div>
               <div class="thumb col-lg-6">
                   <h5>{{$list->title}}</h5>
                  	<p>{!! substr(strip_tags($list->description),'0','120') !!}....</p>
                     <div class="more">
                     <a href="{{url('knowledgebase/'.$list->slug)}}"> BROWSE TRAINING OPTIONS  <i class="fa fa-angle-right "></i></a>
                  </div>
               </div>
            </div>
         </div>
        @endforeach
                   
      </div>
   </div>
</div>

<div class="services-area carousel-shadow default-padding" style="background:linear-gradient(257.39deg,#03273aa8,#0171ad)">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 offset-lg-2">
            <div class="site-heading text-center">
               <h4 class="text-white">User testimonials</h4>
            </div>
         </div>
      </div>
   </div>
   <div class="container-fluid">
      <div class="owl-carousel2 owl-theme">
      	@php
      		$i=1;
      	@endphp
      	@foreach($testimonials as $list)
        <div class="item">
        	@if($i % 2 == 0)
            <div class="item-inner">
               <div class="icon">
                  <i class="fa fa-user" id="tuser"></i>
                  <span class="tname">{{$list->name}} </span> reviewed for <span class="tname"> {{$list->brand->name}}</span>
               </div>
               <p>{{$list->comment}}</p>
            </div>
            @else
            <div class="item-inner">
               <div class="icon">
                  <i class="fa fa-user" id="tuser"></i>
                  <span class="tname">{{$list->name}} </span> reviewed for <span class="tname">  {{$list->brand->name}}</span>
               </div>
               <p>{{$list->comment}}</p>
            </div>
            @endif
        </div>
        @php
        $i++;
        @endphp
        @endforeach

        
      </div>
   </div>
</div>

<section class="section section-csk default-padding  custom-card">
   <div class="container-full">
      <div class="row ">
         <div class="col-sm-12" style="padding: 0;">
            <div class="card ">
               <div class="card-block p-4">
                  <h3 class="card-title">Affiliate Disclosure</h3>
                  <hr>
                  <p style="text-align:justify"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Printer Tales is a platform where you find all kinds of printer-related details and support services. We help our customers fix issues related to their Canon, HP, Brother, FUJITSU, Epson, Ricoh, Panasonic, Toshiba, Lexmark, Kyocera, XEROX, or any other known brand&rsquo;s printer. Printer Tales is not related to any of these brands in any way. Our only relationship is with our customers who use the information on our website to resolve their printer problems.&nbsp;</span></span></span></p>
                  <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">The information available on this platform can get changed, added to, or deleted from our end at any time. Though the content on the Printer Tales website is for solving the errors faced by printer users, we will not be responsible for any kind of damage that occurs to your product while following our solution guides. Printer Tales assumes no responsibility for any kind of omissions or errors in the content as some of the content on this site is on an &ldquo;as is&rdquo; basis with no guarantee of accuracy, completeness, and usefulness.</span></span></span></p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection