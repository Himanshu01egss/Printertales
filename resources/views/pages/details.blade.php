@extends('layouts.app')
@section('content')

<section class="section section-csk   border-5 pt-0 mt-5">
    <div class="container-fluid">
       <div class="row align-items-center">
          <div class="col-sm-3 text-center bgblue padd-top-40 padd-bot-40">
             <h1 class="text-white">{{$brand->name}}</h1>
          </div>
          <div class="col-sm-6 ">
             {!! $brand->description !!}
          </div>
          <div class="col-sm-3 text-center border-lft chat-sec" id="myHeader">
             <a href="https://tawk.to/chat/61f40112b9e4e21181bc61ff/1fqgi8d3q ">
                <img src="{{url('public/assets/img/ask-lice-chat.png')}}" alt="printertales">
                <h5 class="mb-0">Ask Live Chat</h5>
                <p>Start Chat with a Certified Technician</p>
             </a>
          </div>
       </div>
    </div>
 </section>
 <!-- end to top banner -->
 <section class="section padd-bot-0 padd-top-0">
    <div class="container-full">
       <div class="divider-5"></div>
       <div class="row align-items-center justify-content-center">
          <div class="col-sm-12">
             <h2 class="mb-4 mt-4 "><strong>Having Issue with your {{$brand->name}} Printer? </strong></h2>
             <div class="divider-6"></div>
          </div>
          <!-- Start Case Studies Area
             ============================================= -->
          <!-- End Case Studies Area -->
          <!--new addition-->
          <div class="col-sm-10  col-10 printer-sst case-studies-area">
             <!--code-->
             <div class="row">
                @foreach($brand->brandissue as $list)
                <div class="col-lg-3 col-sm-6 col-12">
                   <div class="item">
                      <div class="setup">
                         <a href="{{url($brand->slug.'/'.$list->slug)}}">
                            <div class="row">
                               <div class="col-9">
                                  <h4>{{$list->name}}</h4>
                               </div>
                               <div class="col-3">
                                  <img src="{{url('public/'.$list->image)}}" alt="{{$list->name}}">
                               </div>
                            </div>
                         </a>
                      </div>
                   </div>
                </div>
                @endforeach
             </div>
          </div>
          <!--end new addition-->
       </div>
    </div>
 </section>
 <section class="section mt-5" style="background: #f9f9f9;padding: 40px;">
    <div class="container-full">
       <div class="row align-items-center">
          <div class="large-7 col-sm-7 col-lg-7">
             <div class="product-details">
                <h2 class="mt-3"><strong>{{$brand->name}} Inc.</strong></h2>
                <div class="FM_mb15 lh28 table-responsive mt-0">
                   <table class="table table-bordered">
                      <tbody>
                         <tr>
                            <td>Headquarters</td>
                            <td>{{$brand->headquarter}}</td>
                         </tr>
                         <tr>
                            <td>Founder(s)</td>
                            <td>{{$brand->founder}}</td>
                         </tr>
                         <tr>
                            <td>Established Since</td>
                            <td>{{$brand->established}}</td>
                         </tr>
                         <tr>
                            <td>Official Website</td>
                            <td><a href="{{$brand->website}}" target="_blank">{{$brand->website}}</a></td>
                         </tr>
                         <tr>
                            <td>Key People</td>
                            <td>{{$brand->people}}</td>
                         </tr>
                      </tbody>
                   </table>
                </div>
            </div>
          </div>
          <div class="col-sm-5 text-center">
             <img src="{{url('public/'. $brand->image)}}" alt="{{$brand->name}}" class="img-boder">  
          </div>
       </div>
    </div>
 </section>
 <section class="section p-0 padd-top-5 custom-card mt-0" style="background:#fff; padding: 40px;">
    <div class="container-full">
       <div class="row">
          <div class="col-sm-12">
             <div class="card mt-5">
                <h2>Popular {{$brand->name}} Printers</h2>
                <!-- Start Services 
                   ============================================= -->
                <div class="thumb-services-area carousel-shadow  relative bg-cover">
                   <div class="services-items services-carousel owl-carousel owl-theme text-center">
                    @foreach($brand->printer as $list)  
                    <div class="item">
                         <div class="icon">
                            <a href="{{url($brand->slug.'/'.$list->slug)}}">
                            <img src="{{url('public/'.$list->image)}}" alt="{{$list->alt}}">
                            </a>
                         </div>
                         <div class="info">
                            <h4><a href="{{url($brand->slug.'/'.$list->slug)}}">{{$list->name}}</a></h4>
                            <p>
                               <strong>Error Code:</strong> XYZ0215                        
                            </p>
                            <a href="{{url($brand->slug.'/'.$list->slug)}}">View Details <i class="fas fa-angle-right"></i></a>
                         </div>
                      </div>
                      @endforeach
                    </div>
                    
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <div class="section default-padding sec-cat-4">
    <div class="container-full">
       <div class="row">
          <div class="col-lg-8 offset-lg-2">
             <div class="site-heading text-center">
                <h2>Other Brand Printers</h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-6">
             <h4>HP</h4>
             <ul>
                <li><a href="/hp/hp-deskjet-plus-4155/">HP DeskJet Plus 4155</a></li>
                <li><a href="/hp/hp-deskjet-3755/">HP DeskJet 3755</a></li>
                <li><a href="/hp/hp-officejet-pro-9015e/">HP OfficeJet Pro 9015e</a></li>
                <li><a href="/hp/hp-deskjet-2755/">HP DeskJet 2755</a></li>
             </ul>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-6">
             <h4>Canon</h4>
             <ul>
                <li><a href="/canon/2986c002-pixma-ts6220-wireless-photo-printer/">2986C002 PIXMA TS6220 Wireless Photo Printer</a></li>
                <li><a href="/canon/pixma-mg3620-wireless-color-inkjet-printer/">PIXMA MG3620 Wireless Color Inkjet Printer</a></li>
                <li><a href="/canon/ts5120-wireless-printer/">TS5120 Wireless Printer</a></li>
                <li><a href="/canon/wireless-pixma-ts9120-inkjet-printer/">Wireless Pixma TS9120 Inkjet Printer</a></li>
             </ul>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-6">
             <h4>Brother</h4>
             <ul>
                <li><a href="/brother/hl-l3270cdw/">HL-L3270CDW</a></li>
                <li><a href="/brother/hl-l8260cdw-wireless-colour-laser-printer/">HL-L8260CDW Wireless Colour Laser Printer</a></li>
                <li><a href="/brother/dcp-l3510cdw-3-in-1-wireless-colour-led-laser-printer/">DCP-L3510CDW 3-in-1 Wireless colour LED laser printer </a></li>
                <li><a href="/brother/dcp-l3550cdw-3-in-1-wireless-colour-led-printer-with-touchscreen-display/">DCP-L3550CDW 3-in-1 wireless colour LED printer with touchscreen display</a></li>
             </ul>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-6">
             <h4>Epson</h4>
             <ul>
                <li><a href="/epson/ecotank-l3110-multi-function-inkjet-printer/">EcoTank L3110 Multi Function Inkjet Printer</a></li>
                <li><a href="/epson/l3150-multi-function-inkjet-printer/">L3150 Multi Function Inkjet Printer</a></li>
                <li><a href="/epson/l130-single-function-inkjet-printer/">L130 Single Function Inkjet Printer</a></li>
                <li><a href="/epson/ecotank-m1170-single-function-inkjet-printer/">EcoTank M1170 Single Function Inkjet Printer</a></li>
             </ul>
          </div>
       </div>
    </div>
 </div>
 <!-- End Blog -->
 <div class="section default-padding features-blog-sec">
    <div class="container-full">
       <div class="row">
          <div class="col-lg-8 offset-lg-2">
             <div class="site-heading text-center">
                <h2>{{$brand->name}} Printer Knowledgebase</h2>
             </div>
          </div>
       </div>
       <div class="row ">
            @foreach($brand->blog as $list)
            <div class="col-lg-6 col-md-6 mt-20">
                <div class="row align-items-center">
                    <div class="thumb col-lg-6">
                        <a href="{{url('knowledge/'.$list->slug)}}">
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

@endsection