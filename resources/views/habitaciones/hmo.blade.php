@extends('layouts.app')

@section('titulo', 'Araiza Hermosillo')

@section('ruta', 'Araiza Hermosillo')

@section('contents')
<div class="row">
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th class="text-center">Hotel</th>
                    <th class="text-center">Tipo de Habitación</th>
                    <th class="text-center">Precio (USD)</th>
                    <th class="text-center">Precio (MXN)</th>
                    <th class="text-center">Modificar</th>
                    <th class="text-center">Baja</th>
                  </tr>
                </thead>
                <tbody>    
                    @if($results->count() > 0)
                    @foreach($results as $r)     
                  <tr>
                    <td class="text-center">{{ $r->Hotel }}</td>
                    <td class="text-center">{{ $r->Tipo }}</td>
                    <td class="text-center">$ {{ $r->precio }}</td>
                    @foreach($cambio as $c)
                      <td class="text-center">$ {{ $r->precio * $c->dolar }}</td>
                    @endforeach
                    <td class="text-center">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#hab{{ $r->id }}" ><i class="bi bi-gear-wide-connected"></i></button>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#baja{{ $r->id }}" ><i class="bi bi-trash"></i></button>
                    </td>
                  </tr>

                  <div class="modal fade" id="hab{{ $r->id }}" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">{{ $r->Tipo }}</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('habitaciones.update', $r->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">    
                        <div class="col-md-12">
                            <label for="inputEmail5" class="form-label">Hotel</label>
                            <input readonly type="text" class="form-control" value="{{ $r->Hotel }}">
                          </div>
                          <div class="col-md-12">
                            <label for="inputEmail5" class="form-label">Precio (USD)</label>
                            <input type="number"  step="0.01" class="form-control" name="precio" value="{{ $r->precio }}">
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="baja{{ $r->id }}" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">{{ $r->Tipo }}</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('habitacion.baja', $r->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body"> 
                          <input type="hidden" name="vida" value="0"  />   
                          <p>¿Estas seguro que deseas dar de baja la habitacion: {{ $r->Tipo }}?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-danger">Aceptar</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  @else
                    <tr>
                        <td class="text-center" colspan="5">Ningun hotel registrado aun.</td>
                    </tr>
                 @endif
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
@endsection