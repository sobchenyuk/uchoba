<?php
$a = "Андрей";
$b = "Собченюк";

$json = json_encode( //кодирует массив в строку
    array($a,$b)
);

echo $json;
echo "<br>";
$jso = $json;
foreach(json_decode($jso) as $value){ //раскодирует строку в массив
    echo $value." ";
}