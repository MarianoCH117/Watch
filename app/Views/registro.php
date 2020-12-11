<body id="login" background="<?php echo base_url();?>/assets/image/back.jpg">

    <article class="w-100 mt-5 pt-5 align-content-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div id="loginform" style="background-color: #040B38;">

                    <div id="fondologo" >
                        <img id="logo" src="<?php echo base_url();?>/assets/image/logo.png">
                    </div>

                    <form class="col-12" id="campos" method="POST" action="<?php echo base_url();?>/index.php/Datos/Alta" role= "form" onsubmit="return validacionUsuario();">
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
                            <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelp" placeholder="alguien@mail.com" required>
                        </div>
                        <div class="form-group text-left datos" style="color: #E8FBFA;">
                            <label for="contrasenia">Contraseña</label>
                            <input type="password" class="form-control" name="contrasenia" id="contrasenia" placeholder="Contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-primary" id="btninicio">
                            Registrar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </article>

    <script src="<?php echo base_url();?>/assets/js/validaciones.js"></script>
</body>
</html>