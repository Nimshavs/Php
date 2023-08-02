<?php
class Fruit{
    public $name;
    public $color;
function set_prop($name,$color){
    $this->name=$name;
    $this->color=$color;
}
function get_prop(){
    return $this->name;
}
function get_prop1(){
    return $this->color;
}
}
$apple=new Fruit();
$apple->set_prop('Apple','Red');
echo $apple->get_prop();
echo "<br>";
echo $apple->get_prop1();
echo "<br>";
class Fruit1{
    public $name;
    public $color;
    function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    function __destruct(){
        echo "the fruit is ($this->name) and color is ($this->color)" ;
    }
}
echo "<br>";
$apple=new Fruit1("Apple","Red");

$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
$jsonage=$age;
echo json_encode($jsonage);
echo "<br>";
$json=$jsonage;
var_dump(json_decode($json));
?>