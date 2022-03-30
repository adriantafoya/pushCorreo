<?php 

$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

mail($correo, "subject", $mensaje);

header('Location: index.html')

?>