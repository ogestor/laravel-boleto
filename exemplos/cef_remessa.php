<?php
require 'autoload.php';
$beneficiario = new \oGestor\LaravelBoleto\Pessoa(
    [
        'nome'      => 'ACME',
        'endereco'  => 'Rua um, 123',
        'cep'       => '99999-999',
        'uf'        => 'UF',
        'cidade'    => 'CIDADE',
        'documento' => '99.999.999/9999-99',
    ]
);

$pagador = new \oGestor\LaravelBoleto\Pessoa(
    [
        'nome'      => 'Cliente',
        'endereco'  => 'Rua um, 123',
        'bairro'    => 'Bairro',
        'cep'       => '99999-999',
        'uf'        => 'UF',
        'cidade'    => 'CIDADE',
        'documento' => '999.999.999-99',
    ]
);

$boleto = new oGestor\LaravelBoleto\Boleto\Banco\Caixa(
    [
        'logo'                   => realpath(__DIR__ . '/../logos/') . DIRECTORY_SEPARATOR . '104.png',
        'dataVencimento'         => new \Carbon\Carbon(),
        'valor'                  => 100.41,
        'multa'                  => false,
        'juros'                  => false,
        'numero'                 => 1,
        'numeroDocumento'        => 1,
        'pagador'                => $pagador,
        'diasBaixaAutomatica'    => 2,
        'beneficiario'           => $beneficiario,
        'agencia'                => 1111,
        'conta'                  => 123456,
        'carteira'               => 'RG',
        'codigoCliente'          => 999999,
        'descricaoDemonstrativo' => ['demonstrativo 1', 'demonstrativo 2', 'demonstrativo 3'],
        'instrucoes'             => ['instrucao 1', 'instrucao 2', 'instrucao 3'],
        'aceite'                 => 'S',
        'especieDoc'             => 'DM',
    ]
);

$remessa = new \oGestor\LaravelBoleto\Cnab\Remessa\Cnab400\Banco\Caixa(
    [
        'agencia'       => 1111,
        'idRemessa'     => 1,
        'conta'         => 123456,
        'carteira'      => 'RG',
        'codigoCliente' => 999999,
        'beneficiario'  => $beneficiario,
    ]
);
$remessa->addBoleto($boleto);

echo $remessa->save(__DIR__ . DIRECTORY_SEPARATOR . 'arquivos' . DIRECTORY_SEPARATOR . 'cef.txt');
