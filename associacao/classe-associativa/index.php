<?php 

require_once "./ator.class.php";
require_once "./filme.class.php";
require_once "./papel.class.php";

$filme = new Filme("harry potter");
$ator = new Ator("nome do ator");

$papel = new Papel("Papel feito pelo ator no filme", $filme, $ator);

echo "<pre>";
var_dump($papel);
echo "</pre>";