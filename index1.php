<!--Выведите 10 раз фразу "You are welcome!"<br/>-->
<!--<br/>-->
<?php
//$i = 1;
//while ($i<=10){
//    echo "You are welcome!<br/>";
//    $i++;
//}
//?>

<!--Выведите на экран n раз фразу "Silence is golden".<br/>-->
<!--Число n вводит пользователь на форме.<br/>-->
<!--Если n некорректно, вывести фразу "Bad n".<br/>-->
<!--<br/>-->
<!---->
<!--<form method="post">-->
<!--    <input type="text" name="number">-->
<!--    <input type="submit" value="Отправить">-->
<!--</form>-->
<!---->
<?php
//if (empty($_POST['number'])){
//    echo "данне не введены";
//}else{
//    $n = $_POST['number'];
//    if (is_numeric($_POST['number'])){
//        $i = 1;
//        while ($i<=$n){
//            echo "You are welcome!<br/>";
//            $i++;
//        }
//    }else {
//        echo "Bad ".$n;
//    }
//}
//?>

<!--Найти сумму 1+4+7+10+...+112. Ответ: 2147<br/>-->
<!--<br/>-->
<!---->
<?php
//$sum = 0;
//for($i=1;$i<=112;$i+=3){
//    $sum = $sum + $i;
//    echo "Сумма = $sum, Счетчик = $i <BR>";
//}
//?>


<!--<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">-->
<!--<html>-->
<!--<head>-->
<!--    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
<!--    <title>Untitled Document</title>-->
<!--</head>-->
<!--<body>-->
<!--Решите числовой ребус ЛИСА + ВОЛК = ЗВЕРИ.<br/>-->
<!--Каждая буква соответствует своей цифре,<br/>-->
<!--причем различным буквам соответствуют различные цифры.<br/>-->
<!--<br/>-->
<?php
//$arr = ['а'=>1,'б'=>2,'в'=>3,'г'=>4,'д'=>5,'е'=>6,'ё'=>7,'ж'=>8,'з'=>9,'и'=>10,'й'=>11,'к'=>12,'л'=>13,
//    'м'=>14,'н'=>15,'о'=>16,'п'=>17,'р'=>18,'с'=>19,'т'=>20,'у'=>21,'ф'=>22,'х'=>23,'ц'=>24,'ч'=>25,
//    'ш'=>26,'щ'=>27,'ъ'=>28,'ы'=>29,'ь'=>30,'э'=>31,'ю'=>32,'я'=>33];
//
//$a = "л, и, с, а";
//$b = "в, о, л, к";
//$z = "з, в, е, р, и";
//$arr1 = explode(", ", $a);
//$arr2 = explode(", ", $b);
//$arr3 = explode(", ", $z);
//
//foreach ($arr as $key=>$value){
//    if ($key==$arr1[0]){
//        echo $value." ";
//    }
//    if ($key==$arr1[1]){
//        echo $value." ";
//    }
//    if ($key==$arr1[2]){
//        echo $value." ";
//    }
//    if ($key==$arr1[3]){
//        echo $value." ";
//    }
//}
//echo "  + ";
//foreach ($arr as $key=>$value){
//    if ($key==$arr2[0]){
//        echo $value." ";
//    }
//    if ($key==$arr2[1]){
//        echo $value." ";
//    }
//    if ($key==$arr2[2]){
//        echo $value." ";
//    }
//    if ($key==$arr2[3]){
//        echo $value." ";
//    }
//}
//echo " = ";
//foreach ($arr as $key=>$value){
//    if ($key==$arr3[0]){
//        echo $value." ";
//    }
//    if ($key==$arr3[1]){
//        echo $value." ";
//    }
//    if ($key==$arr3[2]){
//        echo $value." ";
//    }
//    if ($key==$arr3[3]){
//        echo $value." ";
//    }
//    if ($key==$arr3[4]){
//        echo $value." ";
//    }
//}
//?>
<!--</body>-->
<!--</html>-->


<!--Найти сумму натуральных чисел от a до b, где a и b вводит пользователь.<br/>-->
<!--В случае некорректных a и b (например, a>b) вывести сообщение 'Сумма не существует'.<br/>-->
<!--<br/>-->
<!--<form method="post">-->
<!--    <input type="text" name="a" style="width: 50px;"> +-->
<!--    <input type="text" name="b" style="width: 50px;">-->
<!--    <input type="submit" value="посчитать">-->
<!--</form>-->
<!---->
<?php
//if (empty($_POST['a'])&&empty($_POST['b'])){
//    echo "Данных нет";
//}elseif (is_numeric($_POST['a'])&&is_numeric($_POST['b'])) {
//    $a = ($_POST['a']);
//    $b = ($_POST['b']);
//    if ($a > $b) {
//        echo "Сумма не существует";
//    } else {
//    for ($i = 1; $i <= $b; $i++) {
//        $a = $a + $i;
//        if ($i == $b) {
//            echo "Сумма = $a<br>";
//        }
//    }
//}
//}else {
//    echo "Ошибка! введите данные";
//}
//?>


<!--Вывести все числа, меньшие 10000, у которых есть хотя бы одна цифра 3 и которые не делятся на 5.<br/>-->
<!--<br/>-->
<?php
//for ($i=1; $i<10000; $i +=1){
//    if ($i % 5 != 0 ){
//        echo $i ." <br/>";
//    }
//}
//?>



<!--Вывести на экран квадрат, состоящий из n x n квадратов различного цвета.<br/>-->
<!--<br/>-->
<!---->
<?php
//
//$a = 0;
//for ($i=1; $i<=30; $i++){
//     $a += $i;
//    echo "<div style=\"width: $i; height: $i; margin-left: $i; border: 1px solid dimgrey; background-color: rgb($a, $a, $i);\"></div>";
////    echo $a." ".$i." <br/>";
//}
//?>


<!--Вывести 3 случайных числа от 0 до 100 без повторений<br/>-->
<!--<br/>-->
<?php
//for ($i=1; $i<=1; $i++){
//    echo rand(0, 100);
//    echo "<br>";
//    for ($i=1; $i<=1; $i++){
//        echo rand(0, 100);
//        echo "<br>";
//        for ($i=1; $i<=1; $i++){
//            echo rand(0, 100);
//            echo "<br>";
//        }
//    }
//}
//?>


<!--Вывести на экран все шестизначные счастливые билеты.<br/>-->
<!--Билет называется счастливым, если сумма первых трех цифр в номере билета равна сумме последних трех цифр.<br/>-->
<!--Найдите количество счастливых билетов и процент от общего числа билетов.<br/>-->
<!--<br/>-->
<!---->
<?php
//for ($i=1; $i<=1000000;$i++)
//
//?>

<!--<body style="background-color: black;">-->
<!--Вывести на черном фоне n красных квадратов случайного размера в случайной позиции в браузере.-->
<!---->
<?php
//
//$a = rand(0, 100);
//$b = rand(0, 100);
//
//for ($i=1; $i<=30; $i++){
//    echo "<div style=\"width: $a; height: $b; margin:$a; padding: $b; top:$a ; border: 1px solid dimgrey; background-color: red;;\"></div>";
////    echo $a." ".$i." <br/>";
//}
//?>
<!--</body>-->

<!--Вывести n серий из чисел 0, 1 и 2 таких, что сумма чисел в каждой серии равна s.<br/>-->
<!--Найти количество единиц в каждой серии, количество двоек в каждой серии, длину каждой серии,<br/>-->
<!--среднее количество двоек в сериях, среднюю длину серий и наибольшее количество ненулевых чисел в сериях.<br/>-->
<!--В случае некорректности n и k вывести слово 'Ошибка'.<br/>-->
<!--<br/>-->
<!---->
<!---->
<!---->
<!--//$text2 = '12121212121212112121';-->
<!--//echo strlen($text2); //выводит 20 так как в $text2 20 символов-->
<!--//echo substr_count($text2, '2'); // выводит 9 девять двоек в строке $text2-->



<!--Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.<br/>-->
<!--<br/>-->
<?php
//$a = "0";
//$b = "1";
//for($i = 0; $i < $n; $i++){
//    $arr[]=$a;
//    $arr[]=$b;
//}
//foreach ($arr as $val){
//    echo $val." ";
//}
//?>


<!--Cоздать массив из n чисел, каждый элемент которого равен квадрату своего номера.<br/>-->
<!--<br/>-->
<!---->
<?php
//$a = 1;
//$n = 10;
//for ($i=1; $i<=$n; $i++){
//    echo $a *=2,"<br>";
//    $arr[]=$a;
//}
//var_dump($arr);
//?>


<!--Найдите сумму и произведение элементов массива.<br/>-->
<!--Реализовать двумя способами: с помощью стандартных функций и без.<br/>-->
<!--<br/>-->
<?php
//$arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
//$arr1 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
//$sum = 0;
//$sum1 = 0;
//
//echo "Стандартная функция <b>array_sum</b> ".array_sum($arr)."<br/>";
//echo "Цикл <b>foreach</b> <br/>";
//foreach ($arr as $value) {
//    $sum += $value;
//    echo $sum," ";
//}
//echo "<br/>";
//echo "Цикл <b>for</b> <br/>";
//for ($i=1; $i<=count($arr1); $i++){
//    $sum1 += $i;
//    echo $sum1," ";
//}
//?>


<!--Определите, есть ли в массиве повторяющиеся элементы<br/>-->
<!--<br/>-->
<?php
//$arr = [1,"salo",2,3,"salo",4,5,6,7,8,8,8];
//
//echo "совпадения в массиве найдены <br/>";
//foreach(array_count_values($arr) as $key=>$value){
//        echo "у элемента <b>$key</b> количество повторений <b>$value</b>"."<br>";
//}
//?>


<!--Поменять местами наибольший и наименьший элементы массива.<br/>-->
<!--<br/>-->
<!---->
<?php
//// исходный массив
//$array = array(0, -10, 10, -20, 20);
//// определяем минимальный элемент
//print_r($array);
//echo "<br>";
//$max = max($array);
//$min = min($array);
//?>

<!--Упорядочить значения массива по возрастанию.<br/>-->
<!--Реализовать двумя способами: с помощью стандартной функции и без.<br/>-->
<!--<br/>-->
<?php
//$array = array(0, -10, 10, -20, 20);
//print_r($array);
//echo "<br>";
//sort($array);
//print_r($array);
//?>


<!--Удалите в массиве повторы значений. Например, для массива 1 2 4 4 2 5 результатом будет 1 2 4 5<br/>-->
<!--<br/>-->
<!---->
<?php
//$arr = [1,2,4,4,2,5];
//foreach ($arr as $value){
//    echo "Вхождение ".$value."<br/>";
//}
//echo "<br/>";
//foreach (array_unique($arr)as $value){
//    echo "Результат ".$value."<br/>";
//}
//?>


<!--Дан массив из n элементов.<br/>-->
<!--а) Переставьте его элементы случайным образом.<br/>-->
<!--б) Переставьте его элементы случайным образом так, чтобы каждый элемент оказался на новом месте.<br/>-->
<!--<br/>-->
<?php
//$arr = [1,2,4,4,2,5];
//print_r($arr);
//echo "<br>";
//shuffle($arr);
//print_r($arr);
//?>