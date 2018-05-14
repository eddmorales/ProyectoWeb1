<?php

$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$comentario = $_POST['comentarios'];

$destino = "comentarios@christianayala.com.mx";

$contenido = "Nombre: " .$nombre. "\nApellidos: " .$apellidos. "\nEmail: " .$email. "\nComentario: " .$comentario;

$res = mail($destino, "Correo de prueba", $contenido);

if($res){
		echo "Se envio el correo";
	}
	else{
		echo "Algo malo sucedio";
	}
?>