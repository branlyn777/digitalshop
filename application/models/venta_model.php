<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Venta_model extends CI_Model {
	
	public function listarventas($idusuario)
	{
		$this->db->select('c.*,v.*,vp.*,p.descripcion');
		$this->db->from('clientes c');
		$this->db->join('ventas v','c.idcliente = v.idcliente');
		$this->db->join('venta_producto vp','v.idventa = vp.idventa');
		$this->db->join('productos p','vp.idproducto = p.idproducto');
		$this->db->where('idusuario',$idusuario);
		$aResult = $this->db->get();
		return $aResult->result_array();
	}
	public function agregarventa($data)
	{
		$this->db->insert('ventas',$data);
	}
	public function obtenerdatos()
	{
		$this->db->select('c.*,v.*,vp.*,p.descripcion');
		$this->db->from('clientes c');
		$this->db->join('ventas v','c.idcliente = v.idcliente');
		$this->db->join('venta_producto vp','v.idventa = vp.idventa');
		$this->db->join('productos p','vp.idproducto = p.idproducto');
		$aResult = $this->db->get();
		return $aResult->result();
	}
	public function obtenerdatosprod()
	{
		$this->db->select('*');
		$this->db->from('productos');
		return $this->db->get();
	}
	
	public function insertarcliente($cliente)
	{
		$this->db->insert('clientes',$cliente);
		return $this->db->insert_id();
	}

	public function insertarventa($venta)
	{
		$this->db->insert('ventas',$venta);
		return $this->db->insert_id();
	}
	public function insertarventa_producto($venta_producto)
	{
		$this->db->insert('venta_producto',$venta_producto);
	}
	
	public function obtenercantprod($idproducto)
	{
		$this->db->select('cantidad');
		$this->db->from('productos');
		$this->db->where('idproducto',$idproducto);
		$sdf = $this->db->get();
		return $sdf->result()[0]->cantidad;
	}

	public function obtenerclientes()
	{
		$this->db->select('*');
		$this->db->from('clientes');
		return $this->db->get();
	}
}