<?php

abstract class A{
    public $color="red";

    public function getColor(){

    }

}

class B extends A{
    public function getColor(){
        echo $this->color;

    }

}

$b=new B();
$b->getColor();

?>