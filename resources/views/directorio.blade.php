@extends('master')

	@section ('title')
		Directorio
	@endsection

	@section ('content')
    
  <h1 class="titulo">DIRECTORIO</h1>
  
  <div class="row">
      <div class="col-sm-4 directorio">
        <ul class="directorio">
          <li>Juan Martinez</li>
          <li>juan.martinez@gmail.com</li>
        </ul>
        <ul class="directorio">
          <li>Fernanda Perez</li>
          <li>fernanda.perez@gmail.com</li>
        </uL>
      </div>
      <div class="col-sm-4">
        <img class="directorio" src= "{{URL::asset('/images/directorio.jpg')}}" alt="Directorio"></img>
      </div>
      <div class="col-sm-4 directorio">
        <ul class="directorio">
          <li>Jimena Sanchez</li>
          <li>jimena.sanchez@gmail.com</li>
        </ul>
        <ul class="directorio">
          <li>Fernanda Jimenez</li>
          <li>fernanda.jimenez@gmail.com</li>
        </uL>
      </div>
  </div>


    	
  @endsection

