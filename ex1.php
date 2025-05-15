<?php
$num = 5;

if ($num % 2 ==0) {
    echo "$num is even";
} else {
    echo"$num is odd";
}
 $num1 = 10;
 $num2 = 5;
 $action = "+";

 switch ($action){
    case "+";
     echo $num1 + $num2;
    break;
    

    case"-";
    echo $num1 - $num2;
    break;
    

    case"*";
    
    echo $num1 * $num2;
    break;
    

    case"/";
    echo $num1 / $num2;
    break;

    default;
    echo "error";
    break;
  
 };

 function factorial($n) {
    $result = 1;
    for ($i= 1; $i < $n; $i++) { 
        $result *= $n;
    }
    return $result;
};
echo "<br>";
echo factorial(10);



?>
    <!-- function defult value -->
<?php

function greetting ($name = "Gust") {
    return "hello $name";

}

$result = greetting();
echo "<br>";
echo $result;
?>
 
<?php

//1.Index Array 

$fruits = array("Apple", "Orange","Banana");
// foreach
foreach($fruits as $fruits){
    echo "<br>";
    echo $fruits;
}






//2.Assocative Array 
$person = array(
    "name" => "jon",
    "age" => 30,
    "city" => "New ypark"
);

//3. Foreach loop
foreach ($person as $key => $value) {
    echo"<br>";
    echo $key . ": " . $value;
}


//Ex

$mark = array(
    "aung" => 80,
    "kyaw Kyaw" => 40,
    "Hla " => 70
);

foreach ($mark as $key => $value) {
    if ($value >= 50){
        echo "<br>";
        echo $key . "passed";

    }else {
        echo "<br>";
        echo $key . "failed";
    }
}
?>