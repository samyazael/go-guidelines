<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('administracion')}}" class="brand-link">
      <img src="{{ asset('adminlite/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SysBICA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('adminlite/dist/img/perfil.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('administracion')}}" class="d-block">Administrador</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-file-spreadsheet"></i>
              <p>
                Movimientos
              </p>
            </a>
          </li>-->
          <li class="nav-item">
            <a href="{{url('administracion/movimientos')}}" class="nav-link">
              <i class="nav-icon fas fas fa-coins"></i>
              <p>
                Movimientos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('administracion/caja')}}" class="nav-link">
              <i class="nav-icon fas fa-cash-register"></i>
              <p>
                Caja
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('administracion/colegiaturas')}}" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Colegiaturas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('administracion/historialColegiatura')}}" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p>
                Colegiaturas cobradas
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Configuraciones
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('administracion/usuarios')}}" class="nav-link">
                  <i class="nav-icon fas fa-user-plus"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('administracion/cuentas')}}" class="nav-link">
                  <i class="nav-icon fas fa-university"></i>
                  <p>Cuentas bancarias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('administracion/registro_alumnos')}}" class="nav-link">
                  <i class="nav-icon fas fa-user-graduate"></i>
                  <p>Registro de Alumnos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('administracion/registro_alumnos')}}" class="nav-link">
                  <i class="nav-icon fas fa-graduation-cap"></i>
                  <p>Agenda Colegiaturas</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

