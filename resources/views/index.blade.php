@extends('layout.principal')

@section('title')

@section('styles')
	<style>
       	/* Set the size of the div element that contains the map */
      	#map {
        	height: 400px;  /* The height is 400 pixels */
        	width: 100%;  /* The width is the width of the web page */
       	}
    </style>
@endsection

@section('content')
	<div class="row slider-principal color-white border-bottom-orange">
		<div class="col-xs-12">
			<div class="container">
				<div class="row">
					<div class="col-xs-6 hidden-md hidden-lg hidden-xl btn-send-container text-center">
						<a href="whatsapp://send?phone=+5215543315214" class="btn btn-default font-size-16 color-white"><span class="color-green">></span> <span class="underline underline-green">Envía</span> un Mensaje <img src="{{ URL::to('assets/images/index/wa.png') }}" alt="..." class="social-icons"></a>
					</div>
					<div class="col-xs-6 col-md-5 text-center hidden-md hidden-lg hidden-xl">
						<img src="{{ URL::to('assets/images/index/hombre1.png') }}" alt="..." class="">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-md-7 info-icons">
						<div class="row padding-top-50">
							<div class="col-xs-12 col-sm-2 text-center">
								<img src="{{ URL::to('assets/images/index/icono1.png') }}" alt="..." class="icono-slider-home">
							</div>
							<div class="col-xs-12 col-sm-4 text-center text-slider-home-2">18 MESES<br>DE GARANTÍA</div>
							<div class="col-xs-12 col-sm-2 text-center">
								<img src="{{ URL::to('assets/images/index/icono2.png') }}" alt="..." class="icono-slider-home info-icons-top">
							</div>
							<div class="col-xs-12 col-sm-4 text-center text-slider-home-1">24 HORAS</div>
						</div>
						<div class="row padding-top-50">
							<div class="col-xs-12 col-sm-2 text-center">
								<img src="{{ URL::to('assets/images/index/icono3.png') }}" alt="..." class="icono-slider-home">
							</div>
							<div class="col-xs-12 col-sm-4 text-center text-slider-home-2">REPARACIÓN<br>EL MISMO DÍA</div>
							<div class="col-xs-12 col-sm-2 text-center">
								<img src="{{ URL::to('assets/images/index/icono4.png') }}" alt="..." class="icono-slider-home info-icons-top">
							</div>
							<div class="col-xs-12 col-sm-4 text-center text-slider-home-2">MEJORAMOS<br>PRESUPUESTOS</div>
						</div>
						<div class="row padding-top-50">
							<div class="col-xs-12 col-sm-3 text-center"></div>
							<div class="col-xs-12 col-sm-2 text-center">
								<img src="{{ URL::to('assets/images/index/icono5.png') }}" alt="..." class="icono-slider-home">
							</div>
							<div class="col-xs-12 col-sm-4 text-center text-slider-home-2">ATENCIÓN LOS<br>365 DÍAS</div>
							<div class="col-xs-12 col-sm-3 text-center"></div>
						</div>
						<p class="hidden-lg hidden-xl"></p>
					</div>
					<div class="col-md-5 text-center hidden-xs hidden-sm">
						<img src="{{ URL::to('assets/images/index/hombre1.png') }}" alt="..." class="">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="services" class="row contact-us">
		<div class="col-xs-12">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="text-center color-blue">Contáctanos Ahora</h2>
					<p class="text-center font-size-19"><span class="color-orange">></span> <span class="underline underline-orange">Atención</span> Inmediata:</p>
					<p class="text-center font-size-19">43315214 // 58714282 // 5561103023</p>
					<p class="text-center font-size-19"><span class="color-green">></span> <span class="underline underline-green">Envía un Mensaje</span> <a href="tel:+5215543315214"><img src="{{ URL::to('assets/images/index/wa.png') }}" alt="..." class="social-icons"></a></p>
				</div>
			</div>
			<div class="row container-fluid">
				<div class="col-md-6 text-center">
					<img src="{{ URL::to('assets/images/index/reparacion1.png') }}" alt="...">
					<p class="text-center font-size-19"><span class="color-orange">></span> <span class="underline underline-orange">Reparación</span> de Refrigeradores</p>
					<div class="row">
						<div class="col-xs-6 text-left">
							<p class="font-size-16">18 Meses de Garantía</p>
							<p class="font-size-16">Reparación el Mismo Día</p>
							<p class="font-size-16">Refacciones Originales</p>
						</div>
						<div class="col-xs-6 text-left">
							<p class="font-size-16">Servicio 24 Hrs.</p>
							<p class="font-size-16">Mejoramos Presupuestos</p>
							<p class="font-size-16">Servicio 365 Días del Año</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 text-center">
					<img src="{{ URL::to('assets/images/index/reparacion1.png') }}" alt="...">
					<p class="text-center font-size-19"><span class="color-orange">></span> <span class="underline underline-orange">Reparación</span> de Equipos de Lavado</p>
					<div class="row">
						<div class="col-xs-6 text-left">
							<p class="font-size-16">18 Meses de Garantía</p>
							<p class="font-size-16">Reparación el Mismo Día</p>
							<p class="font-size-16">Refacciones Originales</p>
						</div>
						<div class="col-xs-6 text-left">
							<p class="font-size-16">Servicio 24 Hrs.</p>
							<p class="font-size-16">Mejoramos Presupuestos</p>
							<p class="font-size-16">Servicio 365 Días del Año</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="coverage" class="row bg-blue color-white module-address">
		<div class="col-xs-12">
			<p class="text-center font-size-16">Mantenimiento Preventivo y Correctivo para Equipos de Refrigeración y Lavado Doméstico y Comercial</p>
			<p class="text-center font-size-16"><strong>Zonas de Cobertura: Valle Dorado, Satélite, Polanco, Naucalpan, Santa Mónica y Zona Norte del Estado de México</strong></p>
		</div>
	</div>

    <div class="row border-bottom-orange">
    	<div class="col-xs-12">
    		<div id="map"></div>
    	</div>
    </div>

	<div id="contact" class="container">
		<div class="row contact">
	    	<div class="col-xs-12">
	    		<h2 class="text-center">Contacto</h2>
				<p class="text-center font-size-16">Para ofrecerle un mejor servicio, favor de llenar el siguiente formulario y en breve nos comunicaremos con usted.</p>
				<div class="row padding-top-50">
					<div class="col-md-6 text-center hidden-xs hidden-sm">
						<img src="{{ URL::to('assets/images/index/hombre2.png') }}" alt="...">
					</div>
					<div class="col-md-6">
				      {!! Form::open(['route' => 'contact', 'method' => 'post', 'id' => 'formValidation', 'class' => 'form-horizontal']) !!}
				          <div class="form-group {{ $errors->first('name') ? 'has-error' : '' }}">
				              <div class="col-sm-12">
				              	  <label for="name">Nombre y Apellido:</label>
				                  {!! Form::text('name', old('name'), ['id' => 'name', 'class' => 'form-control']) !!}
				                  <span class="help-block">{{ $errors->first('name', ':message') }}</span>
				              </div>
				          </div>
				          <div class="form-group {{ $errors->first('email') ? 'has-error' : '' }}">
				              <div class="col-sm-12">
				              	  <label for="email">Correo Electrónico:</label>
				                  {!! Form::text('email', old('email'), ['id' => 'email', 'class' => 'form-control']) !!}
				                  <span class="help-block">{{ $errors->first('email', ':message') }}</span>
				              </div>
				          </div>
				          <div class="form-group {{ $errors->first('phone') ? 'has-error' : '' }}">
				              <div class="col-sm-12">
				              	  <label for="phone">Teléfono:</label>
				                  {!! Form::text('phone', old('phone'), ['id' => 'phone', 'class' => 'form-control']) !!}
				                  <span class="help-block">{{ $errors->first('phone', ':message') }}</span>
				              </div>
				          </div>
				          <div class="form-group {{ $errors->first('message') ? 'has-error' : '' }}">
				              <div class="col-sm-12">
				              	  <label for="message">Comentarios:</label>
				                  {!! Form::textarea('message', old('message'), ['id' => 'message', 'class' => 'form-control']) !!}
				                  <span class="help-block">{{ $errors->first('message', ':message') }}</span>
				              </div>
				          </div>
				          <div class="form-group">
				              <div class="col-sm-12">
				                  {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
				              </div>
				          </div>
				      {!! Form::close() !!}
					</div>
				</div>
				<p class="text-center font-size-19"><span class="color-orange">></span> <span class="underline underline-orange">Contáctanos</span>, Atención Inmediata: 43315214 // 58714282 // 5561103023</p>
	    	</div>
	    </div>
	</div>
@endsection

@section('scripts')
	<script>
		// Initialize and add the map
		function initMap() {
  			// The location of Uluru
  			var uluru = {lat: 19.5261857, lng: -99.2695107};
  			// The map, centered at Uluru
  			var map = new google.maps.Map(
      			document.getElementById('map'), {zoom: 18, center: uluru});

  			var contentString = '<div id="content">'+
      			'<div id="siteNotice">'+
		      	'</div>'+
		      	'<h1 id="firstHeading" class="firstHeading">Escuela de Fútbol Pumas Madín</h1>'+
		      	'<div id="bodyContent">'+
		      	'<p>Calle 2 s/n, Col. Nuevo Madín, Atizapán de Zaragoza, C.P. 52989</p>'+
		      	'</div>'+
		      	'</div>';

  			var infowindow = new google.maps.InfoWindow({
    			content: contentString
  			});

  			// The marker, positioned at Uluru
  			var marker = new google.maps.Marker({position: uluru, map: map, title: 'Escuela de Fútbol Pumas Madín'});
  			marker.addListener('click', function() {
    			infowindow.open(map, marker);
  			});
		}
    </script>
    
	@include('website.formvalidation.contact')
@endsection