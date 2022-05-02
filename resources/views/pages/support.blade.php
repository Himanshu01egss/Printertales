@extends('layouts.app')
@section('content')

<div class="clearfix"></div>
      <!-- support -->
      <div id="contact" class="contact-area default-padding">
         <div class="container-fluid">
            <div class="row justify-content-center position-relative">
               <div class="col-11 mb-5">
                  <h1 class="main-head">Get your Solutions just <span>ANSWER</span> below <span>questions</span>:</h1>
               </div>
               <div class="live-chat-m">
                  <img src="{{url('public/frontend/img/chat-icon.png')}}" />
                  <h4><a href="{{url('chat')}}" target="_blank">Live Chat</a></h4>
               </div>
            </div>
            <div class="row justify-content-center">
               <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                  <div id="res_msg"></div>
                  <form id="regForm" action="{{url('support')}}" method="POST">
                     @csrf
                     <div class="tab">
                        <div class="row justify-content-center text-left head-f">
                           <div class="col-12">
                              <h2>Q1. Please Select the Brand of your Printer</h2>
                           </div>
                        </div>
                        <div class="row check-box-sec brand-sec">
                           <div class="col-lg-6 col-sm-6 text-center mb-3">
                              <div class="form-check check-model" onclick="nextPrev(1)">
                                 <label class="form-check-label" for="brand_2">
                                 <img src="{{url('public/assets/images/logo/hp.png')}}" />
                                 <input class="form-check-input" type="radio" name="brand" id="brand_2" value="hp" />
                                 </label>
                              </div>
                           </div>
                           <div class="col-lg-6 col-sm-6 text-center mb-3">
                              <div class="form-check check-model" onclick="nextPrev(1)">
                                 <label class="form-check-label" for="brand_3">
                                 <img src="{{url('public/assets/images/logo/canon.png')}}" />
                                 <input class="form-check-input" type="radio" name="brand" id="brand_3" value="canon" />
                                 </label>
                              </div>
                           </div>
                           <div class="col-lg-6 col-sm-6 text-center mb-3">
                              <div class="form-check check-model" onclick="nextPrev(1)">
                                 <label class="form-check-label" for="brand_1">
                                 <img src="{{url('public/assets/images/logo/epson.png')}}" />
                                 <input class="form-check-input" type="radio" name="brand" id="brand_1" value="epson" />
                                 </label>
                              </div>
                           </div>
                           <div class="col-lg-6 col-sm-6 text-center mb-3">
                              <div class="form-check check-model" onclick="nextPrev(1)">
                                 <label class="form-check-label" for="brand_4">
                                 <img src="{{url('public/assets/images/logo/brother.png')}}" />
                                 <input class="form-check-input" type="radio" name="brand" id="brand_4" value="brother" />
                                 </label>
                              </div>
                           </div>
                           <div class="col-lg-6 col-sm-6 text-center mb-3">
                              <div class="form-check check-model" onclick="nextPrev(1)">
                                 <label class="form-check-label" for="brand_5">
                                 <img src="{{url('public/assets/images/logo/xerox.png')}}" />
                                 <input class="form-check-input" type="radio" name="brand" id="brand_5" value="xerox" />
                                 </label>
                              </div>
                           </div>
                           <div class="col-lg-6 col-sm-6 text-center mb-3">
                              <div class="form-check check-model" onclick="nextPrev(1)">
                                 <label class="form-check-label" for="brand_5">
                                 <img src="{{url('public/assets/images/logo/other.png')}}" />
                                 <input class="form-check-input" type="radio" name="brand" id="brand_5" value="other" />
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab">
                        <div class="row justify-content-center text-left head-f">
                           <div class="col-12">
                              <h2>What is your Issue?</h2>
                           </div>
                        </div>
                        <div class="row justify-content-center check-box-sec issue-tab">
                           <div class="col-12 issue-sec">
                              <div class="row">
                                 <div class="col-lg-6 col-sm-12 mb-3">
                                    <div class="form-check issue-model">
                                       <label class="form-check-label" for="type_1"> <input type="radio" name="issue" id="type_1" value="Paper Jam in Printer" /> Paper Jam in Printer </label>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-sm-12 mb-3">
                                    <div class="form-check issue-model">
                                       <label class="form-check-label" for="type_2"> <input type="radio" name="issue" id="type_2" value="Printer Troubleshooting" /> Printer Troubleshooting </label>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-sm-12 mb-3">
                                    <div class="form-check issue-model">
                                       <label class="form-check-label" for="type_3"><input type="radio" name="issue" id="type_3" value="Unable to Connect Printer" /> Unable to Connect Printer</label>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-sm-12 mb-3">
                                    <div class="form-check issue-model">
                                       <label class="form-check-label" for="type_4"><input type="radio" name="issue" id="type_4" value="Setting Up New Printer" /> Setting Up New Printer</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="text-center mt-4">
                                 <h5 class="form-check-label">OR - Describe your issue below</h5>
                                 <br />
                                 <br />
                              </div>
                              <div class="form-group">
                                 <textarea type="textbox" class="form-control" name="otherissue" placeholder="Describe Your Issue"></textarea>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab">
                        <div class="row justify-content-center text-left head-f">
                           <div class="col-lg-12 col-sm-12">
                              <h2>Your Email Address:</h2>
                           </div>
                        </div>
                        <div class="row align-items-center justify-content-center pd-ng detail-form">
                           <div class="col-lg-8 col-sm-12">
                              <div class="card">
                                 <div class="card-body">
                                    <div class="form-group row align-items-center email-sec">
                                       <label class="col-sm-12 col-form-label">Email</label>
                                       <div class="col-sm-12">
                                          <input type="email" id="email" name="email" class="form-control" placeholder="Email*" required />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab">
                        <div class="row justify-content-center text-left head-f">
                           <div class="col-lg-12 col-sm-12">
                              <h2>Have you faced this issue before?:</h2>
                           </div>
                        </div>
                        <div class="row check-box-sec before_issue">
                           <div class="col-lg-6 col-sm-6 text-center mb-3">
                              <div class="form-check check-model" onclick="nextPrev(1)">
                                 <label class="form-check-label" for="brand_2">
                                 YES
                                 <input class="form-check-input" value="1" type="radio" name="before" />
                                 </label>
                              </div>
                           </div>
                           <div class="col-lg-6 col-sm-6 text-center mb-3">
                              <div class="form-check check-model" onclick="nextPrev(1)">
                                 <label class="form-check-label" for="brand_3">
                                 NO
                                 <input class="form-check-input" value="0" type="radio" name="before" />
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab">
                        <div class="row justify-content-center text-left head-f">
                           <div class="col-lg-12 col-sm-12">
                              <h2>Your Registered Number?</h2>
                           </div>
                        </div>
                        <div class="row align-items-center justify-content-center pd-ng detail-form">
                           <div class="col-lg-9 col-sm-12 mm-phone">
                              <div class="card">
                                 <div class="card-body">
                                    <div class="form-group row align-items-center number-sec">
                                       <label class="col-sm-12 col-form-label">Mobile Number</label>
                                       <div class="input-group mb-3 col-sm-12">
                                          <input type="phone" maxlength="25" name="phone" oninput="this.className = ''" class="form-control form-control-m" placeholder="Number*" required />
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab">
                        <div class="row justify-content-center text-left head-f">
                           <div class="col-12">
                              <h2>Thanks Your Form is Submit</h2>
                           </div>
                        </div>
                     </div>
                     <div style="overflow: auto;">
                        <div class="text-center">
                           <button class="btn" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                           <button class="btn" type="button" id="nextBtn">Next</button>
                           <button class="btn" type="submit" id="nextBtn2">Next</button>
                        </div>
                     </div>
                     <!-- Circles which indicates the steps of the form: -->
                     <div class="form-steps" style="text-align: center;">
                        <li class="step active"></li>
                        <li class="step"></li>
                        <li class="step"></li>
                        <li class="step"></li>
                        <li class="step"></li>
                        <li class="step last"></li>
                     </div>
                     <input type="hidden" name="final_ask" id="final_ask" value="online" />
                  </form>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                  <div class="main-answer">
                     <h3 class="text-left">Your Answer</h3>
                     <div class="answer-sec">
                        <div class="anstab tab-1">
                           <h5>Your Selected Printer</h5>
                        </div>
                        <div class="anstab tab-2">
                           <h5>Your Issue</h5>
                           <div class="desc-main">
                              <p class="desc_issue"></p>
                           </div>
                        </div>
                        <div class="anstab tab-3">
                           <h5>Your Email</h5>
                           <p class="email_value"></p>
                        </div>
                        <div class="anstab tab-4">
                           <h5>You Faced This Issue Before</h5>
                        </div>
                        <div class="anstab tab-5">
                           <h5>Your Number</h5>
                           <p class="number_value"></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 mt-5">
                  <div id="myself" class="row text-center mt-4">
                     <div class="col-lg-12">
                        <div class="mt-4">
                           <h5 class="text-center mb-0" style="color: #a5a3a3;">No. I would like to resolve the issue myself - <a href="contact.php" style="color: #a5a3a3;">Click here.</a></h5>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script>
        var currentTab = 0; 
        showTab(currentTab); 
        $("#nextBtn2").hide();
        function showTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
                document.getElementById("nextBtn").style.display = "none";
            } else if (n == 1) {
                document.getElementById("prevBtn").style.display = "inline";
                document.getElementById("nextBtn").style.display = "inline";
            } else {
                document.getElementById("nextBtn").style.display = "inline";
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == x.length - 2) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            if (n == x.length - 1) {
                $("#nextBtn").hide();
                $("#prevBtn").hide();
            }
            if (n == 0) {
                document.getElementById("myself").style.display = "block";
            } else {
                document.getElementById("myself").style.display = "none";
            }
            if (n == 4) {
                $("#nextBtn").hide();
                $("#nextBtn2").show();
            } else {
                $("#nextBtn2").hide();
            }
            if (n == 0) {
                $(".anstab").hide();
                $(".anstab.tab-1").show();
            }
            if (n == 1) {
                $(".anstab").hide();
                $(".anstab.tab-1").show();
                $(".anstab.tab-2").show();
            }
            if (n == 2) {
                $(".anstab").hide();
                $(".anstab.tab-1").show();
                $(".anstab.tab-2").show();
                $(".anstab.tab-3").show();
            }
            if (n == 3) {
                $(".anstab").hide();
                $(".anstab.tab-1").show();
                $(".anstab.tab-2").show();
                $(".anstab.tab-3").show();
                $(".anstab.tab-4").show();
            }
            if (n == 4) {
                $(".anstab").hide();
                $(".anstab.tab-1").show();
                $(".anstab.tab-2").show();
                $(".anstab.tab-3").show();
                $(".anstab.tab-4").show();
                $(".anstab.tab-5").show();
            }
            fixStepIndicator(n);
        }
        
        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");
            if (n == 1 && !validateForm()) {
                return false;
            }
            if (currentTab == 4) {
                var form_data = $("form").serialize();
                console.log(form_data);
                $.ajax({
                    url: "",
                    type: "POST",
                    data: form_data,
                    success: function (res) {
                        console.log(res);
                    },
                    error: function (err) {
                        console.log(err);
                    },
                });
            }
            x[currentTab].style.display = "none";
        
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                x[currentTab - n].style.display = "block"; // prevent from hide after form submit
        
                var relType = $("input[name=resolve_type]:checked").val();
        
                $("#nextBtn").html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submiting...');
                document.getElementById("regForm").submit();
        
                return false;
            }
            showTab(currentTab);
        }
        
        function validateForm() {
            var x,
                y,
                i,
                valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var email = $("#email").val();
        
            for (i = 0; i < y.length; i++) {
                if (y[i].hasAttribute("required") && y[i].value == "") {
                    y[i].className += " is-invalid";
                    valid = false;
                }
            }
        
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }
        
        function fixStepIndicator(n) {
            var i,
                x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            x[n].className += " active";
        }
        
        $(".brand-sec input[type=radio]").change(function () {
            var radio_value = $(this).val();
        
            $(".tab-1 .value").remove();
            $(".tab-1").append('<p class="value">' + radio_value + "</p>");
        });
        
        $(".issue-sec input[type=radio]").change(function () {
            var radio_value = $(this).val();
        
            $(".tab-2 .value").remove();
            $(".tab-2 .desc-main").prepend('<p class="value">' + radio_value + "</p>");
        });
        $(".issue-sec textarea").keyup(function () {
            var issue_value = $(this).val();
            $(".tab-2 .desc-main .desc_issue").text(issue_value);
        });
        $(".email-sec input[type=email]").keyup(function () {
            var email_value = $(this).val();
            $(".tab-3 .email_value").text(email_value);
        });
        $(".before_issue input[type=radio]").change(function () {
            var radio_value = $(this).val();
            if (radio_value == 1) {
                $(".tab-4 .value").remove();
                $(".tab-4").append('<p class="value"> Yes </p>');
            } else {
                $(".tab-4 .value").remove();
                $(".tab-4").append('<p class="value"> No </p>');
            }
        });
        $(".number-sec input[type=phone]").keyup(function () {
            var number_value = $(this).val();
            $(".tab-5 .number_value").text(number_value);
        });
        
       $("#nextBtn").click(function () {
            var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var email = $("#email").val();
            if (currentTab == 2) {
                if (!filter.test(email)) {
                    email.className += " is-invalid";
                } else {
                    nextPrev(1);
                }
            } else {
                nextPrev(1);
            }
        });
        $(document).ready(function () {
            $('[rel="tooltip"]').tooltip();
            $('[rel="tooltip"]').on("click", function () {
                $(this).tooltip("hide");
            });
        });
        var timezone = moment.tz.guess();
        console.log(timezone);
        
        $(document).ready(function () {
            $("#printer_type").keyup(function () {
                var search = $(this).val();
                $.ajax({
                    url: "contact.php",
                    type: "POST",
                    data: { search: search },
                    success: function (res) {
                        console.log(res);
                        var availableTags = [];
                        $.each(res, function (key, item) {
                            availableTags.push(item.name);
                        });
                        $("#printer_type").autocomplete({
                            source: availableTags,
                        });
                    },
                    error: function (res) {
                        console.log(res);
                    },
                });
            });
        });
        
        $(".select2").select2();
        
        $(".select2bs4").select2({
            theme: "bootstrap4",
        });
        $(document).ready(function () {
            $("#banner-slider").owlCarousel({
                loop: true,
                nav: false,
                margin: 30,
                dots: true,
                autoplay: true,
                items: 1,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            });
        });
        $(document).ready(function () {
            $("#blog-slider").owlCarousel({
                loop: true,
                nav: false,
                margin: 30,
                dots: false,
                autoplay: true,
                items: 1,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            });
        });
        if (!sessionStorage.getItem("show_popup")) {
            setTimeout(function () {
                // $("#myModal").modal('show');
            }, 60000);
        }
        
        $(function () {
            $("#datepicker").datepicker({ minDate: 0, maxDate: "+2D" });
        });
        var timezone = moment.tz.guess();
        console.log(timezone);
        
        $(document).ready(function () {
            $("#printer_type").keyup(function () {
                var search = $(this).val();
                $.ajax({
                    url: "contact.php",
                    type: "POST",
                    data: { search: search },
                    success: function (res) {
                        console.log(res);
                        var availableTags = [];
                        $.each(res, function (key, item) {
                            availableTags.push(item.name);
                        });
                        $("#printer_type").autocomplete({
                            source: availableTags,
                        });
                    },
                    error: function (res) {
                        console.log(res);
                    },
                });
            });
        });
        
        $(".select2").select2();
        
        $(".select2bs4").select2({
            theme: "bootstrap4",
        });
        
        $(document).ready(function () {
            $("#banner-slider").owlCarousel({
                loop: true,
                nav: false,
                margin: 30,
                dots: true,
                autoplay: true,
                items: 1,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            });
        });
    
        $(document).ready(function () {
            $("#blog-slider").owlCarousel({
                loop: true,
                nav: false,
                margin: 30,
                dots: false,
                autoplay: true,
                items: 1,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            });
        });
     
        $(".mi").click(function(){ 
                let b =  $(".anstab.tab-1").val();
                 alert(b);        
            });
           if (!sessionStorage.getItem("show_popup")) {
                setTimeout(function () {
                }, 60000);
           }
        
           $(function () {
               $("#datepicker").datepicker({ minDate: 0, maxDate: "+2D" });
           });
     </script>
@endsection