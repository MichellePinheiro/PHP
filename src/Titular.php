<?php

class Titular extends Pessoa
{
    private $endereco;

    public function __construct (CPF $cpf, string $nome, Endereco $endereco)
    {
        $this -> cpf = $cpf;
        $this -> validaNomeTitular($nome);
        $this -> nome = $nome;
    }


    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) 
        {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function recuperaEndereco() : Endereco
    {
        return $this->endereco;
    }
}