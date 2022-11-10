<?php
//buscar o codigo que conecta no SGBD
require_once '../banco de dados/conecta.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$inicio = $_POST['inicio'];

$stmt = $bd->prepare ("UPDATE alunos SET nome = :nome, turno = :turno, inicio = :inicio, id = :id  WHERE");

$stmt->bindParm(':id' , $id);
$stmt->bindParm(':nome' , $nome);
$stmt->bindParm(':turno' , $turno);
$stmt->bindParm(':inicio' , $inicio);


$stmt->execute();

$atualizou =false;

if($stmt->rowCount() > 0){

    $atualizou = true;
}

include 'index.php';