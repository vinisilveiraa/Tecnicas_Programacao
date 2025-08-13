<?php

// puxando classe de outro arquivo

// include "novo.php"; - se nao encontrar o arquivo da erro 
// include_once "Usuario.class.php"; - faz apenas uma vez
// require "Usuario.class.php"; - se nao encontrar o arquivo da erro direto
require_once "Usuario.class.php"; // - apenas uma vez

//criando um obj
$usuario1 = new Usuario(
    "Maria", "Maria@gmail.com", "m123"
    );
    $usuario2 = new Usuario(
        "Pedrinho", "PedrinhoPneus@gmail.com", "pneu1234"
        );
        $usuario3 = new Usuario(
            email:"Maria@gmail.com", senha:"m123"
            );
            
            // echo $usuario1 - nao funciona
            
            /*
            echo "<pre>";
            var_dump($usuario1);
            var_dump($usuario2);
            var_dump($usuario3);
            echo "</pre>";
            */
            
            // chamar um objeto especifico $usuario1->nome
            
            echo "Nome: {$usuario1->getNome()}<br>"; 
            echo "Email: {$usuario1->getEmail()}<br>";
            echo "Senha: {$usuario1->getSenha()}<br>";
            
            // trocando um obj especifico
            $usuario1->setNome("Maria da Silva");
            echo "Nome: {$usuario1->getNome()}<br>";

?>