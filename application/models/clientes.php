<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends CI_Controller {

	public function listaclientes()
	{
		if ($this->session->userdata('usuario'))
		{
			$listaclientes=$this->cliente_model->listarclientes();
			$data['clientes'] = $listaclientes;
			$this->load->view('listaclientes',$data);
		}
		else
		{

			redirect('usuarios/index/2','refresh');

		}
	}
}
