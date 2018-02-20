<?php

//Retrieve form data. 
//GET - user submitted data using AJAX
//POST - in case user does not support javascript, we'll use POST instead
$curso = ($_GET['curso']) ?$_GET['curso'] : $_POST['curso'];
$nombre = ($_GET['nombre']) ? $_GET['nombre'] : $_POST['nombre'];
$email = ($_GET['email']) ?$_GET['email'] : $_POST['email'];
$telefono = ($_GET['telefono']) ? $_GET['telefono'] : $_POST['telefono'];



$nombre = stripslashes($nombre);
$telefono = stripslashes($telefono);

//flag to indicate which method it uses. If POST set it to 1
if ($_POST) $post=1;

//Simple server side validation for POST data, of course, you should validate the email
if (!$nombre) $errors[count($errors)] = 'Por favor ingresa tu nombre.';
if (!$telefono) $errors[count($errors)] = 'Por favor ingresa tu teléfono.';
if (!$email) $errors[count($errors)] = 'Por favor ingresa tu email.';
if (!$curso) $errors[count($errors)] = 'Por favor ingresa tu curso';

//if the errors array is empty, send the mail
if (!$errors) {

	//recipient - YOUR EMAIL.. or whatever
	$to = 'Your Name <dmanuell08@gmail.com>';
	/*$to = 'Your Name <dmanuell08@gmail.com>';*/	
	//sender - from the form
	$from = $nombre . ' <' . $email . '>';
	
	//subject and the html message
	$subject = 'Comment from ' . $nombre;
	$message = '
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head></head>
	<body>
	<table>
		<th style="font-size:24px">Nueva Inscripción a Cursos - DCM</th>
	</table>
	<table>
		<tr><td>Curso</td><td></td><td>' . $curso . '</td></tr>
		<tr><td>Nombre</td><td></td><td>' . $nombre . '</td></tr>
		<tr><td>Teléfono</td><td></td><td>' . $telefono . '</td></tr>
		<tr><td>Email</td><td></td><td>' . $email . '</td></tr>
	</table>
	</body>
	</html>';

	//send the mail
	$result = sendmail($to, $subject, $message, $from);
	
	//if POST was used, display the message straight away
	if ($_POST) {
		if ($result) echo 'Thank you! We have received your Message';
		else echo 'Sorry, unexpected error. Please try again later';
		
	//else if GET was used, return the boolean value so that 
	//ajax script can react accordingly
	//1 means success, 0 means failed
	} else {
		echo $result;
	}

//if the errors array has values
} else {
	//display the errors message
	for ($i=0; $i<count($errors); $i++) echo $errors[$i] . '<br/>';
	echo '<a href="../basico-administrativo.php">Back</a>';
	exit;
}


//Simple mail function with HTML header
function sendmail($to, $subject, $message, $from) {
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= 'From: ' . $from . "\r\n";
	
	$result = mail($to,$subject,$message,$headers);
	
	if ($result) return 1;
	else return 0;
}

?>