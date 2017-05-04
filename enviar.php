<?php

	/*		SCRIPT DEL FORMULARIO DE ENVIO 		*/

	// definimos las variables o marcamos el error
	if ( !empty($_POST['nombres']) ) $nombres = $_POST['nombres']; else $error = true;
	if ( !empty($_POST['email']) ) $email = $_POST['email']; else $error = true;
	if ( !empty($_POST['subject']) ) $subject = $_POST['subject']; else $error = true;
	if ( !empty($_POST['mensaje']) ) $mensaje = $_POST['mensaje']; else $error = true;

	echo $nombres;
echo $email;
echo $subject;
echo $mensaje;

	// verificamos que no exista un error
	if (!empty($error)) {
	header( 'Location: contacto_error.php' );
	
	echo $nombres;
echo $email;
echo $subject;
echo $mensaje;
	die;
	}

	// definimos el cuerpo del email
	$cuerpo = "
	De: $nombres \n\r
	Email: $email \n\r
	Asunto: $subject \n\r
	Mensaje: \n\r
	$mensaje
	";

echo "$nombres$email$subject$mensaje";

	// enviamos el email
	if (mail('joesitop@gmail.com','Recibiste un mensaje a través del formulario de contacto de tu sitio web',$cuerpo)) {
		header('Location: contacto_exitoso.php');
		die;
	} 
	else {
		header('Location: contacto_error.php');
		die;
	}
	
  
?>