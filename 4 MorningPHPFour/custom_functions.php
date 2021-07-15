<?php
//the function must be called outside its scope {}
//display motto method
function motto(){
    echo "Hey this is our motto";
    echo "<br>";
}

motto();
//===================================
//addition method
function addition(){
    $x = 30;
    $y = 40;
    $total = $x + $y;
    echo "Hey your answer is $total"."<br>";
}

addition();
//===================================
//average function
function avg($n1,$n2){
    $average = ($n1 + $n2)/2;
    echo "Success your average is $average"."<br>";
}

avg(19, 21);
//===================================
//simple interest function
function simple_interest($p , $r , $t){
    $interest = ($p * $r * $t)/100;
    echo "The simple interest for your loan is $interest"."<br>";
}
$p = 1000;
$r = 4;
$t = 3;

simple_interest($p , $r , $t);
//===================================
//area of a circle function
function circle_area($radius){
    $radius = 2 * 3.14 * $radius;
    echo "The area of the circle is $radius"."<br>";
}

circle_area(21);
//===================================