<?php include 'header.php'; ?>
<nav aria-label="breadcrumb" class="breadcrumb_bg">
	<div class="container">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/index">Home</a></li>
			<li class="breadcrumb-item active">Categories</li>
		</ol>
	</div>
</nav>
<script type="text/javascript">function serialize_form() { return $('#myform').serialize(); }</script>
<div class="container">
	<div class="mid_area">
		<div class="cms_area">
			<h1>Premium products category</h1>
			<form action="" id="myform" method="post" accept-charset="utf-8">
				<input type="hidden" name="per_page" value="">
				<input type="hidden" name="offset" value="0">
			</form>
			<div class="w-100 mt-5" id="my_data">
				<ul class="float_1" id="prodListingContainer">
					<li class="listpager">
						<div class="cat_area">
							<div class="cat_bx">
								<figure><a href="/air-handling-units"><img
											src="uploaded_files/thumb_cache/thumb_285_265_product_banner_waves_ahu-1536x3201.png"
											alt="Air Handling Units" class="img-fluid"></a></figure>
							</div>
							<div class="cat_txt"><a href="/air-handling-units" title="Air Handling Units">Air Handling
									Units</a></div>
						</div>
					</li>
					<li class="listpager">
						<div class="cat_area">
							<div class="cat_bx">
								<figure><a href="/coils"><img
											src="uploaded_files/thumb_cache/thumb_285_265_dx-coil-1024x778.png"
											alt="Coils" class="img-fluid"></a></figure>
							</div>
							<div class="cat_txt"><a href="/coils" title="Coils">Coils</a></div>
						</div>
					</li>
					<li class="listpager">
						<div class="cat_area">
							<div class="cat_bx">
								<figure><a href="/dx-coil"><img
											src="uploaded_files/thumb_cache/thumb_285_265_whatsapp-image-2024-10-17-at-11-44-06-am.jpeg"
											alt="Coil with VRF Condenser" class="img-fluid"></a></figure>
							</div>
							<div class="cat_txt"><a href="/dx-coil" title="DX Coil">DX Coil</a></div>
						</div>
					</li>
					<li class="listpager">
						<div class="cat_area">
							<div class="cat_bx">
								<figure><a href="/heat-recovery-units-with-vrf-condenser"><img
											src="uploaded_files/thumb_cache/thumb_285_265_noimg1.gif"
											alt="Heat Recovery units with VRF Condenser" class="img-fluid"></a></figure>
							</div>
							<div class="cat_txt"><a href="/heat-recovery-units-with-vrf-condenser"
									title="Heat Recovery units with VRF Condenser">Heat Recovery units with VRF
									Condenser</a></div>
						</div>
					</li>
					<li class="listpager">
						<div class="cat_area">
							<div class="cat_bx">
								<figure><a href="/ec-fans"><img
											src="uploaded_files/thumb_cache/thumb_285_265_whatsapp-image-2025-04-03-at-2-28-24-pm.jpeg"
											alt="EC Fans" class="img-fluid"></a></figure>
							</div>
							<div class="cat_txt"><a href="/ec-fans" title="EC Fans">EC Fans</a></div>
						</div>
					</li>
				</ul>
				<div class="mt-5 text-center dn" id="loadingdiv"><img
						src="assets/designer/themes/default/images/loader.gif" alt=""></div>
			</div>
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
			var actual_count = 5;
			if (!triggeredPaging && page < actual_count) {
				triggeredPaging = 1;

				data_frm = serialize_form();
				$.ajax({
					type: "POST",
					url: "category/category_listing/pg/",
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