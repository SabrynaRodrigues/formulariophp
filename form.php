<?php
$nome = $_GET['nome'];
$nota1 = $_GET['nota1'];
$nota2 = $_GET['nota2'];
$nota3 = $_GET['nota3'];

$calc = ($nota1 + $nota2 + $nota3)/3;
$media = number_format($calc, 2);
$status = "";
if($media >= 6){
    $status = "Aprovado";
} else {
    $status = "Reprovado";
};

echo "A média final do aluno(a) ". $nome . " foi igual a ". $media .". E o o aluno(a) foi ". $status .".";

?>
