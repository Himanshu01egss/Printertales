<div class=" wow fadeInLeft col-lg-4 col-md-12" style="visibility: visible; animation-name: fadeInLeft;">
   <aside>
      <div class="bbtn text-center">
         <button class="btns py-2 px-4 rounded rounded-4" data-toggle="modal" data-target="#exampleModal">Book Free Consultation <i class="fas fa-angle-right"></i></button>
      </div>
      <hr class="my-3 pt-1">
      <div class="sidebar-item recent-post">
         <div class="title">
            <h4>Recent Post</h4>
         </div>
         <ul>
            @foreach($recent as $list)
            <li>
               <div class="thumb">
                  <a href="{{url('knowledgebase/'.$list->slug)}}">
                  <img src="{{url('public/'.$list->image)}}" alt="{{$list->alt}}">
                  </a>
               </div>
               <div class="info">
                  <a href="{{url('knowledgebase/'.$list->slug)}}">{{$list->title}}</a>
                  <div class="meta-title">
                     <span class="post-date"><i class="fas fa-clock"></i>@php $newtime = strtotime($blog->created_at); @endphp
                     {{ date('M d, Y',$newtime)}}</span>
                  </div>
               </div>
            </li>
            @endforeach
         </ul>
      </div>
   </aside>
</div>