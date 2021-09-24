<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta
{
    private $titular; 
    protected $saldo;
    private static $numeroDeContas = 0;

    public function __construct (Titular $titular)
    {
      //  $this ->cpfTitular = $cpfTitular;  //CPF TITULAR DA INSTÂNCIA, recebe com CPFTITULAR passado por parametro.
        $this ->titular = $titular;
        $this ->saldo = 0;
        self::$numeroDeContas ++;
    }
    
    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this-> percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
    
        $this->saldo -= $valorSaque;
    }
    
    public function deposita(float $valorDepositar): void 
    {
        if ($valorDepositar <0)
        {
            echo "Valor precisa ser positivo";
            return;
        }
            $this ->saldo += $valorDepositar;
    }

    public function recuperaSaldo():float ///getters
    {
        return $this ->saldo;
    }

    public function defineCpfTitular(string $cpf): void ///setters 
    {
        $this->cpfTitular = $cpf;
    }
    
    public function recuperaCpfTitular (): string ///getters
    {
        return $this->titular->recuperaCpf();
    }

    public function defineNomeTitular(string $nome): void ///setters 
    {
        $this->titular = $nome;
    }

    public function recuperaNomeTitular(): string ///getters
    {
        return $this->titular->recuperaNome();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    public function __destruct()
    {
        self::$numeroDeContas --;
    }

    abstract protected function percentualTarifa(): float;
}