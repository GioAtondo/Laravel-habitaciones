@extends('layouts.app')

@section('titulo', 'Hoteles')

@section('ruta', 'Hoteles')

@section('contents')
<div class="row">
        <div class="col-lg-12">
            @if(Session::has('success'))
                
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <i class="bi bi-check-circle me-1"></i>
                  {{ Session::get('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
               
          @endif
          <div class="card">
          <!-- <div class="row">  
                <div class="col-3 m-4">
                    <a href="{{ route('hoteles.create') }}" class="btn btn-primary">Agregar</a>
                </div>
            </div> -->
            <div class="card-body">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Modificar</th>
                  </tr>
                </thead>
                <tbody>    
                    @if($hotel->count() > 0)
                    @foreach($hotel as $h)     
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $h->nombre }}</td>
                    <td class="text-center">
                      <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#hot{{ $h->id }}"><i class="bi bi-gear-wide-connected"></i></button>
                    </td>
                  </tr>

                  <div class="modal fade" id="hot{{ $h->id }}" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Modificar nombre</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('hoteles.update', $h->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">    
                        <div class="col-md-12">
                            <label for="inputEmail5" class="form-label">Nombre:</label>
                            <input  type="text" name="nombre" class="form-control" value="{{ $h->nombre }}">
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