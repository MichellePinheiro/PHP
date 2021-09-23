<?php

class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;


    public function __construct ($cidade,$bairro,$rua,$numero)
    {
        $this ->cidade = $cidade;
        $this ->bairro = $bairro;
        $this ->rua = $rua;
        $this ->numero = $numero;
    }

    public function RecuperaCidade() : string 
    {
        return $this->cidade;
    }

    public function RecuperaBairro() : string 
    {
        return $this->bairro;
    }

    public function RecuperaRua() : string 
    {
        return $this->rua;
    }

    public function RecuperaNumero() : string 
    {
        return $this->numero;
    }
}
