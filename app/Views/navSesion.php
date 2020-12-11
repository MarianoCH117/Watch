<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrapv3.min.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/main.css">
    <script src="<?php echo base_url();?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
    <script defer src="<?php echo base_url();?>/assets/js/main.js"></script>
    <title>-Watch-</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-sm navbar-dark navbar navbar-inverse" style="background-color: #03082A;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand float-left" href="<?php echo base_url();?>/index.php/Control/index">
                    <img src="<?php echo base_url();?>/assets/image/logo.png" alt="logo" style="width:100px;">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav float-left nav navbar-nav" style="font-size: 100%;">
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url();?>/index.php/Control/indexSesion" style="color: #E8FBFA;">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>/index.php/Control/CatalogoSesion" style="color: #E8FBFA;">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>/index.php/Control/EstrenosSesion" style="color: #E8FBFA; ">Estrenos</a>
                    </li>
                </ul>
                
                <!--<ul class="nav navbar-nav navbar-right " style="margin-top: 7px;">
                    <form class="form-inline float-right" <!--action="/action_page.php">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" style="background-color: #033D88; color: #E8FBFA;"  >
                        <button class="btn btn-success" type="submit" style="background-color: #E8FBFA; color: #033D88;" >Search</button>
                    </form>
                </ul>-->
                <ul class="nav navbar-nav navbar-right"  style="margin-top: 7px; margin-right: 5px;">
                        <div class="btn-group">
                            <button type="button"  name="usuario" id="btnregistro" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="color: #E8FBFA;" >
                                <?php 
                                    foreach ($usuario as $usuario)
                                    {
                                        echo"".$usuario['nombre'];
                                    }
                                ?>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="<?php echo base_url();?>/index.php/Datos/profile">Mi perfil</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url();?>/index.php/Control/index">Cerrar sesion</a></li>
                            </ul>
                        </div>
                </ul>
            </div>
        </div>
    </nav>