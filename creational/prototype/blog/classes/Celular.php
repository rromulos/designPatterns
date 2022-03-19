<?php

require_once('ProdutoPrototype.php');

final class Celular extends ProdutoPrototype
{
    public function __construct()
    {
        $this->id = 1;
        $this->nome = 'Iphone 13';
        $this->cor = 'Prata';
        $this->preco = 5.000;
    }
}