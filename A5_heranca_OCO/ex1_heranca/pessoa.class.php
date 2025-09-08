<?php

// quando abstract, nao e possivel criar um obj apartir dessa classe 
abstract class Pessoa
{
    public function __construct(
        protected string $nome = "",
        protected string $celular = "",
        protected string $endereco = ""
    ) {} 

    public function getNome() {
        return $this -> nome;
    }
    public function getCelular() {
        return $this -> celular;
    }
    public function getEndereco() {
        return $this -> endereco;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function Inserir($Pessoa) {
        echo "Inserir";
    }
    public function Alterar($Pessoa) {
        echo "Alterar";
    }
}
