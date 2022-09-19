<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF -8">
	<title>Comunicate con nosotros</title>
	<link rel="stylesheet" href="estilos.css">
	<script type="text/javascript">
		function Redireccionar(){
			window.location='contacto.html';
		}
		setTimeout('Redireccionar()', 4000);
	</script>
</head>
<body>
	<div class="container">
		<?php 
			if(isset($_POST['nombre'])&&($_POST['correo']!='')&&($_POST['mensaje']!='')){
				$nombre = $_POST['nombre'];
				$email = $_POST['correo'];
				$miemail = $_POST['miemail'];
				$mensaje = $_POST['mensaje'];
				$telefono = $_POST['telefono'];
				//Contenido del mensaje
				$titulo = "Recibimos tu mensaje";
				$contenido = '<html>
								<head>
									<title>' . $titulo . '</title>
								</head>
								<body>
									<h1>paraVos:</h1><h2>te lo traemos</h2><div><img src="/PVimagenes/PVlogo.png" width="500px" height="300px"></p></div>
									<p>Hola <strong>' . $nombre . '</strong> me llamo <em>Layta</em> y soy la encargada de recibir los mensajes; recien me llego el tuyo que dice:</p>
									<p>Mensaje: ' . $mensaje . ' <br><br> dejandonos este e-mail de referencia y el siguiente numero de telefono: ' . $telefono . '</p>
									<hr>
									<p>Gracias por comunicarte con nosotros, este mensaje te lo envio para que te quedes tranquilo que recibimos tu mensaje y pronto te estaremos contestando.<br/>
									Te mando un abrazo mio y del equipo <h1>paraVos</h1></p>
								</body>
							</html>';
				$encabezado = "MINE-Version: 1.0\r\n";
				$encabezado .= "Content-type: text/html; charset=UTF-8\r\n";
				$encabezado .= "From: Layta <paravosbrandsen/>\r\n";
				$encabezado .= "Reply-To: paravosbrandsen\r\n";

				$envio = mail($miemail,$titulo,$contenido,$encabezado);
				$envio = mail($email,$titulo,$contenido,$encabezado);
				


				if($envio == true){
					echo "<h1>El mensaje se ha enviado correctamente</h1>";
				}
				else{
					echo "<h1>Se ha presentado un error con el envio del email</h1>";
				}


			}
			else{
				echo "<h1>Se ha presentado un error, porfavor, vuelve a completa los campos del formulario</h1>";
			}
		?>
		<h2><img src="loading.gif" alt=""> Te estamos redireccionando al sitio web...</h2>
	</div>
</body>
</html>
