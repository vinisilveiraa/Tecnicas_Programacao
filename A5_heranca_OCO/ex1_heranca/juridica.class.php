<?php

class Juridica extends Pessoa
{
    public function __construct(
        private string $cnpj = "",
        string $nome = "",
        string $celular = "",
        string $endereco = "",
    ) {
        parent::__construct($nome, $celular, $endereco);
    }

    public function getCnpj() 
    {
        return $this->cnpj;
    }
    public function setCnpj($cnpj)
    {
        $this->$cnpj;
    }

    public function ValidarCnpj($cnpj)
    {
        echo "Validar Cnpj";
    }
}
