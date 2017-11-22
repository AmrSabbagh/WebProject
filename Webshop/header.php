<!-- NAVBAR -->
<nav class="navbar navbar-default ">
    <!-- TOP BAR -->
    <div class="nav-topbar clearfix">
        <div class="container">
            <div class="left">
                <ul class="list-inline social-icons social-icons-small social-icons-fullrounded">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="right">
                <form class="navbar-form navbar-left search-form" method="post" role="search">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Contact Us</a></li>
                    <?php if (!isset($_SESSION["userLogin"])) { ?>
                        <li><a href="#">SIGN IN</a></li>
                        <li><a href="#" class="as-button"><span class="btn btn-primary">SIGN UP</span></a></li>
                    <?php } else { ?>
                        <li><a href="signout.php">SIGN OUT</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- END TOP BAR -->
    <div class="container-fluid">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <i class="fa fa-bars"></i>
        </button>
        <a href="index.html" class="navbar-brand">
            <img src="image/logo.png" alt="Logo">
        </a>
        <button name="theme" id="theme" onclick="DarkTheme()">Dark Theme</button>
        <ul class="nav navbar-nav secondary-navbar-nav">
            <li class="dropdown dropdown-cart">
                <a href="#" class="as-icon disabled dropdown-toggle" data-toggle="dropdown"><i class="icon icon_cart_alt"></i> <span class="cart-count">2</span></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li>
                        <div class="shopping-cart-widget">
                            <strong>You have <span class="text-primary">2 items</span> in your cart</strong>
                            <ul class="list-unstyled">
                                <?php while ($row = $result->fetch_assoc()) { ?>
                                    <li>
                                        <div class="cart-item clearfix">
                                            <a href="#"><img src=<?php $row["image_thumb"] ?> class="img-responsive" alt="Product Thumbnail"></a>
                                            <div class="info">
                                                <a href="#"><strong class="product-title"><?php $row["name"] ?></strong></a>
                                                <span class="product-qty-price text-muted-2x">1 (add quantity here) x <?php echo $rpw["price"] ?></span>
                                            </div>
                                            <button type="button" class="btn btn-link btn-close"><i class="fa fa-close"></i></button>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                            <div class="cart-footer">
                                <strong class="total">Total: $215</strong>
                                <a href="shop-cart-checkout.html" class="btn btn-primary btn-checkout ">CHECKOUT</a>
                                <div class="clearfix"></div>
                                <p class="continue-shopping"><a href="index-shop.html">Continue shopping</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
        <div id="main-nav-collapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav main-navbar-nav">
                <li class="dropdown ">
                    <a href="#">HOME</a>
                </li>
                <li class="dropdown ">
                    <a href="#">NEWS</a>
                </li>
                <li class="dropdown">
                    <a href="#">CONTACT US</a>

                </li>
            </ul>
        </div>
        <!-- END MAIN NAVIGATION -->
    </div>
</nav>
<!-- END NAVBAR -->
<!-- PAGE HEADER DEFAULT -->
<div class="page-header">
    <div class="container">
        <h1 class="page-title pull-left">PRODUCT GRID</h1>
        <ol class="breadcrumb link-accent">
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li class="active">Product Grid</li>
        </ol>
    </div>
</div>
<!-- END PAGE HEADER DEFAULT -->