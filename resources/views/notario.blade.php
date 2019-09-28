@extends('master')

	@section ('title')
		El Notario
	@endsection

	@section ('content')
	<div class="row">
	        <div class="col-sm-5 center d-none d-sm-block d-md-none">
            </div>
            <div class="col-sm-2 center d-none d-sm-block d-md-none">
                <img src="{{URL::asset('/images/notario.jpg')}}" class="img-fluid notario center" alt="Notario" >
            </div>
            <div class="col-sm-5 center d-none d-sm-block d-md-none">
            </div>

	        <div class="col-sm-4 center d-none d-md-block d-lg-none">
            </div>
            <div class="col-sm-4 center d-none d-md-block d-lg-none">
                <img src="{{URL::asset('/images/notario.jpg')}}" class="img-fluid notario center" alt="Notario" >
            </div>
            <div class="col-sm-4 center d-none d-md-block d-lg-none">
            </div>

            <div class="col-sm-1 center d-block d-lg-none">
            </div>

            <div class="col-sm-2 d-none d-lg-block">
                <img src="{{URL::asset('/images/notario.jpg')}}" class="img-fluid notario center" alt="Notario" >
            </div>



    <div class="col-sm-10 center">
	<div class="col-sm-12" id="nombreNotario">

		<h1 class="titulo">Dr. Othon Pérez Fernandez del Castillo</h1>
		<br>
	</div>

	<div class="col-sm-12">
		<div class="accordion" id="accordionExample">
			<div class="card">
				<div class="card-header" id="headingOne">
					<h2 class="mb-0">
						<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Títulos y grados
						</button>
					</h2>
				</div>
				<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
						<ul>
							<li>Licenciado en Derecho, UNAM </li>
							<li>Especialidad en Derecho privado, UNAM </li>
							<li>Maestría en Derecho con mención honorífica, UNAM </li>
						</ul>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header" id="headingTwo">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Grados
						</button>
					</h2>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					<div class="card-body">
						<ul>
							<li>Presidente del Colegio de Profesores de Derecho Civil </li>
							<li>Presidente de la revista "Foro Jurídico" </li>
							<li>Presidente de la Comisión de Derecho Civil de la Barra Mexicana, Colegio de Abogados</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header" id="headingThree">
					<h2 class="mb-0">
						<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Congresos, cursos y diplomados
						</button>
					</h2>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
					<div class="card-body">
						<ul>
							<li>Ha dictado conferencias en todos los estados de la república </li>
							<li>Reponsable y organizador de los 8 Congresos Nacionales de Doctores en Derecho </li>
							<li>Responsable y organizador de los 2 Congresos Internacionales de Derecho Civil.</li>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>

</div>
</div>

  @endsection

