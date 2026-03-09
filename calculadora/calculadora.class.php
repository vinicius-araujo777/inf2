<?php 
class Calculadora {
    public $num1;
    public $num2;

    public function __construct($num1 , $num2){
        $this-> num1 = $num1;
        $this-> num2 = $num2;
    }

    function soma(){
        return $this-> num1 + $this-> num2;
    }

    function subtracao(){
        return $this-> num1 - $this-> num2;
    }

    function multiplicacao(){
        return $this-> num1 * $this-> num2;
    }

    function divisao(){
        if($this-> num2 == 0){
            return "Não é possível dividir por zero.";
        } else {
            return $this-> num1 / $this-> num2;
        }
    }

}


?>