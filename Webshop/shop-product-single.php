<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Elegant Black Wool Coat | Bravana - Responsive Website Template</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Responsive Website Template">
        <meta name="author" content="The Develovers">
        <!-- CORE CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/elegant-icons.css" rel="stylesheet" type="text/css">
        <!-- THEME CSS -->
        <link href="assets/css/main.css" rel="stylesheet" type="text/css">
        <!-- SHOP CSS -->
        <link href="assets/css/main-shop.css" rel="stylesheet" type="text/css">
        <!-- YOUR CUSTOM CSS -->
        <link href="assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">

        <!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:700,400,400italic,500' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,300,300italic' rel='stylesheet' type='text/css'>
        <!-- FAVICONS -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/bravana144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/bravana114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/bravana72.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/bravana57.png">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
    </head>

    <body>
        <!-- WRAPPER -->
        <div id="wrapper">
            <?php include "header.php"; ?>
            <!-- BREADCRUMBS -->
            <div class="page-header breadcrumbs-only">
                <div class="container">
                    <ol class="breadcrumb link-accent">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Women</a></li>
                        <li class="active">Elegant Black Wool Coat</li>
                    </ol>
                </div>
            </div>
            <!-- END BREADCRUMBS -->
            <!-- PAGE CONTENT -->
            <?php include "include/dbconfig.php"; ?>
            <div class="page-content product-single">
                <div class="container">
                    <!-- SINGLE PRODUCT -->
                    <section>
                        <!-- TOP MAIN -->
                        <div class="row top">
                            <div class="col-sm-4">
                                <div class="product-single-image">
                                    <img src="assets/img/shop/products/single/single-product-img1.jpg" class="img-responsive" alt="Product Image">
                                    <span class="icon-zoom"><i class="fa fa-search-plus"></i> Zoom</span>
                                </div>
                                <div id="product-thumnails" class="owl-carousel carousel-product-thumbnails">
                                    <div>
                                        <a href="assets/img/shop/products/single/single-product-img1.jpg"><img src="assets/img/shop/products/single/thumbnails/single-product-img1-thumb.jpg" class="img-responsive" alt="Image"></a>
                                    </div>
                                    <div>
                                        <a href="assets/img/shop/products/single/single-product-img2.jpg"><img src="assets/img/shop/products/single/thumbnails/single-product-img2-thumb.jpg" class="img-responsive" alt="Image"></a>
                                    </div>
                                    <div>
                                        <a href="assets/img/shop/products/single/single-product-img3.jpg"><img src="assets/img/shop/products/single/thumbnails/single-product-img3-thumb.jpg" class="img-responsive" alt="Image"></a>
                                    </div>
                                    <div>
                                        <a href="assets/img/shop/products/single/single-product-img4.jpg"><img src="assets/img/shop/products/single/thumbnails/single-product-img4-thumb.jpg" class="img-responsive" alt="Image"></a>
                                    </div>
                                    <div>
                                        <a href="assets/img/shop/products/single/single-product-img5.jpg"><img src="assets/img/shop/products/single/thumbnails/single-product-img5-thumb.jpg" class="img-responsive" alt="Image"></a>
                                    </div>
                                </div>
                            </div>

                            <?php
                            $product_id = $_GET['product_id'];
                            if (!isset($_GET['product_id'])) {
                                echo "product not found";
                                exit();
                            }
                            $sql = "SELECT * FROM products WHERE id=" . $product_id . "";
                            $result = $conn->query($sql);
                            if ($result->num_rows == 0) {
                                echo "product not found";
                                exit();
                            }
                            ?>

                            <div class="col-sm-8">
                                <h1 class="product-title">Elegant Black Wool Coat</h1>
                                <p class="product-rating">
                                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i>
                                    <span class="sr-only">4.5 stars</span>
                                    <span class="rating-detail">( 4.5 stars based on 152 <a href="#">reviews</a> )</span>
                                </p>
                                <p class="short-description">Objectively monetize web-enabled expertise whereas enabled growth successful strategies. Objectively monetize viral channels for leading-edge infrastructures. Energistically maximize high standards in communities without e-business growth strategies. Quickly aggregate.</p>
                                <p class="pricing"><span class="price-old"><s>$100</s></span> <span class="price">$50</span></p>
                                <form method="post" class="product-single-form">
                                    <div class="product-attributes">
                                        <div class="form-group">
                                            <label>Choose size:</label>
                                            <select class="form-control">
                                                <!-- <option value="">Choose size</option> -->
                                                <option value="xs">XS</option>
                                                <option value="s">S</option>
                                                <option value="m">M</option>
                                                <option value="l">L</option>
                                                <option value="xl">XL</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Choose color:</label>
                                            <select class="form-control">
                                                <!-- <option value="">Choose color</option> -->
                                                <option value="black">Black</option>
                                                <option value="blue">Blue</option>
                                                <option value="red">Red</option>
                                                <option value="yellow">Yellow</option>
                                                <option value="green">Green</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="shop-cart-checkout.html" class="btn btn-primary btn-addtocart-big"><i class="fa fa-cart-plus"></i> Add to cart</a>
                                        <p><i class="fa fa-heart"></i> <a href="#" class="link-addtowishlist"><span>Add to wishlist</span></a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END TOP MAIN -->
                        <!-- BOTTOM INFO -->
                        <div class="bottom">
                            <div class="custom-tabs-line tabs-line-bottom left-aligned product-carousel-tab">
                                <ul class="nav nav-pills" role="tablist">
                                    <li class="active"><a href="#tab-description" role="tab" data-toggle="tab">Description</a></li>
                                </ul>
                            </div>
                            <section class="tab-content">
                                <!-- product complete description -->
                                <div class="tab-pane fade in active" id="tab-description">
                                    <h2 class="sr-only">Product Description</h2>
                                    <p>Continually extend <a href="#">B2C processes</a> with emerging ROI. Efficiently deliver one-to-one channels with backend partnerships. Appropriately disintermediate just in time deliverables before premium niches.</p>
                                    <p>Distinctively transition innovative resources after compelling human capital. Synergistically provide access to turnkey e-services whereas scalable leadership. Assertively engage next-generation metrics via high-payoff total linkage. Conveniently reintermediate extensible ideas vis-a-vis efficient action items.</p>
                                    <p>Completely seize client-based technologies and viral niches. Distinctively fashion resource-leveling content for functional partnerships. Dramatically generate cross-platform meta-services through adaptive manufactured products. Dramatically synthesize installed base meta-services and adaptive quality vectors. Dramatically harness distinctive portals through plug-and-play schemas.Uniquely negotiate equity invested infomediaries and distributed data. Efficiently aggregate resource-leveling scenarios before superior growth strategies. Appropriately customize revolutionary convergence.</p>
                                </div>
                                <!-- end product complete description -->
                            </section>
                        </div>
                        <!-- BOTTOM INFO -->
                    </section>
                    <!-- END SINGLE PRODUCT -->
                    <!-- LAST VIEWED PRODUCTS -->
                    <section>
                        <h3 class="section-heading">Last Viewed Products</h3>
                        <ul id="product-carousel" class="list-inline product-grid product-grid-simple owl-carousel carousel-nav-hidefirst product-carousel">
                            <li>
                                <div class="product-item">
                                    <a href="#">
                                        <img src="assets/img/shop/products/product2.jpg" class="img-responsive" alt="Product Image">
                                        <span class="label label-info">BEST SELLER</span>
                                    </a>
                                    <div class="product-info">
                                        <h3 class="title"><a href="">Trendy Outfit</a></h3>
                                        <div class="bottom">
                                            <span class="price">$34</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <a href="#">
                                        <img src="assets/img/shop/products/product3.jpg" class="img-responsive" alt="Product Image">
                                        <span class="label label-discount">50% OFF</span>
                                    </a>
                                    <div class="product-info">
                                        <h3 class="title"><a href="#">Casual Blazer</a></h3>
                                        <div class="bottom">
                                            <span class="price"><span class="price-old"><s>$100</s></span> $50</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <a href="#">
                                        <img src="assets/img/shop/products/product4.jpg" class="img-responsive" alt="Product Image">
                                    </a>
                                    <div class="product-info">
                                        <h3 class="title"><a href="#">Wool Jacket</a></h3>
                                        <div class="bottom">
                                            <span class="price">$34</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <a href="#">
                                        <img src="assets/img/shop/products/product6.jpg" class="img-responsive" alt="Product Image">
                                        <span class="label label-discount">25% OFF</span>
                                    </a>
                                    <div class="product-info">
                                        <h3 class="title"><a href="#">Men Formal Outfit</a></h3>
                                        <div class="bottom">
                                            <span class="price"><span class="price-old"><s>$200</s></span> $150</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <a href="#">
                                        <img src="assets/img/shop/products/product7.jpg" class="img-responsive" alt="Product Image">
                                    </a>
                                    <div class="product-info">
                                        <h3 class="title"><a href="#">Men Adventure Outfit</a></h3>
                                        <div class="bottom">
                                            <span class="price">$34</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="product-item">
                                    <a href="#">
                                        <img src="assets/img/shop/products/product1.jpg" class="img-responsive" alt="Product Image">
                                    </a>
                                    <div class="product-info">
                                        <h3 class="title"><a href="#">Sweater</a></h3>
                                        <div class="bottom">
                                            <span class="price">$34</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </section>
                    <!-- END LAST VIEWED PRODUCTS -->
                </div>
            </div>
            <!-- END PAGE CONTENT -->
            <!-- FOOTER -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="footer-heading footer-heading-simple">GENERAL</h4>
                                    <ul class="list-unstyled link-list">
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Who we are</a></li>
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Terms</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="footer-heading footer-heading-simple">BUYING GUIDES</h4>
                                    <ul class="list-unstyled link-list">
                                        <li><a href="#">How to buy</a></li>
                                        <li><a href="#">Product Guide</a></li>
                                        <li><a href="#">License</a></li>
                                        <li><a href="#">Payment</a></li>
                                        <li><a href="#">Support</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="footer-heading footer-heading-simple">CONTACT US</h4>
                                    <address>
                                        <i class="icon icon_phone ico-styled text-primary"></i>
                                        <abbr title="Phone">P:</abbr> (1800) 765 - 4321, (1800) 765 - 4322
                                        <br>
                                        <br>
                                        <i class="icon icon_mail_alt ico-styled text-primary"></i> <a href="mailto:email@yourdomain.com">email@yourdomain.com</a>
                                    </address>
                                    <ul class="list-inline social-icons social-icons-small social-icons-bordered">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="footer-heading footer-heading-simple">NEWSLETTER</h4>
                                    <p>Get the latest update from us by subscribing to our newsletter.</p>
                                    <form class="newsletter-form" method="post">
                                        <div class="input-group input-group-lg">
                                            <input type="email" class="form-control" name="email" placeholder="youremail@domain.com">
                                            <span class="input-group-btn"><button class="btn btn-primary" type="button"><i class="fa fa-spinner fa-spin"></i><span>SUBSCRIBE</span></button>
                                            </span>
                                        </div>
                                        <div class="alert"></div>
                                    </form>
                                    <h4 class="footer-heading footer-heading-simple">WE ACCEPT</h4>
                                    <ul class="list-inline list-image-icons">
                                        <li><img src="assets/img/shop/payments/visa-dark.png" alt="Visa"></li>
                                        <li><img src="assets/img/shop/payments/maestro-dark.png" alt="Maestro"></li>
                                        <li><img src="assets/img/shop/payments/mastercard-dark.png" alt="MasterCard"></li>
                                        <li><img src="assets/img/shop/payments/discover-dark.png" alt="Discover"></li>
                                        <li><img src="assets/img/shop/payments/paypal-dark.png" alt="PayPal"></li>
                                        <li><img src="assets/img/shop/payments/stripe-dark.png" alt="Stripe"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="copyright-text text-center margin-top-30 no-margin-bottom">&copy;2016 The Develovers. All Rights Reserved.</p>
            </footer>
            <!-- END FOOTER -->
            <div class="back-to-top">
                <a href="#top"><i class="fa fa-chevron-up"></i></a>
            </div>
        </div>
        <!-- END WRAPPER -->
        <!-- JAVASCRIPT -->
        <script src="assets/js/jquery-2.1.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins/easing/jquery.easing.min.js"></script>
        <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/js/plugins/zoom/jquery.zoom.js"></script>
        <script src="assets/js/bravana.js"></script>
        <script src="assets/js/bravana-shop.js"></script>

    </body>
</html>