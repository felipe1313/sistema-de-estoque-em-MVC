<?php
namespace Models;

use \Core\Model;

class Vendas extends Model {
   
	

    public function AddVendas($id_prod,$nameprod,$priceunidade,$quantidade){
        if(isset($id_prod)){
        $sql = "INSERT INTO vendas (id_prod,nomeprod,priceunidade,quantidade,datavenda) VALUES ( :id_prod, :nameprod, :priceunidade, :quantidade, NOW())";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id_prod",$id_prod);
        $sql->bindValue(":nameprod",$nameprod);
        $sql->bindValue(":priceunidade",$priceunidade);
        $sql->bindValue(":quantidade",$quantidade);
        
        
        $sql->execute();
        
       
        }
        if(isset($id_prod)){
        $stmt = "UPDATE produtos SET  quantity = quantity - :quantidade WHERE id = :id_prod";
            $stmt = $this->db->prepare($stmt);
             $stmt->bindValue(":id_prod",$id_prod);
            // $stmt->bindValue(":name",$name);
            // $stmt->bindValue(":price",$price);
            $stmt->bindValue(":quantidade",$quantidade);
            // $stmt->bindvalue(":qtdm",$qtdm);
            // $stmt->bindValue(":id",$id);
            $stmt->execute();
            header("Location:".BASE_URL/vendas);
        }
    }

   
    public function Getvendas(){
        $array = array();

        $sql = "SELECT * FROM vendas";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            
           $array = $sql->fetchAll();

        }
        return $array;

       }
       public function GetProdutoVenda($id){
        $array = array();
        $sql = "SELECT * FROM produtos WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id",$id);
        $sql->execute();
       
        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }
        return $array;
      }
}

    