<?php
  $destinatario = 'suarezjavierkeim@gmail.com';
      //esto es a quien le llega
      
  $nombre = $_POST['nombre'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['msg'];
  $email = $_POST['email'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];

$header = "Enviado desde pagina web";
$mensajeCompleto =  "\nEnviado por : " . $nombre . "\nDireccion: " . $direccion. "\nTelefono: ". $telefono. "\nCorreo electronico". $email. "\nAsunto: ". $asunto. "\n ". "\n ".$mensaje ."\n "."\n ";

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo"<script>alert('mensaje enviado')</script>";
echo"<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>