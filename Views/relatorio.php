<div class="container"><h1>Relatorio</h1>
<table class="table table-striped">
    <tr>
        <th>Nome do Produto</th>
        <th>Qtd.</th>
        <th>Qtd Minima</th>
        <th>Diferença</th>
    </tr>
    <?php foreach($list as $item): ?>
        <tr>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['quantity']; ?></td>
            <td><?php echo $item['min_quantity'];?></td>
            <td>Falta <?php echo floatval($item['min_quantity']) - floatval($item['quantity']);?> Unidades deste produto</td>
        </tr>
        <?php endforeach; ?>
</table>
</div>
<script>
    window.print();
</script>