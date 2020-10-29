<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	//método index
	public function listarusuarios()
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('estado',1);
		return $this->db->get();
	}


	/*ublic function recuperarusuarios($idusuario)
	{
		$query=$this->db->get('usuarios');
		$execonsulta=$query->result();
		print_r($execonsulta);
	}*/

	public function recuperarusuario($idusuario)
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('idusuario',$idusuario);
		return $this->db->get();
	}
	
	public function modificarusuario($idusuario,$data)
	{
		$this->db->where('idusuario',$idusuario);
		$this->db->update('usuarios',$data);
	}
	
	public function modificarusuariocontrasena($idusuario,$data)
	{
		$this->db->where('idusuario',$idusuario);
		$this->db->update('usuarios',$data);
	}
	
	public function agregarusuario($data)
	{
		$this->db->insert('usuarios',$data);
	}
	
	public function eliminarusuario($idusuario,$data)
	{
		$this->db->where('idusuario',$idusuario);
		$this->db->update('usuarios',$data);
	}
	public function validar($usuario,$contrasena)
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('usuario',$usuario);
		$this->db->where('contrasena',$contrasena);
		return $this->db->get();
	}










	public function validarcontrasena($idusuario,$contrasena)
	{
		$this->db->select('contrasena');
		$this->db->from('usuarios');
		$this->db->where('contrasena',$contrasena);
		$this->db->where('idusuario',$idusuario);
		return $this->db->get();
	}






	public function obtenercargo2($idusuario)
	{
		$this->db->select('rolusuario');
		$this->db->from('usuarios');
		$this->db->where('idusuario',$idusuario);

		$lista=$this->db->get();
		return $lista->result();
	}


	public function obtenercargo($idusuario)
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('idusuario',$idusuario);

		$lista=$this->db->get();
		return $lista->result();
	}
}