<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class smartphones extends CI_Controller {

	//método index
	/*
	public function index()
	{
		$listausuarios=$this->usuario_model->listarusuarios();
		$data['usuarios']=$listausuarios;
		$this->load->view('inc/head');
		$this->load->view('lista_view',$data);
		$this->load->view('inc/footer');
	}
	*/
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


	public function listaproductos()
	{
		if ($this->session->userdata('usuario'))
		{
			$listaproductos=$this->smartphone_model->listarproductos();
			$data['productos']=$listasproductos;
			$this->load->view('listaproductos',$data);
		}
		else
		{

			redirect('usuarios/index/2','refresh');

		}
	}

	public function listasmartphones()
	{
		if ($this->session->userdata('usuario'))
		{
			$listasmartphones=$this->smartphone_model->listarsmartphones();
			$data['smartphones']=$listasmartphones;
			$this->load->view('listasmartphones',$data);
		}
		else
		{

			redirect('usuarios/index/2','refresh');

		}
	}

	public function comprarsmartphones()
	{
		if ($this->session->userdata('usuario'))
		{
			$this->load->view('comprarsmartphone2');
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
		$query=$this->db->get('smartphones');
		$execonsulta=$query->result();
		print_r($execonsulta);

	}

	public function lista()
	{
		if ($this->session->userdata('smartphone'))
		{
			
			$this->load->view('listasmartphones');
			}
		else
		{

			redirect('usuarios/index/2','refresh');

		}
	}

	public function modificar()
	{
		$idsmartphone = $_POST['idsmartphone'];
		$data['infosmartphone']=$this->smartphone_model->recuperarsmartphone($idsmartphone);
		$this->load->view('modificarsmartphone_view',$data);
	}
	
	public function modificarbd()
	{

		$idsmartphone=$_POST['idsmartphone'];

		$nombreproducto=$_POST['nombreproducto'];
		$data['nombreproducto']=$nombreproducto;

		$almacenamiento=$_POST['almacenamiento'];
		$data['almacenamiento']=$almacenamiento;

		$camarafrontal=$_POST['camarafrontal'];
		$data['camarafrontal']=$camarafrontal;

		$camaratrasera=$_POST['camaratrasera'];
		$data['camaratrasera']=$camaratrasera;

		$procesador=$_POST['procesador'];
		$data['procesador']=$procesador;

		$dualsim=$_POST['dualsim'];
		$data['dualsim']=$dualsim;

		$lectorhuella=$_POST['lectorhuella'];
		$data['lectorhuella']=$lectorhuella;

		$microsd=$_POST['microsd'];
		$data['microsd']=$microsd;

		$bateria=$_POST['bateria'];
		$data['bateria']=$bateria;

		$costo=$_POST['costo'];
		$data['costo']=$costo;

		$precio=$_POST['precio'];
		$data['precio']=$precio;



		$this->smartphone_model->modificarsmartphone($idsmartphone,$data);
		redirect('smartphones/listasmartphones','refresh');
	}
	
	public function agregar()
	{
		$this->load->view('agregarsmartphone_view');
	}
	
	public function agregarbd()
	{
		
		$data['nombreproducto']=$_POST['nombreproducto'];

		$data['almacenamiento']=$_POST['almacenamiento'];

		$data['camarafrontal']=$_POST['camarafrontal'];

		$data['camaratrasera']=$_POST['camaratrasera'];

		$data['procesador']=$_POST['procesador'];

		$data['dualsim']=$_POST['dualsim'];

		$data['lectorhuella']=$_POST['lectorhuella'];

		$data['microsd']=$_POST['microsd'];

		$data['bateria']=$_POST['bateria'];

		$data['costo']=$_POST['costo'];

		$data['precio']=$_POST['precio'];				
		

		$this->smartphone_model->agregarsmartphone($data);
		redirect('smartphones/listasmartphones','refresh');
	}
	
	public function eliminarbd()
	{
		$idsmartphone=$_POST['idsmartphone'];
		$this->smartphone_model->eliminarsmartphone($idsmartphone);
		redirect('smartphones/listasmartphones','refresh');
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */