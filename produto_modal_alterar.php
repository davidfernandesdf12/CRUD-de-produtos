<?php include('conexao_bd.php'); 
?>

<div class="modal fade" id="<?php echo 'alterarprodutoModal'.$linha['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="alterarprodutoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="alterarprodutoModalLabel">Novo Produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="editar.php" id='form'>
      <div class="modal-body">
         <div class="form-group">
            <label for="nome" class="col-form-label">ID:</label>
            <input type="number" name="produto_id" class="form-control" id="nome" value="<?php echo $linha['id']; ?>" readonly>
          </div>
          <div class="form-group">
            <label for="nome" class="col-form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" id="nome" value="<?php echo $linha['nome']; ?>" required>
          </div>
          <div class="form-group">
            <label for="preco" class="col-form-label">Preço:</label>
            <input type="text" name="preco" class="form-control" id="preco" value="<?php echo $preco; ?>" required="">
          </div>
          <div class="form-group">
            <label for="peso" class="col-form-label">Peso:</label>
            <input type="text" name="peso" class="form-control" id="peso" value="<?php echo $peso = number_format($linha['peso'], 1, '.', ',');
 ?>" required="">
          </div>
          <div class="form-group">
            <label for="categoria" class="col-form-label" >Categoria:</label>
            <input type="text" name="categoria" class="form-control" id="categoria" value="<?php echo $linha['categoria']; ?>" required="">
          </div>
          
       
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <button class="btn btn-secondary" data-dismiss="modal" >Cancelar</button>
      </div>
       </form>
       
    </div>
  </div>
</div>

