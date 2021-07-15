<?php
if (isset($_POST["calc"])){
    $FirstNo = $_POST["num1"];
    $SecondNo = $_POST["num2"];

    $Total = $FirstNo + $SecondNo;
    echo "The total is ".$Total;
}else{
    echo "Doesn't work";
}