<?php

require_once('../classes/Celular.php');
require_once('../classes/Notebook.php');

$celular = new Celular();
$celularClonado = clone $celular;

$notebook = new Notebook();
$notebookClonado = clone $notebook;
$notebookClonado->setPreco(7.000);

var_dump($celular).PHP_EOL;
echo "<br>";
var_dump($celularClonado);
echo "<br>";
var_dump($notebook);
echo "<br>";
var_dump($notebookClonado);