<?php

use Alura\Banco\Modelo\Funcionario;

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;


$endereco = new Endereco ('Petrópolis','Bairro','Minha rua', '71B');
$michelle = new Titular (new CPF('460.233.668-05'),'Michelle Pinheiro',$endereco);
$primeiraConta = new Conta ($michelle);

$primeiraConta -> deposita(500);
$primeiraConta -> saca(300);
//$primeiraConta -> defineCpfTitular ('460.233.668-05');
//TESTANDO O GIT
echo $primeiraConta -> recuperaSaldo() . '<br>';
echo $primeiraConta -> recuperaCpfTitular() . '<br>';
echo $primeiraConta -> recuperaNomeTitular() . '<br>';

$pedro =  new Titular (new CPF('452.454.456-06'),'Pedro Henrique',$endereco);
$segundaConta = new Conta ($pedro);

// echo $segundaConta -> recuperaSaldo() . '<br>';
// echo $segundaConta -> recuperaCpfTitular() . '<br>';
// echo $segundaConta -> recuperaNomeTitular() . '<br>';

$outra =  new Conta(new Titular(new CPF ('462.462.462-7'),'Outraa',$endereco ));
unset($segundaConta);

echo Conta::recuperaNumeroDeContas();

echo $primeiraConta -> saldo;
