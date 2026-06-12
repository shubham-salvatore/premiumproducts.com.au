<?php
// SEO: Set page title and meta description dynamically
$page_title = "Heat Exchangers Australia | Industrial HVAC Solutions | Premium Products";
$meta_description = "Premium Products supplies high-quality heat exchangers for HVAC, industrial cooling, and heating systems in Australia. Shell & tube condensers, stainless steel coils, custom solutions. Energy efficient & durable.";
include 'header.php';
?>
<nav aria-label="breadcrumb" class="breadcrumb_bg">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/index">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
            <li class="breadcrumb-item active" aria-current="page">Heat Exchangers</li>
        </ol>
    </div>
</nav>

<script type="text/javascript">
    function serialize_form() { return $('#myform').serialize(); }
</script>

<div class="container">
    <div class="mid_area">
        <div class="cms_area">
            <div class="w-100 mt-3">
                <div class="row">
                    <!-- Sidebar filters (unchanged) -->
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
                                        <p class="left_attribute"><a href="/heat-exchangers">Heat Exchangers</a></p>
                                        <p class="left_attribute"><a href="/dehumidifiers">Dehumidifiers</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product listing area -->
                    <div class="col-12 col-lg-9">
                        <h2 class="mb-3">Our Heat Exchanger Products</h2>
                        <form action="heat-exchangers" id="myform" method="post" accept-charset="utf-8">
                            <input type="hidden" name="per_page" value="">
                            <input type="hidden" name="offset" value="0">
                        </form>
                        <div class="w-100 mt-4" id="my_data">
                            <ul class="float_2" id="prodListingContainer">
                                <!-- Product 1: Shell & Tube Condenser -->
                                <li class="listpager">
                                    <div class="fet_out">
                                        <div class="fet_inn">
                                            <p class="fet_eff"><a href="/shell-tube-condenser"
                                                    title="Enquire about Shell & Tube Condenser">Enquiry Now</a></p>
                                            <figure>
                                                <a href="/shell-tube-condenser">
                                                    <img src="uploaded_files/thumb_cache/shall&tube-conderser/shell_tube_condenser-cr-672x438.jpg"
                                                        alt="Shell and Tube Condenser for industrial HVAC and refrigeration systems"
                                                        title="Shell & Tube Condenser - Premium Products Australia"
                                                        class="img-fluid">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="fet_txt_ar">
                                            <p class="fet_hed"><a href="/shell-tube-condenser"
                                                    title="Shell & Tube Condenser details">Shell & Tube Condenser</a>
                                            </p>
                                            <p class="fet_txt">
                                                Premium Products offers durable shell and tube condensers with a
                                                cylindrical steel shell,
                                                straight water tubes (copper or steel), and optional finned design.
                                                Ideal for ammonia
                                                and industrial refrigeration systems. Removable covers allow easy
                                                cleaning.
                                            </p>
                                            <p class="cor"><img src="assets/designer/themes/default/images/cor.jpg"
                                                    alt=""></p>
                                        </div>
                                    </div>
                                </li>

                                <!-- Product 2: Stainless Steel Coil -->
                                <li class="listpager">
                                    <div class="fet_out">
                                        <div class="fet_inn">
                                            <p class="fet_eff"><a href="/stainless-steel-coil"
                                                    title="Enquire about Stainless Steel Coil">Enquiry Now</a></p>
                                            <figure>
                                                <a href="/stainless-steel-coil">
                                                    <img src="uploaded_files/thumb_cache/stainless-steel-coils/5-cr-1000x1333.jpg"
                                                        alt="Stainless Steel Coil for corrosive environments and high-temperature applications"
                                                        title="Stainless Steel Coil - Premium Products Australia"
                                                        class="img-fluid">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="fet_txt_ar">
                                            <p class="fet_hed"><a href="/stainless-steel-coil"
                                                    title="Stainless Steel Coil details">Stainless Steel Coil</a></p>
                                            <p class="fet_txt">
                                                High-grade stainless steel coils for corrosive environments, food
                                                processing, and medical
                                                applications. Our coils provide excellent heat transfer, long service
                                                life, and resistance
                                                to oxidation and chemical attack.
                                            </p>
                                            <p class="cor"><img src="assets/designer/themes/default/images/cor.jpg"
                                                    alt=""></p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="mt-5 text-center dn" id="loadingdiv">
                                <img src="assets/designer/themes/default/images/loader.gif" alt="Loading more products">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Category description (SEO friendly) -->
                <div class="w-100 mt-3 mb-4">
                    <div class="list-cnt">
                        <h1>Industrial & Commercial Heat Exchangers Australia</h1>
                        <p>Premium Products is a trusted manufacturer and supplier of high-quality <strong>heat
                                exchangers</strong> designed for efficient thermal transfer and superior performance.
                            Our heat exchangers are engineered for industrial, commercial, and HVAC applications where
                            energy efficiency and reliable temperature control are critical.</p>

                        <h2>Efficient Heat Transfer Technology</h2>
                        <h3>Maximum Performance and Energy Savings</h3>
                        <p>Our heat exchangers use advanced heat transfer technology that improves energy utilization
                            and minimizes operating costs. They efficiently transfer thermal energy between systems
                            while maintaining consistent performance.</p>

                        <h2>Applications Across Industries</h2>
                        <h3>Versatile and Reliable Solutions</h3>
                        <p>Heat exchangers are used in HVAC systems, industrial plants, commercial buildings, and
                            manufacturing processes. Their compact design and durability make them suitable for multiple
                            environments including chemical processing, power generation, food production, and
                            pharmaceuticals.</p>

                        <h2>Quality and Performance Assurance</h2>
                        <h3>Engineered for Long-Term Reliability</h3>
                        <p>Every unit undergoes strict quality testing before delivery to ensure optimal efficiency and
                            long operational life. Our products meet international quality standards including ASME,
                            TEMA, and ISO 9001.</p>

                        <h2>Frequently Asked Questions (FAQs)</h2>
                        <h3>What is a heat exchanger?</h3>
                        <p>A heat exchanger is a device that transfers heat between two or more fluids without direct
                            mixing – used in HVAC, refrigeration, power plants, and industrial processes.</p>

                        <h3>Where are heat exchangers used?</h3>
                        <p>They are used in HVAC systems, power plants, manufacturing units, chemical plants, food
                            processing, and marine applications.</p>

                        <h3>Are heat exchangers energy efficient?</h3>
                        <p>Yes. Modern heat exchangers significantly improve system efficiency, reduce operational
                            energy costs, and lower carbon footprint.</p>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div> <!-- /.w-100.mt-3 -->
        </div> <!-- /.cms_area -->
        <div class="clearfix"></div>
    </div> <!-- /.mid_area -->
</div> <!-- /.container -->

<!-- Schema.org markup for product list (SEO) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ItemList",
  "name": "Heat Exchangers Products",
  "description": "Premium Products Australia - Industrial and commercial heat exchangers including shell & tube condensers and stainless steel coils.",
  "numberOfItems": 2,
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "url": "https://www.premiumproducts.com.au/shell-tube-condenser",
      "name": "Shell & Tube Condenser"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "url": "https://www.premiumproducts.com.au/stainless-steel-coil",
      "name": "Stainless Steel Coil"
    }
  ]
}
</script>

<script type="text/javascript">
    var page = 1;
    var triggeredPaging = 0;

    $(window).scroll(function () {
        var scrollTop = $(window).scrollTop();
        var scrollBottom = (scrollTop + $(window).height());
        var containerTop = $('#prodListingContainer').offset().top;
        var containerHeight = $('#prodListingContainer').height();
        var containerBottom = Math.floor(containerTop + containerHeight);
        var scrollBuffer = 0;

        if ((containerBottom - scrollBuffer) <= scrollBottom) {
            page = $('.listpager').length;
            $(':hidden[name="offset"]').val(page);
            var actual_count = 2;  // Only 2 products, no infinite scroll
            if (!triggeredPaging && page < actual_count) {
                triggeredPaging = 1;
                data_frm = serialize_form();
                $.ajax({
                    type: "POST",
                    url: "category/products_listing/38/pg/",
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