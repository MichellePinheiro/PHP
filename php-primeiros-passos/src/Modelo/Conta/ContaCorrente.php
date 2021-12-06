<?php

use Alura\Banco\Modelo\Conta\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa() : float
    {
        return 0.05;
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

}