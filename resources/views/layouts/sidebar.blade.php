<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

<li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('dashboard') }}">
    <i class="bi bi-house-door-fill"></i>
      <span>Inicio</span>
    </a>
  </li><!-- End Profile Page Nav -->
    <li class="nav-item">
    <a class="nav-link collapsed"  href="{{ route('nueva.habitacion') }}">
    <i class="bi bi-plus-square-fill"></i>
      <span>Nueva Habitacion</span>
    </a>
  </li><!-- End Profile Page Nav -->
  <li class="nav-heading">Hoteles</li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('habitaciones.mxl') }}">
    <i class="bi bi-door-open-fill"></i>
      <span>Araiza Mexicali</span>
    </a>
  </li><!-- End Profile Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed"  href="{{ route('habitaciones.calafia') }}">
    <i class="bi bi-door-open-fill"></i>
      <span>Calafia</span>
    </a>
  </li><!-- End F.A.Q Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('habitaciones.hermosillo') }}">
    <i class="bi bi-door-open-fill"></i>
      <span>Araiza Hermosillo</span>
    </a>
  </li><!-- End Contact Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('habitaciones.paz') }}">
    <i class="bi bi-door-open-fill"></i>
      <span>Araiza Palmira</span>
    </a>
  </li><!-- End Register Page Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('habitaciones.sanluis') }}">
    <i class="bi bi-door-open-fill"></i>
      <span>Araiza San Luis</span>
    </a>
  </li><!-- End Register Page Nav -->

  <li class="nav-heading">Configuracion</li>

  <li class="nav-item">
    <a class="nav-link collapsed"  href="{{ route('cambio') }}">
    <i class="bi bi-gear-wide-connected"></i>
      <span>Modificar tipo de cambio</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('hoteles') }}">
    <i class="bi bi-gear-wide-connected"></i>
      <span>Hoteles</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('tipos') }}">
    <i class="bi bi-gear-wide-connected"></i>
      <span>Tipos de habitaciones</span>
    </a>
  </li><!-- End Register Page Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('bajas') }}">
    <i class="bi bi-trash"></i>
      <span>Bajas de habitaciones</span>
    </a>
  </li><!-- End Register Page Nav -->
</ul>

</aside><!-- End Sidebar-->