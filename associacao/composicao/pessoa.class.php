<?php

class Pessoa
{
    private array $celular = array();
    public function __construct(
        private string $nome = "",
        // private array $celular = array(), 
        // -- se nao declarado o php cria abaixo

        // parametros nao se cria por private, se nao viram atributos
        int $ddd = 0,
        string $numero = ""
    ) {
        // instancia o objeto 
        $this->celular[] = new Celular($ddd, $numero);
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setCelular(int $ddd, string $numero)
    {
        $this->celular[] = new Celular($ddd, $numero);
    }
}
