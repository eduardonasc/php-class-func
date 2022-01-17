<?php

include('Calculadora.php');
include('Funcionarios.php');

$id = $_POST['id'];

$calculadora = new Calculadora();
$funcionarios = new Funcionarios();

$func = $funcionarios->find($id);

$novoSalario = $calculadora->mult(
    $func['salario'],
    1.1
);

echo $func['nome'] . '<br>';
echo 'Salário anterior: R$ ' . $func['salario'] . '<br>';
echo 'Novo salário: R$ ' . $novoSalario;

?>