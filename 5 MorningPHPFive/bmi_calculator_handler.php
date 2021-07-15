<?php
if (isset($_POST["BMI"])){
    $name = $_GET["name"];
    $weight = $_GET["weight"];
    $height = $_GET["height"];

    $BMI = $weight / pow($height, 2);

    if ($BMI < 18.9){
        echo "Hello, ".$name." your BMI is ".$BMI." and you are under weight";
    }elseif ($BMI < 24.9){
        echo "Hello, ".$name." your BMI is ".$BMI." and you are normal weight";
    }elseif ($BMI < 29.9){
        echo "Hello, ".$name." your BMI is ".$BMI." and you are over weight";
    }else{
        echo "Hello, ".$name." your BMI is ".$BMI." and you are obese";
    }

}else{
    echo "This is malicious";
}