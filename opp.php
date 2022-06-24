<?php
// Class Car{
//     private $weight;
//     public function setWet($w){
//         $this-> weight=$w;
//     }
//     public function getWet(){
//         return $this->weight;
//     }
// }
// $sedan = new Car();
// $sedan -> setWet(300);
// echo $sedan -> getWet();

class Vehicle{
    public $brand_name;
    public $color;
    public function __construct($name,$clr){
 $this->brand_name=$name;
  $this->color=$clr;
  echo "making vehicle"."<br>";
    }
}
class Bike extends Vehicle{
    public $mileage ; 
    public function __construct($name,$clr,$mile){
        parent::__construct($name,$clr);
  $this->mileage=$mile;
         echo "making bike";
           }
}

$vehicle=new Bike("toyota","red",200);

?>