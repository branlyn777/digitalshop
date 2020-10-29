<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {

	//método index
	public function index()
	{
		//invocación a vista
		$this->load->view('inc/head');
		$this->load->view('welcome_message');
		$this->load->view('inc/footer');
	}
	public function registro()
	{
		//recepcion de variables
		$Usuario=$_POST['Usuario'];
		$contrasena=$_POST['contrasena'];
		$Nombre=$_POST['Nombre'];
		$PrimerApellido=$_POST['PrimerApellido'];
		$SegundoApellido=$_POST['SegundoApellido'];
		$email=$_POST['email'];
		$Telefono=$_POST['Telefono'];
		$Ci=$_POST['Ci'];
		$Estado=1;
		$RolUsuario=$_POST['RolUsuario'];


	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */