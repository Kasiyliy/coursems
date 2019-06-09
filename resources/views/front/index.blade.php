<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>WooW | HTML Commerce Template</title>
		<link rel="shortcut icon" href="{{asset('front/images/favicon.ico')}}">

		<link rel='stylesheet' href='{{asset('front/css/settings.css')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('front/css/bootstrap.min.css')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('front/css/swatches-and-photos.css')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('front/css/prettyPhoto.css')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('front/css/jquery.selectBox.css')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('front/css/font-awesome.min.css')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic%7CCrimson+Text:400,400italic,600,600italic,700,700italic' type='text/css' media='all'/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
		<link rel='stylesheet' href='{{asset('front/css/elegant-icon.css')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('front/css/style.css')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('front/css/commerce.css')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('front/css/custom.css')}}' type='text/css' media='all'/>
		<link rel='stylesheet' href='{{asset('front/css/magnific-popup.css')}}' type='text/css' media='all'/>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<body>
		<div class="offcanvas open">
			<div class="offcanvas-wrap">
				<div class="offcanvas-user clearfix">
					<a class="offcanvas-user-wishlist-link" href="wishlist.html">
						<i class="fa fa-heart-o"></i> My Wishlist
					</a>
					<a class="offcanvas-user-account-link" href="my-account.html">
						<i class="fa fa-user"></i> Login
					</a>
				</div>
				<nav class="offcanvas-navbar">
					<ul class="offcanvas-nav">
						<li class="menu-item-has-children dropdown current-menu-ancestor">
							<a href=".." class="dropdown-hover">Home <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="home-v2.html">Home v2</a></li>
								<li><a href="home-v3.html">Home v3</a></li>
								<li><a href="home-v4.html">Home v4</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="shop.html" class="dropdown-hover">Shop <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="menu-item-has-children dropdown-submenu">
									<a href="#">Women <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="shop-by-category.html">Maecenas</a></li>
										<li><a href="shop-by-category.html">Nulla</a></li>
										<li><a href="shop-by-category.html">Donec</a></li>
										<li><a href="shop-by-category.html">Aliquam</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children dropdown-submenu">
									<a href="#">Brands <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="shop-by-category.html">Evans</a></li>
										<li><a href="shop-by-category.html">Adesso</a></li>
										<li><a href="shop-by-category.html">Crocs</a></li>
										<li><a href="shop-by-category.html">Carvela</a></li>
									</ul>
								</li>
								<li class="menu-item-has-children dropdown-submenu">
									<a href="#">Features <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="shop-fullwidth.html">Products Style 2</a></li>
										<li><a href="shop-detail-2.html">Single Product Style 2</a></li>
										<li><a href="shop-masonry.html">Shop Masonry</a></li>
										<li><a href="my-account.html">My Account</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="cart-empty.html">Empty Cart</a></li>
										<li><a href="wishlist.html">Wishlist</a></li>
									</ul>
								</li>
								<li>
									<a title="Mega Menu" href="#">Mega Menu</a>
								</li>
							</ul>
						</li>
						<li><a href="collection.html">Collections</a></li>
						<li class="menu-item-has-children dropdown">
							<a href="#" class="dropdown-hover">Blog <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="blog-default.html">Blog Default</a></li>
								<li><a href="blog-center.html">Blog Center</a></li>
								<li><a href="blog-masonry.html">Blog Masonry</a></li>
							</ul>
						</li>
						<li class="menu-item-has-children dropdown">
							<a href="#" class="dropdown-hover">Pages <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="about-us.html">About us</a></li>
								<li><a href="contact-us.html">Contact Us</a></li>
								<li><a href="faq.html">FAQ</a></li>
								<li><a href="404.html">404</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<div id="wrapper" class="wide-wrap">
			<div class="offcanvas-overlay"></div>
			<header class="header-container header-type-classic header-navbar-classic header-scroll-resize">
				<div class="topbar">
					<div class="container topbar-wap">
						<div class="row">
							<div class="col-sm-6 col-left-topbar">
								<div class="left-topbar">
									Shop unique and handmade items directly
									<a href="#">About<i class="fa fa-long-arrow-right"></i></a>
								</div>
							</div>
							<div class="col-sm-6 col-right-topbar">
								<div class="right-topbar">
									<div class="user-login">
										<ul class="nav top-nav">
											<li><a data-rel="loginModal" href="#"> Login </a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="navbar-container">
					<div class="navbar navbar-default navbar-scroll-fixed">
						<div class="navbar-default-wrap">
							<div class="container">
								<div class="row">
									<div class="navbar-default-col">
										<div class="navbar-wrap">
											<div class="navbar-header">
												<button type="button" class="navbar-toggle">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar bar-top"></span>
													<span class="icon-bar bar-middle"></span>
													<span class="icon-bar bar-bottom"></span>
												</button>
												<a class="navbar-search-button search-icon-mobile" href="#">
													<i class="fa fa-search"></i>
												</a>
												<a class="cart-icon-mobile" href="#">
													<i class="elegant_icon_bag"></i><span>0</span>
												</a>
												<a class="navbar-brand" href="..">
													<img class="logo" alt="WOOW" src="front/images/logo.png">
													<img class="logo-fixed" alt="WOOW" src="front/images/logo-fixed.png">
													<img class="logo-mobile" alt="WOOW" src="front/images/logo-mobile.png">
												</a>
											</div>
											<nav class="collapse navbar-collapse primary-navbar-collapse">
												<ul class="nav navbar-nav primary-nav">
													<li class="current-menu-item menu-item-has-children dropdown">
														<a href=".." class="dropdown-hover">
															<span class="underline">Home</span> <span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
															<li><a href="home-v2.html">Home v2</a></li>
															<li><a href="home-v3.html">Home v3</a></li>
															<li><a href="home-v4.html">Home v4</a></li>
														</ul>
													</li>
													<li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
														<a href="shop.html" class="dropdown-hover">
															<span class="underline">Shop</span> <span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
															<li class="mega-col-3">
																<h3 class="megamenu-title">Women <span class="caret"></span></h3>
																<ul class="dropdown-menu">
																	<li><a href="shop-by-category.html">Maecenas</a></li>
																	<li><a href="shop-by-category.html">Nulla</a></li>
																	<li><a href="shop-by-category.html">Donec</a></li>
																	<li><a href="shop-by-category.html">Aliquam</a></li>
																</ul>
															</li>
															<li class="mega-col-3">
																<h3 class="megamenu-title">Brands <span class="caret"></span></h3>
																<ul class="dropdown-menu">
																	<li><a href="shop-by-category.html">Evans</a></li>
																	<li><a href="shop-by-category.html">Adesso</a></li>
																	<li><a href="shop-by-category.html">Crocs</a></li>
																	<li><a href="shop-by-category.html">Carvela</a></li>
																</ul>
															</li>
															<li class="mega-col-3">
																<h3 class="megamenu-title">Features <span class="caret"></span></h3>
																<ul class="dropdown-menu">
																	<li><a href="shop-fullwidth.html">Products Style 2</a></li>
																	<li><a href="shop-detail-2.html">Single Product Style 2</a></li>
																	<li><a href="shop-masonry.html">Shop Masonry</a></li>
																	<li><a href="my-account.html">My Account</a></li>
																	<li><a href="cart.html">Cart</a></li>
																	<li><a href="cart-empty.html">Empty Cart</a></li>
																	<li><a href="wishlist.html">Wishlist</a></li>
																</ul>
															</li>
															<li class="mega-col-3">
																<h3 class="megamenu-title">Mega Menu</h3>
																<div class="megamenu-sidebar">
																	<div class="widget widget_products commerce">
																		<ul class="product_list_widget">
																			<li>
																				<a href="shop-detail-1.html">
																					<img src="front/images/products/thumb/product_60x60.jpg" alt="2a"/>
																					<span class="product-title">Cras rhoncus duis viverra</span>
																				</a>
																				<span class="amount">&pound;12.00</span>
																				&ndash;
																				<span class="amount">&pound;20.00</span>
																			</li>
																			<li>
																				<a href="shop-detail-1.html">
																					<img src="front/images/products/thumb/product_60x60.jpg" alt="3a"/>
																					<span class="product-title">Morbi sed egestas</span>
																				</a>
																				<span class="amount">&pound;123.00</span>
																			</li>
																			<li>
																				<a href="shop-detail-1.html">
																					<img src="front/images/products/thumb/product_60x60.jpg" alt="4a"/>
																					<span class="product-title">Creamy Spring Pasta</span>
																				</a>
																				<span class="amount">&pound;321.00</span>
																			</li>
																		</ul>
																	</div>
																</div>
															</li>
														</ul>
													</li>
													<li><a href="collection.html"><span class="underline">Collections</span></a></li>
													<li class="menu-item-has-children dropdown">
														<a href="#" class="dropdown-hover">
															<span class="underline">Blog</span> <span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
															<li><a href="blog-default.html">Blog Default</a></li>
															<li><a href="blog-center.html">Blog Center</a></li>
															<li><a href="blog-masonry.html">Blog Masonry</a></li>
														</ul>
													</li>
													<li class="menu-item-has-children dropdown">
														<a href="#" class="dropdown-hover">
															<span class="underline">Pages</span> <span class="caret"></span>
														</a>
														<ul class="dropdown-menu">
															<li><a href="about-us.html">About us</a></li>
															<li><a href="contact-us.html">Contact Us</a></li>
															<li><a href="faq.html">FAQ</a></li>
															<li><a href="404.html">404</a></li>
														</ul>
													</li>
												</ul>
											</nav>
											<div class="header-right">
												<div class="navbar-search">
													<a class="navbar-search-button" href="#">
														<i class="fa fa-search"></i>
													</a>
													<div class="search-form-wrap show-popup hide"></div>
												</div>
												<div class="navbar-minicart navbar-minicart-topbar">
													<div class="navbar-minicart">
														<a class="minicart-link" href="#">
															<span class="minicart-icon">
																<i class="fa fa-shopping-cart"></i>
																<span>0</span>
															</span>
														</a>
													</div>
												</div>
												<div class="navbar-wishlist">
													<a class="wishlist" href="wishlist.html">
														<i class="fa fa-heart-o"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="header-search-overlay hide">
							<div class="container">
								<div class="header-search-overlay-wrap">
									<form class="searchform">
										<input type="search" class="searchinput" name="s" autocomplete="off" value="" placeholder="Search..."/>
									</form>
									<button type="button" class="close">
										<span aria-hidden="true" class="fa fa-times"></span>
										<span class="sr-only">Close</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="content-container no-padding">
				<div class="container-full">
					<div class="main-content">
						<div class="row row-fluid">
							<div class="col-sm-12">
								<div class="rev_slider_wrapper fullwidthbanner-container">
									<div id="rev_slider" class="rev_slider fullwidthabanner">
										<ul>
											<li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-delay="6000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
												<img src="front/images/slideshow/dummy.png" alt="" width="1920" height="657" data-lazyload="images/slideshow/slider_1920x657.jpg" />
												<div class="tp-caption home1-small-black tp-resizeme" data-x="125" data-y="135" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">
													f/w new york 2015
												</div>
												<div class="tp-caption tp-resizeme" data-x="125" data-y="300" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on" data-elementdelay="0.05">
													<img src="front/images/slideshow/dummy.png" alt="" width="23" height="3" data-ww="23px" data-hh="3px" data-lazyload="images/slideshow/rev_home1_img3.png" />
												</div>
												<div class="tp-caption home1-small-black tp-resizeme" data-x="125" data-y="360" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">
													[ discover the collection ]
												</div>
												<div class="tp-caption home3-big-black tp-resizeme" data-x="125" data-y="188" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:[-100%];z:0;rZ:35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="rZ:0deg;sX:0.7;sY:0.7;opacity:0;s:500;e:Back.easeIn;s:500;e:Back.easeIn;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">
													New Fashion Week
												</div>
											</li>
											<li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-delay="6000" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
												<img src="front/images/slideshow/dummy.png" alt="" width="1920" height="657" data-lazyload="images/slideshow/slider_1920x657.jpg" />
												<div class="tp-caption home2-medium-white tp-resizeme" data-x="" data-y="200" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" data-end="8300">
													autumn comming
												</div>
												<div class="tp-caption home2-big-white tp-resizeme" data-x="-1" data-y="250" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05" data-end="8300">
													sale up to 85%
												</div>
												<div class="tp-caption white-button rev-btn" data-x="" data-y="350" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:0;e:Linear.easeNone;" data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);cursor:pointer;" data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off" data-end="8300">
													discover the collection now
												</div>
												<div class="tp-caption Fashion-BigDisplay tp-resizeme" data-x="100" data-y="100" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;e:Power3.easeInOut;s:300;e:Power3.easeInOut;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on"></div>
											</li>
										</ul>
										<div class="tp-bannertimer tp-bottom"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row row-fluid mb-6 pt-6">
								<div class="col-sm-4">
									<div class="caroufredsel product-slider box_border nav-position-right" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
										<div class="product-slider-title">
											<h3 class="el-heading">Feature</h3>
										</div>
										<div class="caroufredsel-wrap">
											<div class="commerce columns-1">
												<ul class="products columns-1">
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:80%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Cras rhoncus duis viverra</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;12.00
																					</span>
																					&ndash;
																					<span class="amount">
																						&pound;20.00
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:60%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Creamy Spring Pasta</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;321.00
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:60%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Jalapeno Dressing Salad</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;17.75
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
												</ul>
											</div>
											<a href="#" class="caroufredsel-prev"></a>
											<a href="#" class="caroufredsel-next"></a>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="caroufredsel product-slider box_border nav-position-right" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
										<div class="product-slider-title">
											<h3 class="el-heading">Top rate</h3>
										</div>
										<div class="caroufredsel-wrap">
											<div class="commerce columns-1">
												<ul class="products columns-1">
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Quisque libero sagittis</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;17.50
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Cras rhoncus duis viverra</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;12.00
																					</span>
																					&ndash;
																					<span class="amount">
																						&pound;20.00
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
												</ul>
											</div>
											<a href="#" class="caroufredsel-prev"></a>
											<a href="#" class="caroufredsel-next"></a>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="caroufredsel product-slider box_border nav-position-right" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
										<div class="product-slider-title">
											<h3 class="el-heading">Sale</h3>
										</div>
										<div class="caroufredsel-wrap">
											<div class="commerce columns-1">
												<ul class="products columns-1" data-columns="1">
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Donec tincidunt justo</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<del>
																						<span class="amount">
																							&pound;20.50
																						</span>
																					</del>
																					<ins>
																						<span class="amount">
																							&pound;19.00
																						</span>
																					</ins>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Morbi fermentum</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<del>
																						<span class="amount">
																							&pound;23.00
																						</span>
																					</del>
																					<ins>
																						<span class="amount">
																							&pound;20.00
																						</span>
																					</ins>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
												</ul>
											</div>
											<a href="#" class="caroufredsel-prev"></a>
											<a href="#" class="caroufredsel-next"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row row-fluid mb-7">
								<div class="col-sm-6">
									<div class="box-ft box-ft-1">
										<img src="front/images/thumb_569x341.jpg" alt="">
										<a href="#">
											<span class="bof-tf-title-wrap">
												<span class="bof-tf-title-wrap-2">
													<span class="bof-tf-sub-title">New Comming</span>
													<span class="bof-tf-title">AUTUMN 2015</span>
												</span>
											</span>
										</a>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="video-embed-shortcode">
										<img src="front/images/thumb_569x341.jpg" alt=""/>
										<div class="video-embed-shortcode mfp-hide">
											<div id="video-1" class="embed-wrap">
												<iframe width="1200" height="675" src="https://www.youtube.com/embed/M4z90wlwYs8?feature=oembed" allowfullscreen></iframe>
											</div>
										</div>
										<a class="video-embed-action" data-video-inline="&lt;div class=&quot;video-embed-shortcode mfp-hide &quot;&gt;&lt;div id=&quot;video-1&quot; class=&quot;embed-wrap&quot;&gt;&lt;iframe width=&quot;1200&quot; height=&quot;675&quot; src=&quot;https://www.youtube.com/embed/M4z90wlwYs8?feature=oembed&quot; frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;&lt;/div&gt;&lt;/div&gt;" href="#video-1" data-rel="magnific-popup-video">
											<i class="elegant_arrow_triangle-right_alt2"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row row-fluid mb-10">
								<div class="col-sm-12">
									<div class="caroufredsel product-slider nav-position-center" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
										<div class="product-slider-title">
											<h3 class="el-heading">Best Products</h3>
										</div>
										<div class="caroufredsel-wrap">
											<div class="commerce columns-4">
												<ul class="products columns-4" data-columns="4">
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Quisque libero sagittis</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;17.50
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Creamy Spring Pasta</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;32.10
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<span class="onsale">Sale!</span>
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Donec tincidunt justo</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<del>
																						<span class="amount">
																							&pound;23.00
																						</span>
																					</del>
																					<ins>
																						<span class="amount">
																							&pound;20.00
																						</span>
																					</ins>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Cras rhoncus duis viverra</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;12.00
																					</span>
																					&ndash;
																					<span class="amount">
																						&pound;20.00
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Nunc lacus sem</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;10.95
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Mauris egestas</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;14.95
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Morbi fermentum</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;17.45
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Morbi fermentum</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<del>
																						<span class="amount">
																							&pound;23.00
																						</span>
																					</del>
																					<ins>
																						<span class="amount">
																							&pound;20.00
																						</span>
																					</ins>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Ut quis Aenean</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;10.95
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Pesto Cauliflower</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;15.05
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Jalapeno Dressing Salad</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;17.75
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Green Chile Burritos</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;10.75
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
												</ul>
											</div>
											<a href="#" class="caroufredsel-prev"></a>
											<a href="#" class="caroufredsel-next"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="container-full">
							<div class="row row-fluid mb-0 row-no-padding">
								<div class="col-sm-12 p-0">
									<div class="post-grid-wrap">
										<ul class="row list">
											<li class="col-sm-12">
												<article class="hentry">
													<div class="hentry-wrap">
														<div class="entry-featured">
															<a href="blog-detail.html">
																<img width="700" height="450" src="front/images/blog/blog_647x416.jpg" alt="" />
															</a>
														</div>
														<div class="entry-info">
															<div class="entry-header">
																<h3 class="entry-title">
																	<a href="blog-detail.html">
																		Monogrammed Speedy in Tow
																	</a>
																</h3>
															</div>
															<div class="entry-content">
																<p>
																	The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously...
																</p>
															</div>
															<div class="entry-meta">
																<span class="meta-date">
																	Date:
																	<time datetime="2015-08-11T06:27:49+00:00">August 11, 2015</time>
																</span>
																<span class="meta-author">
																	By:
																	<a href="#">sitesao</a>
																</span>
																<span class="meta-category">
																	Category:
																	<a href="#">Aliquam</a>, <a href="#">Nunc</a>
																</span>
															</div>
															<a class="read-more btn btn-outline" href="blog-detail.html">
																Read more <i>+</i>
															</a>
														</div>
													</div>
												</article>
											</li>
											<li class="col-sm-12">
												<article class="hentry">
													<div class="hentry-wrap">
														<div class="entry-featured">
															<a href="blog-detail.html">
																<img width="700" height="450" src="front/images/blog/blog_647x416.jpg" alt=""/>
															</a>
														</div>
														<div class="entry-info">
															<div class="entry-header">
																<h3 class="entry-title">
																	<a href="blog-detail.html">Summer Classics in Positano </a>
																</h3>
															</div>
															<div class="entry-content">
																<p>
																	The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously...
																</p>
															</div>
															<div class="entry-meta">
																<span class="meta-date">
																	Date:
																	<time datetime="2015-08-11T06:27:22+00:00">
																		August 11, 2015
																	</time>
																</span>
																<span class="meta-author">
																	By:
																	<a href="#">sitesao</a>
																</span>
																<span class="meta-category">
																	Category:
																	<a href="#">Nunc</a>
																</span>
															</div>
															<a class="read-more btn btn-outline" href="blog-detail.html">
																Read more <i>+</i>
															</a>
														</div>
													</div>
												</article>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row row-fluid mt-10 mb-10">
								<div class="col-sm-12">
									<div class="caroufredsel product-slider nav-position-center" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
										<div class="product-slider-title">
											<h3 class="el-heading">New Arrivals</h3>
										</div>
										<div class="caroufredsel-wrap">
											<div class="commerce columns-4">
												<ul class="products columns-4" data-columns="4">
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Quisque libero sagittis</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;17.50
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Creamy Spring Pasta</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;32.10
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<span class="onsale">Sale!</span>
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Donec tincidunt justo</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<del>
																						<span class="amount">
																							&pound;23.00
																						</span>
																					</del>
																					<ins>
																						<span class="amount">
																							&pound;20.00
																						</span>
																					</ins>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Cras rhoncus duis viverra</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;12.00
																					</span>
																					&ndash;
																					<span class="amount">
																						&pound;20.00
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Nunc lacus sem</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;10.95
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Mauris egestas</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;14.95
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Morbi fermentum</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;17.45
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="#">Morbi fermentum</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<del>
																						<span class="amount">
																							&pound;23.00
																						</span>
																					</del>
																					<ins>
																						<span class="amount">
																							&pound;20.00
																						</span>
																					</ins>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Ut quis Aenean</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;10.95
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Pesto Cauliflower</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;15.05
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Jalapeno Dressing Salad</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;17.75
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
													<li class="product">
														<div class="product-container">
															<figure>
																<div class="product-wrap">
																	<div class="product-images">
																		<div class="shop-loop-thumbnail shop-loop-front-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442.jpg" alt=""/>
																		</div>
																		<div class="shop-loop-thumbnail shop-loop-back-thumbnail">
																			<img width="375" height="505" src="front/images/products/product_328x442alt.jpg" alt=""/>
																		</div>
																		<div class="loop-action">
																			<div class="shop-loop-quickview">
																				<a title="Quick view" href="#">
																					Quick view
																				</a>
																			</div>
																			<div class="loop-add-to-cart">
																				<a href="#" class="add_to_cart_button">
																					Add to cart
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
																<figcaption>
																	<div class="shop-loop-product-info">
																		<div class="info-meta clearfix">
																			<div class="star-rating">
																				<span style="width:100%"></span>
																			</div>
																			<div class="loop-add-to-wishlist">
																				<div class="yith-wcwl-add-to-wishlist">
			                                                                        <div class="yith-wcwl-add-button">
			                                                                            <a href="#" class="add_to_wishlist">
			                                                                                Add to Wishlist
			                                                                            </a>
			                                                                        </div>
			                                                                    </div>
			                                                                </div>
																		</div>
																		<div class="info-content-wrap">
																			<h3 class="product_title">
																				<a href="shop-detail-1.html">Green Chile Burritos</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">
																						&pound;10.75
																					</span>
																				</span>
																			</div>
																		</div>
																	</div>
																</figcaption>
															</figure>
														</div>
													</li>
												</ul>
											</div>
											<a href="#" class="caroufredsel-prev"></a>
											<a href="#" class="caroufredsel-next"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="container-full">
							<div class="row row-fluid custom-bg-1 mb-0 pt-9 pb-10">
								<div class="col-sm-12">
									<h3 class="text-uppercase mb-2 white text-center">
										the one for you
									</h3>
									<div class="mb-6">
										<p class="text-center white">We offer a range of models to accommodate a variety body shapes and sizes</p>
									</div>
									<a class="btn btn-white-outline btn-align-center" href="#">
										<span>find your leather coats</span>
									</a>
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row row-fluid mb-0 pt-10">
								<div class="col-sm-12">
									<h3 class="text-center heading-center-custom mb-3">
										what clients say !
									</h3>
									<div class="mb-7">
										<p class="text-center">
											Platea hac egestas himenaeos mi non libero lacus mollis, a lacinia dapibus turpis curae neque ut fringilla lacinia
										</p>
									</div>
								</div>
							</div>
							<div class="row row-fluid mb-7">
								<div class="col-sm-12">
									<div class="testimonial mb-3">
										<div class="caroufredsel" data-visible-min="1" data-visible-max="2" data-scroll-fx="scroll" data-speed="5000" data-responsive="1" data-infinite="1" data-autoplay="0">
											<div class="caroufredsel-wrap">
												<ul class="caroufredsel-items">
													<li class="caroufredsel-item col-sm-6">
														<div class="testimonial-wrap">
															<div class="testimonial-text">
																<span>&ldquo;</span>
																Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
																<span>&rdquo;</span>
															</div>
															<div class="clearfix">
																<div class="testimonial-avatar">
																	<img src="front/images/avatar/thumb_50x50.jpg" alt=""/>
																</div>
																<span class="testimonial-author">Hughnei</span>
																<span class="testimonial-company">CEO/Founder Sitesao</span>
															</div>
														</div>
													</li>
													<li class="caroufredsel-item col-sm-6">
														<div class="testimonial-wrap">
															<div class="testimonial-text">
																<span>&ldquo;</span>
																Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
																<span>&rdquo;</span>
															</div>
															<div class="clearfix">
																<div class="testimonial-avatar">
																	<img src="front/images/avatar/thumb_50x50.jpg" alt=""/>
																</div>
																<span class="testimonial-author">dangdong</span>
																<span class="testimonial-company">CEO/Founder Sitesao</span>
															</div>
														</div>
													</li>
													<li class="caroufredsel-item col-sm-6">
														<div class="testimonial-wrap">
															<div class="testimonial-text">
																<span>&ldquo;</span>
																Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
																<span>&rdquo;</span>
															</div>
															<div class="clearfix">
																<div class="testimonial-avatar">
																	<img src="front/images/avatar/thumb_50x50.jpg" alt=""/>
																</div>
																<span class="testimonial-author">Hughnei</span>
																<span class="testimonial-company">CEO/Founder Sitesao</span>
															</div>
														</div>
													</li>
													<li class="caroufredsel-item col-sm-6">
														<div class="testimonial-wrap">
															<div class="testimonial-text">
																<span>&ldquo;</span>
																Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
																<span>&rdquo;</span>
															</div>
															<div class="clearfix">
																<div class="testimonial-avatar">
																	<img src="front/images/avatar/thumb_50x50.jpg" alt=""/>
																</div>
																<span class="testimonial-author">dangdong</span>
																<span class="testimonial-company">CEO/Founder Sitesao</span>
															</div>
														</div>
													</li>
												</ul>
												<a href="#" class="caroufredsel-prev hide"></a>
												<a href="#" class="caroufredsel-next hide"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row row-fluid mb-0 pb-5">
								<div class="col-sm-12">
									<div class="client client-slider">
										<div class="caroufredsel" data-height="variable" data-visible-min="1" data-visible-max="4" data-responsive="1" data-infinite="1" data-autoplay="1" data-speed="15000">
											<div class="caroufredsel-wrap">
												<ul class="caroufredsel-items row">
													<li class="caroufredsel-item col-md-3">
														<img alt="" src="front/images/client/client_270x100.png">
													</li>
													<li class="caroufredsel-item col-md-3">
														<img alt="" src="front/images/client/client_270x100.png">
													</li>
													<li class="caroufredsel-item col-md-3">
														<img alt="" src="front/images/client/client_270x100.png">
													</li>
													<li class="caroufredsel-item col-md-3">
														<img alt="" src="front/images/client/client_270x100.png">
													</li>
													<li class="caroufredsel-item col-md-3">
														<img alt="" src="front/images/client/client_270x100.png">
													</li>
													<li class="caroufredsel-item col-md-3">
														<img alt="" src="front/images/client/client_270x100.png">
													</li>
												</ul>
												<a href="#" class="caroufredsel-prev"></a>
												<a href="#" class="caroufredsel-next"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<footer id="footer" class="footer">
				<div class="footer-newsletter">
					<div class="container">
						<div class="footer-newsletter-wrap">
							<h3 class="footer-newsletter-heading">NEWSLETTER</h3>
							<form class="mailchimp-form">
								<div class="mailchimp-form-content clearfix">
									<label for="subscribe_email" class="hide">Subscribe</label>
									<input type="email" id="subscribe_email" class="form-control" required="required" placeholder="Enter your email..." name="email">
									<button type="submit" class="btn mailchimp-submit">sign up</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="footer-featured">
					<div class="container">
						<div class="row">
							<div class="footer-featured-col col-md-4 col-sm-6">
								<i class="fa fa-money"></i>
								<h4 class="footer-featured-title">
									100% <br> return money
								</h4>
								free return standard order in 30 days
							</div>
							<div class="footer-featured-col col-md-4 col-sm-6">
								<i class="fa fa-globe"></i>
								<h4 class="footer-featured-title">
									world wide <br> delivery
								</h4>
								free ship for payment over $100
							</div>
							<div class="footer-featured-col col-md-4 col-sm-6">
								<i class="fa fa-clock-o"></i>
								<h4 class="footer-featured-title">
									24h <br> shipment
								</h4>
								for standard package
							</div>
						</div>
					</div>
				</div>
				<div class="footer-widget">
					<div class="container">
						<div class="footer-widget-wrap">
							<div class="row">
								<div class="footer-widget-col col-md-3 col-sm-6">
									<div class="widget widget_text">
										<div class="textwidget">
											<ul class="address">
												<li>
													<i class="fa fa-home"></i>
													<h4>Address:</h4>
													<p>132 Jefferson Avenue, Suite 22, Redwood City, CA 94872, USA</p>
												</li>
												<li>
													<i class="fa fa-mobile"></i>
													<h4>Phone:</h4>
													<p>(00) 123 456 789</p>
												</li>
												<li>
													<i class="fa fa-envelope"></i>
													<h4>Email:</h4>
													<p><a href="mailto:email@domain.com">email@domain.com</a></p>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="footer-widget-col col-md-3 col-sm-6">
									<div class="widget widget_nav_menu">
										<h3 class="widget-title">
											<span>infomation</span>
										</h3>
										<div class="menu-infomation-container">
											<ul class="menu">
												<li><a href="#">About Us</a></li>
												<li><a href="#">Contact Us</a></li>
												<li><a href="#">Term &#038; Conditions</a></li>
												<li><a href="#">Gift Voucher</a></li>
												<li><a href="#">BestSellers</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="footer-widget-col col-md-3 col-sm-6">
									<div class="widget widget_nav_menu">
										<h3 class="widget-title">
											<span>Customer Care</span>
										</h3>
										<div class="menu-customer-care-container">
											<ul class="menu">
												<li><a href="#">Support</a></li>
												<li><a href="#">Sitemap</a></li>
												<li><a href="#">FAQ</a></li>
												<li><a href="#">Shipping</a></li>
												<li><a href="#">Returns</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="footer-widget-col col-md-3 col-sm-6">
									<div class="widget widget_text">
										<h3 class="widget-title">
											<span>open house</span>
										</h3>
										<div class="textwidget">
											<ul class="open-time">
												<li><span>Mon - Fri:</span><span>8am - 5pm</span> </li>
												<li><span>Sat:</span><span>8am - 11am</span> </li>
												<li><span>Sun: </span><span>Closed</span></li>
											</ul>
											<h3 class="widget-title">
												<span>payment Menthod</span>
											</h3>
											<div class="payment">
												<a href="#"><i class="fa fa-cc-mastercard"></i></a>
												<a href="#"><i class="fa fa-cc-visa"></i></a>
												<a href="#"><i class="fa fa-cc-paypal"></i></a>
												<a href="#"><i class="fa fa-cc-discover"></i></a>
												<a href="#"><i class="fa fa-credit-card"></i></a>
												<a href="#"><i class="fa fa-cc-amex"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright text-center">
					© 2015 WOOW - Responsive Commerce Theme
				</div>
			</footer>
		</div>

		<div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userloginModalForm"  method="POST" action="{{ route('login') }}">
						@csrf
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Login</h4>
						</div>
						<div class="modal-body">

							<div class="form-group">
								<label>Email</label>
								<input id="email" type="email"
									   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
									   name="email" value="{{ old('email') }}" required autofocus>

								@if ($errors->has('email'))
									<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
								@endif
							</div>
							<div class="form-group">
								<label for="password">Пароль</label>
								<input id="password" type="password"
									   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
									   name="password" required>

								@if ($errors->has('password'))
									<span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
								@endif
							</div>
							<div class="checkbox clearfix">
								<label class="form-flat-checkbox pull-left">
									<input class="form-check-input" type="checkbox" name="remember"
										   id="remember" {{ old('remember') ? 'checked' : '' }}>

									<label class="form-check-label" for="remember">
										Запомнить меня
									</label>
								</label>
								<span class="lostpassword-modal-link pull-right">
									@if (Route::has('password.request'))
										<a class="btn btn-link" data-rel="lostpasswordModal" href="{{ route('password.request') }}">
										Забыли пароль?
									</a>
									@endif
								</span>
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-register pull-left">
								Не зарегистрированы?
									<a class="btn btn-link" href="{{route('register')}}">
										Регистрация
									</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Вход</button>

						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userregisterModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Register account</h4>
						</div>
						<div class="modal-body">
							<div class="user-login-facebook">
								<button class="btn-login-facebook" type="button">
									<i class="fa fa-facebook"></i>Sign in with Facebook
								</button>
							</div>
							<div class="user-login-or"><span>or</span></div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="user_login" required class="form-control" value="" placeholder="Username">
							</div>
							<div class="form-group">
								<label for="user_email">Email</label>
								<input type="email" id="user_email" name="user_email" required class="form-control" value="" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="user_password">Password</label>
								<input type="password" id="user_password" required value="" name="user_password" class="form-control" placeholder="Password">
							</div>
							<div class="form-group">
								<label for="user_password">Retype password</label>
								<input type="password" id="cuser_password" required value="" name="cuser_password" class="form-control" placeholder="Retype password">
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Register</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userlostpasswordModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Forgot Password</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Username or E-mail:</label>
								<input type="text" name="user_login" required class="form-control" value="" placeholder="Username or E-mail">
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Sign in</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="minicart-side">
			<div class="minicart-side-title">
				<h4>Shopping Cart</h4>
			</div>
			<div class="minicart-side-content">
				<div class="minicart">
					<div class="minicart-header no-items show">
						Your shopping bag is empty.
					</div>
					<div class="minicart-footer">
						<div class="minicart-actions clearfix">
							<a class="button no-item-button" href="#">
								<span class="text">Go to the shop</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type='text/javascript' src='{{asset('front/js/jquery.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/jquery-migrate.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/jquery.themepunch.tools.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/jquery.themepunch.revolution.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/easing.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/imagesloaded.pkgd.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/bootstrap.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/superfish-1.7.4.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/jquery.appear.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/script.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/swatches-and-photos.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/jquery.cookie.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/jquery.prettyPhoto.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/jquery.prettyPhoto.init.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/jquery.selectBox.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/jquery.touchSwipe.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/jquery.transit.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/jquery.carouFredSel.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/jquery.magnific-popup.js')}}'></script>

		<script type='text/javascript' src='{{asset('front/js/extensions/revolution.extension.video.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/extensions/revolution.extension.slideanims.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/extensions/revolution.extension.actions.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/extensions/revolution.extension.layeranimation.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/extensions/revolution.extension.kenburn.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/extensions/revolution.extension.navigation.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/extensions/revolution.extension.migration.min.js')}}'></script>
		<script type='text/javascript' src='{{asset('front/js/extensions/revolution.extension.parallax.min.js')}}'></script>
		<script type="text/javascript">

			var tpj=jQuery;

			var revapi7;
			tpj(document).ready(function() {
				if(tpj("#rev_slider").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider");
				}else{
					revapi7 = tpj("#rev_slider").show().revolution({
						sliderType:"standard",
						sliderLayout:"fullwidth",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
							onHoverStop:"on",
							touch:{
								touchenabled:"on",
								swipe_threshold: 75,
								swipe_min_touches: 50,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							}
							,
							arrows: {
								style:"gyges",
								enable:true,
								hide_onmobile:true,
								hide_under:600,
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								tmp:'',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:30,
									v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:30,
									v_offset:0
								}
							}
							,
							bullets: {
								enable:true,
								hide_onmobile:true,
								hide_under:600,
								style:"hephaistos",
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								direction:"horizontal",
								h_align:"center",
								v_align:"bottom",
								h_offset:0,
								v_offset:30,
								space:5,
								tmp:''
							}
						},
						gridwidth:1170,
						gridheight:600,
						lazyType:"smart",
						parallax: {
							type:"mouse",
							origo:"slidercenter",
							speed:2000,
							levels:[2,3,4,5,6,7,12,16,10,50],
						},
						shadow:0,
						spinner:"off",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});	/*ready*/
		</script>
	</body>
</html>