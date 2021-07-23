@extends('layouts.master')

@section('title')
  Alumnos   
@endsection

@section('content')
<div class="container">

    <h1>Mantenimiento de los alumnos</h1>

    <div class="card">
      <div class="card-body">
        <form class="row g-3">
          <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre">
          </div>
          <div class="col-md-6">
            <label for="codigo" class="form-label">Código:</label>
            <input type="text" class="form-control" id="codigo">
          </div>
          <div class="col-md-4">
            <label for="edad" class="form-label">Edad:</label>
            <input type="text" class="form-control" id="edad">
          </div>
          <div class="col-md-4">
            <label for="sexo" class="form-label">Sexo:</label>
            <select id="sexo" class="form-select">
              <option disabled selected>Seleccione...</option>
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="grado" class="form-label">Grado:</label>
            <select id="grado" class="form-select">
              <option disabled selected>Seleccione...</option>
            </select>
          </div>
          <div class="col-md-6 mx-auto">
            <label for="description" class="form-label">Descripción:</label>
            <textarea id="description" cols="30" rows="10" class="form-control" placeholder="Task Description *"></textarea>
          </div>
          <div class="col-12 text-center">
            <button type="submit" class="btn btn-primary">Sign in</button>
          </div>
        </form>
      </div>
    </div>

</div>
@endsection