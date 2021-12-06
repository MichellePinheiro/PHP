<?php

use Alura\Media\Service\Calculadora;

require_once 'autoload.php';

$notas = [10,5,6,3,3];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media){
    echo "A média é $media";
}else{
    echo "Não foi possivel calcular a média!";
}
//////////////////////////////////////////////

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

foreach ($saldos as $saldo) {
    echo "<p> O saldo é $saldo</p>";
}

sort($saldos);  //////Ordena Array 

echo "O menor saldo é $saldos[0]";
/////////////////////////////////////////////////

$nomes = "Giovanni, João, Maria, Pedro";

$array_nomes = explode(", ", $nomes);

foreach ($array_nomes as $nome){
    echo "<p>Olá $nome</p>";
}

$nomesJuntos = implode(", ", $array_nomes);

echo $nomesJuntos;


