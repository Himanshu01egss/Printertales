@extends('layouts.app')
@section('content')

<section class="section section-csk  border-5 product">
    <div class="container-fluid">
       <div class="row align-items-center">
          <div class="col-sm-12 col-md-2 text-center bg-grey padd-top-40 padd-bot-40">
             <h1 class="text-white">Features</h1>
          </div>
          <div class="col-sm-12 col-md-8 list-ul">
             <div class="row">
                <div class="col-sm-12 col-md-4">
                    <ul>
                        @php
                            $i=1;
                            $all = count($printer->features);
                            $div = round($all/3);
                        @endphp
                        @foreach($printer->features as $list)
                            <li>{{$list->feature}}</li>
                            @if($i==$div)
                                @break
                            @endif
                            @php $i++; @endphp
                        @endforeach
                    </ul>
                   
                </div>
                <div class="col-sm-12 col-md-4 lsb">
                   <ul>
                        @php
                            $k=0;
                        @endphp
                        @foreach($printer->features as $list)
                            @php
                            $k++;
                            @endphp
                            @if($i==$div*2)
                            @break
                            @endif
                            @if($k<=$i)
                                @continue
                            @endif
                            <li>{{$list->feature}}</li>
                            
                            @php $i++; 
                                
                            @endphp
                        @endforeach
                    </ul>
                   
                </div>
                <div class="col-sm-12 col-md-4 lsb">
                    <ul>
                        @php
                            $k=0;
                        @endphp
                        @foreach($printer->features as $list)
                            @php
                            $k++;
                            @endphp
                            @if($k<=$i)
                                @continue
                            @endif
                            <li>{{$list->feature}}</li>
                             @php $i++; 
                                
                            @endphp
                        @endforeach
                    </ul>
                </div>
             </div>
          </div>
          <div class="col-sm-12 col-md-2 text-center border-lft rtl-sec chat-sec" id="myHeader">
             <a href="{{url('chat')}}">
                <div class="sidebar sticky">
                   <img src="{{url('public/assets/img/ask-lice-chat.png')}}" alt="">
                   <h5 class="mb-0">Ask Live Chat</h5>
                   <p>Start Chat with a Certified Technician</p>
                </div>
             </a>
          </div>
       </div>
    </div>
 </section>


 <!--end search bar  -->
 <section class="section section-csk padd-bot-20 padd-top-20">
    <div class="container-full">
       <div class="row align-items-center">
          <div class="col-lg-9 col-md-8 col-sm-8 bg-light ">
             <div class="row d-flex align-items-center">
                <div class="col-md-4 col-sm-4">
                   <img src="{{url('public/'.$printer->image)}}"  alt="{{$printer->alt}}">
                   <!-- class="img-responsive img-4" -->
                </div>
                <div class="col-md-8 col-sm-8 list-cl">
                   <div>
                      <p><strong>Name:</strong>{{$printer->name}}</p>
                      <p><strong>Company Category:</strong>{{$printer->brand->name}} Printer</p>
                      <p><strong>Famous Product:</strong> </p>
                      <p><strong>Website:</strong>{{$printer->brand->website}}</p>
                   </div>
                   <table class="table table-bordered">
                      <tbody>
                         <tr>
                            <td>Technology</td>
                            <td>{{$printer->technology}}</td>
                         </tr>
                         <tr>
                            <td>Ink Type</td>
                            <td>{{$printer->inktype}}</td>
                         </tr>
                         <tr>
                            <td>Support Number</td>
                            <td><a href="tel:{{$printer->supportnum}}">{{$printer->supportnum}}</a></td>
                         </tr>
                         <tr>
                            <td>Description</td>
                            <td>{{strip_tags($printer->description)}}</td>
                         </tr>
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-4 mt-80">
             <div class="row">
                <div class="sm-sec">
                   <div class="btn1-c">
                      <a href="{{url($printer->brand->slug)}}">{{$printer->brand->name}}</a>
                   </div>
                   <div class="btn1-c">
                      <a href="javascript: void()" data-toggle="modal" data-target="#immidiate">Immidiate Support</a>
                   </div>
                   <div class="btn1-c">
                      <a href="javascript: void()" data-toggle="modal" data-target="#immidiate">Request a Call</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <section class="section section-csk padd-bot-0 padd-top-5 custom-card" style="background:#f9f9f9; padding: 40px;">
    <div class="container-full">
       <div class="row">
          <div class="col-sm-12">
             <div class="card mt-5 p-3">
                <h2>Popular Printers</h2>
                <!-- Start Services 
                   ============================================= -->
                <div class="thumb-services-area carousel-shadow  relative bg-cover">
                   <div class="services-items services-carousel owl-carousel owl-theme text-center">
                        @foreach($latestprinter->printer as $list)  
                            <div class="item">
                                <div class="icon">
                                    <a href="{{url($latestprinter->slug.'/'.$list->slug)}}">
                                    <img src="{{url('public/'.$list->image)}}" alt="{{$list->alt}}">
                                    </a>
                                </div>
                                <div class="info">
                                    <h4><a href="{{url($latestprinter->slug.'/'.$list->slug)}}">{{$list->name}}</a></h4>
                                    <p>
                                    <strong>Error Code:</strong>XYZ0215                                
                                    </p>
                                    <a href="{{url($latestprinter->slug.'/'.$list->slug)}}">View Details <i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- End Services Area -->
             </div>
          </div>
       </div>
    </div>
 </section>
 @if(count($printer->errors)>0)
 <section class="section section-csk padd-bot-0 padd-top-40 custom-card common-error">
    <div class="container-full">
       <div class="row ">
          <div class="col-sm-12" style="padding: 0;">
             <div class="card-block mb-5">
                <h3 class="">Most common Error codes of HP DeskJet Plus 4155</h3>
             </div>
             <!--new faq add -->
             <div class="faq-content">
                <div class="accordion" id="accordionExample">
                    @php
                        $i=1;
                    @endphp
                   @foreach($printer->errors as $list)
                    <div class="card m-0">
                      <div class="card-header" id="heading{{$i}}">
                         <h4 class="mb-0 @if($i!=1){{"collapsed"}}@endif" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="@if($i==1){{"true"}}@endif" aria-controls="collapse{{$i}}">
                            {{$list->title}} 
                         </h4>
                      </div>
                      <div id="collapse{{$i}}" class="collapse @if($i==1){{"show"}}@endif" aria-labelledby="heading{{$i}}" data-parent="#accordionExample" style="">
                         <div class="card-body">
                            {!! $list->description !!}
                         </div>
                      </div>
                    </div>
                    @php
                        $i++;
                    @endphp
                   @endforeach
                </div>
             </div>
             <!--end new faq-->
          </div>
       </div>
    </div>
 </section>
 @endif
 <!--START-->
 @if(count($printer->faq)>0)
 <section class="section section-csk padd-bot-0 padd-top-40 custom-card common-error">
    <div class="container-full">
       <div class="row ">
          <div class="col-sm-12" style="padding: 0;">
             <div class="card-block mb-5">
                <h3 class="">How to Setup HP DeskJet Plus 4155</h3>
             </div>
             <!--new faq add -->
             <div class="faq-content">
                <div class="accordion" id="accordionExample">
                </div>
             </div>
             <!--end new faq-->
          </div>
       </div>
    </div>
 </section>
 <div class="faq-area default-padding ">
    <div class="container">
       <div class="testimonial-items">
          <div class="row">
             <div class="col-lg-5 info">
                <h2>FAQs</h2>
                <h2>Most common question about printer</h2>
             </div>
             <div class="col-lg-7">
                <div class="faq-content">
                   <div class="accordion" id="faqExample">
                        @php
                            $i=1;
                        @endphp
                        @foreach($printer->faq as $list)
                            <div class="card">
                                <div class="card-header" id="headingfaq{{$i}}">
                                    <h4 class="mb-0 @if($i!=1){{"collapsed"}}@endif" data-toggle="collapse" data-target="#collapsefaq{{$i}}" aria-expanded="@if($i==1){{"true"}}@endif" aria-controls="collapsefaq{{$i}}">
                                    <strong>?</strong> {{$list->question}}
                                    </h4>
                                </div>
                                <div id="collapsefaq{{$i}}" class="collapse @if($i==1){{"show"}}@endif" aria-labelledby="collapsefaq{{$i}}" data-parent="#faqExample" style="">
                                    <div class="card-body">
                                    <p>{{$list->answer}}</p>
                                    </div>
                                </div>
                            </div>
                        @php
                            $i++;
                        @endphp
                        @endforeach
                    </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 @endif
 <!-- end faq's -->
 <!-- modals B  -->
 <div class="modal fade" id="immidiate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
          <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel"><strong>Kindly Fill The Following Information</strong></h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button>
          </div>
          <div class="modal-body">
             <form action="#" method="post">
                <div class="row">
                   <div class="col-sm-12 mb-2 ">
                      <label for="name">Describe the Issue  </label>
                      <input type="text" class="form-control" id="name" name="issue" placeholder=" " required="">
                   </div>
                </div>
                <div class="row">
                   <div class="col-sm-12 mb-2 ">
                      <label for="name">Your Phone Number </label>
                   </div>
                   <div class="col-sm-3 mb-2 ">
                      <select class="form-control" name="country">
                         <option value="AUS">AUS</option>
                         <option value="CA">CA</option>
                         <option value="NZ">NZ</option>
                         <option value="UK">UK</option>
                         <option value="US" selected>US</option>
                      </select>
                   </div>
                   <div class="col-sm-8 mb-2 ">
                      <input type="text" class="form-control" id="name" name="phone" placeholder=" " required="">
                   </div>
                </div>
                <div class="row mb-3">
                   <div class="col-sm-12 mb-4 ">
                      <label for="name">Your Email *  </label>
                      <input type="email" class="form-control" id="name" name="email" placeholder=" " required="">
                   </div>
                   <input type="hidden" class="form-control" id="name" name="" value="125.63.100.57" placeholder=" ">
                   <input type="hidden" class="form-control" id="name" name="" value="hp-deskjet-plus-4155" placeholder=" ">
                   <input type="hidden" class="form-control" id="name" name="" value="hp" placeholder=" ">
                   <div class="col-sm-12 mb-4 form-group form-check">
                      <input type="checkbox" class=" " id="exampleCheck1" checked required>
                      <label class="form-check-label" for="exampleCheck1">I have read and agree to the Pissed Consumer <a href="#!"> Term Of Service *</a></label>
                   </div>
                   <div class="col-sm-12 text-center">
                      <button class="btn btn-primary" type="submit" name="proceed">Porceed </button>
                      <button type="button" class="close btn btn-light" data-dismiss="modal" aria-label="Close">
                      Cancel
                      </button>
                   </div>
                </div>
             </form>
          </div>
       </div>
    </div>
 </div>
 <!-- end modals  B-->
 <!-- end more support -->
 <!-- Start Footer 
    ============================================= -->

@endsection