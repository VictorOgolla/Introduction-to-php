<?
$x=20;
$y=10;
//Division
$res =$x / $y;
echo "$x / $y =$res";
echo "<br>";
//Modulus
$res =$x % $y;
echo "$x % $y =$res";
echo "<br>";
//Exponential
$res=$x ** $y;
echo"$x ** $y=$res";
//Assignment operators
$a ='b';
$x = $x + 1;
$x = 1;
echo "<br>";
//SUBTRACTION
$a ='b';
$x = $x-1;
$x = -1;
echo "<br>";
//EXPONENTIAL
$x =$x ** 1;
echo "<br>";
$x = $x **1;
$x **=1;
//Comparison operators
//compare to or more values
//Equal == returns true if var $x is equal var $y
var_dump($x == $y);
//identical (===) returns true if variable $x and $y are equal and of the same data-type
var_dump($x ===$y);
//Not equall
var_dump( $x === $y);
//returns true if var x ii not equal var y
//Not equall (!==) returns true  if var x is not equal to var y
var_dump( $x != $y);
//Not identical(!==) returns true if $x is not equal to $y and they are not identicall
