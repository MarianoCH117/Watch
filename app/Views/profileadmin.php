<article class="w-100 mt-5 pt-5 align-content-center justify-content-center">
<div class="container">
    <div class="row justify-content-center align-content-center">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm" style="background-color: #E8FBFA;">
                <div class="row">
                    <div id="profile">
                        <div class="col-sm-6 col-md-4">
                            <img src="<?php echo base_url();?>/assets/image/profile.jpg" alt="" class="img-rounded img-responsive" />
                        </div>
                        <div class="col-sm-6 col-md-8">
                            <?php 
                                foreach ($usuario as $usuario)
                                {
                                    echo"<h4>".$usuario['nombre'];
                                    echo"<h4>".$usuario['apellidos'];
                                }
                            ?>
                            
                            <p>
                                <i class="glyphicon glyphicon-envelope"></i>
                                <?php 
                                foreach ($usuario2 as $usuario2)
                                {
                                    echo"".$usuario2['correo'];
                                }
                                ?>
                                <br />
                                
                            <!-- Split button -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">
                                Configuracion</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span><span class="sr-only">Configuracion</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo base_url();?>/index.php/Control/modificacion">Modificar datos</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url();?>/index.php/Control/eliminar">Eliminar Cuenta</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</article>