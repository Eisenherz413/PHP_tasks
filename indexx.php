<!DOCTYPE html>
<html>
<body>

<h1>My first lab</h1>

<?php
$x = 5;
$y = 10.5;
$z = 1920;
echo "Addition: " .($x+$y)."<br>Subtraction: ".($x+$y).'<br>Multiplication: ' .($x*$y)."<br>Division: " .($x/$y).
    "<br>Exponentiation: " .($x**$y)."<br>Modulus: " .($x%$y).'';
if(($z%4)==0){
    if($z % 100 != 0 || ( $z % 100 == 0 && $z % 400 == 0)){
        echo "<br>Leap year!";
    }
}
else{
    echo "<br>Not a leap year";
}
?>

</body>
</html>
