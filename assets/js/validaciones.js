function validacionUsuario(){
    var nombre;
    var apellidos;
    var correo;
    var contrasenia;
    var combinacionB = /\w+@\w+\.+[a-z]/;

    nombre = document.getElementById('nombre').value;
    apellidos = document.getElementById('apellidos').value;
    correo = document.getElementById('correo').value;
    contrasenia = document.getElementById('contrasenia').value;

    if(nombre.length >30){
        alert('El nombre solo pueden ser maximo 30 caracteres')
        document.getElementById('nombre').focus();
        return false;
    }
    else{
        if(nombre.length < 3){
            alert('El nombre debe tener un minimo de 3 caracteres')
            document.getElementById('nombre').focus();
            return false;
        }
        else{
            if(apellidos.length >100){
                alert('Los apellidos solo pueden ser maximo 100 caracteres')
                document.getElementById('apellidos').focus();
                return false;
            }
            else{
                if(apellidos.length < 5){
                    alert('Los apellidos deben tener un minimo de 5 caracteres')
                    document.getElementById('apellidos').focus();
                    return false;
                }
                else{
                    if (correo.length >50) {
                        alert('El correo solo pueden ser maximo 50 caracteres')
                        document.getElementById('correo').focus();
                        return false;
                    } if (correo.length <10) {
                        alert('El correo solo pueden ser minimo 10 caracteres')
                        document.getElementById('correo').focus();
                        return false;
                    }
                    else{
                        if (!combinacionB.test(correo)) {
                            alert('Ingresa un correo valido')
                            document.getElementById('correo').focus();
                            return false;
                        }
                        else{
                            if (contrasenia.length > 20) {
                                alert('La contraseña solo pueden ser maximo 20 caracteres')
                                document.getElementById('contrasenia').focus();
                                return false;
                            } if (contrasenia.length < 8) {
                                alert('La contraseña solo pueden ser minimo 8 caracteres')
                                document.getElementById('contrasenia').focus();
                                return false;
                            }
                        }
                    }
                }
            }
        }
    }
}


function validacionLogin(){
    var correo;
    var contrasenia;
    var combinacionB = /\w+@\w+\.+[a-z]/;

    correo = document.getElementById('correo').value;
    contrasenia = document.getElementById('contrasenia').value;


    if (correo.length >50) {
        alert('El correo solo pueden ser maximo 50 caracteres')
        document.getElementById('correo').focus();
        return false;
    } if (correo.length <10) {
        alert('El correo solo pueden ser minimo 10 caracteres');
        document.getElementById('correo').focus();
        return false;
    }
    else{
        if (!combinacionB.test(correo)) {
            alert('Ingresa un correo valido')
            document.getElementById('correo').focus();
            return false;
        }
        else{
            if (contrasenia.length > 20) {
                alert('La contraseña solo pueden ser maximo 20 caracteres')
                document.getElementById('contrasenia').focus();
                return false;
            } if (contrasenia.length < 8) {
                alert('La contraseña solo pueden ser minimo 8 caracteres')
                document.getElementById('contrasenia').focus();
                return false;
            }
            else{
            }
        }
    }
}

function validacionTarjeta(){
    var numTarjeta;
    var titular;
    var cvv;
    var correo;
    var combinacionB = /\w+@\w+\.+[a-z]/;

    numTarjeta = document.getElementById('tarjeta').value;
    titular = document.getElementById('titular').value;
    cvv = document.getElementById('cvv').value;
    correo = document.getElementById('correo').value;

    if(numTarjeta.length >16){
        alert('El numero de tarjeta solo pueden ser 16 numeros')
        document.getElementById('tarjeta').focus();
        return false;
    }
    else{
        if(numTarjeta.length < 16){
            alert('El numero de tarjeta solo pueden ser 16 numeros')
            document.getElementById('tarjeta').focus();
            return false;
        }
        if (isNaN(numTarjeta)) {
            alert('Solo se aceptan numeros en el numero de tajeta')
            document.getElementById('tarjeta').focus();
            return false;
        }
        else{
            if(titular.length >100){
                alert('El titular solo puede ser maximo 100 caracteres')
                document.getElementById('titular').focus();
                return false;
            }
            else{
                if(titular.length < 10){
                    alert('El titular debe tener un minimo de 10 caracteres')
                    document.getElementById('titular').focus();
                    return false;
                }
                else{
                    if (cvv.length >3) {
                        alert('El codigo de seguridad solo puede ser 3 numeros')
                        document.getElementById('cvv').focus();
                        return false;
                    } 
                    if (cvv.length <3) {
                        alert('El codigo de seguridad solo puede ser 3 numeros')
                        document.getElementById('cvv').focus();
                        return false;
                    }
                    if (isNaN(cvv)) {
                        alert('Solo se aceptan numeros en el codigo de seguridad')
                        document.getElementById('cvv').focus();
                        return false;
                    }
                    else{
                        if (correo.length >50) {
                            alert('El correo solo pueden ser maximo 50 caracteres')
                            document.getElementById('correo').focus();
                            return false;
                        } if (correo.length <10) {
                            alert('El correo solo pueden ser minimo 10 caracteres');
                            document.getElementById('correo').focus();
                            return false;
                        }
                        else{
                            if (!combinacionB.test(correo)) {
                                alert('Ingresa un correo valido')
                                document.getElementById('correo').focus();
                                return false;
                            }
                        }
                    }
                }
            }
        }
    }
}

function validacionAdmin(){
    var correo;
    var contrasenia;
    var combinacionB = /\w+@watch+\.+[a-z]/;

    correo = document.getElementById('correo').value;
    contrasenia = document.getElementById('contrasenia').value;


    if (correo.length >50) {
        alert('El correo solo pueden ser maximo 50 caracteres')
        document.getElementById('correo').focus();
        return false;
    } if (correo.length <10) {
        alert('El correo solo pueden ser minimo 10 caracteres');
        document.getElementById('correo').focus();
        return false;
    }
    else{
        if (!combinacionB.test(correo)) {
            alert('Ingresa un correo valido')
            document.getElementById('correo').focus();
            return false;
        }
        else{
            if (contrasenia.length > 20) {
                alert('La contraseña solo pueden ser maximo 20 caracteres')
                document.getElementById('contrasenia').focus();
                return false;
            } if (contrasenia.length < 8) {
                alert('La contraseña solo pueden ser minimo 8 caracteres')
                document.getElementById('contrasenia').focus();
                return false;
            }
            else{
            }
        }
    }
}

function validacionAdminR(){
    var nombre;
    var apellidos;
    var correo;
    var contrasenia;
    var combinacionB = /\w+@watch+\.+[a-z]/;

    nombre = document.getElementById('nombre').value;
    apellidos = document.getElementById('apellidos').value;
    correo = document.getElementById('correo').value;
    contrasenia = document.getElementById('contrasenia').value;

    if(nombre.length >30){
        alert('El nombre solo pueden ser maximo 30 caracteres')
        document.getElementById('nombre').focus();
        return false;
    }
    else{
        if(nombre.length < 3){
            alert('El nombre debe tener un minimo de 3 caracteres')
            document.getElementById('nombre').focus();
            return false;
        }
        else{
            if(apellidos.length >100){
                alert('Los apellidos solo pueden ser maximo 100 caracteres')
                document.getElementById('apellidos').focus();
                return false;
            }
            else{
                if(apellidos.length < 5){
                    alert('Los apellidos deben tener un minimo de 5 caracteres')
                    document.getElementById('apellidos').focus();
                    return false;
                }
                else{
                    if (correo.length >50) {
                        alert('El correo solo pueden ser maximo 50 caracteres')
                        document.getElementById('correo').focus();
                        return false;
                    } if (correo.length <10) {
                        alert('El correo solo pueden ser minimo 10 caracteres')
                        document.getElementById('correo').focus();
                        return false;
                    }
                    else{
                        if (!combinacionB.test(correo)) {
                            alert('Ingresa un correo valido')
                            document.getElementById('correo').focus();
                            return false;
                        }
                        else{
                            if (contrasenia.length > 20) {
                                alert('La contraseña solo pueden ser maximo 20 caracteres')
                                document.getElementById('contrasenia').focus();
                                return false;
                            } if (contrasenia.length < 8) {
                                alert('La contraseña solo pueden ser minimo 8 caracteres')
                                document.getElementById('contrasenia').focus();
                                return false;
                            }
                        }
                    }
                }
            }
        }
    }
}