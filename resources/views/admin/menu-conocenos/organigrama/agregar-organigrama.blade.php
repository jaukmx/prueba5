@extends('layouts.administrador')

@section('title', 'Agregar Elementos Organigrama')

@section('content')

	<!--------------------------------------------------------------- AGREGAR ORGANIGRAMA ----------------------------------------------------------> 

  <div class="seccion-principal">
    
      <div class="contenedor-titulo-seccion">

        <h3>Agregar Datos</h3>

    </div>

    <div class="formulario"> 
          <label for="">Cargo / Departamento</label>
          <input type="text" name="" id ="informacion-perfil" value="" placeholder="Cargo / Departamento" class="form-control">
    </div>

    <div class="formulario"> 
          <label for="">Nombre</label>
          <input type="text" name="" id ="informacion-perfil" value="" placeholder="Nombre Completo" class="form-control">
    </div>

    <div class="contenedor-botones">
                
        <button class="btn"><span>Guardar</span></button>
        <button class="btn"><span>Cancelar</span></button>

    </div>

  </div>

@endsection