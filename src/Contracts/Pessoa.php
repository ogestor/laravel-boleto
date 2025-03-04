<?php
namespace oGestor\LaravelBoleto\Contracts;

interface Pessoa
{
    public function getNome();
    public function getNomeDocumento();
    public function getDocumento();
    public function getBairro();
    public function getEndereco();
    public function getCepCidadeUf();
    public function getEnderecoCompleto();
    public function getCep();
    public function getCidade();
    public function getUf();
    public function toArray();
}
