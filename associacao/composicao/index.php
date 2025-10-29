<?php
require_once "./pessoa.class.php";
require_once "./celular.class.php";

// instanciando (criando) objeto Todo (pessoa)
$pessoa1 = new Pessoa("maria da silva", 14, "994920505");
$pessoa1->setCelular(14, "991137423");

echo "<pre>";
var_dump($pessoa1);
echo "</pre>";



// instanciando (criando) objeto Parte (celular)
$pessoa2 = new Pessoa("paula tejando");
$celular1 = new Celular(14, "99772727", $pessoa2);

echo "<hr> <pre>";
var_dump($celular1);
echo "</pre>";



// RESULTADO #1

// object(Pessoa)#1 (2) {
//     ["celular":"Pessoa":private]=>
//     array(1) {
//       [0]=>
//       object(Celular)#2 (3) {
//         ["ddd":"Celular":private]=>
//         int(14)
//         ["numero":"Celular":private]=>
//         string(9) "994920505"
//         ["pessoa":"Celular":private]=>
//         NULL
//       }
//     }
//     ["nome":"Pessoa":private]=>
//     string(14) "maria da silva"
//   }