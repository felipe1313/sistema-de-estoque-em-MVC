<form method="post">
<div class="form-group col-md-6">
  <label for="">Nome:</label>
  <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId">
  <label for="">Senha:</label>
  <input type="text" name="pass" id="pass" class="form-control" placeholder="" aria-describedby="helpId">
  <button class="btn btn-primary" >Entrar</button>
</div>
</form>
<?php if(!empty($msg)): ?> 

    <h2><?php echo "$msg";?></h2>
<?php endif;?>