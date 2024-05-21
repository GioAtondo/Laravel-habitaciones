@extends('layouts.app')

@section('ruta','Dashboard')

@section('contents')
    <div class="text-center" style="border-bottom:1px solid #cddfff;margin-bottom:20px;">
      <img class="mb-4" src="{{ asset('admin_assets/img/araiza_logo.svg') }}" width="8%"/>

    </div>
    <div class="row">
           <!-- Mexicali -->
           <div class="col-6">
           <div class="card mb-3">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{ asset('admin_assets/img/mxl.jpg') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Araiza Mexicali</h5>
                  <small>Cantidad de habitaciones: </small>
                  <div>
                      
                    </div>
                    <div class="mb-2">
                      <a href="{{ route('habitaciones.mxl') }}">Precios de habitaciones</a>
                    </div>
                    <div>
                      <a href="{{ route('mxl') }}" target="_blank">Pantalla</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
          </div>

          <!-- Calafia -->
          <div class="col-6">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{ asset('admin_assets/img/calafia.jpg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Calafia</h5>
                    <small>Cantidad de habitaciones: </small>
                    <div class="mb-2">
                      <a href="{{ route('habitaciones.calafia') }}">Precios de habitaciones</a>
                    </div>
                    <div>
                      <a href="{{ route('calafia') }}" target="_blank">Pantalla</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- San Luis -->
          <div class="col-6">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{ asset('admin_assets/img/sanluis.jpg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Araiza San Luis</h5>
                    <small>Cantidad de habitaciones: </small>
                    <div class="mb-2">
                      <a href="{{ route('habitaciones.sanluis') }}">Precios de habitaciones</a>
                    </div>
                    <div>
                      <a href="{{ route('sanluis') }}" target="_blank">Pantalla</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Hermosillo -->
          <div class="col-6">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{ asset('admin_assets/img/hmo.jpg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Araiza Hermosillo</h5>
                    <small>Cantidad de habitaciones: </small>
                    <div class="mb-2">
                      <a href="{{ route('habitaciones.hermosillo') }}">Precios de habitaciones</a>
                    </div>
                    <div>
                      <a href="{{ route('hmo') }}" target="_blank">Pantalla</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


            <!-- Palmira -->
            <div class="col-6">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="{{ asset('admin_assets/img/palmira.jpg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Araiza Palmira</h5>
                    <small>Cantidad de habitaciones: </small>
                    <div class="mb-2">
                      <a href="{{ route('habitaciones.paz') }}">Precios de habitaciones</a>
                    </div>
                    <div>
                      <a href="{{ route('lapaz') }}" target="_blank">Pantalla</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
@endsection