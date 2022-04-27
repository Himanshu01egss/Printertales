@extends('layouts.app')
@section('content')
<div class="clearfix"></div>
<div class="blog-area single full-blog right-sidebar full-blog default-padding">
   <div class="container">
      <div class="blog-items first">
         <div class="row">
            <div class="col-lg-8 col-md-12">
               <div class="blog-content wow fadeInUp " style="visibility: visible; animation-name: fadeInUp;">
                  <div class="item">
                     <div class="blog-item-box">
                        <!-- Start Post Thumb -->
                        <div class="thumb">
                           <img src="{{url('public/'.$blog->image)}}" alt="{{$blog->alt}}">
                        </div>
                        <div class="info">
                           <div class="meta">
                              <ul>
                                 <li>By Admin</li>
                                 <li><i class="fas fa-calendar-alt"></i>@php $newtime = strtotime($blog->created_at); @endphp
                                    {{ date('M d, Y',$newtime)}}</li>
                              </ul>
                           </div>
                           <h1>{{$blog->title}}</h1>
                           <br>
                           <div class="desc">
                              {!! $blog->description !!}
                           </div>
                           <div class="faq-content mb-5">
                              <div class="accordion" id="accordionExample">
                              </div>
                           </div>
                           <!--end new faq-->
                           <div class="blog-link">
                              <ul class="social-media d-flex">
                                 <li class="facebook"><a href="https://www.facebook.com/sharer/sharer.php?u={{$blog->slug}}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                 <li class="twitter"><a href="https://twitter.com/intent/tweet?url={{$blog->slug}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                 <li class="linkedin"><a href="https://www.linkedin.com/shareArticle?url={{$blog->slug}}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                 <li class="pinterest"><a href="https://www.pinterest.com/pin/create/button?url=h{{$blog->slug}}" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Start Sidebar -->
            @include('pages.include.sidebar')
            
         </div>
      </div>
   </div>
</div>
@endsection