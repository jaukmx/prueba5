@extends('layouts.administrador')

@section('title', 'Editar Elemento Perfil Egreso')

@section('content')

	<!--------------------------------------------------------------- CREAR SECCION CONOCENOS PERFIL ----------------------------------------------------------> 

	  <div class="seccion-principal">
	    
	      <div class="contenedor-titulo-seccion">

	        <h3>Actualizar Datos</h3>

	    </div>

	    <div class="formulario"> 
	      
	          <label for="">Viñeta</label>
	          <input type="text" name="" id ="viñeta" value="" placeholder="Inserte Viñeta" class="form-control">
	    </div>

	    <div class="formulario"> 
	          <label for="">Información</label>
	          <input type="text" name="" id ="informacion-perfil" value="" placeholder="Ingrese Información Deseada" class="form-control">
	    </div>

	    <div class="contenedor-botones">
	                
	        <button class="btn"><span>Guardar</span></button>
	        <button class="btn"><span>Cancelar</span></button>

	    </div>

	  </div>

@endsection