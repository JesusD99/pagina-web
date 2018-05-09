<?php
$detino= "yisuscr99@gmail.com"
$nombre= $_Post ["Nombre"]
$nombre= $_Post ["Correo"]
$nombre= $_Post ["Telefono"]
$nombre= $_Post ["Mensaje"]
$contenido= "Nombre: " . $Nombre . "\nCorreo: " . $Correo . "\nTelefono: " . $Telefono . "\nMensaje: " . $Mensaje;
mail($destino;"Reparacion"; $contenido);
header("Location:gracias.html");

?>