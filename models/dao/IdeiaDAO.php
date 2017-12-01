<?php
    require "config/Conexao.php";
    require "interfaces/DAOInterface.php";

class IdeiaDAO implements DAOInterface {
    private $conexao;

    public function IdeiaDAO() {
        $conexao = Conexao::getShared();
        $this->conexao = $conexao->getDB();
      }

    public function getAll(){
        $sql = "SELECT * FROM ideia";
        $result = $this->conexao->query($sql);

        if($result->num_rows == 0){
            return [];
        } else {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }

    public function getById($id){
        $sql = "SELECT * FROM ideia WHERE id = ". $id;
        $result = $this->conexao->query($sql);
        if($result->num_rows == 0) {
            return null;
        }else{
            return $result->fetch_assoc();
        }
    }

    public function save($object){
        
    }

    public function update($object, $id ){

    }

    public function delete($id){
        
    }

}






?>