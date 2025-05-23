<?php
echo "hello World";
echo "<br>";
$name = "John";
echo "hello $name";

// string, integer, float, boolean, array

 echo "<br>";
 echo "Hello $name, you are $age years old";

 $height = 1.75;
 echo "<br>";
 echo "Hello $name, you are $age years old and $height meters tall";

 $is_married = false;
 echo "<br>";
 echo "Hello $name, you are $age years old and $height meters tall and $is_married";

 $hobbies = array("Coding", "Sleeping", "Eating");
 echo "<br>";
 echo "Hello $name, you are $age years old and $height meters tall and $is_married and your hobbies are $hobbies[0], $hobbies[1], and $hobbies[2]";

 // control flow
 // if, else, elseif, switch
 if($age < 18) {
   echo "<br>";
   echo "You are not allowed to vote";
 } else {
   echo "<br>";
   echo "You are allowed to vote";
 }

 // loops
 // while, do while, for
 while($age < 18) {
   echo "<br>";
   echo "You are not allowed to vote";
   $age++;
 }

 for($i = 0; $i < 5; $i++) {
   echo "<br>";
   echo "Hello $name";
 }

 // functions
 // function name($parameter) {
 //   // code
 // }
 function sayHello($name) {
   echo "<br>";
   echo "Hello $name";
 }
 sayHello("John");

 // php statements
 // variable and types
 // control flow
 // loops
 // functions



    // swap two variable using a temporary third 
    $a = 10;
    $b = 20;
    $temp = $a; // tem = 10
    $a = $b;
    $b = $temp;
    echo "<br>";
    echo $a;
    echo $b;

    // check data type using var-dump
    var_dump ($name); // value and type
    var_dump ($age);
    var_dump ($height);
    var_dump ($is_married);
    var_dump ($hobbies);



?>