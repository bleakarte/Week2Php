<?php
//ARRAYS
    //INDEXED ARRAYS
$names = ["Jeff","Betty","Sharon","Lameck","Kevo","Sam"];
echo $names[2]."<br>";
echo $names[5]."<br>";
echo $names[0]."<br>"."<br>";

sort($names);
//To print all
//using the for each loop
foreach ($names as $list){
    echo $list ."<br>";
}
echo "<br>";
//using the for loop
$arrCount = count($names);
for ($p = 0; $p < $arrCount; $p++){
    echo $names[$p]."<br>";
}
echo "<br>";

    //ASSOCIATIVE ARRAYS
$students = ["admin1" =>"Kitty", "admin2" =>"John", "admin3" =>"Caro", "admin4" =>"Shawn", "admin5" =>"Rikky"];
echo $students["admin3"]."<br>";
echo $students["admin1"]."<br>"."<br>";

//Sort by values
    //asort($students);
    //arsort($students);
//Sort by keys
    //ksort($students);
    //krsort($students);

//To print all
//using the for each loop
foreach ($students as $key => $value){
    echo $value."<br>";
}