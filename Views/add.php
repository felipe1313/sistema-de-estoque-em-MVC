

<form action="" method="post" class="col-md-6">
<h1>Adicionar Produto</h1>
    <div class="form-group">
      <label for="cod">Codigo do Produto</label>
      <input type="text" class="form-control" name="cod" id="cod" required  placeholder="digite o codigo">
      <label for="name">Nome do Produto</label>
      <input type="text" class="form-control" name="name" id="name" required  placeholder="digite o nome">
      <label for="price">Preço do Produto</label>
      <input type="text" class="form-control" name="price" id="price" required placeholder="digite o price">
      <label for="qtd">Quantidades do Produto</label>
      <input type="text" class="form-control" name="qtd" id="qtd" required  placeholder="digite a quantidade">
      <label for="qtdm">Quantidades Minima</label>
      <input type="text" class="form-control" name="qtdm" id="qtdqtdm" required  placeholder="digite a quantidade minima">
   
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button> ||| <a class="btn btn-warning" href="<?php echo BASE_URL;?>">Voltar</a>
</form>
</div>
