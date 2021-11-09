<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuarios;


class LoginController extends Controller {

	public function index() {
		$array = array(
            'msg' => ''
        );
        if(!empty($_POST['name'])){
         $unumber = $_POST['name'];
         $upass = $_POST['pass'];

         $user = new Usuarios();
         if($user->VerifyUser($unumber,$upass)){
            $token = $user->createtoken($unumber);
            $_SESSION['token'] = $token;
            header("Location:".BASE_URL);
            exit;
         }else{
             $array['msg'] = 'Numero e/ou senha invalidos';
         }

        }

		

		$this->loadTemplate('login', $array);
	}
    public function sair(){
        unset($_SESSION['token']);
        header("Location :".BASE_URL."login");
        exit;
    }

}