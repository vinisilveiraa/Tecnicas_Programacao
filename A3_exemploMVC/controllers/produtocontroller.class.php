<?php

class produtocontroller {
    public function listar() {
        //buscar os dados de produtos no banco de dados

        //abriu coneccao com o banco de dados
        $parametros = "mysql:host=localhost;
        dbname=exemplomvc;
        charset=utf8mb4";
        $conn = new PDO($parametros, "root", "");

        // buscar os dados
        $sql = "SELECT * FROM produtos";
        $stm = $conn->prepare($sql);
        $stm->execute();
        $conn = null;
        $resultado = $stm-> fetchAll(PDO::FETCH_OBJ);

        // echo "<pre>";
        // var_dump($resultado);
        // echo "</pre>";

        //mostrar uma visao com esses dados

        require_once "views/lista_produtos.php";

    }
}

?>