<html>
<head>
	<title>Site</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="header">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Seja bem vindo</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
 

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
	   <?php if(isset($viewData['menu'])): ?>
	        <ul class="nav justify-content-center">
		    <?php foreach($viewData['menu'] as $url => $menutitle): ?>
	 
			<li class="nav-item active">
	        <a class="nav-link active" href="<?php echo $url; ?>"><?php echo $menutitle;?></a>
            </li>
			
			<?php endforeach;  ?>
			
		   </ul>
		<?php endif; ?>
    
     </div>
     </nav>
	
		

     </div>
	<div class="container"> 
	<h1>Sistema de Gerenciar Estoque</h1>
	
	<?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</div>
	
	
	
</body>
</html>