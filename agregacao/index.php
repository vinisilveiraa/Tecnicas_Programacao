<?php

require_once "produto.class.php";
require_once "categoria.class.php";

$categoria1 = new Categoria(1, "material escolar");
$categoria2 = new Categoria(2, "material de escritorio");
$produto1 = new Produto(1, "Caneta", 3.50, array($categoria1, $categoria2));

// mostrar os dados de Produto1

echo "<h2>Produto - {$produto1->getNome()}</h2>";
echo "Preco R$ " . number_format($produto1->getPreco(),2,",", ".") . "<br>";
echo "<h2>Categoria(s)</h2>";
foreach ($produto1->getCategoria() as $dado) {
    echo"Descritivo: {$dado->getDescritivo()}<br>";
}
