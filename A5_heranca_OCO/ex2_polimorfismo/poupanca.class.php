<?php

class Poupanca extends Conta
{
    public function __construct(
        private int $aniversario = 0,
        string $numero = "",
        string $agencia = "",
        float $saldo = 0,
    ) {
        parent::__construct($numero, $agencia, $saldo);
    }

    
    public function Retirar($valor)
    // polimorfismo, mesmo metodo c funcao diferente 
    {
        $diaCorrente = (int)date("d");
        
        if ($this->aniversario > $diaCorrente) {
            echo "Você perderá os rendimentos";
        } 
        parent::Retirar($valor);
        
        if ($this->saldo >= $valor) {
            parent:: retirar($valor);
        }
        else {
          echo "<br>";
          echo "Conta poupança sem saldo suficiente!";
        }
    }
}