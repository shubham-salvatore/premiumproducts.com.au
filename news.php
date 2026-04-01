<?php include 'header.php'; ?>
<nav aria-label="breadcrumb" class="breadcrumb_bg">
		 <div class="container">
		  <ol class="breadcrumb">
		   <li class="breadcrumb-item"><a href="/index">Home</a></li>
		   		   <li class="breadcrumb-item active">News & Events</li>
		  </ol>
		 </div>
		</nav>
		<script type="text/javascript">function serialize_form(){ return $('#myform').serialize(); }</script>
<div class="container">
 <div class="mid_area">
  <div class="cms_area">
   <h1>News & Events</h1>
   <div class="w-100 mt-3">
    	    <div class="text-center mt-5"><strong>No record(s) Found.</strong></div>
	       </div>
   <div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
 </div>
 <div class="clearfix"></div>
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
			  url: "https://www.premiumproducts.com.au/news/index/pg/",
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