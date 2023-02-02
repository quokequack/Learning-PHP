<?php

class Conta{
    public $numeroConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct(){
        $this->saldo = 0;
        $this->setStatus('Fechada');
        echo "Conta criada com sucesso.";
    }
    public function abrirConta($numeroConta, $nomeDono, $tipo){
        if($this->getStatus() == 'Fechada'){
            $this->numeroConta = $numeroConta;
            $this->dono = $nomeDono;
            $this->tipo = $tipo;
            if($tipo == 'CC'){
                $this->saldo = 150.00;
            }else if($tipo == 'CP'){
                $this->saldo = 50.00;
            }
            $this->setStatus('Aberta');
        }else if($this->getStatus() == 'Aberta'){
            echo "A conta já está aberta.";
        }
    }
    
    public function fecharConta(){
        if($this->getStatus() == 'Aberta' && $this->getSaldo() == 0){
            $this->setStatus('Fechada');
            echo "A conta foi fechada.";
        }else if($this->getStatus() == 'Aberta' && $this->getSaldo() < 0 || $this->getSaldo() > 0){
            echo "A conta não pode ser fechada com saldo devedor ou com saldo acima de 0.";
        }else if($this->getStatus() == 'Fechada'){
            echo "A conta já está fechada.";
        }
    }
    public function depositar($valor){
        $this->saldo += $valor;
        echo "O valor de R$".number_format($valor, 2)." foi depositado com sucesso.";
    }
    public function sacar($valor){
        if($this->saldo <= 0){
            echo "Você não pode sacar.";
        }else{
            $this->saldo-=$valor;
            echo "O valor de R$".number_format($valor, 2)." foi sacado com sucesso.";
        }
    }
    public function pagarMensalidade(){
        if($this->getStatus() == 'Fechada'){
            echo "A conta está fechada!!!";
        }else if($this->getStatus() == 'Aberta'){
            if($this->getTipo() == 'CC' && $this->getSaldo() > 12.00){
                $this->saldo-=12.00;
                echo 'Você pagou a mensalidade.';
            }else if($this->getTipo() == 'CC' && $this->getSaldo() < 12.00){
                echo "Você não tem saldo suficiente para pagar a mensalidade.";
            }else if($this->getTipo() == 'CP' && $this->getSaldo() < 20.00){
                echo "Você não tem saldo suficiente para pagar a mensalidade.";
            }else if($this->getTipo() == 'CP' && $this->getSaldo() > 20.00){
                $this->saldo-=20.00;
                echo 'Você pagou a mensalidade.';
            }
        }
    }
    public function getNumConta(){
        return $this->numeroConta;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getDono(){
        return $this->dono;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->status = $status;
    }

}


?>