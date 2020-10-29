<div class="container">
	<a href="<?php echo base_url(); ?>index.php/usuarios/logout">Cerrar Sesión</a>
	<h2>Hola <?php echo $this->session->userdata('usuario'); ?></h2>
	<center><h1>Lista de Usuarios</h1></center>
	<table class="table">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Correo Electrónico</th>
				<th>Número de Celular</th>
				<th>Número de Carnet</th>
				<th>Fecha de Registro</th>
				<th>Cargo</th>
				<th>Modificar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$indice=1;
				foreach ($usuarios->result() as $row)
				{
			?>		
					<tr>
						<td><?php echo $indice; ?></td>
						<td><?php echo $row->nombre; ?></td>
						<td><?php echo $row->primerapellido; ?></td>
						<td><?php echo $row->segundoapellido; ?></td>
						<td><?php echo $row->email; ?></td>
						<td><?php echo $row->telefono; ?></td>
						<td><?php echo $row->ci; ?></td>
						<td><?php echo $row->fecharegistro; ?></td>
						<td><?php echo $row->rolusuario; ?></td>
						<td>
							<?php
								$atributos = array('class' => 'form-group','idusuario' => 'myform');
								echo form_open_multipart('usuarios/modificar',$atributos); 
							?>
							<input type="hidden" name="idusuario" value="<?php echo $row->idusuario ?>">
							<button type="submit" class="btn btn-primary btn">Modificar</button>
							<?php echo form_close(); ?>
						</td>
						<td>
							<?php
							$atributos = array('class' => 'form-group', 'idusuario' => 'myform');
							echo form_open_multipart('usuarios/eliminarbd',$atributos); ?>
							<input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
							<button type="submit" class="btn btn-danger btn">Eliminar</button>
							<?php echo form_close(); ?>
						</td>
					</tr>
					<!--No se está cerrando php--->
					<?php
					$indice++;
					
				}
			?>
		</tbody>
	</table>

	<?php 
		$atributos = array('class' => 'form-group', 'idusuario' => 'myform');
		echo form_open_multipart('usuarios/agregar',$atributos); ?>
		<center>
			<button type="submit" class="btn btn-primary btn">Agregar Usuario</button>
		</center>
	<?php echo form_close(); ?>
	
</div>