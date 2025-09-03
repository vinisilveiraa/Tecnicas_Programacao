<?php

abstract class Conta
{
    public function __construct(
        protected string $numero = "",
        protected string $agencia = "", // string = varchar (texto)
        protected float $saldo = 0, // = 0 pq e float (numero)
    ) {}

    public function getSaldo()
    {
        return $this->saldo; // get - mostrar
    }

    public function Retirar($valor)
    {
        if ($valor > 0) {
            //$this->saldo = $this->saldo - $valor
            $this->saldo -= $valor;
        }
    }
}
