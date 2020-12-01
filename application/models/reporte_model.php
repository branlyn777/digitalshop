<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reporte_model extends CI_Model {

	public function listareportventas()
	{
		$this->db->select("v.idventa as idventa,concat((u.nombre),(' '),(u.primerapellido),(' '),(u.segundoapellido)) as 'usuario',v.fechaventa, c.razonsocial as 'nombrecliente',sum(vp.cantidad) as 'unidadesvendidas',sum(vp.cantidad*p.preciobase) as 'total'");
		$this->db->from('ventas v');
		$this->db->join('venta_producto vp','v.idventa = vp.idventa');
		$this->db->join('productos p','vp.idproducto = p.idproducto');
		$this->db->join('usuarios u','v.idusuario = u.idusuario');
		$this->db->join('clientes c','v.idcliente = c.idcliente');
		$this->db->where('v.estado',1);
		$this->db->where('v.fechaventa >=','2020-01-01');
		$this->db->where('v.fechaventa <=','2020-12-31');
		$this->db->group_by('idventa');
		$this->db->order_by('idventa asc');
		return $this->db->get();
	}

	public function listareportventasfiltrar($inicio, $fin)
	{
		$this->db->select("v.idventa as idventa,concat((u.nombre),(' '),(u.primerapellido),(' '),(u.segundoapellido)) as 'usuario',v.fechaventa,c.razonsocial as 'nombrecliente',sum(vp.cantidad) as 'unidadesvendidas',sum(vp.cantidad*p.preciobase) as 'total'");
		$this->db->from('ventas v');
		$this->db->join('venta_producto vp','v.idventa = vp.idventa');
		$this->db->join('productos p','vp.idproducto = p.idproducto');
		$this->db->join('usuarios u','v.idusuario = u.idusuario');
		$this->db->join('clientes c','v.idcliente = c.idcliente');
		$this->db->where('v.estado',1);
		$this->db->where('v.fechaventa >=',$inicio);
		$this->db->where('v.fechaventa <=',$fin);
		$this->db->group_by('idventa');
		$this->db->order_by('idventa asc');
		return $this->db->get();
	}

	public function listareportproductos()
	{
		$this->db->select("vp.idproducto as 'idproducto',p.descripcion as 'descripcion', p.cantidad as 'cantidadrestante',sum(vp.cantidad) as 'cantidadvendida',(p.preciobase-p.costobase) as 'ganancianeta'");
		$this->db->from('venta_producto vp');
		$this->db->join('ventas v','vp.idventa=v.idventa');
		$this->db->join('productos p','vp.idproducto = p.idproducto');
		$this->db->join('usuarios u','v.idusuario = u.idusuario');
		$this->db->where('v.estado',1);
		$this->db->where('v.fechaventa >=','2020-01-01 00:00:00');
		$this->db->where('v.fechaventa <=','2020-12-31 23:59:59');
		$this->db->group_by('idproducto');
		$this->db->order_by('idproducto asc');
		return $this->db->get();
	}


	public function listareportventasproductosfiltrar($inicio, $fin)
	{
		$this->db->select("vp.idproducto as 'idproducto',p.descripcion as 'descripcion', p.cantidad as 'cantidadrestante',sum(vp.cantidad) as 'cantidadvendida',(p.preciobase-p.costobase) as 'ganancianeta'");
		$this->db->from('venta_producto vp');
		$this->db->join('ventas v','vp.idventa=v.idventa');
		$this->db->join('productos p','vp.idproducto = p.idproducto');
		$this->db->join('usuarios u','v.idusuario = u.idusuario');
		$this->db->where('v.estado',1);
		$this->db->where('v.fechaventa >=',$inicio);
		$this->db->where('v.fechaventa <=',$fin);
		$this->db->group_by('idproducto');
		$this->db->order_by('idproducto asc');
		return $this->db->get();
	}

	//Para mostrar detalles adicionales en la ventana modal de la pagina lista reportes productos
	public function mostrardetallesdetallesproductos($idproducto,$inicio, $fin)
	{
		$this->db->select("vp.idproducto as 'idproducto',u.nombre 'nombre',p.descripcion as 'descripcion',v.fechaventa as 'fechaventa',c.razonsocial as 'razonsocial',vp.cantidad as 'cantidad'");
		$this->db->from('productos p');
		$this->db->join('venta_producto vp','p.idproducto = vp.idproducto');
		$this->db->join('ventas v','vp.idventa = v.idventa');
		$this->db->join('usuarios u','v.idusuario = u.idusuario');
		$this->db->join('clientes c','v.idcliente = c.idcliente');
		$this->db->where('v.estado',1);
		$this->db->where('p.idproducto',$idproducto);
		$this->db->where('v.fechaventa >=',$inicio);
		$this->db->where('v.fechaventa <=',$fin);
		$this->db->order_by('v.fechaventa asc');
		return $this->db->get();
	}

}
