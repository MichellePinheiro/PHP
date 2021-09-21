<?php

class Conta
{
    private $titular; 
    private $saldo;
    private static $numeroDeContas = 0;

    public function __construct (Titular $titular)
    {
      //  $this ->cpfTitular = $cpfTitular;  //CPF TITULAR DA INSTÂNCIA, recebe com CPFTITULAR passado por parametro.
        $this ->titular = $titular;
        $this ->saldo = 0;
        self::$numeroDeContas ++;
    }
    
    public function saca(float $valorASacar):void
    {
        if ($valorASacar > $this -> saldo)
        {
            echo "Saldo Indisponível";
            return;
        }
            $this -> saldo -= $valorASacar;
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

    public function transfere(float $valorTransferir, Conta $contaDestino):void 
    {
        if ($valorTransferir > $this ->saldo)
        {
            echo "Saldo Indisponível";
            return;
        }
            $this ->saca($valorTransferir);
            $contaDestino ->deposita($valorTransferir);
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



    

}