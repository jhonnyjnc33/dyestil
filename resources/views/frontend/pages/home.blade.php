@extends("frontend.layout.main")
@section("content")
	<div class="container-indent nomargin">
		<div class="container-fluid">
			<div class="row">
				<div class="slider-revolution revolution-default">
					<div class="tp-banner-container">
						<div class="tp-banner revolution">
							<ul>
								<li data-thumb="{{asset('vendor/video/video_img.jpg')}}" data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
									<img src="{{asset('vendor/video/blank.png')}}"  alt="slide1"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" >
									<!-- LAYER NR. 1 -->
									<div class="tp-caption tp-fade fadeout fullscreenvideo"
										data-x="0"
										data-y="0"
										data-speed="600"
										data-start="0"
										data-easing="Power4.easeOut"
										data-endspeed="1500"
										data-endeasing="Power4.easeIn"
										data-autoplay="true"
										data-autoplayonlyfirsttime="false"
										data-nextslideatend="true"
										data-forceCover="1"
										data-dottedoverlay="twoxtwo"
										data-aspectratio="16:9">
										<video class="video-js vjs-default-skin" preload="none"
											poster='{{asset('vendor/video/video_img.jpg')}}' data-setup="{}">
											<source src='{{asset('vendor/video/video.mp4')}}' type='video/mp4'>
										</video>
									</div>
									<div class="tp-caption  tp-fade"
										data-x="right"
										data-y="bottom"
										data-voffset="-60"
										data-hoffset="-90"
										data-speed="600"
										data-start="900"
										data-easing="Power4.easeOut"
										data-endeasing="Power4.easeIn">
										<div class="video-play">
											<a class="icon-f-29 btn-play" href="#"></a>
											<a class="icon-f-28 btn-pause" href="#"></a>
										</div>
									</div>
									<!-- TEXT -->
									<div class="tp-caption lfb lft text-center"
										data-x="center"
										data-y="center"
										data-voffset="-20"
										data-hoffset="0"
										data-speed="600"
										data-start="900"
										data-easing="Power4.easeOut"
										data-endeasing="Power4.easeIn">
										<div class="tp-caption1-wd-1 tt-base-color">Multipurpose</div>
										<div class="tp-caption1-wd-2 tt-white-color">Premium<br>Html Template</div>
										<div class="tp-caption1-wd-3 tt-white-color">30 skins, powerful features, great support, exclusive offer</div>
										<div class="tp-caption1-wd-4"><a href="listing-left-column.html" class="btn btn-xl" data-text="SHOP NOW!">SHOP NOW!</a></div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="nomargin container-indent">
		<div class="container-fluid-custom">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
						<img src="{{asset('vendor/images/loader.svg')}}" data-src="{{asset('vendor/images/promo/index05-promo-img-01.jpg')}}" alt="">
						<div class="tt-description">
							<div class="tt-description-wrapper">
								<div class="tt-background"></div>
								<div class="tt-title-small">WOMEN</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-12 col-md-6">
					<a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
						<img src="{{asset('vendor/images/loader.svg')}}" data-src="{{asset('vendor/images/promo/index05-promo-img-02.jpg')}}" alt="">
						<div class="tt-description">
							<div class="tt-description-wrapper">
								<div class="tt-background"></div>
								<div class="tt-title-small">MEN</div>
							</div>
						</div>
					</a>
					<a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
						<img src="{{asset('vendor/images/loader.svg')}}" data-src="{{asset('vendor/images/promo/index05-promo-img-03.jpg')}}" alt="">
						<div class="tt-description">
							<div class="tt-description-wrapper">
								<div class="tt-background"></div>
								<div class="tt-title-small">SHOES</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<div class="tt-block-title">
				<h1 class="tt-title">TRENDING</h1>
				<div class="tt-description">TOP VIEW IN THIS WEEK</div>
			</div>
			<div class="tt-carousel-products row arrow-location-tab arrow-location-tab01 tt-alignment-img tt-layout-product-item slick-animated-show-js">
				<div class="col-2 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="{{asset('vendor/images/product/product-20.jpg')}}" alt=""></span>
								<span class="tt-img-roll-over"><img src="{{asset('vendor/images/product/product-20-02.jpg')}}" alt=""></span>
								<span class="tt-label-location">
									<span class="tt-label-new">New</span>
								</span>
							</a>
						</div>
						<div class="tt-description">
							<div class="tt-row">
								<ul class="tt-add-info">
									<li><a href="#">T-SHIRTS</a></li>
								</ul>
								<div class="tt-rating">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
								</div>
							</div>
							<h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
							<div class="tt-price">
								<span class="new-price">$14</span>
								<span class="old-price">$24</span>
							</div>
							<div class="tt-option-block">
								<ul class="tt-options-swatch">
									<li><a class="options-color tt-color-bg-01" href="#"></a></li>
									<li><a class="options-color tt-color-bg-02" href="#"></a></li>
								</ul>
							</div>
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
								</div>
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
									<a href="#" class="tt-btn-wishlist"></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="{{asset('vendor/images/product/product-18.jpg')}}" alt=""></span>
								<span class="tt-img-roll-over"><img src="{{asset('vendor/images/product/product-18-02.jpg')}}" alt=""></span>
							</a>
						</div>
						<div class="tt-description">
							<div class="tt-row">
								<ul class="tt-add-info">
									<li><a href="#">T-SHIRTS</a></li>
								</ul>
								<div class="tt-rating">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
								</div>
							</div>
							<h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
							<div class="tt-price">
								$124
							</div>
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
								</div>
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
									<a href="#" class="tt-btn-wishlist"></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="{{asset('vendor/images/product/product-46.jpg')}}" alt=""></span>
								<span class="tt-img-roll-over"><img src="{{asset('vendor/images/product/product-46-01.jpg')}}" alt=""></span>
							</a>
						</div>
						<div class="tt-description">
							<div class="tt-row">
								<ul class="tt-add-info">
									<li><a href="#">T-SHIRTS</a></li>
								</ul>
							</div>
							<h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
							<div class="tt-price">
								$12
							</div>
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
								</div>
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
									<a href="#" class="tt-btn-wishlist"></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="{{asset('vendor/images/product/product-01.jpg')}}" alt=""></span>
								<span class="tt-img-roll-over"><img src="{{asset('vendor/images/product/product-01-02.jpg')}}" alt=""></span>
								<span class="tt-label-location">
									<span class="tt-label-sale">Sale 15%</span>
								</span>
							</a>
						</div>
						<div class="tt-description">
							<div class="tt-row">
								<ul class="tt-add-info">
									<li><a href="#">T-SHIRTS</a></li>
								</ul>
								<div class="tt-rating">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star-half"></i>
									<i class="icon-star-empty"></i>
								</div>
							</div>
							<h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
							<div class="tt-price">
								$78
							</div>
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
								</div>
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
									<a href="#" class="tt-btn-wishlist"></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2 col-md-4 col-lg-3">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="{{asset('vendor/images/product/product-14.jpg')}}" alt=""></span>
								<span class="tt-img-roll-over"><img src="{{asset('vendor/images/product/product-14-02.jpg')}}" alt=""></span>
							</a>
						</div>
						<div class="tt-description">
							<div class="tt-row">
								<ul class="tt-add-info">
									<li><a href="#">T-SHIRTS</a></li>
								</ul>
							</div>
							<h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
							<div class="tt-price">
								$12
							</div>
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
								</div>
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
									<a href="#" class="tt-btn-wishlist"></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-indent">
		<div class="container-fluid">
			<div class="row tt-layout-promo-box">
				<div class="col-md-6">
					<a href="listing-left-column.html" class="tt-promo-box tt-one-child">
						<img src="{{asset('vendor/images/loader.svg')}}" data-src="{{asset('vendor/images/promo/index05-promo-img-04.jpg')}}" alt="">
						<div class="tt-description">
							<div class="tt-description-wrapper">
								<div class="tt-background"></div>
								<div class="tt-title-small">NEW IN:</div>
								<div class="tt-title-large">CLOTHING</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-6">
					<a href="listing-left-column.html" class="tt-promo-box tt-one-child">
						<img src="{{asset('vendor/images/loader.svg')}}" data-src="{{asset('vendor/images/promo/index05-promo-img-05.jpg')}}" alt="">
						<div class="tt-description">
							<div class="tt-description-wrapper">
								<div class="tt-background"></div>
								<div class="tt-title-small">CLEARANCE SALES</div>
								<div class="tt-title-large">GET UP TO <span class="tt-base-color">20% OFF</span></div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<div class="tt-block-title">
				<h2 class="tt-title">SPECIALS</h2>
				<div class="tt-description">IN THIS WEEK</div>
			</div>
			<div class="tt-carousel-products row arrow-location-tab arrow-location-tab01 tt-alignment-img tt-layout-product-item slick-animated-show-js" data-item='3'>
				<div class="col-2 col-md-4 col-lg-4">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="{{asset('vendor/images/loader.svg')}}" data-src="{{asset('vendor/images/product/product-25.jpg')}}" alt=""></span>
								<span class="tt-img-roll-over"><img src="{{asset('vendor/images/loader.svg')}}" data-src="{{asset('vendor/images/product/product-25-01.jpg')}}" alt=""></span>
								<span class="tt-label-location">
									<span class="tt-label-sale">Sale 15%</span>
								</span>
							</a>
							<div class="tt-countdown_box">
								<div class="tt-countdown_inner">
									<div class="tt-countdown"
										data-date="2018-11-01"
										data-year="Yrs"
										data-month="Mths"
										data-week="Wk"
										data-day="Day"
										data-hour="Hrs"
										data-minute="Min"
										data-second="Sec"></div>
								</div>
							</div>
						</div>
						<div class="tt-description">
							<div class="tt-row">
								<ul class="tt-add-info">
									<li><a href="#">T-SHIRTS</a></li>
								</ul>
								<div class="tt-rating">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
								</div>
							</div>
							<h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
							<div class="tt-price">
								<span class="new-price">$14</span>
								<span class="old-price">$24</span>
							</div>
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
								</div>
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
									<a href="#" class="tt-btn-wishlist"></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2 col-md-4 col-lg-4">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="{{asset('vendor/images/loader.svg')}}" data-src="{{asset('vendor/images/product/product-26.jpg')}}" alt=""></span>
								<span class="tt-img-roll-over"><img src="{{asset('vendor/images/loader.svg')}}" data-src="{{asset('vendor/images/product/product-26-02.jpg')}}" alt=""></span>
								<span class="tt-label-location">
									<span class="tt-label-sale">Sale 15%</span>
								</span>
							</a>
							<div class="tt-countdown_box">
								<div class="tt-countdown_inner">
									<div class="tt-countdown"
										data-date="2018-12-08"
										data-year="Yrs"
										data-month="Mths"
										data-week="Wk"
										data-day="Day"
										data-hour="Hrs"
										data-minute="Min"
										data-second="Sec"></div>
								</div>
							</div>
						</div>
						<div class="tt-description">
							<div class="tt-row">
								<ul class="tt-add-info">
									<li><a href="#">T-SHIRTS</a></li>
								</ul>
								<div class="tt-rating">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
								</div>
							</div>
							<h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
							<div class="tt-price">
								<span class="new-price">$14</span>
								<span class="old-price">$24</span>
							</div>
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
								</div>
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
									<a href="#" class="tt-btn-wishlist"></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2 col-md-4 col-lg-4">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="{{asset('vendor/images/loader.svg')}}" data-src="{{asset('vendor/images/product/product-21.jpg')}}" alt=""></span>
								<span class="tt-img-roll-over"><img src="{{asset('vendor/images/loader.svg')}}" data-src="{{asset('vendor/images/product/product-21-02.jpg')}}" alt=""></span>
								<span class="tt-label-location">
									<span class="tt-label-sale">Sale 15%</span>
								</span>
							</a>
							<div class="tt-countdown_box">
								<div class="tt-countdown_inner">
									<div class="tt-countdown"
										data-date="2018-11-08"
										data-year="Yrs"
										data-month="Mths"
										data-week="Wk"
										data-day="Day"
										data-hour="Hrs"
										data-minute="Min"
										data-second="Sec"></div>
								</div>
							</div>
						</div>
						<div class="tt-description">
							<div class="tt-row">
								<ul class="tt-add-info">
									<li><a href="#">T-SHIRTS</a></li>
								</ul>
								<div class="tt-rating">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
								</div>
							</div>
							<h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
							<div class="tt-price">
								<span class="new-price">$14</span>
								<span class="old-price">$24</span>
							</div>
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
								</div>
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
									<a href="#" class="tt-btn-wishlist"></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-2 col-md-4 col-lg-4">
					<div class="tt-product thumbprod-center">
						<div class="tt-image-box">
							<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"	data-tooltip="Quick View" data-tposition="left"></a>
							<a href="#" class="tt-btn-wishlist" data-tooltip="Add to Wishlist" data-tposition="left"></a>
							<a href="#" class="tt-btn-compare" data-tooltip="Add to Compare" data-tposition="left"></a>
							<a href="product.html">
								<span class="tt-img"><img src="{{asset('vendor/images/loader.svg')}}" data-src="{{asset('vendor/images/product/product-24.jpg')}}" alt=""></span>
								<span class="tt-img-roll-over"><img src="{{asset('vendor/images/loader.svg')}}" data-src="{{asset('vendor/images/product/product-24-01.jpg')}}" alt=""></span>
								<span class="tt-label-location">
									<span class="tt-label-sale">Sale 15%</span>
								</span>
							</a>
							<div class="tt-countdown_box">
								<div class="tt-countdown_inner">
									<div class="tt-countdown"
										data-date="2018-10-08"
										data-year="Yrs"
										data-month="Mths"
										data-week="Wk"
										data-day="Day"
										data-hour="Hrs"
										data-minute="Min"
										data-second="Sec"></div>
								</div>
							</div>
						</div>
						<div class="tt-description">
							<div class="tt-row">
								<ul class="tt-add-info">
									<li><a href="#">T-SHIRTS</a></li>
								</ul>
								<div class="tt-rating">
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
									<i class="icon-star"></i>
								</div>
							</div>
							<h2 class="tt-title"><a href="product.html">Flared Shift Dress</a></h2>
							<div class="tt-price">
								<span class="new-price">$14</span>
								<span class="old-price">$24</span>
							</div>
							<div class="tt-product-inside-hover">
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
								</div>
								<div class="tt-row-btn">
									<a href="#" class="tt-btn-quickview" data-toggle="modal" data-target="#ModalquickView"></a>
									<a href="#" class="tt-btn-wishlist"></a>
									<a href="#" class="tt-btn-compare"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-indent">
		<div class="container-fluid-custom">
			<div class="row tt-layout-promo-box">
				<div class="col-sm-6 col-md-4">
					<a href="listing-left-column.html" class="tt-promo-box">
						<img src="{{asset('vendor/images/loader.svg')}}" data-src="{{asset('vendor/images/promo/index05-promo-img-07.jpg')}}" alt="">
						<div class="tt-description">
							<div class="tt-description-wrapper">
								<div class="tt-background"></div>
								<div class="tt-title-small">FALL-WINTER CLEARANCE SALES</div>
								<div class="tt-title-large">GET UP TO <span class="tt-base-color">50% OFF</span></div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-md-4">
					<a href="listing-left-column.html" class="tt-promo-box">
						<img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/promo/index05-promo-img-08.jpg" alt="">
						<div class="tt-description">
							<div class="tt-description-wrapper">
								<div class="tt-background"></div>
								<div class="tt-title-small">SUMMER <span class="tt-base-color">2018</span></div>
								<div class="tt-title-large">NEW ARRIVALS</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-md-4">
					<a href="listing-left-column.html" class="tt-promo-box">
						<img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/promo/index05-promo-img-06.jpg" alt="">
						<div class="tt-description">
							<div class="tt-background"></div>
							<div class="tt-description-wrapper">
								<div class="tt-background"></div>
								<div class="tt-title-small">NEW COLLECTION</div>
								<div class="tt-title-large"><span class="tt-base-color">HANDBAGS</span></div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-indent">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<h6 class="tt-title-sub">NEW PRODUCTS</h6>
					<div class="tt-layout-vertical-listing">
						<div class="tt-item">
							<div class="tt-layout-vertical">
								<div class="tt-img">
									<a href="listing-collection.html">
										<span class="tt-img-default"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-18.jpg" alt=""></span>
										<span class="tt-img-roll-over"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-18-02.jpg" alt=""></span>
									</a>
								</div>
								<div class="tt-description">
									<ul class="tt-add-info">
										<li><a href="#">T-SHIRTS</a></li>
									</ul>
									<h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
									<div class="tt-price">
										$24
									</div>
									<div class="tt-option-block">
										<ul class="tt-options-swatch">
											<li><a class="options-color tt-color-bg-01" href="#"></a></li>
											<li><a class="options-color tt-color-bg-02" href="#"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="tt-item">
							<div class="tt-layout-vertical">
								<div class="tt-img">
									<a href="listing-collection.html">
										<span class="tt-img-default"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-19.jpg" alt=""></span>
										<span class="tt-img-roll-over"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-19-02.jpg" alt=""></span>
									</a>
								</div>
								<div class="tt-description">
									<ul class="tt-add-info">
										<li><a href="#">T-SHIRTS</a></li>
									</ul>
									<h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
									<div class="tt-price">
										$84
									</div>
								</div>
							</div>
						</div>
						<div class="tt-item">
							<div class="tt-layout-vertical">
								<div class="tt-img">
									<a href="listing-collection.html">
										<span class="tt-img-default"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-20.jpg" alt=""></span>
										<span class="tt-img-roll-over"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-20-01.jpg" alt=""></span>
									</a>
								</div>
								<div class="tt-description">
									<ul class="tt-add-info">
										<li><a href="#">T-SHIRTS</a></li>
									</ul>
									<h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
									<div class="tt-price">
										$78
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="divider visible-xs"></div>
				<div class="col-sm-6 col-md-4">
					<h6 class="tt-title-sub">SPECIAL PRODUCTS</h6>
					<div class="tt-layout-vertical-listing">
						<div class="tt-item">
							<div class="tt-layout-vertical">
								<div class="tt-img">
									<a href="listing-collection.html">
										<span class="tt-img-default"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-22.jpg" alt=""></span>
										<span class="tt-img-roll-over"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-22-02.jpg" alt=""></span>
									</a>
								</div>
								<div class="tt-description">
									<ul class="tt-add-info">
										<li><a href="#">T-SHIRTS</a></li>
									</ul>
									<h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
									<div class="tt-price">
										<span class="new-price">$14</span>
										<span class="old-price">$24</span>
									</div>
								</div>
							</div>
						</div>
						<div class="tt-item">
							<div class="tt-layout-vertical">
								<div class="tt-img">
									<a href="listing-collection.html">
										<span class="tt-img-default"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-23.jpg" alt=""></span>
										<span class="tt-img-roll-over"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-23-02.jpg" alt=""></span>
									</a>
								</div>
								<div class="tt-description">
									<ul class="tt-add-info">
										<li><a href="#">T-SHIRTS</a></li>
									</ul>
									<h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
									<div class="tt-price">
										<span class="new-price">$14</span>
										<span class="old-price">$24</span>
									</div>
									<div class="tt-option-block">
										<ul class="tt-options-swatch">
											<li><a class="options-color tt-color-bg-03" href="#"></a></li>
											<li><a class="options-color tt-color-bg-04" href="#"></a></li>
											<li><a class="options-color tt-color-bg-05" href="#"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="tt-item">
							<div class="tt-layout-vertical">
								<div class="tt-img">
									<a href="listing-collection.html">
										<span class="tt-img-default"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-21.jpg" alt=""></span>
										<span class="tt-img-roll-over"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-21-02.jpg" alt=""></span>
									</a>
								</div>
								<div class="tt-description">
									<ul class="tt-add-info">
										<li><a href="#">T-SHIRTS</a></li>
									</ul>
									<h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
									<div class="tt-price">
										<span class="new-price">$34</span>
										<span class="old-price">$74</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="divider visible-sm visible-xs"></div>
				<div class="col-sm-6 col-md-4">
					<h6 class="tt-title-sub">FEATURED PRODUCTS</h6>
					<div class="tt-layout-vertical-listing">
						<div class="tt-item">
							<div class="tt-layout-vertical">
								<div class="tt-img">
									<a href="listing-collection.html">
										<span class="tt-img-default"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-16.jpg" alt=""></span>
										<span class="tt-img-roll-over"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-16-02.jpg" alt=""></span>
									</a>
								</div>
								<div class="tt-description">
									<div class="tt-rating">
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
									</div>
									<ul class="tt-add-info">
										<li><a href="#">T-SHIRTS</a></li>
									</ul>
									<h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
									<div class="tt-price">
										$24
									</div>
								</div>
							</div>
						</div>
						<div class="tt-item">
							<div class="tt-layout-vertical">
								<div class="tt-img">
									<a href="listing-collection.html">
										<span class="tt-img-default"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-12.jpg" alt=""></span>
										<span class="tt-img-roll-over"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-12-01.jpg" alt=""></span>
									</a>
								</div>
								<div class="tt-description">
									<div class="tt-rating">
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
									</div>
									<ul class="tt-add-info">
										<li><a href="#">T-SHIRTS</a></li>
									</ul>
									<h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
									<div class="tt-price">
										$178
									</div>
								</div>
							</div>
						</div>
						<div class="tt-item">
							<div class="tt-layout-vertical">
								<div class="tt-img">
									<a href="listing-collection.html">
										<span class="tt-img-default"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-13.jpg" alt=""></span>
										<span class="tt-img-roll-over"><img src="{{asset('vendor/')}}images/loader.svg" data-src="{{asset('vendor/')}}images/product/product-13-02.jpg" alt=""></span>
									</a>
								</div>
								<div class="tt-description">
									<div class="tt-rating">
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
										<i class="icon-star"></i>
									</div>
									<ul class="tt-add-info">
										<li><a href="#">T-SHIRTS</a></li>
									</ul>
									<h6 class="tt-title"><a href="#">Flared Shift Dress</a></h6>
									<div class="tt-price">
										$54
									</div>
										<div class="tt-option-block">
											<ul class="tt-options-swatch">
												<li><a class="options-color tt-color-bg-01" href="#"></a></li>
												<li><a class="options-color tt-color-bg-02" href="#"></a></li>
											</ul>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-indent">
		<div class="container-fluid">
			<div class="tt-block-title">
				<h2 class="tt-title"><a target="_blank" href="https://www.instagram.com/wokieeshop/">@ FOLLOW</a> US ON</h2>
				<div class="tt-description">INSTAGRAM</div>
			</div>
			<div class="row">
				<div id="instafeed" class="instafeed-fluid"
					data-accessToken="8626857013.dd09515.0fcd8351c65140d48f5a340693af1c3f"
					data-clientId="dd095157744c4bd0a67181fc4906e5b6"
					data-userId="8626857013"
					data-limitImg="6">
				</div>
			</div>
		</div>
	</div>
	<div class="container-indent">
		<div class="container">
			<div class="row tt-services-listing tt-services-listing-aligment">
				<div class="col-xs-12 col-md-6 col-lg-4">
					<a href="#" class="tt-services-block">
						<div class="tt-col-icon">
							<i class="icon-f-48"></i>
						</div>
						<div class="tt-col-description">
							<h4 class="tt-title">FREE SHIPPING</h4>
							<p>Free shipping on all US order or order above $99</p>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-4">
					<a href="#" class="tt-services-block">
						<div class="tt-col-icon">
							<i class="icon-f-35"></i>
						</div>
						<div class="tt-col-description">
							<h4 class="tt-title">SUPPORT 24/7</h4>
							<p>Contact us 24 hours a day, 7 days a week</p>
						</div>
					</a>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-4">
					<a href="#" class="tt-services-block">
						<div class="tt-col-icon">
							<i class="icon-e-09"></i>
						</div>
						<div class="tt-col-description">
							<h4 class="tt-title">30 DAYS RETURN</h4>
							<p>Simply return it within 24 days for an exchange.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
@stop()