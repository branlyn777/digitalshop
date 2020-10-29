<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Smartphone_model extends CI_Model {

	//método index
	public function listarsmartphones()
	{
		$this->db->select('*');
		$this->db->from('smartphones');
		return $this->db->get();
	}
	
	public function listarproductos()
	{
		$this->db->select('*');
		$this->db->from('productos');
		return $this->db->get();
	}
	/*ublic function recuperarusuarios($idusuario)
	{
		$query=$this->db->get('usuarios');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}*/

	public function recuperarsmartphone($idsmartphone)
	{
		$this->db->select('*');
		$this->db->from('smartphones');
		$this->db->where('idsmartphone',$idsmartphone);
		return $this->db->get();
	}
	
	public function modificarsmartphone($idsmartphone,$data)
	{
		$this->db->where('idsmartphone',$idsmartphone);
		$this->db->update('smartphones',$data);
	}
	
	public function agregarsmartphone($data)
	{
		$this->db->insert('smartphones',$data);
	}
	
	public function eliminarsmartphone($idsmartphone)
	{
		$this->db->where('idsmartphone',$idsmartphone);
		$this->db->delete('smartphones');
	}
	public function validar($usuario,$contrasena)
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('usuario',$usuario);
		$this->db->where('contrasena',$contrasena);
		return $this->db->get();
	}
}