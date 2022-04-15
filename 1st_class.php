<?php

echo "Hello I am Mainuddin" ;
echo "<br>" ;

$first_variable_in_php = 0;

echo "My first variable in php is : $first_variable_in_php <br>";

$data = array(1,2,3,4,5);

echo "<br>For loop : <br>" ;

for ($x = 0; $x < 5; $x++) {
    echo "The $x number is: $data[$x] <br>";
}


$friend_name = array("Abid","Hasan","Hosen","Takib","Rakib");

echo "<br>Foreach loop : <br>" ;
foreach ($friend_name as $value) {
    echo "$value <br>";
}


?>
