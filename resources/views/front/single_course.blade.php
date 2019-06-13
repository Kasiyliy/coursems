@extends('layouts.userSide')
@section('content')
    <div class="content-container commerce page-layout-left-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-md-9 main-wrap">
                    <div class="main-content">
                        <div class="shop-toolbar">
                            <form class="commerce-ordering clearfix">
                                <div class="commerce-ordering-select">
                                    <label class="hide">Sorting:</label>
                                    <div class="form-flat-select">
                                        <select name="orderby" class="orderby">
                                            <option value="" selected='selected'>Default sorting</option>
                                            <option value="">Sort by popularity</option>
                                            <option value="">Sort by average rating</option>
                                            <option value="">Sort by newness</option>
                                            <option value="">Sort by price: low to high</option>
                                            <option value="">Sort by price: high to low</option>
                                        </select>
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </div>
                                <div class="commerce-ordering-select">
                                    <label class="hide">Show:</label>
                                    <div class="form-flat-select">
                                        <select name="per_page" class="per_page">
                                            <option value="" selected='selected'>12</option>
                                            <option value="">24</option>
                                            <option value="">36</option>
                                        </select>
                                        <i class="fa fa-angle-down"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="shop-loop grid">
                            <ul class="products">
                                @foreach($course->streams as $stream)
                                <li class="product col-md-3 col-sm-6">
                                    <div class="product-container">
                                        <figure>
                                            <div class="product-wrap">
                                                <div class="product-images">
                                                    <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                        <img width="375" height="505" src="{{asset($course->image_path)}}" alt=""/>
                                                    </div>
                                                    <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                        <img width="375" height="505" src="images/products/product_328x442alt.jpg" alt=""/>
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
                                                            <a href="shop-detail-1.html">{{$stream->name}}</a>
                                                        </h3>
                                                        <div class="info-price">
																	<span class="price">
																		<del>
																			<span class="amount">
																				{{$course->price + 1000}} tenge
																			</span>
																		</del>
																		<ins>
																			<span class="amount">
																				{{$course->price}} tenge
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
                                    @endforeach
                            </ul>
                        </div>
                        <nav class="commerce-pagination">
                            <p class="commerce-result-count">
                                Showing 1&ndash;12 of 14 results
                            </p>
                            <div class="paginate">
                                <div class="paginate_links">
                                    <span class='page-numbers current'>1</span>
                                    <a class='page-numbers' href='#'>2</a>
                                    <a class="next page-numbers" href="#">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 sidebar-wrap">
                    <div class="main-sidebar">
                        <div class="widget widget_layered_nav">
                            <h4 class="widget-title">
                                <span>Filter by Color</span>
                            </h4>
                            <ul>
                                <li>
                                    <a href="#">Black</a>
                                    <span class="count">(1)</span>
                                </li>
                                <li>
                                    <a href="#">Blue</a>
                                    <span class="count">(1)</span>
                                </li>
                                <li>
                                    <a href="#">Brown</a>
                                    <span class="count">(1)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_price_filter">
                            <h4 class="widget-title"><span>Price</span></h4>
                            <form>
                                <div class="price_slider_wrapper">
                                    <div class="price_slider"></div>
                                    <div class="price_slider_amount">
                                        <input type="text" id="min_price" name="min_price" value="" data-min="10" placeholder="Min price"/>
                                        <input type="text" id="max_price" name="max_price" value="" data-max="732" placeholder="Max price"/>
                                        <button type="submit" class="button">Filter</button>
                                        <div class="price_label">
                                            Price: <span class="from"></span> &mdash; <span class="to"></span>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="widget widget_layered_nav">
                            <h4 class="widget-title"><span>Brands</span></h4>
                            <ul>
                                <li>
                                    <a href="#">Adesso</a> <small class="count">11</small>
                                </li>
                                <li>
                                    <a href="#">Barbour</a> <small class="count">6</small>
                                </li>
                                <li>
                                    <a href="#">Carvela</a> <small class="count">9</small>
                                </li>
                                <li>
                                    <a href="#">Crocs</a> <small class="count">10</small>
                                </li>
                                <li>
                                    <a href="#">Evans</a> <small class="count">12</small>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget_product_categories">
                            <h4 class="widget-title"><span>Categories</span></h4>
                            <ul class="product-categories">
                                <li><a href="#">Aliquam</a></li>
                                <li><a href="#">Donec</a></li>
                                <li><a href="#">Fusce</a></li>
                                <li><a href="#">Maecenas</a></li>
                                <li><a href="#">Nulla</a></li>
                                <li><a href="#">Proin</a></li>
                                <li><a href="#">Tortor</a></li>
                                <li><a href="#">Various</a></li>
                            </ul>
                        </div>
                        <div class="widget widget_products">
                            <h4 class="widget-title"><span>Best Sellers</span></h4>
                            <ul class="product_list_widget">
                                <li>
                                    <a href="shop-detail-1.html">
                                        <img width="200" height="200" src="images/products/product_60x81.jpg" alt="Product-13"/>
                                        <span class="product-title">Donec tincidunt justo</span>
                                    </a>
                                    <del><span class="amount">20.50&#36;</span></del>
                                    <ins><span class="amount">19.00&#36;</span></ins>
                                </li>
                                <li>
                                    <a href="shop-detail-1.html">
                                        <img width="200" height="200" src="images/products/product_60x81.jpg" alt="Product-10"/>
                                        <span class="product-title">Mauris egestas</span>
                                    </a>
                                    <span class="amount">14.95&#36;</span>
                                </li>
                                <li>
                                    <a href="shop-detail-1.html">
                                        <img width="200" height="200" src="images/products/product_60x81.jpg" alt="Product-9"/>
                                        <span class="product-title">Morbi fermentum</span>
                                    </a>
                                    <span class="amount">17.45&#36;</span>
                                </li>
                                <li>
                                    <a href="shop-detail-1.html">
                                        <img width="200" height="200" src="images/products/product_60x81.jpg" alt="Product-8"/>
                                        <span class="product-title">Morbi fermentum</span>
                                    </a>
                                    <span class="amount">23.00&#36;</span>
                                </li>
                                <li>
                                    <a href="shop-detail-1.html">
                                        <img width="200" height="200" src="images/products/product_60x81.jpg" alt="Product-7"/>
                                        <span class="product-title">Ut quis Aenean</span>
                                    </a>
                                    <span class="amount">10.95&#36;</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection