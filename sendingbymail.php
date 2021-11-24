<?php
echo "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";

$email_to = "nerfcoolpwd@gmail.com";
$email_subject = "Contacto desde el sitio web";

$email_message = "Detalles del formulario de contacto:\n\n";

$email_message .= "E-mail: " . $_POST['email'] . "\n";



$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
}
?>