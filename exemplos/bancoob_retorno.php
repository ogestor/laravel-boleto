<?php
require 'autoload.php';

$retorno = \oGestor\LaravelBoleto\Cnab\Retorno\Factory::make(__DIR__ . DIRECTORY_SEPARATOR . 'arquivos' . DIRECTORY_SEPARATOR . 'bancoob.ret');
$retorno->processar();

echo $retorno->getBancoNome();
dd($retorno->getDetalhes()->toArray());
