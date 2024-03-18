<?php
header("Content-Type: application/javascript");


$usuarios = array(
    "sanabia@gmail.com" => "sanabia",
    "usuario2@example.com" => "contraseña2",
    "usuario3@example.com" => "contraseña3"
);

// Obtener datos del formulario
$email = $_POST['loginEmail'];
$password = $_POST['loginPassword'];


if(array_key_exists($email, $usuarios) && $usuarios[$email] == $password) {
   
    echo $_GET['callback'] . '(' . json_encode(array("success" => true, "message" => "Inicio de sesión exitoso para: $email")) . ')';
} else {
    
    echo $_GET['callback'] . '(' . json_encode(array("success" => false, "message" => "Credenciales incorrectas.")) . ')';
}
?>