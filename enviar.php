<?php
// Credenciales de usuario (reemplázalas con tus propias credenciales)
$usuarios = array(
    "sanabia@gmail.com" => "sanabia",
    "dante@gmail.com" => "dante",
    "pedro@gmail.com" => "pedro"
);

// Obtener el correo electrónico del formulario
$email = $_POST['email'];

// Verificar si el correo electrónico existe en la lista de usuarios
if(array_key_exists($email, $usuarios)) {
    // Aquí deberías implementar el código para enviar el correo electrónico de recuperación de contraseña
    echo "Se ha enviado un correo electrónico a $email con instrucciones para recuperar su contraseña.";
} else {
    echo "El correo electrónico especificado no está registrado.";
}
?>
