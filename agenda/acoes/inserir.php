<?php
//inserir da agenda, arrumar!!!
require "../../conexao.php";

session_start();

$nome = $_GET['nome'];
$telefone = $_GET['telefone'];

$sql = "INSERT INTO agenda (nome,telefone) VALUES('$nome', '$telefone')";


if ($conn->query($sql) === TRUE) {
    $conn->close();
    header('Location:../agenda.php?msg=filme');
} else {
    echo "nao foi inserido com sucesso :( ";

}

$conn->close();

?>