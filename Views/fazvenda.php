
	<a class="btn btn-warning" href="<?php echo BASE_URL; ?>">Voltar</a></td>
  <table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
      <tr>
        <th>Codigo do Produto</th>
        <th>Nome do Produto</th>
        <th>Preço do Produto</th>
        <th>Quantidades do Produto</th>
      </tr>
      </thead>
      <tbody>
        <tr>
          
          <td><?php echo $info['cod'];?></td>
          <td><?php echo $info['name'];?></td>
          <td><?php echo number_format($info['price'], 2, ',','.');?></td>
          <td><?php echo $info['quantity'];?></td>
        </tr>
       
      </tbody>
  </table>
<form method="post" class="col-md-6">
<h1>Vender ou da baixa em um Produto</h1>
    <div class="form-group">
      <label for="cod">Codigo do Produto</label>
      <input type="hidden" class="form-control" name="id" disable id="id" required   value="<?php echo $info['id'];?>">
      <input type="text" class="form-control" name="cod" disable id="cod" required readonly value="<?php echo $info['cod'];?>">
      <label for="name">Nome do Produto</label>
      <input type="text" class="form-control" name="name" id="name disabledInput"  required readonly value="<?php echo $info['name'];?>">
      <label for="price">Preço do Produto</label>
      <input type="text" class="form-control" name="price" id="price" required readonly value="<?php echo number_format($info['price'], 2, ',','.');?>">
      <label for="qtd">Quantidades do Produto para a Venda</label>
      <input type="text" class="form-control" name="qtd" id="qtd" required value="<?php echo $info['quantity'];?>">
      <label for="qtdm">Quantidades Minima para venda e <?php echo $info['min_quantity'];?> unidade </label>
      <input type="text" class="form-control" name="qtdm" id="qtdm" required readonly value="<?php echo $info['min_quantity'];?>">
   
    </div>
    <button type="submit" class="btn btn-primary">Fazer Venda/ou baixa</button> ||| <a class="btn btn-warning" href="<?php echo BASE_URL;?>">Voltar</a>
</form>
</div>
