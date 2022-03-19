<?php

abstract class ProdutoPrototype
{
    protected $id;
    protected $nome;
    protected $cor;
    protected $preco;

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }    
}