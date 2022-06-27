@extends('layouts.app')

@section('title', 'Home')


@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@endsection

@section('content')

   
    <h1 class="text-center container mt-5 pt-5 fs-1">App Medical</h1>
    <a href="{{ url('/paciente/crear') }}" title="Crear"  class="btn btn-primary mx-5 mb-2">
              Registrar paciente
    </a>

    
<div class="card d-flex justify-content-center" style="width:95%;margin:auto;">
  <div class="card-body">


     
 <table class="table table-striped " id="pacientes">
    <thead>
        <tr>
            <th>Id</th>
            <th>Documento</th>
            <th>Tipo documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Genero</th>
            <th>Fecha nacimiento</th>
            <th>Estado civil</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
      @foreach($pacientes as $paciente) 
        <tr>
            <td>{{ $paciente->id }}</td>
            <td>{{ $paciente->documento }}</td>
            <td>{{ $paciente->tipoDocumento }}</td>
            <td>{{ $paciente->nombre }}</td>
            <td>{{ $paciente->apellido }}</td>
            <td>{{ $paciente->direccion }}</td>
            <td>{{ $paciente->telefono }}</td>
            <td>{{ $paciente->genero }}</td>
            <td>{{ $paciente->fechaNacimiento }}</td>
            <td>{{ $paciente->estadoCivil }}</td>

             <td class="project-actions text-right">
                <form action="{{ url('/paciente/eliminar',$paciente) }}" method="POST">
                    @csrf
                          <a class="btn btn-info btn-sm" href="{{ url('/paciente/editar', $paciente->id) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Editar
                          </a>

                            @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm">
                              <i class="fas fa-trash">
                              </i>
                              Eliminar
                          </button>
                        </form>
                      </td>
        </tr>
      @endforeach   
    </tbody>
 </table>

  </div>
</div>

 @section('js')
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

  <script>
    $(document).ready(function () {
    $('#pacientes').DataTable();
    });
  </script>
 @endsection
 

@endsection

