<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente_model extends CI_Model {


	public function listarclientes()
	{
		$this->db->select("c.idcliente as 'idcliente', c.razonsocial as 'razonsocial', c.nit as 'nit', c.genero as 'genero',count(v.idcliente) as 'total'");
		$this->db->from('clientes c');
		$this->db->join('ventas v','c.idcliente = v.idcliente');
		$this->db->where('c.estado',1);
		$this->db->group_by('idcliente');
		$this->db->order_by('c.idcliente','desc');
		return $this->db->get();
	}

}
