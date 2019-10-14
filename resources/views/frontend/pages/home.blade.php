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
								{{-- <p>Oberlo allows you to easily import dropshipped products directly into your ecommerce store</p> --}}
								<a href="listing-collection.html" class="btn btn-xl">COMPRAR AHORA!</a>
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
@stop()