<?php

namespace Alura\Banco\Modelo;

/**
 * Class Endereco
 * @package Alura\Banco\Modelo;
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */

final class Endereco
{
    use AcessoPropriedades;

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

    public function __toString() : string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    // public function __get($nomeAtributo)
    // {
    //     $metodo = 'recupera' . ucfirst($nomeAtributo);
    //     return $this->$metodo();
    // }

}
