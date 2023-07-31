<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
$txt =  "Hello World!";
$x = 5;
$y = 4;
echo $txt ."<br>";
echo $x+$y . "<br>";
var_dump($x) ;
$car = array("swift","bmw");
echo "<br>";
var_dump ($car);
echo "<br>";
echo strlen($txt). "<br>";
echo str_word_count($txt). "<br>";
echo strrev($txt). "<br>";
var_dump(is_numeric($x));
echo "<br>";
echo(pi()). "<br>";
echo(min(0, 150, 30, 20, -8, -200)). "<br>"; 
echo(max(0, 150, 30, 20, -8, -200)). "<br>"; 
?>

</body>
</html>