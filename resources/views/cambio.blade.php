@extends('layouts.app')

@section('titulo', 'Tipo de cambio')

@section('ruta','Tipo de cambio')

@section('contents')
@if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
<table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="text-center">Cambio</th>
                    <th scope="col" class="text-center">Modificar</th>
                  </tr>
                </thead>
                <tbody>
                @if($cambio->count() > 0)
                    @foreach($cambio as $c)   
                  <tr>
                    <form action="{{ route('cambio.update', $c->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <th class="text-center">
                        <input value="{{ $c->dolar }}" class="form-control" type="number" name="dolar"/>
                    </th>
                    <td class="text-center">
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                    </td>
                    </form>
                  </tr>
                  @endforeach
                  @else
                    <tr>
                        <td class="text-center" colspan="5">Ningun tipo de cambio registrado</td>
                    </tr>
                 @endif

                </tbody>
              </table>

@endsection