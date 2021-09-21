<?php

     $idadeList = [10,20];
     ///////////////ADICIONANDO ITEM EM UM ARRAY JA CRIADO EM LISTAS//////////////
     $idadeList[] = 21;
     for ($i = 0; $i < count($idadeList); $i++)
     {
         echo $idadeList[$i] . PHP_EOL;
     }

    ///////////////////////////////////////////

    // $conta1 = [
    //     'titular' => 'Vinicius',
    //     'saldo' => 100            
    // ];      

    // $conta2 = [
    //     'titular' => 'Maria',
    //     'saldo' => 200
    // ];

    // $conta3 = [
    //     'titular' => 'Alberto',
    //     'saldo' => 300
    // ];

    // $contasCorrentes = [$conta1,$conta2,$conta3];

    // for ($i = 0; $i < count ($contasCorrentes); $i++)
    // {
    //     echo $contasCorrentes[$i]['titular'] . PHP_EOL;
    // }


    // $contasCorrentes = [$conta1, $conta2, $conta3];

////////////////////////COM FOREACH ATRIBUINDO INDICE//////////////////////

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12325678912 => [
    'titular' => 'Alberto',
    'saldo' => 300
    ]
];

///////////////ADICIONANDO ITEM EM UM ARRAY JA CRIADO//////////////////

$contasCorrentes[12345637811] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}

//////////////////////////////////////////////////////////////////////
$carros = [
    'LMS-2232' => [
       'marca' => 'VW',
       'modelo' => 'Golf'
    ],
    'KLM-1324' => [
        'marca' => 'Ford',
        'modelo' => 'Fiesta'
    ],
    'OPN-5612' => [
        'marca' => 'Fiat',
        'modelo' => 'Uno'
    ],
];

foreach ($carros as $placa => $carro) {
    echo $placa . ': ' . $carro['marca'] . ': ' . $carro['modelo'] . PHP_EOL;
}


