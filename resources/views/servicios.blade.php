@extends('master')

	@section ('title')
		Servicios y Formatos
	@endsection

	@section ('content')
    <h1 class="titulo">SERVICIOS Y FORMATOS</h1>
	</br>
	<div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h2 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Operaciones en las que se transmita o modifique un inmueble
            </button>
          </h2>
        </div>
      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
          <ul>
          	<li>Compra Venta de Terreno</li>
          	<li>Constitución de Régimen de Propiedad en condominio</li>
          	<li>Donación en pago</li>
          	<li>Donación en terreno</li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Sociedades mercantiles, civiles y asociaciones
          </button>
        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
          <ul>
          	<li>Constitución de asosicaciones civiles</li>
          	<li>Constitución de otro tipo de sociedades</li>
          	<li>Constitución de sociedad anónima de capital variable</li>
          	<li>Constitución de sociedades civiles</li>
          </ul>
        </div>
      </div>
    </div>
  
    <div class="card">
      <div class="card-header" id="headingThree">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Operaciones de Garantía
          </button>
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          <ul>
          	<li>Apertura de crédito en cuenta corriente con garantías</li>
          	<li>Fideicomisos</li>
          	<li>Mutuo con garantía hipotecaria</li>
          	<li>Reconocimiento de adeudo con garantía hipotecaria</li>
          </ul>
        </div>
      </div>
    </div>

	<div class="card">
      <div class="card-header" id="headingFour">
        <h2 class="mb-0">
          <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Sucesorios
          </button>
        </h2>
      </div>
      <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
          <ul>
          	<li>Orden de trabajo de testamento</li>
          	<li>Testamento público abierto</li>
          	<li>Sucesiones intestamentarias</li>
          	<li>Sucesiones testamentarias</li>
          	<li>Testamento</li>
          </ul>
        </div>
      </div>
    </div>

  </div>



    	
  @endsection

