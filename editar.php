<?php
include('conexao_bd.php');
@$id = $_POST['produto_id'];
@$nome = $_POST['nome'];
@$preco = $_POST['preco'];
@$peso = $_POST['peso'];
@$categoria = $_POST['categoria'];
$sql = "UPDATE produto SET nome = '$nome', preco = '$preco', peso = '$peso', categoria = '$categoria' WHERE id = '$id'";
$query = mysqli_query($conecta, $sql);
header("Location: index.php");
?>