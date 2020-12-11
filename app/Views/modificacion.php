<body id="login" background="<?php echo base_url();?>/assets/image/back.jpg">

    <article class="w-100 mt-5 pt-5 align-content-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div id="loginform" style="background-color: #040B38;">
                    <div id="fondologo" >
                        <img id="logo" src="<?php echo base_url();?>/assets/image/logo.png">
                    </div>
                    <form class="col-12" id="campos" method="POST" action="<?php echo base_url();?>/index.php/Datos/modificarAdmin" role= "form" onsubmit="return validacionAdminR();">
                        <div class="form-group text-left" style="color: #E8FBFA;">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="form-group text-left" style="color: #E8FBFA;">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" required>
                        </div>
                        <div class="form-group text-left" style="color: #E8FBFA;">
                            <label for="correo">Correo electrónico</label>
                            <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelp" readonly="readonly" value="<?php 
                                foreach ($usuario as $usuario)
                                {
                                    echo"".$usuario['correo'];
                                }
                                ?>" required>
                        </div>
                        <div class="form-group text-left datos" style="color: #E8FBFA;">
                            <label for="contrasenia">Contraseña</label>
                            <input type="password" class="form-control" name="contrasenia" id="contrasenia" placeholder="Contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-primary" id="btninicio">
                            Modificar
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </article>
</body>
<script src="<?php echo base_url();?>/assets/js/validaciones.js"></script>
</html>