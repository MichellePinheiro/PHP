<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $erroOuExcecao){
        
        //LANCANDO EXCECAO PARA QUE FIQUE EXPLICITO QUE OCORREU UM PROBLEMA 
        // throw new RuntimeException(
        //     'Exceção foi tratada, mas, pega aí',
        //     $erroOuExcecao->getCode(),
        //     $erroOuExcecao
        //); 
        echo $erroOuExcecao->getMessage() . PHP_EOL;
        echo $erroOuExcecao->getLine() . PHP_EOL;
        echo $erroOuExcecao->getTraceAsString() . PHP_EOL;
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    $exception = new RuntimeException();
    throw $exception;

    echo 'Saindo da função 2' . PHP_EOL;
}
///// GERANDO ERROS PARA TESTAR EXCECOES 
//     $divisao = intdiv(5, 0);
//     $arrayFixo = new SplFixedArray(2);
//     $arrayFixo[3] = 'Valor';
    
//     for ($i = 1; $i <= 5; $i++) {
//         echo $i . PHP_EOL;
//     }
//    print_r(debug_backtrace());
   

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
