@extends('layouts.app')
@section('content')
<div class="banner">
   <div class="container">
      <div class="row align-center">
         <div class="col-lg-6">
            <h1>Knowledge Base</h1>
         </div>
         <div class="col-lg-6">
            <input type="text" id="thesearch" placeholder="Result for popular likes" class="form-control rounded-5" name="str" autocomplete="off" />
         </div>
      </div>
   </div>
</div>
<div class="blog-area full-blog blog-standard full-blog grid-colum">
   <div class="container">
      <div class="blog-items">
         <div class="blog-content">
            <div class="blog-item-box">
               <div class="row">
                  @foreach($blog as $list)
                  <div class="col-lg-4 col-md-6 single-item">
                     <div class="item wow fadeInUp" data-wow-delay="500ms" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                        <div class="thumb">
                           <a href="{{url('knowledgebase/'.$list->slug)}}">
                           <img src="{{url('public/'.$list->image)}}" alt="{{$list->alt}}" />
                           </a>
                        </div>
                        <div class="info">
                           <div class="meta">
                              <ul>
                                 <li>
                                    <i class="fas fa-calendar-alt"></i>
                                    @php $newtime = strtotime($list->created_at); @endphp
                                    {{ date('M d, Y',$newtime)}}
                                 </li>
                                 <li>
                                    By Admin
                                 </li>
                              </ul>
                           </div>
                           <h4>
                              <a href="{{url('knowledgebase/'.$list->slug)}}">{{$list->title}}</a>
                           </h4>
                           {!! substr(strip_tags($list->description),'0','120') !!}....
                           <br />
                           <a class="btn circle btn-theme effect btn-md" href="{{url('knowledgebase/'.$list->slug)}}">Read More</a>
                        </div>
                     </div>
                  </div>
                  @endforeach

               </div>
               {{ $blog->links() }}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection