<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function index()
	{
		$data['msg']=$this->uri->segment(3);
		if ($this->session->userdata('usuario'))
		{
			redirect('usuarios/panel','refresh');
		}
		else
		{

			$this->load->view('loginform',$data);

		}
	}

	public function maps()
	{
		if ($this->session->userdata('usuario'))
		{
			/*$this->load->view('panelvista');*/
			$listausuarios=$this->usuario_model->listarusuarios();
			$data['usuarios']=$listausuarios;
			$this->load->view('maps',$data);
			$this->load->view('inc/footer');
			}
		else
		{

			redirect('usuarios/index/2','refresh');

		}
	}


	public function maps2()
	{
		if ($this->session->userdata('usuario'))
		{
			/*$this->load->view('panelvista');*/
			$listausuarios=$this->usuario_model->listarusuarios();
			$data['usuarios']=$listausuarios;
			$this->load->view('maps2',$data);
			}
		else
		{

			redirect('usuarios/index/2','refresh');

		}
	}




	public function validarusuario()
	{
		$usuario=$_POST['usuario'];
		$contrasena=md5($_POST['contrasena']);
		$consulta=$this->usuario_model->validar($usuario,$contrasena);
		
		if ($consulta->num_rows()>0)
		{
			foreach ($consulta->result() as $row)
			{
				$this->session->set_userdata('idusuario',$row->idusuario);
				$this->session->set_userdata('usuario',$row->usuario);
				$this->session->set_userdata('contrasena',$row->contrasena);
				redirect('usuarios/panel','refresh');
			}
		}
		else
		{
			redirect('usuarios/index/1','refresh');
		}

	}
	public function panel()
	{
		if ($this->session->userdata('usuario'))
		{
			/*$this->load->view('panelvista');*/
			$listausuarios=$this->usuario_model->listarusuarios();
			$data['usuarios']=$listausuarios;
			$this->load->view('inc/header');
			$this->load->view('inicio',$data);
			$this->load->view('inc/footer');
			}
		else
		{

			redirect('usuarios/index/2','refresh');

		}

	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('usuarios/index/3','refresh');
	}



	public function prueba()
	{
		$query=$this->db->get('usuarios');
		$execonsulta=$query->result();
		print_r($execonsulta);

	}

	public function lista()
	{
		if ($this->session->userdata('usuario'))
		{
			/*$this->load->view('panelvista');*/
			$listausuarios=$this->usuario_model->listarusuarios();
			$data['usuarios']=$listausuarios;
			$this->load->view('listausuarios',$data);
			$this->load->view('inc/footer');

			}
		else
		{

			redirect('usuarios/index/2','refresh');

		}
	}





	public function inicio()
	{
		if ($this->session->userdata('usuario'))
		{
			/*$this->load->view('panelvista');*/
			$listausuarios=$this->usuario_model->listarusuarios();
			$data['usuarios']=$listausuarios;
			$this->load->view('inc/header');
			$this->load->view('inicio',$data);
			$this->load->view('inc/footer');
			}
		else
		{

			redirect('usuarios/index/2','refresh');

		}
	}

	public function modificar()
	{
		$idusuario = $_POST['idusuario'];
		$data['infousuario']=$this->usuario_model->recuperarusuario($idusuario);
		$this->load->view('modificarusuario_view',$data);
	}
	
	public function modificarbd()
	{
		$idusuario=$_POST['idusuario'];


		$nombre=$_POST['nombre'];
		$data['nombre']=$nombre;

		$primerapellido=$_POST['primerapellido'];
		$data['primerapellido']=$primerapellido;

		$segundoapellido=$_POST['segundoapellido'];
		$data['segundoapellido']=$segundoapellido;

		$email=$_POST['email'];
		$data['email']=$email;

		$telefono=$_POST['telefono'];
		$data['telefono']=$telefono;

		$ci=$_POST['ci'];
		$data['ci']=$ci;

		$rolusuario=$_POST['rolusuario'];
		$data['rolusuario']=$rolusuario;



		$this->usuario_model->modificarusuario($idusuario,$data);
		redirect('usuarios/lista','refresh');
	}



public function modificarbdcontrasena()
	{
		$idusuario=$_POST['idusuario'];


		$contrasena=md5($_POST['contrasena']);
		$data['contrasena']=$contrasena;



		$this->usuario_model->modificarusuariocontrasena($idusuario,$data);
		redirect('usuarios/lista','refresh');
	}


	
	public function agregar()
	{
		//$this->load->view('inc/head');
		$this->load->view('agregarnuevousuario');
		//$this->load->view('inc/footer');
	}
	
	public function agregarbd()
	{
		


		$data['usuario']=$_POST['usuario'];

		$data['contrasena']=md5($_POST['contrasena']);

		$data['nombre']=$_POST['nombre'];

		$data['primerapellido']=$_POST['primerapellido'];

		$data['segundoapellido']=$_POST['segundoapellido'];

		$data['email']=$_POST['email'];

		$data['telefono']=$_POST['telefono'];

		$data['ci']=$_POST['ci'];

		$data['fechanacimiento']=$_POST['fechanacimiento'];

		$data['genero']=$_POST['genero'];

		$data['rolusuario']=$_POST['rolusuario'];
		

		$this->usuario_model->agregarusuario($data);
		redirect('usuarios/lista','refresh');
	}
	
	public function eliminarbd()
	{
		$idusuario=$_POST['idusuario'];

		$estado=0;
		$data['estado']=$estado;



		$this->usuario_model->eliminarusuario($idusuario,$data);
		redirect('usuarios/lista','refresh');
	}















	public function verificarcontra()
	{
		if ($this->session->userdata('usuario'))
		{
			$idusuario = $_POST['idusuario'];
			$contrasena=md5($_POST['contrasena']);

			$pass=$this->usuario_model->validarcontrasena($idusuario,$contrasena);

			if ($contrasena==$pass) {
				# code...
			}






			$data['usuarios']=$listausuarios;
			$this->load->view('listausuarios',$data);
			$this->load->view('inc/footer');

			}
		else
		{

			redirect('usuarios/index/2','refresh');

		}
	}




























	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */