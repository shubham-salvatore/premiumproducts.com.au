<?php include 'header.php'; ?>
<nav aria-label="breadcrumb" class="breadcrumb_bg">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/index">Home</a></li>
			<li class="breadcrumb-item"><a href="/categories">Categories</a></li>
			<li class="breadcrumb-item active">DX Coil</li>
		</ol>
	</div>
</nav>
<script type="text/javascript">function serialize_form() { return $('#myform').serialize(); } </script>
<div class="container">
	<div class="mid_area">
		<div class="cms_area">
			<div class="w-100 mt-3">
				<div class="row">
					<div class="col-12 col-lg-3">
						<div class="list_left">
							<h2 class="fs14 d-none d-lg-block">Filter Results</h2>
							<h2 class="d-md-block d-lg-none showhide hand">Filter Results <i
									class="fas fa-bars float-right mt-2"></i>
								<p class="clearfix"></p>
							</h2>
							<div class="filter_dis">
								<div class="flter_bx">
									<div class="filt_hed">Categories</div>
									<div id="categories_list" class="list_area">
										<p class="left_attribute"><a href="/air-handling-units">Air Handling Units</a>
										</p>
										<p class="left_attribute"><a href="/coils">Coils</a></p>
										<p class="left_attribute"><a href="/dx-coil">DX Coil</a></p>
										<p class="left_attribute"><a href="/heat-recovery-units-with-vrf-condenser">Heat
												Recovery units with VRF Condenser</a></p>
										<p class="left_attribute"><a href="/ec-fans">EC Fans</a></p>
										<p class="left_attribute">
											<a href="/heat-exchangers">Heat Exchangers</a>
										</p>

										<p class="left_attribute">
											<a href="/dehumidifiers">Dehumidifiers</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- left section end -->
					<div class="col-12 col-lg-9">
						<h1>DX Coil</h1>
						<form action="dx-coil" id="myform" method="post" accept-charset="utf-8">
							<input type="hidden" name="per_page" value="">
							<input type="hidden" name="offset" value="0">
						</form>
						<div class="w-100 mt-4" id="my_data">
							<ul class="float_2" id="prodListingContainer">
								<li class="listpager">
									<div class="fet_out">
										<div class="fet_inn">
											<p class="fet_eff"><a href="/dx-coil-with-vrf-condenser-suppliers"
													title="Enquiry Now">Enquiry Now</a></p>
											<figure><a href="/dx-coil-with-vrf-condenser-suppliers"><img
														src="uploaded_files/thumb_cache/thumb_285_265_whatsapp-image-2025-04-03-at-12-42-26-pm.jpeg"
														alt="DX Coil  with VRF Condenser"
														title="DX Coil  with VRF Condenser" class="img-fluid"></a>
											</figure>
										</div>
										<div class="fet_txt_ar">
											<p class="fet_hed"><a href="/dx-coil-with-vrf-condenser-suppliers"
													title="DX Coil  with VRF Condenser">DX Coil with VRF Condenser</a>
											</p>
											<p class="fet_txt">Premium Products is a reliable&nbsp;DX coils and VRF
												condenser&nbsp;supplier, providing hi...</p>
											<p class="cor"><img src="assets/designer/themes/default/images/cor.jpg"
													alt=""></p>
										</div>
									</div>
								</li>
								<!-- end -->
							</ul>
							<div class="mt-5 text-center dn" id="loadingdiv"><img
									src="assets/designer/themes/default/images/loader.gif" alt=""></div>
						</div>
					</div>
				</div>
				<div class="w-100 mt-3 mb-4">
					<div class="list-cnt">
						<p>DX Coil with VRF Condenser</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var page = 1;
	var triggeredPaging = 0;

	$(window).scroll(function () {
		var scrollTop = $(window).scrollTop();
		var scrollBottom = (scrollTop + $(window).height());
		// alert(scrollTop+scrollBottom);
		var containerTop = $('#prodListingContainer').offset().top;
		var containerHeight = $('#prodListingContainer').height();
		var containerBottom = Math.floor(containerTop + containerHeight);
		var scrollBuffer = 0;

		if ((containerBottom - scrollBuffer) <= scrollBottom) {
			page = $('.listpager').length;
			$(':hidden[name="offset"]').val(page);
			var actual_count = 1;
			if (!triggeredPaging && page < actual_count) {
				triggeredPaging = 1;

				data_frm = serialize_form();
				$.ajax({
					type: "POST",
					url: "category/products_listing/36/pg/",
					data: data_frm,
					error: function (res) {
						triggeredPaging = 0;
					},
					beforeSend: function (jqXHR, settings) {
						$('#loadingdiv').show();
					},
					success: function (res) {
						$('#loadingdiv').hide();
						$("#prodListingContainer").append(res);
						triggeredPaging = 0;
						//console.log(res);

						$('.listpager').fadeTo(500, 0.5, function () {
							$(this).fadeTo(100, 1.0);
						});
					}
				});
			}
		}
	});
</script>
<?php include 'footer.php'; ?>