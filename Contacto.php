<?php

if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Sin Argumentos!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
//Generador de Mensaje
$to = 'hector-9944@hotmail.com'; 
$email_subject = "Website Contact Form:  $name";
$email_body = "Recibio un nuevo mensaje del formulario de contacto de su sitio web.\n\n"."A qui estan los detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nTelefono: $phone\n\nMesaje:\n$message";
$headers = "From:hector-9944@hotmail.com\n";
$headers = "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers); //Especial para enviar Email
return true;    



?>
