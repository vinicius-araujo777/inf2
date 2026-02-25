<?php 
class Funcionario{
    protected $nome;
    protected $salarioBase;

    function __construct($nome, $salarioBase){
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }

    function mostrarNome(){
        echo "Nome: $this->nome <br>";
    }
    function mostrarSalarioBase(){
        echo "Salário Base: R$ $this->salarioBase <br>";
    }
}

class Gerente extends Funcionario{
    private $bonus;

    function __construct($nome, $salarioBase, $bonus){
        parent::__construct($nome, $salarioBase);
        $this->bonus = $bonus;
    }
    function mostrarSalario(){
        $salarioTotal = $this->salarioBase + $this->bonus;
        return "Salário Total (com bônus) do gerente $this->nome: R$ $salarioTotal <br>";
    }
}

class Estagiario extends Funcionario{
    private $auxilio;

    function __construct($nome, $salarioBase, $auxilio){
        parent::__construct($nome, $salarioBase);
        $this->auxilio = $auxilio;
    }
    function mostrarSalario(){
        $salarioTotal = $this->salarioBase + $this->auxilio;
        return "Salário Total (com auxílio) do estagiário $this->nome: R$ $salarioTotal <br>";
    }
}
?>