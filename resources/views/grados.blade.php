@extends('layouts.master')

@section('title')
  Grados   
@endsection

@section('content')
<div class="container py-2">

    <h1>Mantenimiento de los grados</h1>
    <div class="row">
      <div class="col-md-5">
        <div class="card">
          <div class="card-body">
            <form id="formGrados" autocomplete="off">
              <div class="form-group">
                <label for="gradoName" class="form-label">Nombre del grado:</label>
                <input type="hidden" id="gradoId">
                <input type="text" class="form-control" id="gradoName"  placeholder="Ingrese el nombre del grado" required>
                <button class="btn btn-primary my-3">Guardar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-7">
        <table id="tablegrados" class="table text-center table-bordered table-sm" s>
          <thead>
            <tr class="table-secondary">
              <td>#</td>
              <td>Nombre</td>
              <td>Acciones</td>
            </tr> 
          </thead>
          <tbody id="grados">
            
          </tbody>
        </table>
      </div>
    </div>
  </div>
    @endsection
    
@section('scripts')
<script src="{{asset('js/modulos/grados.js')}}"></script>
@endsection