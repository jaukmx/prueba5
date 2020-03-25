@extends('layouts.administrador')

@section('title', 'Reticula')

@section('content')

		<!----------------------------------------------------------------- FORMULARIO - CARGAR RETICULA ---------------------------------------------------------->
		<form class="form-group" method="POST" action="/NuevoElementoRet/{{$reticula->slug}}" enctype="multipart/form-data">
			@method('PUT')
	    	@csrf

			<div class="formulario">
				
				<label for="">Titulo</label>
				<input type="text" name="titulo" id="titulo-ret" value="{{$reticula->titulo}}" placeholder="Inserte Título Deseado" class="form-control">

			</div>

			<div class="formulario">
				
				<label for="">Programa</label>
				<input type="text" name="programa" id="programa-ret" value="{{$reticula->programa}}" placeholder="Inserte Nombre Programa Educativo" class="form-control">

			</div>

			<div class="formulario">
				
				<label for="">Plan</label>
				<input type="text" name="plan" id="plan-ret" value="{{$reticula->plan}}" placeholder="Inserte Plan Estudio" class="form-control">

			</div>

			<div class="formulario">
				
				<label for="">Especialidad</label>
				<input type="text" name="especialidad" id="especialidad-ret" value="{{$reticula->especialidad}}" placeholder="Inserte Especialidad" class="form-control">

			</div>

			<div class="formulario">
				
				<label for="">Nombre único</label>
				<input type="text" name="slug" id="slug-ret" value="{{$reticula->slug}}" placeholder="Inserte Identificador Único" class="form-control">

			</div>

			<div class="contenedor-cargar-img">

					<div class="contenedor-txt-seccion">
						
						<label for="">Cargar Archivo</label>

					</div>

					<div class="contenedor-boton-cargar">

						<label for="file-upload" class="subir">
							<i class="fas fa-cloud-upload-alt"></i> Subir Archivo
						</label>
							
						<input id="file-upload"  onchange='cambiar()' name="doc" type="file" style='display: none;'/>

						<div class="cargar-doc-pdf">

							<i class="icono fas fa-file-pdf"></i>
							<div id="info-img">{{$reticula->documento}}</div>
							
						</div>
						
					</div>

			</div>

			<div class="contenedor-botones">
		                
		        <button class="btn" type="submit"><span>Guardar</span></button>
		        
		    </div>


		</form>

		<div class="contenedor-botones">
		                
		     <a href="{{route('reticula')}}"><button class="btn"><span>Cancelar</span></button></a>
		        
		</div>

@endsection