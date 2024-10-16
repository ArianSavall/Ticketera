<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url('home') ?>">UNLA Arena</a>
    <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header text-white border-bottom">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
        <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
        <ul class="navbar-nav justify-content-center align-items-center flex-grow-1
        - pe-3">
          <li class="nav-item mx-2">
            <a class="nav-link <?php echo ($current_page == 'home') ? 'active' : ''; ?>" aria-current="<?php echo ($current_page == 'home') ? 'page' : 'false'; ?>" href="<?php echo base_url('home'); ?>">Inicio</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link <?php echo ($current_page == 'shows') ? 'active' : ''; ?>" aria-current="<?php echo ($current_page == 'shows') ? 'page' : 'false'; ?>" href="<?php echo base_url('shows'); ?>">Shows</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Contacto</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#">Como Llegar</a>
          </li>
        </ul>
        <?php 
          if($this->session->has_userdata('nombre')) : ?>
            <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?=$this->session->userdata('nombre')?>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Mis Compras</a></li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href= <?=base_url('LogoutC')?>>Cerrar Sesión</a></li>
                      </ul>
                    </li>
                </ul>
          <?php else : ?>
              <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                <a href="<?= base_url('loginC') ?>" class="text-white">Iniciar Sesion</a>
                <a href="<?= base_url('RegisterC') ?>" class="text-white text-decoration-none px-3 py-1 rounded-4" style="background-color: var(--rojo)">Registrarse</a>
              </div>
        <?php endif;?>  
      </div>
    </div>
  </div>
</nav>