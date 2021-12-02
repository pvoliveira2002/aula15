<?php


class Cliente{


    private $nome;
    private $cpf;
    private $saldo;
    private $limite;
    private $nConta;  



    function setClass($nome,$cpf,$saldo,$limite,$nConta){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->saldo = $saldo;
        $this->limite = $limite;
        $this->nConta = $nConta;

    }
    function sacar($valor){
        if($valor>$this->saldo+$this->limite){
            echo "Excedeu o limite permitido!<br>" ;           
        }else{
            $this->saldo = $this->saldo - $valor;;
        }
    }
    
    function saldo(){
                echo "Limite restante de {$this->saldo} na conta {$this->nConta}<br>";
    }
    function depositar($valor){

        $this->saldo = $this->saldo + $valor;
    }
}