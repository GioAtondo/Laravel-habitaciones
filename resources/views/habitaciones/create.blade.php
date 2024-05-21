@extends('layouts.app')
@section('ruta', 'Nueva habitacion')
@section('contents')
<div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Nueva habitacion</h5>
              <form action="{{ route('habitaciones.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Hotel</label>
                  <div class="col-sm-10">
                  <select name="hoteles_id" class="form-control">
                      <option value="" selected disabled>Seleccionar hotel</option>
                      @foreach ($hoteles as $h)
                          <option value="{{ $h->id }}">{{ $h->nombre }}</option> 
                      @endforeach
                  </select>
                  </div>
                  @error('hoteles_id')
                  <div class="mt-3" style="color:red">
                    {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Tipo de habitacion</label>
                  <div class="col-sm-10">
                    <select name="tipo_id" class="form-control">
                        <option value="" selected disabled>Seleccionar tipo de habitacion</option>
                        @foreach ($tipos as $t)
                            <option value="{{ $t->id }}">{{ $t->nombre }}</option> 
                        @endforeach
                    </select>
                  </div>
                  @error('tipo_id')
                  <div class="mt-3" style="color:red">
                        {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Precio (USD)</label>
                  <div class="col-sm-10">
                    <input type="number" step="0.01" name="precio" placeholder="Precio de habitacion" class="form-control">
                  </div>
                  @error('precio')
                  <div class="mt-3" style="color:red">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
   
                <div class="mt-5">
                    <button class="btn btn-primary" type="submit">Aceptar</button>
                </div>

              </form>
            </div>
          </div>

        </div>
        <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
             

              <!-- Slides with fade transition -->
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('admin_assets/img/slide-hotel1.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('admin_assets/img/slide-hotel2.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('admin_assets/img/slide-hotel3.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>

              </div><!-- End Slides with fade transition -->

            </div>
          </div>
        </div>
       
      </div>
@endsection