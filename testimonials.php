<?php include 'header.php'; ?>
<nav aria-label="breadcrumb" class="breadcrumb_bg">
		 <div class="container">
		  <ol class="breadcrumb">
		   <li class="breadcrumb-item"><a href="/index">Home</a></li>
		   		   <li class="breadcrumb-item active">Testimonials</li>
		  </ol>
		 </div>
		</nav>
		<script type="text/javascript">function serialize_form() { return $('#myform').serialize(); }</script>
<div class="container">
 <div class="mid_area">
  <div class="cms_area">
   <h1>Testimonials</h1>
   <div class="w-100 mt-5 mb-4">
    <div class="row">
     <div class="col-lg-4 col-xl-3 order-2 mb20">
      <a name="pt" id="pt">
<div class="post-testimnl">
 <h2 class="d-none d-lg-block">Post Testimonials</h2>
 <div class="black d-block d-lg-none showhide tmonial_hed">+ Post Testimonials</div>
 <form action="testimonials#pt" class="form-horizontal tab_hider" role="form" enctype="multipart/form-data" method="post" accept-charset="utf-8">
 <div class="mt15">
  <div><input name="poster_name" id="person_name" type="text" placeholder="Name *" value="" autocomplete="off"></div>
  <div><input name="email" id="email" type="text" placeholder="Email ID *" value="" autocomplete="off"></div>
  <div><input name="testimonial_image" id="testimonial_image" type="file" placeholder="Image"></div>
  <div><textarea name="testimonial_description" id="description" cols="40" rows="5" placeholder="Description *"></textarea></div>
  <div class="mt10"><input name="verification_code" id="verification _code" autocomplete="off" type="text" placeholder="Enter Code *" style="width:99px; float:left;"><span class="pt-2 d-block"><img src="captcha/normal/testimonial.gif" id="captchaimage1" alt="" class="mw_98"  width="135px;> <a href="javascript:void(0);" title="Change Verification Code"><img src="assets/designer/themes/default/images/refresh.png" alt="Refresh" class="mw_98" onclick="document.getElementById('captchaimage1').src='captcha/normal/testimonial/177451025569c4e0af1e1f7'+Math.random(); document.getElementById('verification_code').focus();""></a></span></div>
  <div class="clearfix"></div>
    <p class="mt-1">
   <input name="submit" type="submit" class="sub_butt" style="transform:none" value="Post Now">
   <input name="post" type="hidden" value="Post">
  </p>
 </div>
 </form></div>     </div> 
     <div class="col-lg-8 col-xl-9 p0">
      	      <div class="mt-5 text-center"><strong>No record(s) Found.</strong></div>
	           </div> 
    </div>
   </div>   
  </div>
 </div>
</div>
<script type="text/javascript">
var page = 1;
var triggeredPaging = 0;

$(window).scroll(function (){
	var scrollTop = $( window ).scrollTop();
	var scrollBottom = (scrollTop + $( window ).height());
	// alert(scrollTop+scrollBottom);
	var containerTop = $('#prodListingContainer').offset().top;
	var containerHeight = $('#prodListingContainer').height();
	var containerBottom = Math.floor(containerTop + containerHeight);
	var scrollBuffer = 0;

	if((containerBottom - scrollBuffer) <= scrollBottom) {
	  page = $('.listpager').length;
	  $(':hidden[name="offset"]').val(page);
	  var actual_count = 0;
	  if(!triggeredPaging && page < actual_count){
		triggeredPaging=1;

		data_frm = serialize_form();
		$.ajax({
			  type: "POST",
			  url: "testimonials/index/pg/",
			  data:data_frm,
			  error: function(res) {
				triggeredPaging = 0;
			  },
			  beforeSend: function(jqXHR, settings){
				$('#loadingdiv').show();
			  },
			  success: function(res) {
				$('#loadingdiv').hide();
				$("#prodListingContainer").append(res);
				triggeredPaging = 0;
				//console.log(res);

				$('.listpager').fadeTo(500, 0.5, function() {
				  $(this).fadeTo(100, 1.0);
				});
			  }
			});
	  }
	}
});
</script>
<?php include 'footer.php'; ?>