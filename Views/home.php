

	<form method="get">
		<input value="<?php echo (!empty($_GET['busca'])) ? $_GET['busca']:''; ?>" name="busca" id="busca" type="text" style="width:100%; font-size:18px; heigth:40px;" placeholder="Digite o codigo de barras ou Nome do Produto">
		
	</form>
<h3>Lista de produtos</h3>

<a class="btn btn-success" href="<?php echo BASE_URL?>home/add">Adicionar Produtos</a> || <a class="btn btn-success" href="<?php echo BASE_URL?>relatorio">Relatorio</a> ||
<td><a class="btn btn-warning" href="<?php echo BASE_URL; ?>vendas">Ver todas vendas</a></td>	
<table class="table table-striped">
	<thead class="thead-inverse">
		<tr>
			<th>Cod</th>
			<th>Nome</th>
			<th>Preço</th>
			<th>Qtd</th>
			<th>Açoes</th>
			<th>Fazer venda/ou Baixa</th>
			
		
		</tr>
		</thead>
		<tbody>
		<?php foreach($list as $item): ?>
			<tr>				
			<td scope="row"><?php echo $item['cod'];?></td>
			<td scope="row"><?php echo $item['name'];?></td>
			<td scope="row">R$<?php echo number_format($item['price'], 2, ',','.');?></td>
			<td scope="row"><?php echo $item['quantity'];?></td>
			<td><a class="btn btn-warning" href="<?php echo BASE_URL; ?>home/edit/<?php echo $item['id'];?>">Editar</a></td>
			<td><a class="btn btn-warning" href="<?php echo BASE_URL; ?>vendas/fazvenda/<?php echo $item['id'];?>">Fazer Nova Venda</a></td>
				
			</tr>
			<?php endforeach; ?>
			
		</tbody>
</table>

<script>
	document.getElementById("busca").focus();
</script>
