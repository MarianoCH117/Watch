<body id="login" background="<?php echo base_url();?>/assets/image/back.jpg">

    <article class="w-100 mt-5 pt-5 align-content-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div id="loginform" style="background-color: #040B38;">
                    <div id="fondologo" >
                        <img id="logo" src="<?php echo base_url();?>/assets/image/logo.png">
                    </div>
                    <form class="col-12" id="campos" method="POST" action="<?php echo base_url();?>/index.php/Datos/eliminarAdmin" role= "form">
                        <div class="form-group text-left" style="color: #E8FBFA;">
                            <label for="correo">Correo electrónico</label>
                            <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelp" readonly="readonly" value="<?php 
                                foreach ($usuario as $usuario)
                                {
                                    echo"".$usuario['correo'];
                                }
                                ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary" id="btninicio">
                            Eliminar Cuenta
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </article>
</body>
</html>