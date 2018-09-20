<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Preço</th>
      <th scope="col">Peso</th>
      <th scope="col">Categoria</th>
      <th scope="col">Editar</th>
      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
    
      <?php 
      @$pesquisa = $_POST['pesquisa_valor'];
      if($pesquisa == "" || $pesquisa == NULL){
      $sql = "SELECT * FROM produto ORDER BY id";
      $query = mysqli_query($conecta,$sql);
      }
      if($pesquisa){
        $sql = "SELECT * FROM produto WHERE nome LIKE '%$pesquisa%'";
        $query = mysqli_query($conecta, $sql);
      }
      while($linha = mysqli_fetch_array($query)){
      $preco = number_format($linha['preco'], 2, ',' ,'.');
      $peso = number_format($linha['peso'], 1, ',' ,'.');
      echo "<tr><td>".$linha['id']. "</td>";
      echo "<td>".$linha['nome']. "</td>";
      echo "<td>R$". $preco . "</td>";
      echo "<td>". $peso . " kg</td>";
      echo "<td>".$linha['categoria']. "</td>";
      echo "<td><button class='btn btn-outline-secondary' data-toggle='modal' data-target='#alterarprodutoModal$linha[id]'><i class='far fa-edit' ></i></button></td>";
       echo "<td>
       <a href='delete.php?produto_id=$linha[id]'><button class='btn btn-outline-secondary'><i class='far fa-trash-alt' ></i></td></button></tr>";
       include('produto_modal_alterar.php');
      }
      
      ?>


    
  </tbody>
</table>