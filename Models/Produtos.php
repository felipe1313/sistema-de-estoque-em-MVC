<?php
namespace Models;

use \Core\Model;
    class Produtos extends Model{
    
        public function GetProdutos($s=''){
            $array = [];
            
            if(!empty($s)){
                $sql = "SELECT * FROM produtos WHERE cod = :cod or name LIKE :name";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(":cod",$s);
                $sql->bindValue(":name", '%'.$s.'%');
                $sql->execute();
            }else{
            $sql = "SELECT * FROM produtos";
            $sql = $this->db->prepare($sql);
            $sql->execute();
                }
            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }
        
            return $array;
        }

        public function AddProdutos($cod,$name,$price,$qtd,$qtdm){
          
            $sql = "INSERT INTO produtos (cod,name,price,quantity,min_quantity,data) VALUES (:cod, :name, :price, :qtd, :qtdm, NOW())";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":cod",$cod);
            $sql->bindValue(":name",$name);
            $sql->bindValue(":price",$price);
            $sql->bindValue(":qtd",$qtd);
            $sql->bindvalue(":qtdm",$qtdm);
            $sql->execute();

        }

        public function EditProdutos($cod,$name,$price,$qtd,$qtdm,$id){
        
            $sql = "UPDATE produtos SET cod = :cod, name = :name, price = :price, quantity = :qtd, min_quantity = :qtdm WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(":cod",$cod);
            $sql->bindValue(":name",$name);
            $sql->bindValue(":price",$price);
            $sql->bindValue(":qtd",$qtd);
            $sql->bindvalue(":qtdm",$qtdm);
            $sql->bindValue(":id",$id);
            $sql->execute();

        }

        
        public function GetProduto($id){
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
      

        public function GetlowQuant(){
         $array = array();

         $sql = "SELECT * FROM produtos WHERE quantity < min_quantity";
         $sql = $this->db->query($sql);

         if($sql->rowCount() > 0){
             
            $array = $sql->fetchAll();

         }
         return $array;

        }

        




    }