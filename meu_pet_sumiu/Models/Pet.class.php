<?php

class Pet
{
    public function __construct(
        private int  $id_pet = 0,
        private string $nome = "",
        private string $idade = "",
        private string $raca = "",
        private string $porte = "",
        private string $local = "",
        private string $data = "",
        private string $imagem = "",
        private string $cor_olhos = "",
        private string $cor = "",
        private string $observacoes = "",
        private string $situacao = "",
        private $usuario = null
    ) {}
    // fazer gets e sets para os pets

    public function getId_pet()
    {
        return $this->id_pet;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function getRaca()
    {
        return $this->raca;
    }
    public function getPorte()
    {
        return $this->porte;
    }
    public function getLocal()
    {
        return $this->local;
    }
    public function getData()
    {
        return $this->data;
    }
    public function getImagem()
    {
        return $this->imagem;
    }
    public function getCor_olhos()
    {
        return $this->cor_olhos;
    }
    public function getCor()
    {
        return $this->cor;
    }
    public function getObservacoes()
    {
        return $this->observacoes;
    }
    public function getSituacao()
    {
        return $this->situacao;
    }
    public function getUsuario()
    {
        return $this->usuario;
    }


    public function setId_pet($id_pet)
    {
        $this->id_pet = $id_pet;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function setRaca($raca)
    {
        $this->raca = $raca;
    }
    public function setPorte($porte)
    {
        $this->porte = $porte;
    }
    public function setLocal($local)
    {
        $this->local = $local;
    }
    public function setData($data)
    {
        $this->data = $data;
    }
    public function setImagem($imagem)
    {
        $this->imagem = $imagem;
    }
    public function setCorOlhos($cor_olhos)
    {
        $this->cor_olhos = $cor_olhos;
    }
    public function setCor($cor)
    {
        $this->cor = $cor;
    }
    public function setObservacoes($observacoes)
    {
        $this->observacoes = $observacoes;
    }
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }
}
