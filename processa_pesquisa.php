<?php
include('conexao_bd.php');

$sql = "SELECT nome FROM produto WHERE nome LIKE '%$pesquisa%'";
$query = mysqli_query($conecta, $sql);

while($linha = mysqli_fetch_array($query)){
	echo "nome:".$linha['nome'];
}

?>