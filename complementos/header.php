<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="dashboard_home.php">
          <span data-feather="home"></span>
          Inicio
        </a>
      </li>
      <li class="mb-1 d-grid">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
          data-bs-target="#dashboard-collapse" aria-expanded="false">
          Productos
        </button>
        <div class="collapse mt-1" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled list-group pb-1">

            <li><a href=" productos.php" class="col-12 m-0 p-0 ps-4 link-dark py-2">Productos</a></li>
            <li><a href="reg_producto.php" class="col-12 m-0 p-0 ps-4 link-dark py-2">Registrar Producto</a></li>
            <li><a href="productos_eliminados.php" class="col-12 m-0 p-0 ps-4 link-dark py-2">Productos eliminados</a></li>

          </ul>
        </div>
      </li>
      <li class="mb-1 d-grid">
        <button class="btn btn-toggle align-items-center rounded collapsedmb-2" data-bs-toggle="collapse"
          data-bs-target="#dashboard-collapse-evento" aria-expanded="false">
          Banner
        </button>
        <div class="collapse mt-1" id="dashboard-collapse-evento">
          <ul class="btn-toggle-nav list-unstyled list-group pb-1">

            <li><a href="eventos.php" class="col-12 m-0 p-0 ps-4 link-dark py-2">Eventos</a></li>
            <li><a href="regEvento.php" class="col-12 m-0 p-0 ps-4 link-dark py-2">Registrar eventos</a></li>
            
          </ul>
        </div>
      </li>
    </ul>

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Saved reports</span>
      <a class="link-secondary" href="#" aria-label="Add a new report">
        <span data-feather="plus-circle"></span>
      </a>
    </h6>
    <ul class="nav flex-column mb-2">

      <li class="nav-item">
        <a class="nav-link" href="sign-out.php">
          <i class="fas fa-sign-out-alt"></i>
          Cerrar sesión
        </a>
      </li>
    </ul>
  </div>
</nav>