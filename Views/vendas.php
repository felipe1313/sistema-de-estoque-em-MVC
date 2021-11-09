<h1>Vendas</h1>
<div class="container">
<a class="btn btn-warning" href="<?php echo BASE_URL; ?>">Voltar</a></br></br>
<table class="table table-striped">
    <tr>
        <th>Nome do Produto</th>
        <th>Preço por Unidade.</th>
        <th>Qtd.</th>
        <th>Montante</th>        
        <th>Data Venda</th>
        <th>Ações</th>
        
    </tr>
    <?php foreach($lista as $list): ?>
        <tr>
            <td><?php echo $list['nomeprod']; ?></td>
            <td>R$<?php echo number_format($list['priceunidade'], 2, ',','.');?></td>
            <td>Foram vendidas  <?php echo floatval($list['quantidade']);?> Unidades deste produto</td>  
            <?php $total = $list['priceunidade'] * $list['quantidade'];?>        
            <td>R$<?php echo number_format($total, 2, ',','.');?></td>
            <td><?php echo $list['datavenda'] = implode("/",array_reverse(explode("-",$list['datavenda'])));;?></td>
            <td><button class="btn btn-warning">Imprimir</button></td>
        </tr>
        <?php endforeach; ?>  
</table>
</div>


	
<!-- <form method="post" class="col-md-6">
<h1>Editar Produto</h1>
    <div class="form-group">
      <label for="cod">id do Produto</label>
      <input type="text" class="form-control" name="cod" id="id_prod" required  value="<?php echo $list['id_prod'];?>">
      <label for="name">Nome do Produto</label>
      <input type="text" class="form-control" name="nomeprod" id="nomeprod" required value="<?php echo $list['nomeprod'];?>">
      <label for="price">Preço do Produto</label>
      <input type="text" class="form-control" name="priceunidade" id="priceunidade" required value="<?php echo number_format($list['priceunidade'], 2, ',','.');?>">
      <label for="qtd">Quantidades do Produto</label>
      <input type="text" class="form-control" name="quantidade" id="quantidade" required value="<?php echo $list['quantidade'];?>">
      <label for="qtdm">Data</label>
      <input type="text" class="form-control" name="datavenda" id="datavenda" required value="<?php echo $list['datavenda'];?>">
   
    </div>
    <button type="submit" class="btn btn-primary">Fazer Venda</button> ||| <a class="btn btn-warning" href="<?php echo BASE_URL;?>">Voltar</a>
</form> -->

</div>
