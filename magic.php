<?php
class A {
    public function __call($s,$p){
        echo $s." Magic function";
    }
    public static function __callstatic($s,$p){
        echo "<br>".$s." Magic function " ;
    }
}

$a=new A();
$a->running();
A::horing();

?>