@extends("frontend.layout.main-basic")
@section("content")
	<div class="tt-breadcrumb">
		<div class="container">
			<ul>
				<li><a href="{{ route('home') }}">Home</a></li>
				<li>Contacto</li>
			</ul>
		</div>
	</div>
	{{-- <div class="container-indent">
		<div class="container">
			<div class="contact-map">
				<div id="map"></div>
			</div>
		</div>
	</div> --}}
	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<div class="tt-contact02-col-list">
				<div class="row">
					<div class="col-sm-12 col-md-6 ml-sm-auto mr-sm-auto">
						<div class="tt-contact-info">
							<i class="tt-icon icon-f-93"></i>
							<h6 class="tt-title">Telefonos</h6>
							<address>
								+777 2345 7885:<br>
								+777 2345 7886
							</address>
						</div>
					</div>
					{{-- <div class="col-sm-6 col-md-4">
						<div class="tt-contact-info">
							<i class="tt-icon icon-f-24"></i>
							<h6 class="tt-title">VISIT OUR LOCATION</h6>
							<address>
								2548 Broaddus Maple Court Avenue,<br>
								Madisonville KY 4783,<br>
								United States of America
							</address>
						</div>
					</div> --}}
					<div class="col-sm-6 col-md-6">
						<div class="tt-contact-info">
							<i class="tt-icon icon-f-92"></i>
							<h6 class="tt-title">Horarios</h6>
							<address>
								7 Días a la semana<br>
								de 10 AM a 6 PM
							</address>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-indent">
		<div class="container container-fluid-custom-mobile-padding">
			<form id="contactform" class="contact-form form-default" method="post" novalidate="novalidate" action="#">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" name="name" class="form-control" id="inputName" placeholder="Nombre (requerido)">
						</div>
						<div class="form-group">
							<input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email (requerido)">
						</div>
						<div class="form-group">
							<input type="text" name="subject" class="form-control" id="inputSubject" placeholder="Razón">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<textarea  name="message" class="form-control" rows="7" placeholder="Tu mensaje"  id="textareaMessage"></textarea>
						</div>
					</div>
				</div>
				<div class="text-center">
					<button type="submit" class="btn">ENVIAR MENSAJE</button>
				</div>
			</form>
		</div>
	</div>
@stop()