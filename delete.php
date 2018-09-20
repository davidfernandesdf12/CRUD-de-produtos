<?php
include('conexao_bd.php');
$sql = "DELETE FROM produto WHERE id='".$_REQUEST['produto_id']."'";
$query = mysqli_query($conecta, $sql) or die("database error:". mysqli_error($conecta));
echo "<script>window.location = 'index.php'</script>";
?>