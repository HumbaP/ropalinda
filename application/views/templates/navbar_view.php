<?php session_start();?>


<nav class="nav-extended">
    <div class="nav-wrapper">
        <a href="<?php echo base_url();?>" class="brand-logo">Ropalinda</a>
        <?php if(isset($_SESSION['user']) && $_SESSION['user']!= null):?>
            <ul id="drop_menu" class="right hide-on-med-and-down">
                <li><a href="#!"><?php echo $_SESSION['user']->name.' '.$_SESSION['user']->last_name;?> <i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="<?php echo base_url('logout')?>">Cerrar sesión</a></li>
            </ul>
        <?php else:?>
            <ul id="nav-movile" class="right hide-on-med-and-down">
                <li><a href="<?php echo base_url('login');?>">Inicia sesión</a></li>
                <li><a href="<?php echo base_url('registration')?>">Registrarte</a></li>
            </ul>
        <?php endif;?>
    
    </div>
</nav>
