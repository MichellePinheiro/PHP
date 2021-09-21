<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '12345678910' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '12345678911' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '12325678912' => [
    'titular' => 'Alberto',
    'saldo' => 300
    ]
];

$contasCorrentes['12345678911'] = sacar($contasCorrentes['12345678911'],500);
$contasCorrentes['12325678912'] = depositar($contasCorrentes['12325678912'],100);
titularComLetrasMaiusculas($contasCorrentes[12345678910]);
////////PHP COM HTML //////////
// echo "<ul>";
// foreach ($contasCorrentes as $cpf => $conta) {
//    exibeConta($conta);
// }
// echo "</ul>";

//////////PASSANDO VALORES DE UM ARRAY PARA VARIAVEIS//////////
// foreach ($contasCorrentes as $cpf => $conta) {
//     exibeMensagem(
//         "$cpf {$conta['titular']} {$conta['saldo']}"
//     );
    
// }

// //////OUTRA FORMA DE PASSAR OS VALORES DE UM ARRAY PARA VARIAVEIS SEPARADAS.//////////
// foreach ($contasCorrentes as $cpf => $conta)
// {
//     ['titular' => $titular, 'saldo' => $saldo] = $conta;
//     exibeMensagem(
//         "$cpf $titular $saldo"
//     ); 
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta){ ?>
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>Saldo: <?= $conta['saldo']; ?></dd>    
            <?php } ?>
    </dl>
</body>
</html>
