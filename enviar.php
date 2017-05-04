<?php

	/*		SCRIPT DEL FORMULARIO DE ENVIO 		*/

	// definimos las variables o marcamos el error
	if ( !empty($_REQUEST['nombres']) ) $nombres = $_REQUEST['nombres']; else $error = true;
	if ( !empty($_REQUEST['email']) ) $email = $_REQUEST['email']; else $error = true;
	if ( !empty($_REQUEST['subject']) ) $subject = $_REQUEST['subject']; else $error = true;
	if ( !empty($_REQUEST['mensaje']) ) $mensaje = $_REQUEST['mensaje']; else $error = true;

	// verificamos que no exista un error
	if (!empty($error)) {
	header( 'Location: contacto_error.php' );
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

	// enviamos el email
	if (mail('joechelito@live.com','Recibiste un mensaje a través del formulario de contacto de tu sitio web',$cuerpo)) {
		header('Location: contacto_exitoso.php');
		die;
	} 
	else {
		header('Location: contacto_error.php');
		die;
	}
	
  
?>