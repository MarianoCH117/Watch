<?php namespace App\Controllers;
use App\Models\usuariosModel;
class Control extends BaseController
{
	public function index()
	{
		return view('vwNav').view('vwCarruselEstrenos').view('vwCarruselMasVisto').view('vwCarruselComedias').view('vwCarruselDramas').view('vwFooter');
	}
	//--------------------------------------------------------------------
	public function catalogo()
	{
		return view('vwNav').view('vwCatalogo').view('vwFooter');
	}
	//--------------------------------------------------------------------
	public function estrenos()
	{
		return view('vwNav').view('vwEstrenos').view('vwFooter');
	}
	//--------------------------------------------------------------------
	public function sesion()
	{
		return view('headSesion').view('login');
	}
	//--------------------------------------------------------------------
	public function registro()
	{
		return view('headSesion').view('registro');
	}
	//--------------------------------------------------------------------
	public function pay()
	{
		return view('headSesion').view('pay');
	}
	//--------------------------------------------------------------------
	public function indexSesion()
	{
		return view('navSesion').view('vwCarruselEstrenos').view('vwCarruselMasVisto').view('vwCarruselComedias').view('vwCarruselDramas').view('vwFooter');
	}
		//--------------------------------------------------------------------
	public function catalogoSesion()
	{
		return view('navSesion').view('vwCatalogo').view('vwFooter');
	}
	//--------------------------------------------------------------------
	public function estrenosSesion()
	{
		return view('navSesion').view('vwEstrenos').view('vwFooter');
	}
	//--------------------------------------------------------------------
	public function modificacion()
	{
		$datos = new usuariosModel($db);
		$variableIndice2['usuario'] = $datos->where("correo","mariano117a@watch.com")->findAll();
		return view('headSesion').view('modificacion',$variableIndice2);
	}
	//--------------------------------------------------------------------
	public function modificacionUsuario()
	{
		$datos = new usuariosModel($db);
		$variableIndice2['usuario'] = $datos->where("correo","mariano117a@watch.com")->findAll();
		return view('headSesion').view('modificacionUS');
	}
	//--------------------------------------------------------------------
	public function eliminar()
	{
		$datos = new usuariosModel($db);
		$variableIndice['usuario'] = $datos->where("correo","mariano117a@watch.com")->findAll();

		return view('headSesion').view('eliminar',$variableIndice);
	}
	//--------------------------------------------------------------------
	public function profile()
	{
		return view('navperfil').view('profile');
	}
	//--------------------------------------------------------------------
	public function sesionAdmin()
	{
		return view('headSesion').view('loginadmin');
	}
	public function indexAdmin()
	{
		$datos = new usuariosModel($db);
		$variableIndice2['usuario'] = $datos->where("correo","mariano117a@watch.com")->findAll();
		return view('navadmin',$variableIndice2).view('vwCarruselEstrenos').view('vwCarruselMasVisto').view('vwCarruselComedias').view('vwCarruselDramas').view('vwFooter');
	}
	//--------------------------------------------------------------------
	public function catalogoAdmin()
	{
		$datos = new usuariosModel($db);
		$variableIndice2['usuario'] = $datos->where("correo","mariano117a@watch.com")->findAll();
		return view('navadmin',$variableIndice2).view('vwCatalogo').view('vwFooter');
	}
	//--------------------------------------------------------------------
	public function estrenosAdmin()
	{
		$datos = new usuariosModel($db);
		$variableIndice2['usuario'] = $datos->where("correo","mariano117a@watch.com")->findAll();
		return view('navadmin',$variableIndice2).view('vwEstrenos').view('vwFooter');
	}
	//--------------------------------------------------------------------
	public function profileAdmin()
	{
		return view('navperfiladmin').view('profileadmin');
	}
	//--------------------------------------------------------------------
	public function consultaAdmin()
	{
		return view('navadmin').view('consultaAdmin');
	}
	//--------------------------------------------------------------------
	public function registroAdmin()
	{
		return view('headSesion').view('registroAdmin');
	}

	
}