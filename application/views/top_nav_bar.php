<?php session_start();?>
<div class="topnav" id="myTopnav">

  <!-- Logo -->
  <a class="logo" href="<?php echo base_url();?>">Ropa Linda</a>


  <!-- Búscador -->
  <a class="left search_wrapper">
    <input class="ropalinda_search" placeholder="Buscar" type="search" name="search_bar"/>
  </a>


  <!-- Reg-Login / Perfil-Logout-->
  <?php if(isset($_SESSION['user'])):?>
    <a class="right" href="#!"><?php echo $_SESSION['user']->name.' '.$_SESSION['user']->last_name?></a>
    <a class="right" href="<?php echo base_url('logout');?>">Cerrar sesión</a>
  <?php else:?>
  
<<<<<<< HEAD
  <a class="right" href="<?php echo base_url('login');?>">Iniciar sesión</a>
  <a class="right" href="<?php echo base_url('registration');?>">Registrarme</a>
  <?php endif; ?>
=======
    <a class="right" href="<?php echo base_url('login');?>">Iniciar sesión</a>
    <a class="right" href="<?php echo base_url('registration');?>">Registrarme</a>
  <?php endif;?>


>>>>>>> c398a006b7a6afdc52436f726e93c7b971c09d30
  <a href="menu" class="icon" onclick="open_topnav_menu()">
    <i class="fa fa-bars"></i>
  </a>
</div>
