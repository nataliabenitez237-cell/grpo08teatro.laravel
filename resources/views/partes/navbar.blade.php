<nav class="navbar navbar-expand-lg fixed-top py-3" style="background-color: purple;">
  <div class="container-fluid">
    
    <!-- Logo + Nombre (al hacer clic va a Inicio) -->
    <a class="navbar-brand text-white" href="/">
      <img src="{{ asset('img/dogo.jpeg') }}" alt="Logo" style="height: 40px; margin-right: 10px;">
      Teatro de la Ciudad
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <!-- Inicio (LO SACAMOS porque el logo ya cumple esa función) -->
        <!-- <li class="nav-item">
          <a class="nav-link text-white" href="/">Inicio</a>
        </li> -->

        <!-- Boleteria -->
        <li class="nav-item">
          <a class="nav-link text-white" href="/eventos">Eventos</a>
        </li>

        <!-- Eventos -->
        <li class="nav-item">
          <a class="nav-link text-white" href="/talleres">Talleres</a>
        </li>

        <!-- Talleres -->
        <li class="nav-item">
          <a class="nav-link text-white" href="/boleteria">Boleteria</a>
        </li>

        <!-- Dropdown: Más Información -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
            Más Info
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/contacto">📞 Contacto</a></li>
            <li><a class="dropdown-item" href="/quienes-somos">👥 Quiénes Somos</a></li>
            <li><a class="dropdown-item" href="/terminos">📜 Términos y Usos</a></li>
            <li><a class="dropdown-item" href="/consultas">❓ Consultas</a></li>
          </ul>
        </li>

        <!-- Registro -->
        <li class="nav-item">
          <a class="nav-link text-white" href="/registro">Registrarse</a>
        </li>

      </ul>
      
      <!-- Buscador -->
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>