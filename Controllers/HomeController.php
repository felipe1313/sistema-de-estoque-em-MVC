<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;
use \Models\Produtos;
use \Models\Vendas;

 

class HomeController extends Controller {
	private $user;

    public function __construct(){
		
        $this->user = new Usuarios();
		if(!$this->user->checkLogin()){
         header("Location:".BASE_URL."login");
		 exit;
		}


	}
	public function index() {
		$array = array(
              
			'menu' => array(
				BASE_URL.'home/add' => 'Adicionar Produto',
				BASE_URL.'relatorio' => 'Relatorio',
				BASE_URL.'login/sair' => 'Sair'
			)
		);


		$p = new Produtos();

        $s = '';
		if(!empty($_GET['busca'])){
			$s = $_GET['busca'];
		}



		$array['list'] = $p->GetProdutos($s);


		

		$this->loadTemplate('home', $array);
	}

	public function add(){
		$array = array(
          
			'menu' => array(
				BASE_URL.'relatorio' => 'Relatorio',
				BASE_URL.'/' => 'Voltar',
				BASE_URL.'login/sair' => 'Sair'
				
			)

		);

		$p = new Produtos();
		if(!empty($_POST['cod'])){
         $cod = $_POST['cod'];
		 $name = $_POST['name'];
		 $price = $_POST['price'];
		 $qtd = $_POST['qtd'];
		 $qtdm = $_POST['qtdm'];

		 $p->AddProdutos($cod,$name,$price,$qtd,$qtdm);
		 header("Location:".BASE_URL);

		}

		$this->loadtemplate('add',$array);
	}

	public function edit($id){
		$array =  array(

			'menu' => array(
				BASE_URL.'home/add' => 'Adicionar Produto',
				BASE_URL.'relatorio' => 'Relatorio',
				BASE_URL.'/' => 'Voltar',
				BASE_URL.'login/sair' => 'Sair'
				
			)
		);


		 $p = new Produtos();
	 	if(!empty($_POST['cod'])){
         $cod = $_POST['cod'];
		 $name = $_POST['name'];
		 $price = $_POST['price'];
		 $qtd = $_POST['qtd'];
		 $qtdm = $_POST['qtdm'];
		 $p->EditProdutos($cod,$name,$price,$qtd,$qtdm,$id);
		 header("Location:".BASE_URL);
		 exit;
	}
	    $array['info'] = $p->GetProduto($id);

	   $this->loadTemplate('edit', $array);

   }
   
}