<?php
namespace Controllers;


use \Core\Controller;
use \Models\Usuarios;
use \Models\Produtos;
use \Models\Vendas;

    
    class RelatorioController extends Controller{

    public function __construct(){
		
        $this->user = new Usuarios();
		if(!$this->user->checkLogin()){
         header("Location:".BASE_URL."login");
		 exit;
		}


	}
	public function index() {
		$array = array();
        $p = new Produtos();


        $array['list'] = $p->GetlowQuant();
		


		

		$this->loadTemplate('relatorio', $array);
	}
	


 }



