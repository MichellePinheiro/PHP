<?php

use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\CPF;

require_once 'autoload.php';

$autenticador = new Autenticador();
$umDiretor = new Diretor(
    'João da Silva',
    new CPF('111.222.333-88'),
    10000
);

$autenticador->tentaLogin($umDiretor,'1234');