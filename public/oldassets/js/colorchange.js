 $(document).ready(function(){
   Bgred = function()  {
     $(".bg-theme ,nav.navbar.bootsnav ,footer,.btn-theme ,.showset ,.bgblue,.faq-area .faq-content .card .card-header h4 strong , .btn1-c , .bg-grey ").css('background','#b11522');
     $(".sec-cat-4 ul li a ,.features-blog-sec .more a ,.owl-stage-outer .item .info a, .faq-area .info > h5, .section-csk .list-cl p, table td a ").css('color','#b11522');
     $(".product .lsb , .faq-area .btn-theme").css('border-color','#b11522');
    }

    Bgblue = function() {
 	  $(".bg-theme ,nav.navbar.bootsnav ,footer,.btn-theme ,.showset ,.bgblue,.faq-area .faq-content .card .card-header h4 strong , .btn1-c , .bg-grey ").css('background','#0171ad');
    $(".sec-cat-4 ul li a ,.features-blog-sec .more a ,.owl-stage-outer .item .info a, .faq-area .info > h5, .section-csk .list-cl p, table td a").css('color','#0171ad');
    $(".product .lsb , .faq-area .btn-theme").css('border-color','#0171ad');  
      }

    $(window).on('scroll', function() {
        var height = $(window).scrollTop();
        if (height > 100) {
          $('#back2Top').fadeIn();
        } else {
          $('#back2Top').fadeOut();
        }
      });
  
    $("#back2Top").on('click', function(event) {
      event.preventDefault();
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
    });
  
  
$('.showset').click(function(){
		$('.maincolor').toggle("'slide', {direction: 'right' }, 120");
	});





});