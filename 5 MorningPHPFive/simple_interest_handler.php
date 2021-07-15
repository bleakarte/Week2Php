<?php
if (isset($_POST["SI"])) {
    $name = $_GET["name"];
    $principle = $_GET["principle"];
    $interest = $_GET["interest"];
    $time = $_GET["time"];

    $simple_interest = ($principle * $interest * $time ) / 100;
    echo "Hello, ".$name." your simple interest for the loan of ".$principle." is ".$simple_interest;
} else {
    echo "This is malicious";
}