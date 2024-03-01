<?php
class Conta{
    
    /**
     * @var int
     */
    private $numConta;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var bool
     */
    private $dono;

    /**
     * @var float
     */
    private $saldo;

    /**
     * @var bool
     */
    private $status;

    function __construct(){
        $this->setSaldo(2222);
        $this->setStatus(false);

        echo "<p>Conta criada com sucesso</p>";
    }

    function abrirConta($tipo){
        $this->setTipo($tipo);
        $this->setStatus(true);

        if($tipo == "CC"){
            $this->setSaldo(50); 

        }else if($tipo == "CP"){
            $this->setSaldo(150);
        }
    }

    function fecharConta(){
        if($this->getSaldo() > 0){
            echo "<p>Impossível fechar -> Saldo maior que zero</p>";
        
        }else if($this->getSaldo() < 0){
            echo "<p>Impossível fechar -> Saldo menor que zero</p>";
            }else{
                $this->setStatus(false);
                echo "<p>A conta foi encerrada com sucesso!!</p>";
            }
    }
    
    function depositar($valorNovo){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $valorNovo);
        }else{
            echo "Conta fechada - Depósito não realizado";
        }
        
    }

    function sacar($saque){
        if($this->getStatus()){
            if($this->getSaldo() > 0){
                $this->setSaldo($this->getSaldo() - $saque);
                echo "<p>Saque de {$saque} autorizado</p>";
            }else{
                echo "<p>Saque impossível - Saldo insuficiente = {$this->getSaldo()}</p>";
            }
        }else{
            echo "<p>Não posso sacar de uma conta inativa</p>";
        }
    }

    function pagarMensal(){

        if($this->getTipo() == "CC"){
            $v = 50;
            echo "CC - Mensalidade paga com sucesso";
        }else if($this->getTipo() == "CP"){
            $v = 20;
            echo "CP - Mensalidade paga com sucesso";
        }

        if($this->getStatus()){
            if($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
            }else{
                echo "<p>PG impossível - Saldo insuficiente</p>";
            }
        }else{
            "Impossível pagar";
        }
    }

    function getNumConta(){
        return $this->numConta;
    }
    
    function getTipo(){
        return $this->tipo;
    }
    
    function getDono(){
        return $this->dono;
    }

    function getSaldo(){
        //echo "Saldo atual = {$this->saldo}";
        return $this->saldo;
    }

    function getStatus(){
        return $this->status;
    }
    
    function setNumConta($numConta){
        $this->numConta = $numConta;
    }
  
    function setTipo($tipoConta){
        $this->tipo = $tipoConta;
    }

    function setDono($dono){
        $this->dono = $dono;
    }

    function setSaldo($valor){
        $this->saldo = $valor; 
    }

    function setStatus($status){
        $this->status = $status;
    }
}
?>