<?php

interface A{
    public function methodA();
}
interface B extends A{
    public function methodB();
}

class C implements B{
    public function methodA(){
        echo "method A"."<br>";
    }
    public function methodB(){
        echo "method B";
    }
}
$c=new C();
$c->methodA()."<br>";
$c->methodB()."<br>";
?>