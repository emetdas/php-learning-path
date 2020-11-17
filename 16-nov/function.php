<?php
// function with parameters
/*function function-name(parameter1,parameter2){
    print parameter
}
declir function 
*/

function name($fname,$lname){
    echo "<h2>Your name is $fname $lname </h2>";
}

function sum($a,$b){
    echo $a + $b;
}
name("Emet","Das");
name("David","Malin");
$one = 10;
$two = 20;
sum($one,$two);
echo "<br>";
// function with return value
function developer($finame,$laname){
    $opp = "$finame $laname";
    return $opp;
}
echo developer("Emet","Das");
?>