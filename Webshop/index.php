<?php
session_start();

//if new user signed in:
if(isset($_SESSION["username"]) && !isset($_COOKIE["username"])){
    echo $_SESSION["username"].", a new user has signed in.<br>";
    setcookie("username", $_SESSION["username"], time()+86400 *2);
    $_SESSION["number_of_items"]=0;
    $number_of_items=0;
} 
//if returning user signed in:
elseif (isset($_SESSION["username"]) && isset($_COOKIE["username"])){
    //if same user and same session
    if($_COOKIE["username"] == $_SESSION["username"]){
        echo $_SESSION["username"].", a returning user has signed in.<br>";
        //increase time of cookie
        setcookie("username", $_SESSION["username"], time()+86400 *2);
    } 
    //if different user on the same session --> reset
    else {
        echo $_SESSION["username"].", a different returning user has signed in.<br>";
        setcookie("username", $_SESSION["username"], time()+86400 *2);
        $_SESSION["number_of_items"]=0;
        $number_of_items=0;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Product Grid | Bravana - Responsive Website Template</title>
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
        <script>
            function DarkTheme(){
                var button = document.getElementById("theme");
                var divs = document.querySelectorAll("div, footer");
                var text = document.querySelectorAll("p, h1, h2, h3, h4, h5, h6, li, label, a");
                if(button.innerHTML === "Dark Theme") {
                    button.innerHTML = "White Theme";
                    for(var i = 0; i < divs.length; i++){
                        divs[i].style.backgroundColor = "black";
                    }
                    for(var i = 0; i < text.length; i++){
                        text[i].style.color= "white";
                    }
                    
                } else {
                    button.innerHTML = "Dark Theme";
                    for(var i = 0; i < divs.length; i++){
                        divs[i].style.backgroundColor = "";
                    }
                    for(var i = 0; i < text.length; i++){
                        text[i].style.color= "";
                    }
                }
                
                /*
                 * Another approach to do Dark theme
                 * 
                 * night_mode = false;
                 * 
                 * function nigthMode(){
                 * var list = document.getElemenetByTagName('div');
                 * 
                 * for(var i = 0; i < list.length; i++){
                 * list[i].classList.add('night_mode');
                 * }
                 * }
                 * 
                 * function dayMode(){
                 * var list = document.getElemenetByTagName('div');
                 * 
                 * for(var i = 0; i < list.length; i++){
                 * list[i].classList.remove('night_mode');
                 * }
                 * }
                 * 
                 * function changeMode(){
                 * if(!night_mode)
                 *  nightMode();
                 *else
                 *  dayMode();
                 * }
                 * 
                 * css for the file:
                 * 
                 * .nightMode {
                 * background: black;
                 * color: white;
                 * }
                 * 
                 * //or you can use "body.setAttribute('class','night_mode');
                 * 
                 */
                function getMaxPrice(){
                    var listOfProducts = document.getElementById('product_list');
                    var listPrice = listOfProducts.getElementsByClassName('price');
                    var listName = listOfProducts.getElementsByClassName('product_name');
                    
                    var max = 0;
                    var name = "";
                    
                    console.log("list length = " + listPrice.length);
                    for (var i=0; i<listPrice.length;i++){
                        var current_price = parseDouble(listPrice[i].innerHTML); //it will remove dollar sign
                        if(current_price > max){
                            max=current_price;
                            name = listName[i].childNodes[0].nodeValue;
                            console.log("Max is: " + max + ", name is: " + name);
                        }
                    }
                }
                
                alert("max is: " + max + ", name is: " + name);
                console.log("max is: " + max);
            }
            
        </script>
</head>

<body>
	<!-- WRAPPER -->
        <div id="wrapper">
            <?php include "header.php"; ?>
		<!-- PAGE CONTENT -->
		<div class="page-content">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<!-- FILTER CATEGORY -->
						<div class="widget widget-filter">
							<h4 class="widget-title">FILTER BY CATEGORY</h4>
							<ul class="list-unstyled product-attribute-link-list">
								<li><a href="#">Computer</a> <span>(3)</span></li>
								<li><a href="#">Game</a> <span>(3)</span></li>
								<li><a href="#">Mobile Phone</a> <span>(3)</span></li>
							</ul>
						</div>
						<!-- END FILTER CATEGORY -->
						<!-- FILTER BRAND -->
						<div class="widget widget-filter">
							<h4 class="widget-title">FILTER BY BRAND</h4>
							<ul class="list-unstyled product-attribute-link-list">
								<li class="active"><a href="#">JFashion</a> <span>(23)</span></li>
								<li><a href="#">ABC</a> <span>(45)</span></li>
								<li><a href="#">KidsOnly</a> <span>(18)</span></li>
								<li><a href="#">AllBeauty</a> <span>(75)</span></li>
							</ul>
						</div>
						<!-- END FILTER BRAND -->
						<!-- FILTER PRICE -->
						<div class="widget widget-filter filter-price">
							<h4 class="widget-title">FILTER BY PRICE</h4>
							<input type="text" class="input-range" name="price-range" value="">
							<input type="number" class="form-control input-price" id="price-from" placeholder="From"> -
							<input type="number" class="form-control input-price" id="price-to" placeholder="To">
						</div>
						<!-- END FILTER PRICE -->
						<!-- FILTER SIZE -->
						<div class="widget widget-filter">
							<h4 class="widget-title">FILTER BY SIZE</h4>
							<ul class="list-inline product-size-list">
								<li><a href="#">XS</a></li>
								<li class="active"><a href="#">S</a></li>
								<li><a href="#">M</a></li>
								<li><a href="#">L</a></li>
								<li><a href="#">XL</a></li>
							</ul>
						</div>
						<!-- END FILTER SIZE -->
						<!-- FILTER COLOR -->
						<div class="widget widget-filter">
							<h4 class="widget-title">FILTER BY COLOR</h4>
							<ul class="list-inline product-color-list">
								<li>
									<a href="#" style="background-color: #F5A623;"></a>
								</li>
								<li class="active">
									<a href="#" style="background-color: #D0021B;"></a>
								</li>
								<li>
									<a href="#" style="background-color: #D0021B;"></a>
								</li>
								<li>
									<a href="#" style="background-color: #BD10E0;"></a>
								</li>
								<li>
									<a href="#" style="background-color: #417505;"></a>
								</li>
								<li>
									<a href="#" style="background-color: #50E3C2;"></a>
								</li>
								<li>
									<a href="#" style="background-color: #8B572A;"></a>
								</li>
								<li class="active">
									<a href="#" style="background-color: #71787B;"></a>
								</li>
								<li>
									<a href="#" style="background-color: #4F95AF;"></a>
								</li>
								<li>
									<a href="#" style="background-color: #94B79C;"></a>
								</li>
								<li>
									<a href="#" style="background-color: #1A1A1A;"></a>
								</li>
								<li class="active">
									<a href="#" style="background-color: #CBCBCB;"></a>
								</li>
								<li>
									<a href="#" style="background-color: #C73B3B;"></a>
								</li>
								<li>
									<a href="#" style="background-color: #B5C73B;"></a>
								</li>
								<li>
									<a href="#" style="background-color: #FFF200;"></a>
								</li>
								<li>
									<a href="#" style="background-color: #1BD023;"></a>
								</li>
								<li>
									<a href="#" style="background-color: #323A93;"></a>
								</li>
								<li>
									<a href="#" style="background-color: #933232;"></a>
								</li>
								<li>
									<a href="#" style="background-color: #329364;"></a>
								</li>
							</ul>
						</div>
						<!-- END FILTER COLOR -->
					</div>
					<div class="col-md-9">
						<!-- BANNER CAROUSEL -->
						<div id="carousel-banner" class="owl-carousel carousel-pagination-inside">
							<div>
								<a href="#"><img src="assets/img/shop/banner1.jpg" class="img-responsive" alt="Banner 1"></a>
							</div>
							<div>
								<a href="#"><img src="assets/img/shop/banner2.jpg" class="img-responsive" alt="Banner 2"></a>
							</div>
						</div>
						<!-- END BANNER CAROUSEL -->
						<!-- PRODUCT DISPLAY -->
						<div class="product-display">
							<!-- DISPLAY CONTROLS -->
							<div class="display-controls clearfix">
								<div class="controls-left">
									<form class="form-inline">
										<div class="form-group">
											<label>Sort by:</label>
											<select class="form-control">
												<option value="relevancy">Relevancy</option>
												<option value="popularity">Popularity</option>
												<option value="rating">Rating</option>
												<option value="price-lowest">Price Lowest</option>
												<option value="price-highest">Price Highest</option>
											</select>
										</div>
										<div class="form-group">
											<label>Show:</label>
											<select class="form-control">
												<option value="10">10</option>
												<option value="20">20</option>
												<option value="30">30</option>
												<option value="40">40</option>
											</select>
										</div>
										<div class="form-group">
											<label>View:</label>
											<label class="radio-icon" title="Grid View">
												<input type="radio" name="view-mode" checked="checked" title="Grid View"><span><i class="fa fa-th"></i></span>
											</label>
											<label class="radio-icon" title="List View">
												<input type="radio" name="view-mode" title="List View"><span><i class="fa fa-list"></i></span>
											</label>
										</div>
									</form>
								</div>
								<div class="controls-right">
									<ul class="pagination borderless">
										<li class="disabled"><a href="#"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i><span class="sr-only">Next</span></a></li>
									</ul>
								</div>
							</div>
							<!-- END DISPLAY CONTROLS -->
                                                        
							<!-- PRODUCT GRID -->
							<ul class="list-inline row product-grid">
                                                            <?php
                                                                include "dbconfig.php";
                                                                $sql = "SELECT * FROM products";
                                                                $result = $conn->query($sql);
                                                                
                                                                while ($row = $result->fetch_assoc()){
                                                            ?>
								<li class="col-md-4 col-sm-6">
									<div class="product-item">
										<a href="shop-product-single.html">
											<img src="assets/img/shop/products/product2.jpg" class="img-responsive" alt="Product Image">
											<span class="label label-info">BEST SELLER</span>
										</a>
										<div class="product-info">
                                                                                    <h3 class="title"><a href="shop-product-single.html" class="product_name"><?php echo $row["name"]?></a></h3>
											<p class="short-description"><?php echo $row["description"]?></p>
											<div class="bottom">
												<span class="price">$<?php echo $row["price"]?></span>
                                                                                                oeugrhiubhlfa // two different buttons in signed in/out
												<a href="#" class="btn btn-primary btn-addtocart"><i class="fa fa-cart-plus"></i> Add to cart</a>
											</div>
										</div>
									</div>
								</li>
                                                                
                                                                <?php } ?>
							</ul>
							<!-- END PRODUCT GRID -->
						</div>
						<!-- PRODUCT DISPLAY -->
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE CONTENT -->
		<?php include "footer.php"; ?>
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
	<script src="assets/js/plugins/range-slider/ion.rangeSlider.min.js"></script>
	<script src="assets/js/bravana.js"></script>
	<script src="assets/js/bravana-shop.js"></script>

</body>

</html>
