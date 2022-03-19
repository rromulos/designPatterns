<?php

require_once('ProdutoPrototype.php');

final class Notebook extends ProdutoPrototype
{
    public function __construct()
    {
        $this->id = 2;
        $this->nome = 'Notebook Dell Aspire';
        $this->cor = 'Preto';
        $this->preco = 5.600;
    }
}