<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petrópolis', 'bairro qualquer', 'Minha rua',100);
$outroEndereco = new Endereco ('Rio','Centro','Uma Rua aí',50);


echo $umEndereco->bairro . PHP_EOL;;
echo $outroEndereco->cidade;
exit();


echo $umEndereco . PHP_EOL;
echo $outroEndereco;