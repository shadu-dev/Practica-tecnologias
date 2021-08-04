@extends('layouts.master')

@section('title')
  Alumnos   
@endsection

@section('content')
<div class="container">

<h1 class="text-center">Alumnos</h1>

<!-- Modal formulario alumno -->
  <div class="modal fade" id="modal-form-alumno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="alumnoModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" id="formularioAlumno" autocomplete="off">

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre del alumno">
            </div>
            <div class="row gx-2 mb-3">
              <div class="col">
                <label for="codigo" class="form-label">Código:</label>
                <input type="text" class="form-control" id="codigo" placeholder="Ingrese el código del alumno">
              </div>
              <div class="col">
                <label for="exampleInputEmail1" class="form-label">Edad:</label>
                <input type="number" class="form-control" id="edad" placeholder="Ingrese edad del alumno">
              </div>
            </div>
            <div class="row gx-2 mb-3">
              <div class="col">
                <label for="sexo" class="form-label">Sexo:</label>
                <select id="sexo" class="form-select">
                  <option disabled selected>Seleccione sexo</option>
                  <option value="femenino">Femenino</option>
                  <option value="masculino">Masculino</option>
                </select>
              </div>
              <div class="col">
                <label for="sexo" class="form-label">Grado:</label>
                <select id="grado" class="form-select">
                  <option disabled selected>Seleccione grado</option>
                  @isset($grados)
                    @foreach ($grados as $grado)
                        <option value="{{$grado->grd_id}}">{{$grado->grd_nombre}}</option>
                    @endforeach
                  @endisset
                </select>
              </div>
            </div>
            <div>
              <label for="observacion" class="form-label">Descripción</label>
              <textarea id="observacion" cols="20" rows="5" class="form-control" placeholder="Ingrese descripción del alumno"></textarea>
          </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" id="btnAddAlumno">Guardar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Fila de formulario de busqueda de alumno y de boton de agregar alumno-->
  <div class="row d-flex justify-content-between ">
    <div class="col-md-5 mb-2 text-center">
      <form class="d-flex" autocomplete="off">
        <div class="input-group">
            <input type="search" id="search" class="form-control" placeholder="Buscar alumno por nombre">
            <div class="input-group-append">
                  <button class="btn btn-primary" type="submit" id="btn-buscar-alumno">
                    <i class="bi bi-search"></i>
                  </button>
            </div>
        </div>
    </form>
    </div>
    <div class="col-md-3 mb-2 text-center" >
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-form-alumno">
        Agregar alumno
      </button>
    </div>
  </div>

  <!-- Tabla para visualizar alumnos -->
  <div class="row px-3">
    <table id="table-alumnos" class="table text-center table-sm" >
      <thead>
        <tr>
          <td>#</td>
          <td>Nombre</td>
          <td>Código</td>
          <td>Grado</td>
          <td>Acciones</td>
        </tr> 
      </thead>
      <tbody id="alumnosTable">

      </tbody>
    </table>
  </div>

  <nav id="pagination-table-alumnos" class="user-select-none">
    <ul class="pagination justify-content-center">
      <li class="page-item me-5 disabled" id="pag-anterior">
        <a class="page-link" href="">Anterior</a>
      </li>
     <li class="page-item disabled" id="pag-siguiente">
        <a class="page-link" href="">Siguiente</a>
      </li>
    </ul>
  </nav>
  
</div>
@endsection

@section('scripts')
<script src="{{asset('/js/modulos/alumnos.js')}}"></script>
@endsection