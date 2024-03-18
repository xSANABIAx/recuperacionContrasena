<?php
header("Content-Type: application/javascript");

// Credenciales de usuario (reemplázalas con tus propias credenciales)
$usuarios = array(
    "sanabia@gmail.com" => "sanabia",
    "usuario2@example.com" => "contraseña2",
    "usuario3@example.com" => "contraseña3"
);

// Obtener datos del formulario
$email = $_POST['loginEmail'];
$password = $_POST['loginPassword'];

// Validar las credenciales
if(array_key_exists($email, $usuarios) && $usuarios[$email] == $password) {
    // Inicio de sesión exitoso
    echo $_GET['callback'] . '(' . json_encode(array("success" => true, "message" => "Inicio de sesión exitoso para: $email")) . ')';
} else {
    // Credenciales incorrectas
    echo $_GET['callback'] . '(' . json_encode(array("success" => false, "message" => "Credenciales incorrectas.")) . ')';
}
?>