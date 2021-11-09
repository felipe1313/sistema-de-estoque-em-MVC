<?php
namespace Controllers;


use \Core\Controller;
use \Models\Usuarios;
use \Models\Produtos;
use \Models\Vendas;

    
    class VendasController extends Controller{

    public function __construct(){
		
        $this->user = new Usuarios();
		if(!$this->user->checkLogin()){
         header("Location:".BASE_URL."login");
		 exit;
		}


	}
	public function index() {
		$array = array();
        $p = new Vendas();
        $array['lista'] = $p->Getvendas();


       
		


		

		$this->loadTemplate('vendas', $array);
	}
	public function fazvenda($id){
		$array = [];
		$t = new Vendas();		
		if(!empty($_POST['id'])){
		$id_prod = $_POST['id'];
		$nameprod = $_POST['name'];
		$priceunidade = $_POST['price'];
		$quantidade = $_POST['qtd'];
		
		$t->AddVendas($id_prod,$nameprod,$priceunidade,$quantidade);
		header("Location:".BASE_URL);
		exit;
   }
       $array['info'] = $t->GetProdutoVenda($id);


		$this->loadtemplate('fazvenda',$array);
		 

	}
	
	


 }



