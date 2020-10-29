<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ventas extends CI_Controller {

	public function listaventas()
	{
		if ($this->session->userdata('usuario'))
		{
			$listaventas=$this->venta_model->listarventas($this->session->userdata('idusuario'));
			$data['clientes']=$listaventas;
			$this->load->view('listaventas',$data);
			}
		else
		{

			redirect('usuarios/index/2','refresh');

		}

	}

	public function agregar()
	{
		$listaventas=$this->venta_model->listarventas($this->session->userdata('idusuario'));
		$data['clientes']=$listaventas;
		$this->load->view('agregarventa',$data);
	}

	public function agregarbd()
	{
		
		$cliente['razonsocial']=$_POST['razonsocial'];

		$cliente['nit']=$_POST['nit'];

		$cliente['genero']=$_POST['genero'];

		$venta['idcliente'] = $this->venta_model->insertarcliente($cliente);

		$venta['idusuario'] = $this->session->userdata('idusuario');

		$venta_producto['idventa'] = $this->venta_model->insertarventa($venta);

		$venta_producto['idproducto'] = $_POST['idproducto'];

		$venta_producto['cantidad'] = $_POST['cantidad'];

		$venta_producto['observaciones'] = $_POST['observaciones'];

		$this->venta_model->insertarventa_producto($venta_producto);



		$idproducto=$_POST['idproducto'];

		$list_prod = $this->venta_model->obtenerdatosprod();

		$cant_comprada = $_POST['cantidad'];

		$cant_total= $this->venta_model->obtenercantprod($idproducto);

		$cantidad_final = $cant_total - $cant_comprada;

		$cantidad=$cantidad_final;
		$data['cantidad']=$cantidad;

		$this->producto_model->modificarproducto($idproducto,$data);

		

		redirect('ventas/listaventas','refresh');
	}


}