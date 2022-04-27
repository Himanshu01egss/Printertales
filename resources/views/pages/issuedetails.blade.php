@extends('layouts.app')
@section('content')

<div class="about-area faq-area inc-shape default-padding pb-0">
    <div class="container">
       <div class="mainform" style="position:relative">
          <div class="row align-items-center pb-5">
             <div class="col-lg-12 ">
                <!-- MultiStep Form -->
                <form id="regForm" action="#" method="POST">
                   <!-- One "tab" for each step in the form: -->
                   <div class="tab one">
                      <div class="row align-items-center">
                         <div class="col-lg-12 mb-4 ">
                            <div class="issuesval pb-5">
                               <h2 class="text-center">Having trouble with your <strong>"Canon"</strong> Printer <strong>- “Printer-driver” </strong> </h2>
                               <h4 class="theme"> Kindly select the model of your printer  </h4>
                            </div>
                         </div>
                         <div class="col-lg-6 mb-4 border-lft">
                            <div class="search row   align-items-center">
                               <div class="col-lg-2 icon"><img src="/assets/img/icon/sicon.png" alt="search icone"> </div>
                               <div class="col-lg-10 icon">
                                  <h6>Identify your product </h6>
                               </div>
                            </div>
                            <span class="icon">  Enter Your Product Name: </span> 
                            <input id="project" >
                            <input type="hidden" id="project-id" name="pname" placeholder="Please enter your name..." oninput="this.className = ''">
                         </div>
                      </div>
                   </div>
               
                   <div class="tab">
                      <div class="row align-items-center">
                         <div class="col-lg-12 mb-4 ">
                            <div class="issuesval pb-5">
                               <h2>Having trouble with your <strong>"Brand"</strong> Printer <strong>- “Issue selected by User” </strong> </h2>
                               <h4 class="theme"> Kindly enter your details to raise a ticket to assign an Agent  </h4>
                            </div>
                         </div>
                         <div class="col-lg-6 mb-4 ">
                            <p><input placeholder="Please enter your name..." oninput="this.className = ''" name="fname" id="fname"></p>
                            <p><input placeholder="Please enter your email" oninput="this.className = ''" name="femail" id="femail"></p>
                            <p >
                            <div class="row">
                               <div class=" col-lg-3 col-md-3">
                                  <input type="number" placeholder="code" oninput="this.className = ''" name="fcode" class="w-100" id="fcode">
                               </div>
                               <div class=" col-lg-9 col-md-9">
                                  <input placeholder="Please enter your mobile number" oninput="this.className = ''" name="fphone" id="fphone" class="w-100">
                               </div>
                            </div>
                            </p>
                         </div>
                         <div class="col-lg-12 ">
                            <div class="termsncondition pt-5">
                               <p class=" pt-5"> I hereby authorize <a href="/"> Printer tales </a> to call and email me for the repair and allied service related to my printer. I accept the <a href="/terms-of-uses/"> terms and conditions</a></p>
                            </div>
                         </div>
                      </div>
                   </div>
                   <!-- End Two "tab" for each step in the form: -->
                   <!--End Three "tab" for each step in the form: -->
                   <div class="tab">
                      <div class="row align-items-center">
                         <div class="col-lg-12 mb-4 ">
                            <div class="issuesval pb-5">
                               <h2>Having trouble with your <strong>"Brand"</strong> Printer <strong>- “Issue selected by User” </strong> </h2>
                               <h4 class="theme"> A Ticket has been generated, kindly wait for the technician to call you.  </h4>
                            </div>
                         </div>
                         <div class="col-lg-6 mb-4 helpcall ">
                            <p><a href="tel:+1-35365694848">USA -: +1-35365694848</a></p>
                            <p><a href="tel:+1-35365694848">CA -: +1-35365694848</a></p>
                            <p><a href="tel:+ 44-54546545454">UK -: + 44-54546545454</a></p>
                            <p><a href="javascript:void()">NZ -:</a></p>
                            <p><a href="javascript:void()">AUS -:</a></p>
                         </div>
                      </div>
                   </div>
                   <!--End Three "tab" for each step in the form: -->
                   <!-- End Four "tab" for each step in the form: -->
                   <!--  Five "tab" for each step in the form: -->
                   <div  class="mainbtn">
                      <div  class="subbtn">
                         <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                         <!--  <button type="button"  id="nextBtn" onclick="nextPrev(1)">Next</button>-->
                         <button type="button"  id="nextBtn2" onclick="nextPrev(1)">Next</button>
                      </div>
                   </div>
                   <!-- Circles which indicates the steps of the form: -->
                   <div class="dotsre" style="text-align:center;margin-top:40px;">
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                      <span class="step"></span>
                   </div>
                </form>
                <!-- /.MultiStep Form -->
             </div>
          </div>
          <!--<hr class="pt-1 my-5 ">-->
       </div>
       <div class="pimgage">
          <img id="project-icon" class="ui-state-default w-50" src="/assets/img/printer/1.jpg"  alt="">
       </div>
    </div>
    <div class="chaiting default-padding" style="background:#efefef">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-lg-8 ">
                <div class="text-start  " >
                    {!! $issue->description !!}  
                </div>
             </div>
             <div class="col-lg-4">
                <div class="chat-section">
                   <img src="{{url('public/assets/img/ask-lice-chat.png')}}" class="mb-2" alt=""><br>
                   <button class="btn btn-light  rounded rounded-4 w-75 " onclick="location.href='{{url('chat')}}" >Ask Live Chat</button>
                </div>
             </div>
             <div class="col-lg-12 py-4 ">
                <p>At Printer tales, we try to solve the issue(s) faced by our users and provide them with the best solutions. We have a dedicated team of certified technician </p>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- end to top banner -->
 <!--Issue details-->
 <section class="section section-csk default-padding  custom-card">
    <div class="container-full">
       <div class="row ">
          <div class="col-sm-12" style="padding: 0;">
             <div class="card-block p-4">
                <h3 class="card-title">{{$issue->brand->name}} Printer Issue</h3>
                <hr>
                <div class="desc">
                    {!! $issue->description2 !!}  
                </div>
            </div>
          </div>
       </div>
    </div>
 </section>
 <!--blog-->
 <div class="blog-area full-blog blog-standard full-blog grid-colum default-padding">
    <div class="container">
       <div class="blog-items">
          <div class="blog-content">
             <h2 class="text-center mb-5"><strong>Latest Blogs</strong></h2>
             <div class="blog-item-box">
                <div class="row">
                   @foreach($latestblog->blog as $list)
                   <div class="col-lg-4 col-md-6 single-item">
                      <div class="item wow fadeInUp animated" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">
                         <div class="thumb">
                            <a href="{{url('knowledgebase/'.$list->slug)}}">
                            <img src="{{url('public/'.$list->image)}}" alt="Thumb">
                            </a>
                         </div>
                         <div class="info">
                            <div class="cats">
                            </div>
                            <div class="meta">
                               <ul>
                                  <li><i class="fas fa-calendar-alt"></i>@php $newtime = strtotime($list->created_at); @endphp
                                    {{ date('M d, Y',$newtime)}}</li>
                                  <li>By Admin</li>
                               </ul>
                            </div>
                            <h4>
                               <a href="{{url('knowledgebase/'.$list->slug)}}">{{$list->title}}</a>
                            </h4>
                            {!! substr(strip_tags($list->description),'0','120') !!}....
                            <a class="btn circle btn-theme effect btn-md" href="{{url('knowledgebase/'.$list->slug)}}">Read More</a>
                         </div>
                      </div>
                   </div>
                   @endforeach
                   <!-- End Single Item -->
                </div>
                <!-- Pagination -->
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection