<?php session_start();?>
<div class="topnav" id="myTopnav">
  <a class="logo" href="<?php echo base_url();?>">Ropa Linda</a>
  <?php if(isset($_SESSION['user'])):?>
    <a class="right" href="#!"><?php echo $_SESSION['user']->name.' '.$_SESSION['user']->last_name?></a>
    <a class="right" href="<?php echo base_url('logout');?>">Cerrar sesión</a>
  <?php else:?>
  
  <a class="right" href="<?php echo base_url('login');?>">Iniciar sesión</a>
  <a class="right" href="<?php echo base_url('registration');?>">Registrarme</a>
  <?php endif; ?>
  <a href="menu" class="icon" onclick="open_topnav_menu()">
    <i class="fa fa-bars"></i>
  </a>
</div>
