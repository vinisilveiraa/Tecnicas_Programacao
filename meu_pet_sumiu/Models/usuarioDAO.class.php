<?php

class usuarioDAO extends Conexao {
    public function __construct() {
        parent:: __construct();
    }

    public function inserir($usuario) {
        $sql = "INSERT INTO usuarios (nome, email, senha, celular) VALUES(?,?,?,?)";
        try {   
            //preparar a frase sql
            $stm = $this->db->prepare($sql);
            //substituir nos pontos de interrogacao pelos valores que estao no objeto usuario
            $stm->bindValue(1,$usuario->getNome());
            $stm->bindValue(2,$usuario->getEmail());
            $stm->bindValue(3,$usuario->getSenha());
            $stm->bindValue(4,$usuario->getCelular());
            $stm->execute();
            $this->db = null;
        
        } 
        catch(PDOException $e) {
            $this->db = null;
            return "Problema com o cadastro do usuario";
        }
    }

    public function login() {
        
    }
    
    public function verificar_email() {
    
    }
} // fim classe