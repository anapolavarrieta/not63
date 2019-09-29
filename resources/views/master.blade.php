<!DOCTYPE html>
<html lang="en">
<head>
	<title>
		@yield ('title', 'Notaria 63')
	</title>

	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel='stylesheet' href="{{URL::asset('/css/style.css')}}" type='text/css'>
	<link rel='stylesheet' href="{{URL::asset('/css/generico.css')}}" type='text/css'>





	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <script src="{{URL::asset('/js/not63.js')}}"></script>
    <!--link href="{{URL::asset('/css/Bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"-->
    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
    <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script-->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    @stack('head')

</head>

<body>

	<div class="container-fluid px-0 h-100">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="/">
				<img src= "{{URL::asset('/images/logo.png')}}" height= "100px" alt="Notaria63 Logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="/notario">El Notario <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/directorio">Directorio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/servicios">Servicios y Formatos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/ligas">Ligas de interés</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="/preguntas">Preguntas Frecuentes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/contacto">Contacto</a>
					</li>
				</ul>
			</div>
		</nav>
		<hr class="firstline"></hr>
		<hr class="secondline"></hr>
      	@yield('content')

      	<footer class="footer">
      		<div class="container d-none d-sm-block">
        		<div class="row">
			      <div class="col-sm-2" id="footerImg">
			      	<img class="img-fluid footerImg" src="{{URL::asset('/images/footer1.jpg')}}" alt="Notario63" >
			      </div>
			      <div class="col-sm-2" id="footerImg">
			      	<img class="img-fluid footerImg" src= "{{URL::asset('/images/footer2.jpg')}}" alt="Notaria63">
			      </div>
			      <div class="col-sm-2" id="footerImg">
			      	<img class="img-fluid footerImg" src= "{{URL::asset('/images/footer3.JPG')}}" alt="Notaria63">
			      </div>
			      <div class="col-sm-2" id="footerImg">
			      	<img class="img-fluid footerImg" src= "{{URL::asset('/images/footer4.JPG')}}" alt="Notaria63">
			      </div>
			      <div class="col-sm-2" id="footerImg">
			      	<img class="img-fluid footerImg" src= "{{URL::asset('/images/footer5.JPG')}}" alt="Notaria63">
			      </div>
			      <div class="col-sm-2" id="footerImg">
			      	<img class="img-fluid footerImg" src= "{{URL::asset('/images/footer6.JPG')}}" alt="Notaria63">
			      </div>
			  </div>
      		</div>
    	</footer>
	</div>

</body>
</html>
