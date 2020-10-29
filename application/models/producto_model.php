<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Producto_model extends CI_Model {

	/*Listar Productos*/
	public function listarproductos()
	{
		$this->db->select('*');
		$this->db->from('productos');
		$this->db->where('estado',1);
		return $this->db->get();
	}

	
	public function agregarproducto($data)
	{
		$this->db->insert('productos',$data);
	}

	public function recuperarproducto($idproducto)
	{
		$this->db->select('*');
		$this->db->from('productos');
		$this->db->where('idproducto',$idproducto);
		return $this->db->get();
	}

	public function modificarproducto($idproducto,$data)
	{
		$this->db->where('idproducto',$idproducto);
		$this->db->update('productos',$data);
	}


	
	public function eliminarproducto($idproducto,$data)
	{
		$this->db->where('idproducto',$idproducto);
		$this->db->update('productos',$data);
	}
}