
<nav class="navbar">
    <ul class="navbar-logo">
        <p> 
          <a href="<?= base_url('home'); ?>"> 
            <img src= "<?= base_url()?>assets/Imagenes/logo" alt="UNLA ARENA LOGO"   width="100" height="100">
          </a>

        </p>
    </ul>
    <ul class="navbar-links">
        <li><a href="<?= base_url('home'); ?>">Inicio</a></li>
        <li><a href="<?= base_url('shows'); ?>">Shows</a></li>
        <li> <a> <?= $user->nombre ?> </a> </li>
    </ul>
</nav>