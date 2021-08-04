@extends('layouts.master')

@section('title')
  Materias   
@endsection

@section('content')
<div class="container py-2">

    <h1 class="text-center">Materias</h1>
    <div class="row">
      <div class="col-md-5">
        <div class="card">
          <div class="card-body">
            <form id="formMaterias" autocomplete="off">
              <legend>Ingresar nueva materia</legend>
              <div class="form-group">
                <label for="materiaName" class="form-label">Nombre de materia:</label>
                <input type="hidden" id="materiaId">
                <input type="text" class="form-control" id="materiaName"  placeholder="Ingrese el nombre de la materia" required>
                <button class="btn btn-primary my-3">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <table id="tableMaterias" class="table text-center  table-sm" s>
          <thead>
            <tr >
              <td>#</td>
              <td>Nombre</td>
              <td>Acciones</td>
            </tr> 
          </thead>
          <tbody id="materias">
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
    @endsection
    
@section('scripts')
<script src="{{asset('js/modulos/materias.js')}}"></script>
@endsection