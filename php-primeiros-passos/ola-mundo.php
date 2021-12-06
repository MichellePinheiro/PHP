<?php

$idade = 16;

echo "Olá mundo!" . PHP_EOL;
echo "Eu tenho \"$idade\" anos";

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar, se tiver mais de 18 anos". PHP_EOL;

echo "Você tem $idade anos. Pode entrar";
//OU

echo "Você tem \"$idade\" anos. Pode entrar";

echo PHP_EOL . PHP_EOL;

/////////////////////////////////////////////
//Decições 

$idade = 16;
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} elseif ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar.";
}

echo PHP_EOL;
echo "Adeus!" . PHP_EOL;


// ///////////////////////////////////////////////////////
// $contador = 1;

// while ($contador <=10)
// {
//     echo "#$contador" . PHP_EOL;
//     $contador = $contador +1;
// }

// //////////////////////////////////////////////////////
// $contador2 = 11;
// for ($contador2 = 1; $contador2 <=15; $contador2 ++)
// {
//     if ($contador2 == 13)
//     {
//         continue;
//     }
//     echo "#$contador2" . PHP_EOL;
// }
/////////////////////////////////////////////////////////

for ($i = 0; $i <=100; $i ++)
{
    if ($i % 2 != 0)
    {
        echo "#$i" . PHP_EOL;
    }
}

/////TABUADA////////
$numero = 10;

for ($i2 = 1; $i2 <= 9; $i2 ++)
{
    echo "Tabuado do $numero. $numero X $i2 = " . $numero * $i2 . PHP_EOL . PHP_EOL;
}

//////CALCULO IMC
$peso = 60;
$altura = 1.60; 
$imc = $peso / ($altura ** 2);

echo "Seu IMC é de $imc. Você está com o IMC "; 

if ($imc <18)
{
    echo "abaixo";
} 
else if ($imc < 25)
{
    echo "dentro";
}
else 
{
    echo "acima";
}
echo " do recomendado.";

