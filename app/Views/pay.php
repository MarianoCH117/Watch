<body id="login" background="<?php echo base_url();?>/assets/image/back.jpg">

    <article class="w-100 mt-5 pt-5 align-content-center justify-content-center">
        <div class="container">
            <div class="row justify-content-center align-content-center">
                <div id="loginform" style="background-color: #040B38;">

                    <div id="fondologo" >
                        <img id="logo" src="<?php echo base_url();?>/assets/image/logo.png">
                    </div>

                    <form class="col-12" id="campos" method="POST" action="<?php echo base_url();?>/index.php/Control/indexSesion" role= "form" onsubmit="return validacionTarjeta();">
                        <div class="form-group text-left" style="color: #E8FBFA;">
                            <label for="correo">Correo electrónico a subscribir</label>
                            <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelp" placeholder="alguien@mail.com">
                        </div>
                        <div class="form-group text-left" style="color: #E8FBFA;">
                            <label for="tipo">Tipo Subcripcion</label>
                            <select type="text" class="form-control" id="tipo" required>
                                
                                <option value="Anonimo" >Anon</option>
                                <option value="Vende">Premier</option>
                                <option value="Vende">Premium</option>
                            </select>
                        </div>
                        <div class="form-group text-left" style="color: #E8FBFA;">
                            <label for="tarjeta">Numero de tarjeta</label>
                            <input type="text" class="form-control" id="tarjeta" placeholder="Numero de targeta (16 digitos)" required>
                        </div>
                        <div class="form-group text-left" style="color: #E8FBFA;">
                            <label for="titular">Titular</label>
                            <input type="text" class="form-control" id="titular" placeholder="Titular de la tarjeta" required>
                        </div>
                        <div class="form-group text-left" style="color: #E8FBFA;">
                            <label for="fecha">Fecha de vencimiento</label>
                            <input type="date" class="form-control" id="fecha" required>
                        </div>
                        <div class="form-group text-left" style="color: #E8FBFA;">
                            <label for="cvv">Codigo de seguridad</label>
                            <input type="text" class="form-control" id="cvv" placeholder="CVV" required>
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