<?php

// Aaron Bascos
// BSIT- 4

//PHP Variables

$x = "This is Variable";
$y = "This is Echo";

//PHP Echo

echo $x;
echo "<br>";
echo $y;
echo "<br>";

//PHP Data types

$string = "aaron";
$int = 10;
$float = 10.2;
$boolean = true;

echo "this is string = " . $string;
echo "<br>";
echo "this is int = " . $int;
echo "<br>";
echo "this is float = " . $float;
echo "<br>";
echo "this is string = " . $boolean;
echo "<br>";

//PHP Strings
echo strlen("hello world!");
echo "<br>";

//PHP Numbers 
$num = 1234;
var_dump($num);
echo "<br>";

//PHP Math
echo(pi());
echo "<br>";

//Constants
define("aaron", "hello world!");
echo aaron;

//PHP Operators

echo 10 + 4;
echo "<br>";
echo 10 - 4;
echo "<br>";
echo 10 * 4;
echo "<br>";
echo 10 / 4;
echo "<br>";
echo 10 % 4;
echo "<br>";

//PHP If..Elseif

$username = "aaron";
$password = "password";

if($username !="aaron") {
    echo "wrong username";
}

else if($password !="password"){
    echo "wrong password";
}
else{
    echo "login successful";
}
echo "<br>";

//PHP Switch

$var = "b";
switch ($var) {
    case 'a':
        echo "apple";
    break;
    case 'b':
        echo "banana";
    break;
    default:
        echo "Fruits not available";
    break;
}
echo "<br>";
//PHP Loops
for ($i=1; $i<=10; $i++){
    echo $i;
}
echo "<br>";
//PHP Functions
function getWelcomeMessage($happy){
    echo $happy * 2;
}

getWelcomeMessage(69);

?>