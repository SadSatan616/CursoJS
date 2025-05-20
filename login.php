<?php

$usuario_valido = "Juan";
$contra_valida = "1234";

// Recoger datos de POST o GET y limpiar
$usuario = isset($_POST['usuario']) ? trim($_POST['usuario']) :
           (isset($_GET['usuario']) ? trim($_GET['usuario']) : '');

$contra = isset($_POST['contra']) ? trim($_POST['contra']) :
          (isset($_GET['contra']) ? trim($_GET['contra']) : '');

// Depuración: muestra los valores (solo para pruebas)
file_put_contents("debug.txt", "Usuario: '$usuario'\nContra: '$contra'\n", FILE_APPEND);

// Comparación estricta
if ($usuario === $usuario_valido && $contra === $contra_valida) {
    echo "autorizado";
} else {
    echo "fallo";
}
?>
