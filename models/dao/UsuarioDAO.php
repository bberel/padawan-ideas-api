<?php

require "config/Conexao.php";
require "interfaces/DAOInterface.php";

class UsuarioDAO implements DAOInterface {

  private $conexao;

  public function UsuarioDAO() {
    $conexao = Conexao::getShared();
    $this->conexao = $conexao->getDB();
  }

  public function getAll() {
    $sql = "SELECT * FROM usuario;";
    $resultado = $this->conexao->query($sql);
    if($resultado->num_rows == 0){
        return [];
    } else {
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
  }

  public function getById($id) {
    $sql = "SELECT * FROM usuario WHERE id = ". $id;
    $result = $this->conexao->query($sql);
    if($result->num_rows == 0) {
      return null;
    } else {
      return $result->fetch_assoc();
    }
  }

  public function save($object) {
    $sql = "INSERT INTO usuario (nome, email, link_linkedin, celular, nick, senha) VALUES (
      '".$object->getNome()."','".$object->getEmail()."','".$object->getLinkedin()."',
      '".$object->getCelular()."', '".$object->getNick()."','".$object->getSenha()."')";
  
    $resultado = $this->conexao->query($sql);
  
    if(!$resultado){
      return null;
    } else {
      $id = $this->conexao->insert_id;
      return $this->getById($id);
    }
  
  }

  public function update($object, $id) {

  }

  public function delete($id) {

  }

}
