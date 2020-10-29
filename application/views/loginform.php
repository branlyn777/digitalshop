<!DOCTYPE html>
<html lang="en">
<head>
	<title>Digital Shop - Iniciar Sesión</title>
	<!--Etiqueta meta para el tipo de escritura(que se acepten acentos y caracteres)-->
	<meta charset="utf-8">
	<!-------------------------------------------------------------->
	<!--Etiqueta meta para que la pagina sea Responsiva-->
	<meta name="viewport" content="initial-scale=1, width=device-width">
	<!-------------------------------------------------------------->

   <link rel="stylesheet" href=" <?php echo base_url(); ?>47admin/app/css/fonts.css">

	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300);
		* {
		  box-sizing: border-box;
		  margin: 0;
		  padding: 0;
		  font-weight: 300;
		}
		.wrapper {
		  /*background: #3051cc;*/
		  /*
		  background: #3300CC;
		  background: -webkit-linear-gradient(top left, #3300CC 0%, #3300CC 100%);
		  background: linear-gradient(to bottom right, #3300CC 0%, #3300CC 100%);
		  */
		  background: #3300CC;
		  background: -webkit-linear-gradient(top left, skyblue 0%, white 100%);
		  background: linear-gradient(to bottom right, skyblue 0%, blue 100%);


		  position: absolute;
		  left: 0;
		  width: 100%;
		  height: 100%;
		  overflow: hidden;



		}
		
		.container {
		  min-width: 150px;
		  margin: 0 auto;
		  padding: 100px 0;
		  height: 400px;
		  text-align: center;
		  color: white;


		}
		.container h1 {
		  margin-top: ;
		  /*font-size: 40px;*/
		  font-size: 50px;
		  -webkit-transition-duration: 1s;
		          transition-duration: 1s;
		  -webkit-transition-timing-function: ease-in-put;
		          transition-timing-function: ease-in-put;
		  font-weight: 200;
		  border-color: white;
			color: rgba(255, 255, 255, 0.8);
			border-radius: 10px;
		}



		button {
		  -webkit-appearance: none;
		     -moz-appearance: none;
		          appearance: none;
		  outline: 0;
		  background-color: rgba(255, 255, 255, 0.7);
		  border: 0;
		  padding: 10px 15px;
		  color: #3051cc;
		  border-radius: 9px;
		  width: 250px;
		  cursor: pointer;
		  font-size: 18px;
		  -webkit-transition-duration: 0.25s;
		          transition-duration: 0.25s;
		}
		button:hover {
		  background-color: #f5f7f9;
		}
		input {
		  -webkit-appearance: none;
		     -moz-appearance: none;
		          appearance: none;
		  outline: 0;
		  border: 1px solid rgba(255, 255, 255, 0.8);
		  background-color: rgba(255, 255, 255, 0.7);
		  width: 250px;
		  border-radius: 10px;
		  padding: 10px 15px;
		  margin: 0 auto 10px auto;
		  display: block;
		  text-align: center;
		  font-size: 18px;
		  color: white;
		  -webkit-transition-duration: 0.25s;
		          transition-duration: 0.25s;
		  font-weight: 300;
		}

		input:hover {
		  background-color: rgba(255, 255, 255, 0.4);
		}
		input:focus {
		  background-color: white;
		  width: 300px;
		  color: #3051cc;
		}





		.bg-bubbles {
		  /*position: absolute;*/
		  top: 0;
		  left: 0;
		  width: 100%;
		  height: 100%;
		  z-index: 1;
		}
		.bg-bubbles li {
		  position: absolute;
		  list-style: none;
		  display: block;
		  width: 40px;
		  height: 40px;
		  background-color: rgba(55, 159, 189, 0.15);
		  bottom: -160px;
		  -webkit-animation: square 25s infinite;
		  animation: square 25s infinite;
		  -webkit-transition-timing-function: linear;
		  transition-timing-function: linear;
		}
		.bg-bubbles li:nth-child(1) {
		  left: 10%;
		}
		.bg-bubbles li:nth-child(2) {
		  left: 20%;
		  width: 80px;
		  height: 80px;
		  -webkit-animation-delay: 2s;
		          animation-delay: 2s;
		  -webkit-animation-duration: 17s;
		          animation-duration: 17s;
		}
		.bg-bubbles li:nth-child(3) {
		  left: 25%;
		  -webkit-animation-delay: 4s;
		          animation-delay: 4s;
		}
		.bg-bubbles li:nth-child(4) {
		  left: 40%;
		  width: 60px;
		  height: 60px;
		  -webkit-animation-duration: 22s;
		          animation-duration: 22s;
		  background-color: rgba(255, 255, 255, 0.25);
		}
		.bg-bubbles li:nth-child(5) {
		  left: 70%;
		}
		.bg-bubbles li:nth-child(6) {
		  left: 80%;
		  width: 120px;
		  height: 120px;
		  -webkit-animation-delay: 3s;
		          animation-delay: 3s;
		  background-color: rgba(255, 255, 255, 0.2);
		}
		.bg-bubbles li:nth-child(7) {
		  left: 32%;
		  width: 160px;
		  height: 160px;
		  -webkit-animation-delay: 7s;
		          animation-delay: 7s;
		}
		.bg-bubbles li:nth-child(8) {
		  left: 55%;
		  width: 20px;
		  height: 20px;
		  -webkit-animation-delay: 15s;
		          animation-delay: 15s;
		  -webkit-animation-duration: 40s;
		          animation-duration: 40s;
		}
		.bg-bubbles li:nth-child(9) {
		  left: 25%;
		  width: 10px;
		  height: 10px;
		  -webkit-animation-delay: 2s;
		          animation-delay: 2s;
		  -webkit-animation-duration: 40s;
		          animation-duration: 40s;
		  background-color: rgba(255, 255, 255, 0.3);
		}
		.bg-bubbles li:nth-child(10) {
		  left: 90%;
		  width: 160px;
		  height: 160px;
		  -webkit-animation-delay: 11s;
		          animation-delay: 11s;
		}
		@-webkit-keyframes square {
		  0% {
		    -webkit-transform: translateY(0);
		            transform: translateY(0);
		  }
		  100% {
		    -webkit-transform: translateY(-700px) rotate(600deg);
		            transform: translateY(-700px) rotate(600deg);
		  }
		}
		@keyframes square {
		  0% {
		    -webkit-transform: translateY(0);
		            transform: translateY(0);
		  }
		  100% {
		    -webkit-transform: translateY(-700px) rotate(600deg);
		            transform: translateY(-700px) rotate(600deg);
		  }
		}


		.marco{
			border: #FFFFFFFF 3px solid;
			margin-left: 35%;
			margin-right: 35%;
			margin-top: 70px;
			padding-bottom: 70px;
			background-color: #2D45FAE9;
			border-radius: 30px;
			/*background-image: url("<?php echo base_url(); ?>47admin/app/img/a1.gif");*/
			background-image: right;

		}
		.micolor{
			color: #FFFFFFFF;
			-webkit-text-stroke: 1.2px black;
			font-size: 30px;
			padding-top: 25%;
			padding-top: 20px;
			font-family: 'Arvo', serif;
		}


		
		

	</style>
</head>
<body>

	

	<div class="wrapper">
		<div class="marco">
		<center>
			
			<br>
			<br>
			<br>
			<div class="micolor">
				<h1>Digital Shop</h1>
			</div>
		</center>

		<div class="container">




			<?php
			switch ($msg)
			{
				case '1':
					echo "Error de Ingreso - Usuario y/o Contraseña Incorrectos";
					break;
				case '2':
					echo "Acceso No Válido - Sesión No Iniciada";
					break;
				case '3':
					echo "Gracias por Usar el Sistema";
					break;
				default:
					echo "";
					break;
			}
			?>

			<?php
				echo form_open_multipart('usuarios/validarusuario');
			?>
			<br>
			<input type="text" name="usuario" placeholder="Ingrese Usuario" required="" title="Letras y números. Tamaño mínimo: 4. Tamaño máximo: 17" required pattern="[A-Za-z0-9]{4,17}">
			<!--<br>
			<br>-->
			<br>
			<input type="password" name="contrasena" placeholder="Ingrese su Contraseña" required="" title="Letras y números. Tamaño mínimo: 9. Tamaño máximo: 35" minlength="9" maxlength="35" required pattern="[A-Za-z0-9]{9,35}">
			<br>
			<!--<br>
			<br>-->
			<button type="submit" class="">Iniciar Sesión</button>
			
			<!--ul(ul=Lista no ordenada) Para las burbujas animadas de fondo-->
			<ul class="bg-bubbles">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
			<!-------------->

		</div>
	
		</div>
	</div>


	<?php
		echo form_close();
	?>

</body>
</html>