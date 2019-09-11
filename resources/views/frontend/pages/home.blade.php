@extends("frontend.layout.main")
@section("content")
	<div class="container-indent nomargin">
		<div class="container-fluid">
			<div class="row no-gutter">
				<div class="col-sm-12 no-gutter">
					<div class="tt-promo-fullwidth">
						<img src="images/loader.svg" data-src="{{ asset('vendor/images/promo/index03-promo-img-01.jpg') }}" alt="">
						<div class="tt-description">
							<div class="tt-description-wrapper">
								<div class="tt-title-small">DyESTIL</div>
								<div class="tt-title-large">ENCUENTRA PRODUCTOS<br> PARA COMPRAR</div>
								<p>Oberlo allows you to easily import dropshipped products directly into your ecommerce store</p>
								<a href="listing-collection.html" class="btn btn-xl">SHOP NOW!</a>
							</div>
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
								<div class="tt-title-small">PLAYERAS</div>
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
								<div class="tt-title-small">GALERIA</div>
							</div>
						</div>
					</a>
					<a href="listing-left-column.html" class="tt-promo-box tt-one-child hover-type-2">
						<img src="{{asset('vendor/images/loader.svg')}}" data-src="{{asset('vendor/images/promo/index05-promo-img-03.jpg')}}" alt="">
						<div class="tt-description">
							<div class="tt-description-wrapper">
								<div class="tt-background"></div>
								<div class="tt-title-small">SERVICIOS</div>
							</div>
						</div>
					</a>
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
								<div class="tt-title-small">NUEVO:</div>
								<div class="tt-title-large">COLECCIÓN</div>
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
								<div class="tt-title-small">PRECIOS ACCESIBLES</div>
								<div class="tt-title-large">DESDE <span class="tt-base-color">20% DESCUENTO</span></div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	{{-- <div class="container-indent">
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
	</div> --}}
	{{-- <div class="container-indent">
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
	</div> --}}
@stop()