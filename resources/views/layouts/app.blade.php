<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" type="image/png" href="">
      @if(isset($meta))
         <title>{{$meta['metatitle']}}</title>
         <meta name="description" content="{{$meta['metadescription']}}">
         <meta name="keywords" content="{{$meta['metakeywords']}}">
         <meta property="og:locale" content="en_US" />
      	<meta property="og:type" content="website" />
      	<meta property="og:site_name" content="{{config('app.name') }}" />
      	<meta property="og:title" content="{{$meta['metatitle']}}"/>
      	<meta property="og:description" content="{{$meta['metadescription']}}"/>
      	<meta property="og:url" content="{{url()->full()}}"/>
      	<meta property="og:image" content="{{url('public/'.$meta['image'])}}"/>
      	<meta property="og:image:type" content="image/jpeg" />
      	<meta name="twitter:card" content="summary">
         <meta name="twitter:title" content="{{$meta['metatitle']}}">
         <meta name="twitter:description" content="{{$meta['metadescription']}}">
         <meta name="twitter:image" content="{{url('public/'.$meta['image'])}}">
         <meta name="twitter:site" content="{{config('app.name') }}">
      @else 
         <title>{{config('app.name') }}</title>
         <meta name="description" content="{{config('app.name') }}">
         <meta name="keywords" content="{{config('app.name') }}">
         <meta property="og:title" content="{{config('app.name') }}" />
         <meta property="og:type" content="Website" />
         <meta property="og:url" content="{{url()->full()}}" />
         <meta property="og:image" content="@if($settings) {{url('public/'.$settings->logo)}} @endif" />
         <meta name="twitter:card" content="summary">
         <meta name="twitter:description" content="{{config('app.name') }}">
         <meta name="twitter:title" content="{{config('app.name') }}">
         <meta name="twitter:image" content="@if($settings) {{url('public/'.$settings->logo)}} @endif">
         <meta name="twitter:site" content="{{config('app.name') }}">
      @endif
      
      @if(isset($settings) && $settings->webindex == 1)
         <meta name="robots" content="index, follow"/>
         <meta name="googlebot" content="index, follow"/>
         <meta name="bingbot" content="index, follow"/>
      @else
         <meta name="robots" content="noindex, nofollow"/>
         <meta name="googlebot" content="noindex, nofollow"/>
         <meta name="bingbot" content="noindex, nofollow"/>
      @endif

      <link rel="canonical" href="{{url()->full()}}" />
      <link rel="alternate" href="{{url()->full()}}" hreflang="x-default" />

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
      <link href="{{asset('public/assets/css/support.css')}}" rel="stylesheet" />
      <link rel="stylesheet" href="{{asset('public/assets/css/jquery-ui.css')}}">
      <link rel="stylesheet" href="{{asset('public/assets/css/form.css')}}" />
      <link rel="stylesheet" href="{{asset('public/assets/css/colorchange.css')}}">
      <link rel="stylesheet" href="{{asset('public/assets/css/jquery-ui-timepicker-addon.css')}}">
      <link rel="stylesheet" href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
         .pronter-list ul li.hidden {
         border-bottom: none;
         display: none;
         }
         .themodal {
         position: absolute;
         top: 50%;
         width: 70%;
         }
      </style>

      <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
      {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
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
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                     <i class="fa fa-bars"></i>
                     </button>
                     <a class="navbar-brand" href="{{url('/')}}">
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
                           <a href="{{url('support')}}" class="active">Support</a>
                        </li>
                        <li class="dropdown">
                           <a href="https://printertales.com/beta/service" class="active">Services</a>
                        </li>
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">All PRINTER</a>
                           <ul class="dropdown-menu child fadeOutUp" style="display: none; opacity: 1;">
                              @foreach($popularbrandprinters as $list)
                                 <li class="dropdown list">
                                    <a href="#" class="dropdown">{{$list->name}}</a>
                                    <ul class="dropdown_child">
                                       @foreach($list->printer as $printerlist)
                                          <li>
                                             <a href="{{url($list->slug.'/'.$printerlist->slug)}}">{{$printerlist->name}}</a>
                                          </li>
                                       @endforeach
                                    </ul>
                                 </li>
                              @endforeach
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
                              <a href="{{url('/')}}">Home</a>
                           </li>
                           <li>
                              <a href="{{url('knowledgebase')}}">Knowledge Base</a>
                           </li>
                           <li>
                              <a href="{{url('support')}}">Support</a>
                           </li>
                           <li>
                              <a href="{{url('contact')}}">Contact Us</a>
                           </li>
                           <li>
                              <a href="{{url('service')}}">Service</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-2 col-md-6 col-6 item">
                     <div class="f-item link">
                        <h4 class="widget-title">Issues We Resolve</h4>
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
      
      {{-- <script  src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
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
      <script>
         $("#thesearch").on("keyup", function () {
             var value = $(this).val().toLowerCase();
             $(".single-item ").filter(function () {
                 $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
             });
         });
      </script>
      <script src="{{asset('public/assets/js/carousel2.js')}}"></script>
      <script>
         $(document).ready(function(){
         
         function load_data(full_text_search_query = '')
          {
           var _token = $("input[name=_token]").val();
            $.ajax({
            url:"{{ route('homesearch') }}",
            method:"POST",
            data:{full_text_search_query:full_text_search_query, _token:_token},
            dataType:"json",
            success:function(data)
            {
               var output = '';
               if(data.length > 0) {
                  for(var count = 0; count < data.length; count++){
                        output += '<li>Blog | <a href={{url('knowledgebase')}}/'+data[count].slug+'>'+data[count].title+'</a></li>';
                  }
             } else {
              output += '<p colspan="6">No Blog Found</p>';
             }
             output += '<li class="printersearch"> </li>';
             $(".manual-list").css("display", "block");
             $('.list-unstyled').html(output);
            }
           });
         
           $.ajax({
            url:"{{ route('homesearchprinter') }}",
            method:"POST",
            data:{full_text_search_query:full_text_search_query, _token:_token},
            dataType:"json",
            success:function(data)
            {
               var output = '';
               if(data.length > 0) {
                  for(var count = 0; count < data.length; count++){
                        output += '<li>Printer | <a href={{url("/")}}/'+data[count].brand.slug+'/'+data[count].slug+'>'+data[count].name+'</a></li>';
                  }
             } else {
              output += '<p colspan="6">No Printer Found</p>';
             }
             $(".manual-list").css("display", "block");
             $('.printersearch').html(output);
            }
           });
         
         
          }
         
          $('#homesearch').keyup(function(){
           var full_text_search_query = $('#homesearch').val();
           console.log(full_text_search_query);
            load_data(full_text_search_query);
          });


         $("#single").on("change",function(){
            var printersearch = $('#single').val();
            console.log(printersearch);
            load_printer_data(printersearch);
         });

         function load_printer_data(printersearch = '')
          {
            var _token = $("input[name=_token]").val();
            $.ajax({
            url:"{{ route('printersearch') }}",
            method:"POST",
            data:{printersearch:printersearch, _token:_token},
            dataType:"json",
            success:function(data)
            {
               console.log(data)
               var output = '';
               console.log(data.image);
               $('#project-icon').attr('src', "../public/"+data.image);
            }
           });
         }
      });
      </script>  
   </body>
</html>