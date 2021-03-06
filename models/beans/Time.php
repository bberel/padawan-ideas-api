<?php
require "models/beans/BaseModel.php";

class Time extends BaseModel{
    protected $id;
    protected $nome_time;
    protected $data_criacao;
    protected $descricao;

    public function getId() {
        return $this->id;
    }
    
    public function setId($id) {
        $this->id = $id;
    }
    
    public function getNomeTime() {
        return $this->nome_time;
    }
    
    public function setNomeTime($nome_time) {
        $this->nome_time = $nome_time;
    }
    
    public function getDataCriacao() {
        return $this->data_criacao;
    }
    
    public function setDataCriacao($data_criacao) {
        $this->data_criacao = $data_criacao;
    }
    
    public function getDescricao() {
        return $this->descricao;
    }
    
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
}