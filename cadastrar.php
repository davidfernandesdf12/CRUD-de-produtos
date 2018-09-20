<?php
include('conexao_bd.php');
@$nome = $_POST['nome'];
@$preco = $_POST['preco'];
@$peso = $_POST['peso'];
@$categoria = $_POST['categoria'];

$sql = "INSERT INTO produto (nome, preco, peso, categoria) VALUES ('$nome', '$preco', '$peso' , '$categoria')";
$query = mysqli_query($conecta, $sql);
mysqli_close($conecta);
echo "<script>alert('Produto salvo com sucesso!')</script>";
header("Location: index.php");
?>