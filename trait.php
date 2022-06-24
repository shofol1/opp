<?php
Trait MathTrait{
    public function sum($a,$b){
        return $a+$b;
    }
    public function sub($a,$b){
        return $a-$b;
    }
}

class Math{
    use MathTrait;
}

$math_1=new Math();
echo $math_1->sum(10,10);
?>