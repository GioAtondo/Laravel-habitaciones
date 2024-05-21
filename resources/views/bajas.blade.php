@extends('layouts.app')

@section('titulo', 'Bajas de habitaciones')

@section('ruta','Bajas de habitaciones')

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
                    <th class="text-center">Estatus</th>
                  </tr>
                </thead>
                <tbody>    
                    @if($hab->count() > 0)
                    @foreach($hab as $h)     
                  <tr>
                    <td class="text-center">{{ $h->Hotel }}</td>
                    <td class="text-center">{{ $h->Tipo }}</td>
                    <td class="text-center">$ {{ $h->precio }}</td>
                    @foreach($cambio as $c)
                      <td class="text-center">$ {{ $h->precio * $c->dolar }}</td>
                    @endforeach
                    <td class="text-center">
                        <form action="{{ route('habitacion.vida', $h->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @if($h->vida == 1)
                            <input type="hidden" value="0" name="vida"/>
                            <button type="submit" class="btn btn-success"><i class="bi bi-power"></i></button>
                        @else
                            <input type="hidden" value="1" name="vida"/>
                            <button  type="submit" class="btn btn-danger"><i class="bi bi-power"></i></button>          
                        @endif
                        </form>
                    </td>
                  </tr>

                  @endforeach
                  @else
                    <tr>
                        <td class="text-center" colspan="5">Ningun hotel dado de baja aun</td>
                    </tr>
                 @endif
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </div>
@endsection