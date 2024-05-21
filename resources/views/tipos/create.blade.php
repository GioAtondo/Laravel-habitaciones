@extends('layouts.app')
@section('ruta', 'Nuevo tipo de habitacion')
@section('contents')
<div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Nuevo tipo de habitacion</h5>
              <form action="{{ route('tipos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Nombre</label>
                  <div class="col-sm-10">
                    <input type="text" name="nombre" class="form-control">
                  </div>
                  @error('nombre')
                    <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
                        {{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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