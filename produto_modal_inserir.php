<?php include('conexao_bd.php'); ?>


<div class="modal fade" id="inserirprodutoModal" tabindex="-1" role="dialog" aria-labelledby="inserirprodutoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="inserirprodutoModalLabel">Novo Produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="cadastrar.php" id='form'>
      <div class="modal-body">
          <div class="form-group">
            <label for="name" class="col-form-label">Nome:</label>
            <input type="text" name="nome" class="form-control" id="name" required>
          </div>
          <div class="form-group">
            <label for="preco" class="col-form-label">Preço:</label>
            <input type="text" name="preco" class="form-control" id="preco" required="">
          </div>
          <div class="form-group">
            <label for="peso" class="col-form-label">Peso:</label>
            <input type="text" name="peso" class="form-control" id="peso" required="">
          </div>
          <div class="form-group">
            <label for="categoria" class="col-form-label">Categoria:</label>
            <input type="text" name="categoria" class="form-control" id="categoria" required="">
          </div>
          
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="this.form.reset()">Cancelar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
       </form>
    </div>
  </div>
</div>
