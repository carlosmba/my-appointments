@extends('layouts.panel')

@section('content')
    <div class="row ">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Especialidades</h3>
                </div>
                <div class="col text-right">
                  <a href="#!" class="btn btn-sm btn-success">Nueva Especialidad</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Opciones</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      Oftalmologia
                    </th>
                    <td>
                      ----------
                    </td>
                    <td>
                        <a href="#!" class="btn btn-sm btn-primary">Editar</a>
                        <a href="#!" class="btn btn-sm btn-danger">Eliminar</a>
                    </td>
                  </tr>
                
                </tbody>
              </table>
            </div>
          </div>
        </div>
       
      </div>

@endsection
