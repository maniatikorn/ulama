<?php
	
	$nombre = $_POST['nombre'];
	$mail = $_POST['mail'];
	$telefono = $_POST['telefono'];
	$descripcion = $_POST['descripcion'];
	$para = "j@ulamamexico.com";
	$asunto ="Un cliente te ha contactado desde el sitio web.";
	$header = "FROM: " . $mail;
	$mensaje = "Nombre:" . $nombre . "\n E-Mail: " . $mail . " \n Teléfono: " . $telefono . "\n Mensaje:\n " . $descripcion . "\n";
	if (isset($_POST['submit']))
	{
		if (mail($para, $asunto, $mensaje, $header))
		{
			echo "<script language='javascript'>
			alert('Mensaje enviado, muchas gracias.');
			window.location.href = 'http://ulamamexico.com';
			</script>";
		}
		else
		{
			echo "Falló el envio, intente de nuevo.";
		}
	}
	else
	{
		echo "<script language='javascript'>
			alert('Mensaje NO enviado, Intente de nuevo');
			window.location.href = 'http://ulamamexico.com';
			</script>";
	}
?>
