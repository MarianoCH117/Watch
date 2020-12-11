<?php namespace App\Controllers;
use App\Models\usuariosModel;

class Datos extends BaseController
{
	public function indexSesion()
	{
		return view('navSesion').view('vwCarruselEstrenos').view('vwCarruselMasVisto').view('vwCarruselComedias').view('vwCarruselDramas').view('vwFooter');
	}
	//--------------------------------------------------------------------
	public function Alta()
	{
        $request = \Config\Services::request();

		$nombre = $request->getPost('nombre');
		$apellidos = $request->getPost('apellidos');
		$correo = $request->getPost('correo');
		$contrasenia = $request->getPost('contrasenia');
		$data = [
            'correo'    => $correo,
            'nombre' => $nombre,
			'apellidos' => $apellidos,
			'contrasenia'    => $contrasenia
		];
		$datos = new usuariosModel($db);
        $datos->insert($data);
        /*$datosB = new usuariosModel($db);
        $variableIndice['usuario'] = $datosB->where("nombre",$nombre)->findAll();*/
        return view('headSesion').view('loginadmin');   
    }

    public function Login(){
        $request = \Config\Services::request();

        $correo = $request->getPost('correo');

		$datos = new usuariosModel($db);
		$variableIndice['usuario'] = $datos->where("correo",$correo)->findAll();
		return view('navSesion',$variableIndice).view('vwCarruselEstrenos').view('vwCarruselMasVisto').view('vwCarruselComedias').view('vwCarruselDramas').view('vwFooter');
	}
	public function LoginAdmin(){
        $request = \Config\Services::request();

        $correo = $request->getPost('correo');

		$datos = new usuariosModel($db);
		$variableIndice['usuario'] = $datos->where("correo",$correo)->findAll();
		return view('navadmin',$variableIndice).view('vwCarruselEstrenos').view('vwCarruselMasVisto').view('vwCarruselComedias').view('vwCarruselDramas').view('vwFooter');
    }

    public function profile(){
        $request = \Config\Services::request();

        $nombre = $request->getPost('usuario');
		$datos = new usuariosModel($db);
        $variableIndice['usuario'] = $datos->where("nombre",$nombre)->findAll();
        return view('navperfil',$variableIndice).view('profile');   
	}
	public function profileAdmin(){
        $request = \Config\Services::request();

        $nombre = $request->getPost('usuario');
		$datos = new usuariosModel($db);
		$variableIndice['usuario'] = $datos->where("correo","mariano117a@watch.com")->findAll();
		$variableIndice2['usuario2'] = $datos->where("correo","mariano117a@watch.com")->findAll();
        return view('navadmin',$variableIndice).view('profileadmin',$variableIndice2);   
	}
	public function consulta(){
		$datos = new usuariosModel($db);
		$variableIndice2['usuario'] = $datos->where("correo","mariano117a@watch.com")->findAll();
		$variableIndice['usuario2'] = $datos->findAll();
		return view('navadmin',$variableIndice2).view('consultaAdmin',$variableIndice);   
	}
	public function modificarAdmin(){
		$datos = new usuariosModel($db);
		$request = \Config\Services::request();

		$nombre = $request->getPost('nombre');
		$apellidos = $request->getPost('apellidos');
		$correo = $request->getPost('correo');
		$contrasenia = $request->getPost('contrasenia');
		$data = [
            'correo'    => $correo,
            'nombre' => $nombre,
			'apellidos' => $apellidos,
			'contrasenia'    => $contrasenia
		];
		$datos->update("$correo",$data);
		$variableIndice['usuario'] = $datos->where("correo",$correo)->findAll();
		return view('navadmin',$variableIndice).view('vwCarruselEstrenos').view('vwCarruselMasVisto').view('vwCarruselComedias').view('vwCarruselDramas').view('vwFooter');
    }

	public function AltaAdmin()
	{
        $request = \Config\Services::request();

		$nombre = $request->getPost('nombre');
		$apellidos = $request->getPost('apellidos');
		$correo = $request->getPost('correo');
		$contrasenia = $request->getPost('contrasenia');
		$data = [
            'correo'    => $correo,
            'nombre' => $nombre,
			'apellidos' => $apellidos,
			'contrasenia'    => $contrasenia
		];
		$datos = new usuariosModel($db);
        $datos->insert($data);
        /*$datosB = new usuariosModel($db);
        $variableIndice['usuario'] = $datosB->where("nombre",$nombre)->findAll();*/
        return view('headSesion').view('loginadmin');   
	}
	public function eliminarAdmin()
	{
        $request = \Config\Services::request();
		$correo = $request->getPost('correo');
		
		$datos = new usuariosModel($db);
		$datos->where("correo",$correo)->delete();
        return view('headSesion').view('loginadmin');   
	}
	
}