<?php

class Pedido {
    public $numero;
    public $cliente;
}

class Cliente {
    public $nome;
    public $endereco;
}

$cliente = new Cliente ();
$cliente->nome = "Rodrigo Oliveira";
$cliente->endereco = "Rua xxx, Número: 177";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente;   /////AQUI QUE OCORRE A RELAÇÃO ENTRE OS OBJETOS, PEDIDO E CLIENTE.

$dados = array (

    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco
);

var_dump($dados);