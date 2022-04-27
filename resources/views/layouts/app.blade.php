<!DOCTYPE html>
@php
   $settings = DB::table('settings')->first();
@endphp
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="">
      <title>App Name - @yield('title')</title>
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="robots" content="index, follow"/>
      <meta name="googlebot" content="index, follow"/>
      <meta name="bingbot" content="index, follow"/>
      <meta property="og:title" content="" />
      <meta property="og:type" content="Website" />
      <meta property="og:url" content="" />
      <meta property="og:image" content="" />
      <meta name="twitter:card" content="summary">
      <meta name="twitter:description" content="">
      <meta name="twitter:title" content="">
      <meta name="twitter:image" content="">
      <meta name="twitter:site" content="">
      <link rel="canonical" href="" />
      <link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
      <link href="{{asset('public/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
      <link href="{{asset('public/assets/css/themify-icons.css')}}" rel="stylesheet" />
      <link href="{{asset('public/assets/css/flaticon-set.css')}}" rel="stylesheet" />
      <link href="{{asset('public/assets/css/magnific-popup.css')}}" rel="stylesheet" />
      <link href="{{asset('public/assets/css/owl.carousel.min.css')}}" rel="stylesheet" />
      <link href="{{asset('public/assets/css/owl.theme.default.min.css')}}" rel="stylesheet" />
      
      <link href="{{asset('public/assets/css/bootsnav.css')}}" rel="stylesheet" />
      <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet">
      <link href="{{asset('public/assets/css/responsive.css')}}" rel="stylesheet" />
      <link rel="stylesheet" href="{{asset('public/assets/css/jquery-ui.css')}}">
      <link rel="stylesheet" href="{{asset('public/assets/css/colorchange.css')}}">
      <link rel="stylesheet" href="{{asset('public/assets/css/jquery-ui-timepicker-addon.css')}}">
      <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" media="screen"
         href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
      
      <style>
         .pronter-list ul li.hidden { border-bottom:none; display: none;}
         .banner-area{ overflow: initial;  }
         .banner-area div { height: inherit; }
         .brand-list  .owl-stage-outer .owl-item  {width: fit-content !important; }
         .pronter-list ul li.hidden {
            border-bottom: none;
            display: none;
        }
        nav.navbar.sticked .thesearch {
            display: none;
        }
        .prsearch {
            text-align: -webkit-center;
            padding: 0 20px;
        }
        .hsear {
            width: 450px;
        }
        nav.navbar.sticked .thesearch {display: none; }
        .group { padding: 20px 0;}
        a.next { margin:0 5px; }
       .group a button{ padding: 5px 10px; border-radius: 10px; background: #ffff; font-size: 14px;margin-bottom:4px;   box-shadow: 0 1px 3px #000 !important;}
       a.next  button:before { content: '<<'; padding-right: 2px;}
       a.prev  button:after { content: '>>'; padding-left: 2px;}
        .pronter-list ul li.hidden {
            
            border-bottom:none;
            display: none;
        }
      </style>
   </head>
   <body class="index">
      
      <div class="top-bar-area inc-pad bg-theme text-light">
   <div class="container-fluid">
      <div class="row align-items-center">
         <div class="col-lg-12">
            <div class="info text-center">
               <ul>
                  <li>FACING ISSUE WITH YOUR PRINTER ? <a href="#!" class="cons" data-toggle="modal" data-target="#exampleModal"> BOOK FREE CONSULTATION</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- header -->
<header id="home">
   <!-- Start Navigation -->
   <div class="wrap-sticky mins" style="height: 80px;">
      <nav class="navbar navbar-default active-border navbar-sticky bootsnav on menu-center no-full">
         <div class="container-fluid">
            <!-- Start Atribute Navigation -->
            <div class="attr-nav inc-border info">
               <ul class="tphd">
                  <li class="thesearch">
                     <div class="input-group">
                        <div class="form-outline">
                           <input type="search" id="search1" class="form-control rounded-5" placeholder="search" />
                        </div>
                     </div>
                  </li>
                  <li class="contact text-center">
                     <a class="himg"><i class="fa fa-phone"></i>Call us today</a>
                     <a href="tel:{{$settings->usnum}}">&nbsp; &#127482;&#127480;{{$settings->usnum}}</a>
                     <a href="tel:{{$settings->uknum}}"> &#127468;&#127463; {{$settings->uknum}}</a>
                  </li>
               </ul>
            </div>
            <!-- End Atribute Navigation -->
            <div class="manual-list1">
               <ul class="list-unstyled">
                  <a href="/hp/hp-deskjet-plus-4155/">HP&nbsp;> HP DeskJet Plus 4155</a>
                  <a href="/hp/hp-deskjet-3755/">HP&nbsp;> HP DeskJet 3755</a>
                  <a href="/hp/hp-officejet-pro-9015e/">HP&nbsp;> HP OfficeJet Pro 9015e</a>
                  <a href="/hp/hp-deskjet-2755/">HP&nbsp;> HP DeskJet 2755</a>
                  <a href="/canon/2986c002-pixma-ts6220-wireless-photo-printer/">Canon&nbsp;> 2986C002 PIXMA TS6220 Wireless Photo Printer</a>
                  <a href="/canon/pixma-mg3620-wireless-color-inkjet-printer/">Canon&nbsp;> PIXMA MG3620 Wireless Color Inkjet Printer</a>
                  <a href="/canon/ts5120-wireless-printer/">Canon&nbsp;> TS5120 Wireless Printer</a>
                  <a href="/canon/wireless-pixma-ts9120-inkjet-printer/">Canon&nbsp;> Wireless Pixma TS9120 Inkjet Printer</a>
                  <a href="/brother/hl-l3270cdw/">Brother&nbsp;> HL-L3270CDW</a>
                  <a href="/brother/hl-l8260cdw-wireless-colour-laser-printer/">Brother&nbsp;> HL-L8260CDW Wireless Colour Laser Printer</a>
                  <a href="/brother/dcp-l3510cdw-3-in-1-wireless-colour-led-laser-printer/">Brother&nbsp;> DCP-L3510CDW 3-in-1 Wireless colour LED laser printer </a>
                  <a href="/brother/dcp-l3550cdw-3-in-1-wireless-colour-led-printer-with-touchscreen-display/">Brother&nbsp;> DCP-L3550CDW 3-in-1 wireless colour LED printer with touchscreen display</a>
                  <a href="/epson/ecotank-l3110-multi-function-inkjet-printer/">Epson&nbsp;> EcoTank L3110 Multi Function Inkjet Printer</a>
                  <a href="/epson/l3150-multi-function-inkjet-printer/">Epson&nbsp;> L3150 Multi Function Inkjet Printer</a>
                  <a href="/epson/l130-single-function-inkjet-printer/">Epson&nbsp;> L130 Single Function Inkjet Printer</a>
                  <a href="/epson/ecotank-m1170-single-function-inkjet-printer/">Epson&nbsp;> EcoTank M1170 Single Function Inkjet Printer</a>
                  <a href="/lexmark/lexmark-cs510dte-a4-colour-laser-printer/">Lexmark&nbsp;> Lexmark CS510dte A4 Colour Laser Printer</a>
                  <a href="/lexmark/lexmark-cs725de-a4-colour-laser-printer/">Lexmark&nbsp;> Lexmark CS725de A4 Colour Laser Printer</a>
                  <a href="/lexmark/lexmark-cs820de-a4-colour-laser-printer/">Lexmark&nbsp;> Lexmark CS820de A4 Colour Laser Printer</a>
                  <a href="/lexmark/lexmark-cs720dte-a4-colour-laser-printer/">Lexmark&nbsp;> Lexmark CS720dte A4 Colour Laser Printer</a>
                  <a href="/lexmark/lexmark-cs725dte-a4-colour-laser-printer/">Lexmark&nbsp;> Lexmark CS725dte A4 Colour Laser Printer</a>
                  <a href="/lexmark/lexmark-cs827de-a4-colour-laser-printer/">Lexmark&nbsp;> Lexmark CS827de A4 Colour Laser Printer</a>
                  <a href="/lexmark/lexmark-c2535dw-a4-colour-laser-printer/">Lexmark&nbsp;> Lexmark C2535dw A4 Colour Laser Printer</a>
                  <a href="/lexmark/lexmark-b2236dw--monochrome/">Lexmark&nbsp;> Lexmark B2236dw- Monochrome</a>
                  <a href="/lexmark/lexmark-b2338dw-monochrome/">Lexmark&nbsp;> Lexmark B2338dw- Monochrome</a>
                  <a href="/lexmark/lexmark-mc3224i-color-laser/">Lexmark&nbsp;> Lexmark MC3224i Color laser</a>
                  <a href="/lexmark/lexmark-mb2236i-monochrome/">Lexmark&nbsp;> Lexmark MB2236i - Monochrome</a>
                  <a href="/lexmark/lexmark-b3340dw-monochrome/">Lexmark&nbsp;> Lexmark B3340dw - Monochrome</a>
                  <a href="/brother/hl-l3210cw-colour-wireless-led-printer/">Brother&nbsp;> HL-L3210CW Colour Wireless LED printer</a>
                  <a href="/brother/mfc-j5335dw-a4-wireless-inkjet-printer/">Brother&nbsp;> MFC-J5335DW A4 Wireless Inkjet Printer</a>
                  <a href="/brother/mfc-j895dw-all-in-one-wireless-inkjet-printer--nfc/">Brother&nbsp;> MFC-J895DW All-in-one Wireless Inkjet Printer + NFC</a>
                  <a href="/brother/dcp-j774dw-wireless-3-in-1-inkjet-printer/">Brother&nbsp;> DCP-J774DW Wireless 3-in-1 Inkjet Printer</a>
                  <a href="/brother/mfc-j497dw-wireless-4-in-1-inkjet-printer/">Brother&nbsp;> MFC-J497DW Wireless 4-in-1 Inkjet Printer</a>
                  <a href="/brother/mfc-j491dw-wireless-4-in-1-inkjet-printer/">Brother&nbsp;> MFC-J491DW Wireless 4-in-1 Inkjet Printer</a>
                  <a href="/brother/dcp-l2510d-compact-3-in-1-mono-laser-printer/">Brother&nbsp;> DCP-L2510D Compact 3-in-1 Mono Laser Printer</a>
                  <a href="/hp/hp-laserjet-pro-m15w-printer/">HP&nbsp;> HP LaserJet Pro M15w Printer</a>
                  <a href="/epson/epson-workforce-pro-wf-c869r-dtwf/">Epson&nbsp;> Epson Workforce Pro WF-C869R DTWF</a>
                  <a href="/epson/epson-aculaser-cx37dtnf/">Epson&nbsp;> Epson AcuLaser CX37DTNF Printer</a>
                  <a href="/epson/workforce-wf-100-single-function-inkjet-printer/">Epson&nbsp;> WorkForce WF-100 Single Function Inkjet Printer</a>
                  <a href="/knowledgebase/how-to-solve-the-dell-printer-error-009-654">How To Solve The Dell Printer Error 009-654?  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/how-to-get-rid-of-error-5b00-on-canon-printer">How to Get Rid of Error 5b00 on Canon Printer  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/3-common-printer-issues-and-their-quick-solutions">3 Common Printer Issues And Their Quick Solutions  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/how-to-solve-the-canon-printer-error-code-u043">How To Solve The Canon Printer Error Code U043  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/fix-paper-jam-driver-problems-cartridge-issues-with-these-tips">Fix Paper Jam, Driver Problems, Cartridge Issues with These Tips  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/book-a-service">Book A Service  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/scan-doctor">Scan Doctor  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/printer-issue-after-windows-update">Printer Issue after Windows Update  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/printer-setup-issue">Printer Setup Issue  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/printer-offline-error">Printer Offline error  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/printer-driver-issue">Printer Driver Issue  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/printer-job-stuck-in-queue">Printer Job Stuck in Queue  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/printer-jam-issue">Printer Jam Issue  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/4-methods-to-fix-cartridge-issues-on-your-printer">4 Methods to Fix Cartridge Issues on Your Printer  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/3-quick-solutions-to-fix-a-printer-in-error-state">3 Quick Solutions to Fix A Printer in Error State  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/how-to-easily-update-hp-printer-firmware">How to Easily Update HP Printer Firmware?  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/6-tips-for-troubleshooting-printer-problems">6 Tips for Troubleshooting Printer Problems  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/learn-to-set-up-your-wireless-printer-on-windows-10">Learn To Set Up Your Wireless Printer On Windows 10  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/4-best-color-laser-printers-for-quality-printing">4 Best Color Laser Printers for Quality Printing in 2022  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/5-best-inkjet-printers-at-affordable-prices">5 Best Inkjet Printers At Affordable Prices In 2022  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/4-best-cheap-printers-with-good-features">4 Best Cheap Printers with Good Features in 2022  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/solutions-to-3-common-epson-printer-error-codes">Solutions to 3 Common Epson Printer Error Codes  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/4-common-canon-printer-error-codes--how-to-solve-them">4 Common Canon Printer Error Codes & How To Solve Them  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/common-hp-printer-errors-causes-and-solutions">Common HP Printer Errors, Causes, And Solutions  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/3-most-common-ricoh-printer-error-codes">3 Most Common Ricoh Printer Error Codes (With Solutions)  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/easy-methods-to-install-epson-printer-step-by-step">Easy Methods To Install Epson Printer Step-by-Step  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/how-to-connect-wirelesswired-epson-printer-to-your-laptop">How To Connect Wireless/Wired Epson Printer To Your Laptop  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/the-new-ankermake-m5-3d-printer-review">The New AnkerMake M5 3D Printer Review: Impressive Features  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/3-best-brother-printers-for-your-business">3 Best Brother Printers for Your Business in 2022  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/inkless-printer-review">Inkless Printer Review: What Is It? Features, Benefits, And More  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/how-to-download-canon-printer-drivers-and-software">How to Download Canon Printer Drivers and Software?  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/inkjet-vs-laser-which-printer-should-you-choose">Inkjet Vs. Laser: Which Printer Should You Choose?  <i class="fa fa-angle-right "></i></a>
                  <a href="/knowledgebase/8-factors-to-know-about-hp-instant-ink-before-signing-up">8 Factors To Know About HP Instant Ink Before Signing Up  <i class="fa fa-angle-right "></i></a>
               </ul>
            </div>
            <!-- Start Header Navigation -->
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
               <i class="fa fa-bars"></i>
               </button>
               <a class="navbar-brand" href="/">
               <img src="@if($settings) {{url('public/'.$settings->logo)}} @endif" class="logo" alt="printertales logo" />
               </a>
            </div>
            <!-- End Header Navigation -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
               <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                  <li class="dropdown">
                     <a href="{{url('/')}}" class="active">Home</a>
                  </li>
                  <li class="dropdown">
                     <a href="{{url('contact')}}" class="active">Contact Us</a>
                  </li>
                  <li class="dropdown">
                     <a href="{{url('knowledgebase')}}" class="active">Knowledge base</a>
                  </li>
                  <li class="dropdown">
                     <a href="/support" class="active">Support</a>
                  </li>
                  <li class="dropdown">
                     <a href="https://printertales.com/beta/service" class="active">Services</a>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">All PRINTER</a>
                     <ul class="dropdown-menu child fadeOutUp" style="display: none; opacity: 1;">
                        <li class="dropdown list">
                           <a href="#" class="dropdown">HP</a>
                           <ul class="dropdown_child">
                              <li>
                                 <a href="/hp/hp-deskjet-plus-4155/">HP DeskJet Plus 4155</a>
                              </li>
                              <li>
                                 <a href="/hp/hp-deskjet-3755/">HP DeskJet 3755</a>
                              </li>
                              <li>
                                 <a href="/hp/hp-officejet-pro-9015e/">HP OfficeJet Pro 9015e</a>
                              </li>
                              <li>
                                 <a href="/hp/hp-deskjet-2755/">HP DeskJet 2755</a>
                              </li>
                           </ul>
                        </li>
                        <li class="dropdown list">
                           <a href="#" class="dropdown">Canon</a>
                           <ul class="dropdown_child">
                              <li>
                                 <a href="/canon/2986c002-pixma-ts6220-wireless-photo-printer/">2986C002 PIXMA TS6220 Wireless Photo Printer</a>
                              </li>
                              <li>
                                 <a href="/canon/pixma-mg3620-wireless-color-inkjet-printer/">PIXMA MG3620 Wireless Color Inkjet Printer</a>
                              </li>
                              <li>
                                 <a href="/canon/ts5120-wireless-printer/">TS5120 Wireless Printer</a>
                              </li>
                              <li>
                                 <a href="/canon/wireless-pixma-ts9120-inkjet-printer/">Wireless Pixma TS9120 Inkjet Printer</a>
                              </li>
                           </ul>
                        </li>
                        <li class="dropdown list">
                           <a href="#" class="dropdown">Brother</a>
                           <ul class="dropdown_child">
                              <li>
                                 <a href="/brother/hl-l3210cw-colour-wireless-led-printer/">HL-L3210CW Colour Wireless LED printer</a>
                              </li>
                              <li>
                                 <a href="/brother/hl-l8260cdw-wireless-colour-laser-printer/">HL-L8260CDW Wireless Colour Laser Printer</a>
                              </li>
                              <li>
                                 <a href="/brother/dcp-l3510cdw-3-in-1-wireless-colour-led-laser-printer/">DCP-L3510CDW 3-in-1 Wireless colour LED laser printer</a>
                              </li>
                              <li>
                                 <a href="/brother/dcp-l3550cdw-3-in-1-wireless-colour-led-printer-with-touchscreen-display/">DCP-L3550CDW 3-in-1 wireless colour LED printer with touchscreen display</a>
                              </li>
                           </ul>
                        </li>
                        <li class="dropdown list">
                           <a href="#" class="dropdown">Epson</a>
                           <ul class="dropdown_child">
                              <li>
                                 <a href="/epson/ecotank-l3110-multi-function-inkjet-printer/">EcoTank L3110 Multi Function Inkjet Printer</a>
                              </li>
                              <li>
                                 <a href="/epson/l3150-multi-function-inkjet-printer/">L3150 Multi Function Inkjet Printer</a>
                              </li>
                              <li>
                                 <a href="/epson/l130-single-function-inkjet-printer/">L130 Single Function Inkjet Printer</a>
                              </li>
                              <li>
                                 <a href="/epson/ecotank-m1170-single-function-inkjet-printer/">EcoTank M1170 Single Function Inkjet Printer</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
      </nav>
   </div>
   <!-- End Navigation -->
</header>
   
   @yield('content')

<footer style="background:linear-gradient(257.39deg,#03273aa8,#0171ad);">
         <div class="container-fluid">
            <div class="f-items default-padding">
               <div class="row">
                  <div class="col-lg-4 col-md-6 item">
                     <div class="f-item about">
                        <img src="@if($settings) {{url('public/'.$settings->logo)}} @endif" alt="printertales logo">
                        <p> {!! $settings->footercontent !!}</p>
                     </div>
                     <ul class="social-media d-flex">
                        @php
                           $slinks = DB::table('sociallinks')->get();
                        @endphp

                        @foreach($slinks as $link)
                           <li class="{{$link->name}}"><a href="{{$link->link}}" target="_blank"><i class="fab fa-{{$link->name}}"></i></a></li>
                        @endforeach
                     </ul>
                  </div>
                  <div class="col-lg-2 col-md-6 col-6 item">
                     <div class="f-item link">
                        <h4 class="widget-title">Company</h4>
                        <ul>
                           <li>
                              <a href="/">Home</a>
                           </li>
                           <li>
                              <a href="/knowledgebase">Knowledge Base</a>
                           </li>
                           <li>
                              <a href="/support">Support</a>
                           </li>
                           <li>
                              <a href="/contact">Contact Us</a>
                           </li>
                           <li>
                              <a href="/service">Service</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-6 item">
                     <div class="f-item link">
                        <h4 class="widget-title">Issues We Resolve</h4>
                        <ul>
                           <li>
                              <a href="https://printertales.com/knowledgebase/printer-driver-issue">Printer Driver</a>
                           </li>
                           <li>
                              <a href="https://printertales.com/knowledgebase/book-a-service">Book a Service</a>
                           </li>
                           <li>
                              <a href="https://printertales.com/knowledgebase/printer-job-stuck-in-queue">Printer Job Stuck in Queue</a>
                           </li>
                           <li>
                              <a href="https://printertales.com/knowledgebase/scan-doctor">Scan Doctor</a>
                           </li>
                           <li>
                              <a href="https://printertales.com/knowledgebase/printer-setup-issue">Printer Setup Issue</a>
                           </li>
                           <li>
                              <a href="https://printertales.com/knowledgebase/printer-offline-error">Printer Offline</a>
                           </li>
                           <li>
                              <a href="https://printertales.com/knowledgebase/printer-jam-issue">Printer Jam Issue</a>
                           </li>
                           <li>
                              <a href="https://printertales.com/knowledgebase/printer-issue-after-windows-update">Printer Issue After Windows Update</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 item">
                     <div class="f-item">
                        <h4 class="widget-title">Contact Info</h4>
                        <div class="address">
                           <ul>
                              <li>
                                 <strong>Email </strong>
                                 <a href="mailto:{{$settings->email}}">{{$settings->email}}</a>
                              </li>
                              <li>
                                 <strong>Contact </strong>
                                 <a >US  </a>
                                 <a href="tel:{{$settings->usnum}}">{{$settings->usnum}}</a><br/>
                                 <a>UK  </a>
                                 <a href="tel:{{$settings->uknum}}">{{$settings->uknum}}</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-sm-12 py-4">
                     <hr>
                  </div>
                  <div class="col-md-6 col-sm-8 bottoms">
                     <p class="text-white">Copyright &copy;  2022. Designed by <a href="https://printertales.com/">Printertales</a></p>
                  </div>
                  <div class="col-md-6 col-sm-4  bottoms">
                     <ul>
                     <li>
                        <a href="https://printertales.com/privacy-policy/">Privacy Policy</a> &nbsp;&nbsp;
                     </li>
                     <li>
                        <a href="https://printertales.com/terms-of-uses/">Terms of Use</a> &nbsp;&nbsp;
                     </li>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Footer Bottom -->
      </footer>
      <!-- End Footer -->
      <!-- color chose  -->
      <!-- modals -->
      <div class="modal fade home" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><strong>Kindly fill the form to book free consultation with Printer Tales</strong></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <form action="thankyou.php" method="post">
                     <div class="row">
                        <div class="col-sm-12 mb-1 ">
                           <label for="name">Kindly describe the issue you are facing?</label>
                           <input type="text" class="form-control" id="name" name="issue" placeholder=" " required />
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12 mb-1 ">
                           <label for="name">Name</label>
                           <input type="text" class="form-control" id="name" name="name" placeholder=" " required />
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-12 mb-1 ">
                           <label for="name">Phone No</label>
                        </div>
                        <div class="col-sm-3 mb-1 ">
                           <select class="form-control" name="country">
                              <option value="AUS+61">AUS+61</option>
                              <option value="CA+1">CA+1</option>
                              <option value="NZ+64">NZ+64</option>
                              <option value="UK+44">UK+44</option>
                              <option value="US+1" selected>US+1</option>
                           </select>
                        </div>
                        <div class="col-sm-8 mb-1 ">
                           <input type="text" class="form-control" id="name" name="phone" placeholder=" " required >
                        </div>
                     </div>
                     <div class="row mb-3">
                        <div class="col-sm-12 mb-1 ">
                           <label for="name"> Email *  </label>
                           <input type="email" class="form-control" id="name" name="email" placeholder=" " required >
                        </div>
                        <input type="hidden" class="form-control" id="name" name="" value="" placeholder >
                     </div>
                     <div class="row">
                        <div class="col-sm-12 mb-1 ">
                           <label for="name">Date & Time Slot</label>
                        </div>
                        <div class="col-sm-6 mb-1 ">
                           <input id="txtdate" type="text" class="form-control"  name="date"  required  autocomplete="off">
                        </div>
                        <div class="col-sm-6 mb-1 ">
                           <input type="time" class="form-control"  name="time"  required  autocomplete="off">
                        </div>
                     </div>
                     <div class="row mb-3">
                        <div class="col-sm-12 mb-1 form-group form-check">
                           <input type="checkbox" class=" " id="exampleCheck1" checked >
                           <label class="form-check-label" for="exampleCheck1" >I have read & agree to the <a href="/terms-of-uses/">Terms of Use</a></label>
                        </div>
                        <div class="col-sm-12 text-center">
                           <button class="btn btn-primary  " type="submit" name="proceed">Porceed </button>
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
      <!-- end modals -->
      <!--floating social media-->
      <div class="fix-social">
         <ul class="social-box">
            @php
               $slinks = DB::table('sociallinks')->get();
            @endphp

            @foreach($slinks as $link)
               <li class="{{$link->name}}"><a href="{{$link->link}}" target="_blank"><i class="fab fa-{{$link->name}}"></i></a></li>
            @endforeach
            
         </ul>
      </div>
      <a id="back2Top" class="theme-bg" title="Back to top" href="javascript-void(0)" style="display: block;"><i class="ti-arrow-up"></i></a>
      <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
      <script src="{{asset('public/assets/js/popper.min.js')}}"></script>
      <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('public/assets/js/equal-height.min.js')}}"></script>
      <script src="{{asset('public/assets/js/jquery.appear.js')}}"></script>
      <script src="{{asset('public/assets/js/jquery.easing.min.js')}}"></script>
      <script src="{{asset('public/assets/js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{asset('public/assets/js/modernizr.custom.13711.js')}}"></script>
      <script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('public/assets/js/wow.min.js')}}"></script>
      <script src="{{asset('public/assets/js/progress-bar.min.js')}}"></script>
      <script src="{{asset('public/assets/js/isotope.pkgd.min.js')}}"></script>
      <script src="{{asset('public/assets/js/imagesloaded.pkgd.min.js')}}"></script>
      <script src="{{asset('public/assets/js/count-to.js')}}"></script>
      <script src="{{asset('public/assets/js/YTPlayer.min.js')}}"></script>
      <script src="{{asset('public/assets/js/jquery.nice-select.min.js')}}"></script>
      <script src="{{asset('public/assets/js/bootsnav.js')}}"></script>
      <script src="{{asset('public/assets/js/main.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <script src="{{asset('public/assets/js/jquery-ui.js')}}"></script>
      <script src="{{asset('public/assets/js/colorchange.js')}}"></script>
      <script src="{{asset('public/assets/js/search.js')}}"></script>
       
      <script>
         $('#search1 [data-search]').on('keyup', function() {
         var searchVal = $(this).val();
         var filterItems = $('#search1 [data-filter-item]');
         
         if ( searchVal != '' ) {
         filterItems.addClass('hidden');
         $('[data-filter-item][data-filter-name*="' + searchVal + '"]').removeClass('hidden');
         } else {
         filterItems.removeClass('hidden');
         }
         });
         
      </script>
      <script>
         $('#search2 [data-search]').on('keyup', function() {
         var searchVal = $(this).val();
         var filterItems = $('#search2 [data-filter-item]');
         
         if ( searchVal != '' ) {
         filterItems.addClass('hidden');
         $('[data-filter-item][data-filter-name*="' + searchVal + '"]').removeClass('hidden');
         } else {
         filterItems.removeClass('hidden');
         }
         });
         
      </script>
      <script>
         $('#search3 [data-search]').on('keyup', function() {
         var searchVal = $(this).val();
         var filterItems = $('#search3 [data-filter-item]');
         
         if ( searchVal != '' ) {
         filterItems.addClass('hidden');
         $('[data-filter-item][data-filter-name*="' + searchVal + '"]').removeClass('hidden');
         } else {
         filterItems.removeClass('hidden');
         }
         });
      </script>
      <script>
         $(document).ready(function(){
            $('#search').keyup(function(){
                var search = $(this).val();
                $.ajax({
                   url:'http://printertales.com/suggesstions',
                   type:'POST',
                   headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                   data:{search:search},
                   success:function(res){
                     //  console.log(res);
                      var availableTags = [];
                      $.each(res,function(key,item){
                         availableTags.push(item.title);
                      });
                      if(availableTags.length==0){
                        availableTags.push('No match found');
                      }
                    //   console.log(availableTags);
                      $( "#search" ).autocomplete({
                         source: availableTags       
                      });
                   },
                   error:function(res){
                      console.log(res);
                   }
                })
            });
          });
          
          
      </script> 
      <script>
            $(document).ready(function () {
    var owl = $('.owl-brand');
    owl.owlCarousel({
        items:6,
        rtl: false,
        dots:true,
        loop: true,
        margin: 10,
        padding:0,
        fluidSpeed:true,
        slideTransition: 'linear',
        autoplayTimeout: 0,
        autoplayHoverPause: false,
        responsive: {
        0:{
          loop: true,
          items:2 
        },
        480:{
        loop: true,
          items: 4 
        },
        769:{
          items: 6,
          loop: true
        },
         
         1200:{
        items: 8 ,
        loop: true
        }
    }

    });

});
  </script>
   <script>
      $( function() {
    $( "#datepicker" ).datepicker();
  } );
   </script>
     <script src="{{asset('public/assets/js/carousel2.js')}}"></script>
   </body>
</html>