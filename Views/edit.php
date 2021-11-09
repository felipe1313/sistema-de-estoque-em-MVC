
	
<form method="post" class="col-md-6">
<h1>Editar Produto</h1>
    <div class="form-group">
      <label for="cod">Codigo do Produto</label>
      <input type="text" class="form-control" name="cod" id="cod" required  value="<?php echo $info['cod'];?>">
      <label for="name">Nome do Produto</label>
      <input type="text" class="form-control" name="name" id="name" required value="<?php echo $info['name'];?>">
      <label for="price">Preço do Produto</label>
      <input type="text" class="form-control" name="price" id="price" required value="<?php echo number_format($info['price'], 2, ',','.');?>">
      <label for="qtd">Quantidades do Produto</label>
      <input type="text" class="form-control" name="qtd" id="qtd" required value="<?php echo $info['quantity'];?>">
      <label for="qtdm">Quantidades Minima</label>
      <input type="text" class="form-control" name="qtdm" id="qtdm" required value="<?php echo $info['min_quantity'];?>">
   
    </div>
    <button type="submit" class="btn btn-primary">Atualizar</button> ||| <a class="btn btn-warning" href="<?php echo BASE_URL;?>">Voltar</a>
</form>
</div>
