<?php
// require_once "pessoa.class.php";

class Celular
{
    public function __construct(
        private int $ddd = 0,
        private string $numero = "",
        // private Pessoa $pessoa = new Pessoa(),
        private $pessoa = null
    ) {}

    public function getDdd()
    {
        return $this->ddd;
    }
    public function getNumero()
    {
        return $this->numero;
    }
}
