@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="col-12">
<a href="{{ url('/') }}" title="Crear"  class="btn btn-primary m-2">
              Regresar
          </a>
</div>

<form name="frmRegistrar" method="POST" action="{{ url('/paciente/guardar') }}" class="row g-3 needs-validation">
    @csrf
  <div class="col-md-4">
    <label for="documento" class="form-label">Documento</label>
    <input type="text" id="documento" class="form-control" id="documento" name="documento" required>
     
  </div>

  <div class="col-md-4">
    <label for="tipoDocumento" class="form-label">Tipo documento</label>
    <input type="text" class="form-control" id="tipoDocumento" name="tipoDocumento" required>
  </div>

  <div class="col-md-4">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required>
  </div>

  <div class="col-md-4">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="text" class="form-control" id="apellido" name="apellido" required> 
  </div>

  <div class="col-md-4">
    <label for="direccion" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="direccion" name="direccion" required> 
  </div>

  <div class="col-md-4">
    <label for="telefono" class="form-label">Telefono</label>
    <input type="text" class="form-control" id="telefono" name="telefono" required> 
  </div>

  <div class="col-md-4">
    <label for="genero" class="form-label">Genero</label>
    <input type="text" class="form-control" id="genero" name="genero" required> 
  </div>

  <div class="col-md-4">
    <label for="fechaNacimiento" class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" required> 
  </div>

  <div class="col-md-4">
    <label for="estadoCivil" class="form-label">Estado civil</label>
    <input type="text" class="form-control" id="estadoCivil" name="estadoCivil" required> 
  </div>
  
  
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12 d-flex justify-content-center">
    <button class="btn btn-primary m-2" type="submit">Registrar paciente</button>
  </div>
</form>


@endsection