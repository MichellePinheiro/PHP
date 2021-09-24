<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Service\ControladorDeBonificacao;
use Alura\Banco\Modelo\Funcionario\{Gerente,Diretor,Desenvolvedor, EditorVideo};

$umaFuncionaria = new Gerente(
    'Patricia',
    new CPF('456.999.888-98'),
    3000
);

$umDiretor = new Diretor(
    'Ana Paula',
    new CPF('456.999.777-54'),
    5000
);

$umDesenvolvedor = new Desenvolvedor(
    'Michelle',
    new CPF('555.000.777-54'),
    4000
);

$umEditor = new EditorVideo(
    'Editor Video',
    new CPF('555.111.777-54'),
    3500
);


//$umDesenvolvedor->sobeDeNivel();

$controlador = new ControladorDeBonificacao();
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umDesenvolvedor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();