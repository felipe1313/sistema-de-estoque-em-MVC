<?php
namespace Models;

use \Core\Model;

class Usuarios extends Model {
   
	private $info;

    public function VerifyUser($number,$pass){
    $sql = "SELECT * FROM user where user_number = :unumber and user_pass = :upass";
	$sql = $this->db->prepare($sql);
	$sql->bindValue(":unumber", $number);
	$sql->bindValue(":upass",$pass);
	$sql->execute();
     
	if($sql->rowCount() > 0){
		return true;
	}else{
		return false;
	 }
	}

	public function createtoken($unumber){
     $token = md5(time().rand(0,9999));
	 $sql = "UPDATE user SET user_token = :token WHERE user_number = :unumber";
     $sql = $this->db->prepare($sql);
	 $sql->bindValue(":token", $token);
	 $sql->bindValue(":unumber",$unumber);
	 $sql->execute();
	 return $token;

	}

	public function checkLogin(){
       if(!empty($_SESSION['token'])){
	   $token = $_SESSION['token']; 
	   
	   $sql = "SELECT * FROM user WHERE user_token = :token";
	   $sql = $this->db->prepare($sql);
	   $sql->bindValue(":token",$token);
	   $sql->execute();
	   if($sql->rowCount()> 0){
		$this->info = $sql->fetch(); 
		 
		return true;
	   }

	 }
      return false;

	}


	public function getAll() {
		$array = array();

		$sql = "SELECT * FROM user";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

}