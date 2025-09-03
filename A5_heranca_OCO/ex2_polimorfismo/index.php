<?php

require_once "conta.class.php";
require_once "corrente.class.php";
require_once "poupanca.class.php";

$corrente = new Corrente(
    1000,
    "123-4",
    "234-5",
    5000 // saldo
);
echo $corrente->getSaldo();
echo "<br>";

$corrente->Retirar(500);
echo $corrente->getSaldo();
echo "<br>";



$poupanca = new Poupanca(
    4,
    "234-5",
    "987-6",
    10000
);
echo $poupanca->getSaldo();
echo "<br>";

$poupanca->Retirar(500);
echo $poupanca->getSaldo();
echo "<br>";