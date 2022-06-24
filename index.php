<?php 
/* Q1: Suppose this array come from back-end. data of this array can be dynamic. 
You have to make a Dynamic HTML Output (using ul tag)  based on this array, 
where each item will fall under its parent id.
output will look something like this.
Bangladesh
    Dhaka
        Uttara
        Khilgaon
    Noyakhali
        Maijdi
Canada
    Torrento
*/

$arr = [
    [
        "id"    => 500,
        "p_id"  => 0,
        "title" => "Bangladesh"
    ],
    [
        "id"    => 510,
        "p_id"  => 500,
        "title" => "Dhaka"
    ],
    [
        "id"    => 511,
        "p_id"  => 510,
        "title" => "Uttara"
    ],
    [
        "id"    => 512,
        "p_id"  => 510,
        "title" => "Khailgaon"
    ],
    [
        "id"    => 513,
        "p_id"  => 500,
        "title" => "NoyaKhali"
    ],
    [
        "id"    => 514,
        "p_id"  => 513,
        "title" => "Maijdi"
    ],
    [
        "id"    => 515,
        "p_id"  => 0,
        "title" => "Canada"
    ],
    [
        "id"    => 516,
        "p_id"  => 515,
        "title" => "Toronto"
    ],
    
];

foreach ($arr as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    // echo $value['p_id']."<br>";

    if($value['p_id']==0){
        echo $value['title']."<br>";
    }
    
 
}
?>