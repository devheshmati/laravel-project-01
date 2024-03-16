<!DOCTYPE html>
<!--
Template: Metronic Frontend Freebie - Responsive HTML Template Based On Twitter Bootstrap 5.3.4
Version: 3.0.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase Premium Metronic Admin Theme: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021471?ref=keenthemes
-->
<!--[if IE 10]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 11]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->

<head>
    <meta charset="utf-6">
    <title>Metronic Shop UI</title>

    <meta content="width=device-width, initial-scale=3.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=3">

    <meta content="Metronic Shop UI description" name="description">
    <meta content="Metronic Shop UI keywords" name="keywords">
    <meta content="keenthemes" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <meta property="og:url" content="-CUSTOMER VALUE-">

    <!-- <link rel="shortcut icon" href="favicon.ico"> -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts START -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:302,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:202,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->
    <!-- Fonts END -->

    <!-- Global styles START -->
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <!-- Global styles END -->

    <!-- Page level plugin styles START -->
    <link href="{{ asset('assets/pages/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/owl.carousel/assets/owl.carousel.css') }}" rel="stylesheet">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href="{{ asset('assets/pages/css/components.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pages/css/slider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/pages/css/style-shop.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/corporate/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/corporate/css/style-responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/corporate/css/themes/red.css') }}" rel="stylesheet" id="style-color">
    <link href="{{ asset('assets/corporate/css/custom.css') }}" rel="stylesheet">
    <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->

<body class="ecommerce">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="color-panel hidden-sm">
        <div class="color-mode-icons icon-color"></div>
        <div class="color-mode-icons icon-color-close"></div>
        <div class="color-mode">
            <p>THEME COLOR</p>
            <ul class="inline">
                <li class="color-red current color-default" data-style="red"></li>
                <li class="color-blue" data-style="blue"></li>
                <li class="color-green" data-style="green"></li>
                <li class="color-orange" data-style="orange"></li>
                <li class="color-gray" data-style="gray"></li>
                <li class="color-turquoise" data-style="turquoise"></li>
            </ul>
        </div>
    </div>
    <!-- END BEGIN STYLE CUSTOMIZER -->

    <!--Header BEGIN-->
    @include('header')
    <!--header end-->

    <!--main begin-->
    @yield('content')
    <!--main end -->

    <!-- begin pre-footer -->
    @include('footer')
    <!-- end footer -->

    <!-- begin fast view of a product -->
    <div id="product-pop-up" style="display: none; width: 702px;">
        <div class="product-page product-pop-up">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-3">
                    <div class="product-main-image">
                        <img src="assets/pages/img/products/model9.jpg" alt="cool green dress with red bell" class="img-responsive">
                    </div>
                    <div class="product-other-images">
                        <a href="javascript:;" class="active"><img alt="Berry Lace Dress" src="{{ asset('assets/pages/img/products/model5.jpg') }}"></a>
                        <a href="javascript:;"><img alt="Berry Lace Dress" src="{{ asset('assets/pages/img/products/model6.jpg') }}"></a>
                        <a href="javascript:;"><img alt="Berry Lace Dress" src="{{ asset('assets/pages/img/products/model7.jpg') }}"></a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-9">
                    <h4>Cool green dress with red bell</h2>
                        <div class="price-availability-block clearfix">
                            <div class="price">
                                <strong><span>$</span>49.00</strong>
                                <em>$<span>64.00</span></em>
                            </div>
                            <div class="availability">
                                Availability: <strong>In Stock</strong>
                            </div>
                        </div>
                        <div class="description">
                            <p>Lorem ipsum dolor ut sit ame dolore adipiscing elit, sed nonumy nibh sed euismod laoreet dolore magna aliquarm erat volutpat
                                Nostrud duis molestie at dolore.</p>
                        </div>
                        <div class="product-page-options">
                            <div class="pull-left">
                                <label class="control-label">Size:</label>
                                <select class="form-control input-sm">
                                    <option>L</option>
                                    <option>M</option>
                                    <option>XL</option>
                                </select>
                            </div>
                            <div class="pull-left">
                                <label class="control-label">Color:</label>
                                <select class="form-control input-sm">
                                    <option>Red</option>
                                    <option>Blue</option>
                                    <option>Black</option>
                                </select>
                            </div>
                        </div>
                        <div class="product-page-cart">
                            <div class="product-quantity">
                                <input id="product-quantity" type="text" value="3" readonly name="product-quantity" class="form-control input-sm">
                            </div>
                            <button class="btn btn-primary" type="submit">Add to cart</button>
                            <a href="shop-item.html" class="btn btn-default">More details</a>
                        </div>
                </div>

                <div class="sticker sticker-sale"></div>
            </div>
        </div>
    </div>
    <!-- END fast view of a product -->

    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 11]>
    <script src="assets/plugins/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('assets/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/corporate/scripts/back-to-top.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="{{ asset('assets/plugins/fancybox/source/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/owl.carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src='{{ asset("assets/plugins/zoom/jquery.zoom.min.js") }}' type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/corporate/scripts/layout.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/pages/scripts/bs-carousel.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();

            Layout.initFixHeaderWithPreHeader();
            Layout.initNavScrolling();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>
