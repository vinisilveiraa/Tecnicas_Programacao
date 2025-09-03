<?php

require_once "pessoa.class.php";
require_once "juridica.class.php";
require_once "fisica.class.php";

$pessoaFisica = new Fisica(
    "123.123.123.345.34",
    "Joao da Silva",
    "(14)99992828",
    "Rua XV de Novembro, 123, 17000000"
);

echo "<pre>";

var_dump($pessoaFisica); 
// herdou as classes 

echo "</pre>";

echo $pessoaFisica->Inserir($pessoaFisica);
echo "<br>";
echo $pessoaFisica->Alterar($pessoaFisica);
echo "<br>";
echo $pessoaFisica->validarCPF($pessoaFisica);
// herdou os atributos e nao perdeu seus proprios

echo "<hr>";

// $pessoa = new Pessoa("Maria", "(14)99999999", "Rua xerecao grandao, 323, Sao Bucetas");
// classes abstratas bloqueiam new