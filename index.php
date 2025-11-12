<?php

function result($family){
    echo "\n$family\n";
}

 $fruits = ["apple","banana","mango"];

 result("this is family fruts");
 echo "<pre>";
 print_r($fruits);
 echo "<pre>";

$demo =$fruits;
array_push($demo,"orange","milk");
result("store data");
print_r($demo);


$demo =$fruits;
array_pop($demo);
result("last one valu removed");
print_r($demo);

$demo =$fruits;
array_shift($demo);
result("first one valu removed");
print_r($demo);

$demo =$fruits;
array_unshift($demo,"milk","biskut");
result("first add valu ");
print_r($demo);

$demo =$fruits;
$cook=array_slice($demo,1,2);
result(" 1 number and 2 number valu ");
print_r($cook);


$demo =$fruits;
array_splice($demo,1,1,"pinaple");
result("remove 1 number valu add new value");
print_r($demo);

$demo =$fruits;
result(" value count");
echo count($demo);
result("1st valu print");
echo current($demo);
result("next valu print");
echo next($demo);
result("end valu print");
echo end($demo);
result("previous valu print");
echo prev($demo);


$students = [
    "shuvo"=>50,
    "arafat"=>60,
    "tonmoy"=>70,
    "kajal" =>80

];
result("student number");

print_r($students);
$sorted =$students;
sort($sorted);
result("student number is sorted");
print_r($sorted);


$sorted =$students;
asort($sorted);
result("student number values accending order is sorted");
print_r($sorted);

$sorted =$students;
arsort($sorted);
result("student number values dccending order is sorted");
print_r($sorted);


$sorted =$students;
ksort($sorted);
result("student number key accending order is sorted");
print_r($sorted);

$sorted =$students;
krsort($sorted);
result("student number key dccending order is sorted");
print_r($sorted);







?>