@extends('layouts.app')
@section('content')

<div class="about-area faq-area inc-shape default-padding pb-0">
    <div class="container">
       <div class="mainform" style="position:relative">
          <div class="row align-items-center pb-5">
             <div class="col-lg-12 ">
               <form id="regForm" action="{{url('issuesubmit')}}" method="POST">
                  @csrf
               
               <div class="tab one">
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
               
               </form>
                <!-- /.MultiStep Form -->
             </div>
          </div>
        </div>
       <div class="pimgage">
          <img id="project-icon" class="ui-state-default w-50" src="{{url('public/assets/img/printer/1.jpg')}}"  alt="">
       </div>
    </div>

 </div>

    <script src="{{asset('public/assets/js/form.js')}}"></script>
@endsection