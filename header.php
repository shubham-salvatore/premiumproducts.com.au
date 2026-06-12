<?php
$metaConfig = require(__DIR__ . '/config/meta.php');

// get current path slug
$requestUri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$page = $requestUri ?: 'index';

// fetch meta
$currentMeta = $metaConfig[$page] ?? $metaConfig['default'];
?>
<!DOCTYPE HTML>
<html>

<head>

  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-M8T8LNHQ');</script>
  <!-- End Google Tag Manager -->
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-FB3WYKV33J"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-FB3WYKV33J');
  </script>
  <meta charset="utf-8">

  <title>Premium Products | <?= htmlspecialchars($currentMeta['title']) ?></title>

  <link rel="shortcut icon" href="favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="<?= htmlspecialchars($currentMeta['description']) ?>" />
  <meta name="keywords" content="<?= htmlspecialchars($currentMeta['keywords']) ?>" />

  <meta property="og:locale" content="en">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= htmlspecialchars($currentMeta['title']) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($currentMeta['description']) ?>">
  <meta property="og:image" content="assets/designer/themes/default/images/logo.png">
  <meta property="og:url" content="<?= htmlspecialchars($requestUri ?: 'index') ?>">
  <meta property="og:site_name" content="Premium Products">

  <link rel="canonical" href="<?= htmlspecialchars($requestUri ?: 'index') ?>">

  <link href="assets/developers/css/proj.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <script type="text/javascript">var _siteRoot = 'index-2.html', _root = 'index-2.html';</script>
  <script type="text/javascript">var site_url = 'index.html';</script>
  <script type="text/javascript">var theme_url = 'assets/designer/themes/default/';</script>
  <script type="text/javascript">var resource_url = 'assets/designer/resources/'; var gObj = {};</script>

  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link rel="stylesheet" href="assets/designer/themes/default/css/bootstrap.css">
  <link rel="stylesheet" href="assets/designer/themes/default/css/conditional.css">
  <link rel="stylesheet" href="assets/designer/themes/default/css/fluid_dg.css">

  <script src="assets/designer/resources/Scripts/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="assets/developers/js/common.js"></script>

</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8T8LNHQ" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header>
    <div class="top2">
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-5 col-sm-7 col-md-8 col-lg-2">
              <p class="logo_area"><a href="/index" title="Premium Products"><img
                    src="assets/designer/themes/default/images/logo.png" alt="" class="img-fluid"></a></p>
            </div>

            <div class="col-7 col-sm-5 col-md-4 col-lg-10">
              <div class="top-header">
                <div class="container">
                  <div class="shownext call_dis1">
                    <p class="float-right" data-closed=".nav-collapse"><a href="javascript:void(0)">Contact <i
                          class="fas fa-angle-down ml-2"></i></a></p>
                  </div>

                  <div class="call_dis2">
                    <p class="call_sec">
                      <span><i class="fa-brands fa-whatsapp"></i></span>
                      <span><b>Call Anytime</b> <a href="tel:+61 468 493 451">+61 468 493 451</a></span>
                    </p>

                    <p class="call_sec">
                      <span><i class="fas fa-envelope"></i></span>
                      <span><b>Email ID</b><a
                          href="mailto:info@premiumproducts.com.au">info@premiumproducts.com.au</a></span>
                    </p>

                    <p class="cal_req"><a href="/contact-us" title="Call Back Request">Call Back Request</a></p>

                    <p class="social-top">
                      <a href="https://www.facebook.com/" target="_blank" title="Facebook"><i
                          class="fab fa-facebook-f"></i></a>
                      <a href="https://www.instagram.com/" target="_blank" title="Instagram"><i
                          class="fab fa-instagram"></i></a>
                      <a href="https://www.linkedin.com/company/premium-hvac-products-pty-ltd" target="_blank"
                        title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </p>
                  </div>

                  <p class="clearfix"></p>
                </div>
                <p class="clearfix"></p>
              </div>

              <div class="clearfix d-none d-lg-block"></div>

              <div class="menu">
                <div class="navbar_align">
                  <div class="navbar">
                    <div class="navbar-inner">
                      <div class="">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"
                          data-closed=".call_dis2">
                          <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>

                        <div class="nav-collapse collapse">
                          <ul class="nav">
                            <li><a href="/index" class="act1" title="Home">Home</a></li>

                            <li><a href="/about-us">About Us</a></li>

                            <li class="nav-item">
                              <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                Products <span class="fa fa-angle-down"></span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="/air-handling-units">Air Handling Units</a></li>
                                <li><a href="/coils">Coils</a></li>
                                <li><a href="/dx-coil">DX Coil</a></li>
                                <li><a href="/heat-recovery-units-with-vrf-condenser">Heat Recovery</a></li>
                                <li><a href="/ec-fans">EC Fans</a></li>
                                <li><a href="/heat-exchangers">Heat Exchangers</a></li>
                                <li><a href="/dehumidifiers">Dehumidifiers</a></li>
                              </ul>
                            </li>

                            <li class="nav-item">
                              <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                Gallery <span class="fa fa-angle-down"></span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="/gallery">Image Gallery</a></li>
                                <li><a href="/videos">Video Gallery</a></li>
                              </ul>
                            </li>

                            <li><a href="/contact-us">Contact Us</a></li>

                          </ul>
                        </div>

                      </div>
                    </div>
                    <p class="clearfix"></p>
                  </div>
                  <p class="clearfix"></p>
                </div>
                <p class="clearfix"></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </header>