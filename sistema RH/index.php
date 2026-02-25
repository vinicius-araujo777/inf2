<?php 
include "RH.class.php";

$gerente = new Gerente("Carlos", 5000, 1500);
$estagiario = new Estagiario("Ana", 1200, 200);

echo $gerente->mostrarSalario();
echo $estagiario->mostrarSalario();

?>