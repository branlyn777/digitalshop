<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productos extends CI_Controller {

	public function listaproductos()
	{
		if ($this->session->userdata('usuario'))
		{
			$listaproductos=$this->producto_model->listarproductos();
			$data['productos']=$listaproductos;
			$this->load->view('listaproductos',$data);
		}
		else
		{

			redirect('usuarios/index/2','refresh');

		}
	}

	public function agregar()
	{
		//$this->load->view('inc/head');
		$this->load->view('agregarproducto');
		//$this->load->view('inc/footer');
	}


	public function agregarbd()
	{
		
		$data['descripcion']=$_POST['descripcion'];

		$data['cantidad']=$_POST['cantidad'];

		$data['costobase']=$_POST['costobase'];

		$data['preciobase']=$_POST['preciobase'];

		$data['categoria']=$_POST['categoria'];
		

		$this->producto_model->agregarproducto($data);
		redirect('productos/listaproductos','refresh');
	}
	
	public function modificar()
	{
		$idproducto = $_POST['idproducto'];
		$data['infoproducto']=$this->producto_model->recuperarproducto($idproducto);
		$this->load->view('modificarproducto',$data);
	}
	public function modificarbd()
	{

		$idproducto=$_POST['idproducto'];

		$descripcion=$_POST['descripcion'];
		$data['descripcion']=$descripcion;

		$cantidad=$_POST['cantidad'];
		$data['cantidad']=$cantidad;

		$costobase=$_POST['costobase'];
		$data['costobase']=$costobase;

		$preciobase=$_POST['preciobase'];
		$data['preciobase']=$preciobase;

		$categoria=$_POST['categoria'];
		$data['categoria']=$categoria;


		$this->producto_model->modificarproducto($idproducto,$data);
		redirect('productos/listaproductos','refresh');
	}
	public function eliminarbd()
	{
		$idproducto=$_POST['idproducto'];

		$estado=0;
		$data['estado']=$estado;



		$this->producto_model->eliminarproducto($idproducto,$data);
		redirect('productos/listaproductos','refresh');
	}

}
