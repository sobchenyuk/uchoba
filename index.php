<!--Простейшая арифметика-->
<!--Даны два числа. Найти их сумму и произведение.-->
<!--//$a = 2;-->
<!--//$b = 2;-->
<!--//$c = $a + $b;-->
<!--//$d = $c * $c;-->
<!--//echo $c."</br>".$d;-->

<!--Даны два числа. Найдите сумму их квадратов.-->
<!--$a = 2;-->
<!--$b = 2;-->
<!---->
<!--$a = $a*$a;-->
<!--$b = $b*$b;-->
<!---->
<!--echo "</br>".$a."</br>".$b;-->

<!--Даны три числа. Найдите их среднее арифметическое.-->
<!--$a = 1;-->
<!--$b = 2;-->
<!--$c = 3;-->
<!--$d = $a+$b+$c/3;-->
<!--echo $d;-->

<!--Даны три ненулевых числа. Найдите всевозможные результаты деления суммы двух из них на оставшееся третье число-->
<!--//$a = 1;-->
<!--//$b = 2;-->
<!--//$c = 3;-->
<!--//$d = ($a+$b)-$c;-->
<!--//echo "</br>".$d;-->
<!--//$d = ($a+$c)-$b;-->
<!--//echo "</br>".$d;-->
<!--//$d = ($b+$c)-$a;-->
<!--//echo "</br>".$d;-->

<!--Дано натуральное числа. Найдите остатки от деления этих чисел на 3 и на 5.-->
<!--$b = 1;-->
<!--$a = 1;-->
<!--$a /=3;-->
<!--$b /=3;-->
<!--echo "</br>".$a,"</br>".$b;-->
<!--$a /=5;-->
<!--$b /=5;-->
<!--echo "</br>".$a,"</br>".$b;-->

<!--Дано число. Увеличьте его на 30%, на 120%.-->
<!--$a = 100;-->
<!--$a = $a / 100 * 30 + $a;-->
<!--echo "</br>".$a;-->
<!--$a = 100;-->
<!--$a = $a / 100 * 120 + $a;-->
<!--echo "</br>".$a;-->

<!--Дано два числа. Найдите сумму 40% от первого числа и 84% от второго числа-->
<!--$a = 100;-->
<!--$b = 100;-->
<!--$a = $a / 100 * 40;-->
<!--$b = $b / 100 * 84;-->
<!--echo "</br>".$a,"</br>".$b;-->

<!--Дано трехзначное числа. Найдите сумму его цифр-->
<!--$a = "333";-->
<!--$a = $a[0] + $a[1] + $a[2];-->
<!--echo "</br>".$a;-->

<!--Дано трехзначное числа. Поменяйте среднюю цифру на ноль-->
<!--$a = "333";-->
<!--$b = 0;-->
<!--echo "</br>".$a[0],$b,$a[1];-->

<!--Найдите число, полученное выписыванием в обратном порядке цифр данного трехзначного натурального числа.-->
<!--$a = '456';-->
<!--echo "</br>".$a[2],$a[1],$a[0];-->

<!--Условный оператор-->
<!--Дано число. Если оно больше 10, то увеличьте его на 100, иначе уменьшите на 30.-->
<!--$a = 9;-->
<!--if ($a >10){-->
<!--    echo "</br>"."ваша сумма не равна 10 а равна $a, значит $a будет умножена на 100 и теперь она равна ";-->
<!--    $a *= 100;-->
<!--    echo $a;-->
<!--}-->
<!--else {-->
<!--    echo "</br>"."ваша сумма не равна 10 а равна $a, значит $a будет уменьшите на 30 и теперь она равна ";-->
<!--    $a /= 30;-->
<!--    echo $a;-->
<!--}-->

<!--Дано натуральное число. Если оно четное, то уменьшите его в 2 раза, иначе увеличьте в 3 раза.-->
<!--Вся суть сводится к тому, что необходимо проверить остаток от деления числа на два. если остаток равен нулю, значит число четное.-->
<!--Деление по модулю возвращает целый остаток от деления левого операнда на правый.-->
<!--Возвращаемое значение получает тот же знак, что был у первого операнда.-->
<!--Деление по модулю (%)-->
<!--$a = 1;-->
<!--if(($a % 2) == 0){-->
<!--    echo "$a Число четное ";-->
<!--    $a = $a / 2;-->
<!--    echo $a;-->
<!--}else{-->
<!--    echo "$a Число четное ";-->
<!--    $a *= 3;-->
<!--    echo $a;-->
<!--}-->

<!--Дано число. Если оно не меньше 50, то выведите квадрат этого числа,-->
<!--если же это число больше 10 и меньше 30, то выведите ноль, в остальных случаях выведите слово "Ошибка"-->
<!--$a = 25;-->
<!--if ($a <= 50 ) {-->
<!--    if (($a > 10) && ($a < 30)){-->
<!--        echo "</br> 0";-->
<!--    }-->
<!--    elseif ($a *= 2) {-->
<!--    echo "</br>" . $a;-->
<!--}-->
<!--}-->
<!--else{-->
<!--    echo "</br>" ."Ошибка";-->
<!--}-->

<!--Дано два числа. Вывести наибольшее из них.-->
<!--$a = 100;-->
<!--$b = 50;-->
<!--if ($a > $b){-->
<!--    echo $a;-->
<!--}-->
<!--elseif ($b > $a){-->
<!--    echo $b;-->
<!--}-->

<!--Дано два числа. Вывести 'Да', если они отличаются на 100, иначе вывести 'Нет'-->
<!--$a = 102;-->
<!--$b = 1;-->
<!--if ($a-$b == 100){-->
<!--    echo "yes";-->
<!--}-->
<!--else {-->
<!--    echo "no";-->
<!--}-->
<!---->

<!--Дано два числа. Вывести 'Да', если они отличаются не более чем на 20, иначе вывести 'Нет'.-->
<!--$a = 22;-->
<!--$b = 1;-->
<!--if ($a-$b == 20){-->
<!--    echo "yes";-->
<!--}-->
<!--else {-->
<!--    echo "no";-->
<!--}-->


<!--Дан номер месяца. Вывести название поры года (весна, лето и так далее) или слово 'Ошибка', если месяца с таким номером не существует.-->
<!--$a = 02;-->
<!--if ($a == 1){-->
<!--        echo "Январь";-->
<!--    }-->
<!--elseif ($a == 2){-->
<!--        echo "Февраль";-->
<!--    }-->
<!--elseif ($a == 3){-->
<!--        echo "Март";-->
<!--    }-->
<!--elseif ($a == 4){-->
<!--        echo "Апрель";-->
<!--    }-->
<!--elseif ($a == 5){-->
<!--        echo "Май";-->
<!--    }-->
<!--elseif ($a == 6){-->
<!--        echo "Июнь";-->
<!--    }-->
<!--elseif ($a == 7){-->
<!--        echo "Июль";-->
<!--    }-->
<!--elseif ($a == 8){-->
<!--        echo "Август";-->
<!--    }-->
<!--elseif ($a == 9){-->
<!--        echo "Сентябрь";-->
<!--    }-->
<!--elseif ($a == 10){-->
<!--        echo "Октябрь";-->
<!--    }-->
<!--elseif ($a == 11){-->
<!--        echo "Ноябрь";-->
<!--    }-->
<!--elseif ($a == 12){-->
<!--        echo "Декабрь";-->
<!--    } else {-->
<!--    echo "Такого месяца нету";-->
<!--}-->


<!--В данном трехзначном числе переставьте цифры так, чтобы новое число оказалось наибольшим из возможных.-->
<!--$a = '169';-->
<!--$b = $a[0].$a[1].$a[2];-->
<!--$c = $a[1].$a[2].$a[0];-->
<!--$d = $a[2].$a[0].$a[1];-->
<!---->
<!--if (($b > $c)&&($b>$d)){-->
<!--    echo "</br>" .$b;-->
<!--} elseif (($c > $b)&&($c > $d)){-->
<!--    echo "</br>" .$c;-->
<!--} elseif (($d > $b)&&($d > $c)){-->
<!--    echo "</br>" .$d;-->
<!--}-->


<!--Пользователь вводит номер дня недели. Вывести название дня недели-->
<!--<form method="post">-->
<!--    <p><label for="age">введите день недели<em>*</em></label></p>-->
<!--    <p><input type="number" name="numbe" min="1" max="12" /></p>-->
<!--    <p><input type="submit"/></p>-->
<!--</form>-->
<?php
//$a = $_POST['numbe'];
//$arr = array("1" => "понедельник",
//    "2" => "вторник",
//    "3" => "среда",
//    "4" => "четверг",
//    "5" => "пятница",
//    "6" => "суббота",
//    "7" => "воскресенье");
//
//if (($a = 1)&&($a <7)){
//    echo $arr[$a]." ";
//}else {
//    echo "введите правельный день месяца";
//}
//
//?>


<!--Пользователь вводит свой возраст. Если он больше 80 лет, то вывести 'Здравствуйте, уважаемый', иначе 'Успехов!'.-->
<!--<form method="post">-->
<!--    <p><label for="age">введите день недели<em>*</em></label></p>-->
<!--    <p><input type="number" name="numbe" min="1" max="90" /></p>-->
<!--    <p><input type="submit"/></p>-->
<!--</form>-->
<!---->
<?php
//$a = $_POST['numbe'];
//if ($a >80){
//    echo "Здравствуйте, уважаемый";
//}else {
//    echo "Успехов!";
//}
//
//?>


<!--Пользователь выбирает из выпадающего списка страну (Турция, Египет или Италия),<br/>-->
<!--вводит количество дней для отдыха и указывает, есть ли у него скидка (чекбокс).<br/>-->
<!--Вывести стоимость отдыха, которая вычисляется как произведение количества дней на 400.<br/>-->
<!--Далее это число увеличивается на 10%, если выбран Египет, и на 12%, если выбрана Италия.<br/>-->
<!--И далее это число уменьшается на 5%, если указана скидка.<br/>-->
<!---->
<!--<form method="post">-->
<!--    <p><label>выбирете страну<em>*</em></label>-->
<!--    <select name="cauntry" name="mat">-->
<!--        <option value="1">Турция</option>-->
<!--        <option value="2">Египет</option>-->
<!--        <option value="3">Италия</option>-->
<!--    </select></p>-->
<!--    <p><label>выбирете количество дней<em>*</em></label>-->
<!--    <input type="text" name="days"/></p>-->
<!--    <p><label>скидка в 5%<em>*</em></label>-->
<!--    <input type="checkbox" name="vibor"/></p>-->
<!--    <input type="submit" value="Go">-->
<!--</form>-->
<?php
//if (isset($_POST['cauntry']) &&is_numeric($_POST['days'])){
//    $v = 0;
//    $i = "без скидки";
//    if (isset($_POST['vibor'])==true){
//        $v = 400 /100 *5;
//        $i = "со скидкой 5%";
//    }
//    if ($_POST['cauntry']==1){
//        $a = $_POST['days'];
//        $a *= 400 - $v;
//        echo "стоимость $a ".$i;
//    }
//    if ($_POST['cauntry']==2){
//        $a = $_POST['days'];
//        $a *= 400 - $v;
//        $b = $a/100 *10;
//        $c = $a + $b;
//        echo "стоимость $c ".$i;
//    }
//    if ($_POST['cauntry']==3){
//        $a = $_POST['days'];
//        $a *= 400 - $v;
//        $b = $a/100 *12;
//        $c = $a + $b;
//        echo "стоимость $c ".$i;
//    }
//} else {
//
//    echo "выбрать маршрут";
//}
//?>


<!--Пользователь выбирает страну из трех вариантов (страну можно указать только одну) и видит название столицы.-->
<!---->
<!--<form method="post">-->
<!--    <input type="radio" name="cauntry" value="ukr">Украина<Br>-->
<!--    <input type="radio" name="cauntry" value="gruz"/>Грузия<Br>-->
<!--    <input type="radio" name="cauntry" value="franc"/>Франция<Br>-->
<!--    <input type="submit" />-->
<!--</form>-->
<!---->
<?php
//if (isset($_POST['cauntry'])){
//    switch ($_POST['cauntry']){
//        case 'ukr':
//            echo "Страна Украина, столица Киев";
//            break;
//        case 'gruz':
//            echo "Страна Грузия, столица Тбилиси";
//            break;
//        case 'franc':
//            echo "Страна Франция, столица Париж";
//            break;
//
//    }
//
//}
//?>


<!--Пользователь вводит свой имя, пароль, email. Если вся информация указана,<br/>-->
<!--то показать эти данные после фразы 'Регистрация прошла успешно',<br/>-->
<!--иначе сообщить какое из полей оказалось не заполненным.<br/>-->
<!--<form method="post">-->
<!--    <input type="text" name="name" />введите имя<br>-->
<!--    <input type="text" name="password" />введите пароль<br>-->
<!--    <input type="text" name="email" />введите почьтовый ящик<br>-->
<!--    <input type="submit" />-->
<!--</form>-->
<!---->
<!---->
<?php
//if ($_POST){
//    $name = trim($_POST['name']);
//    $password = trim($_POST['password']);
//    $email = trim($_POST['email']);
//    if ($name && $password && $email ==true){
//        echo "Регистрация прошла успешно";
//        echo "</br>Ваше имя</br>$name";
//        echo "</br>Ваш пароль</br>$password";
//        echo "</br>Ваш имейл</br> $email";
//    }else {
//        echo "данные введены не полностью";
//        if (empty($name)) {
//            echo "</br>Имя не введено";
//        }
//        if (empty($password)) {
//            echo "</br>Пароль не введен";
//        }
//        if (empty($email)) {
//            echo "</br>Имаил не введен";
//        }
//    }
//
//}
//?>


<?php
//$a = 1;
//$b = 2;
//$c = 3;
//
//
//if (isset($_POST['bottom1'])) {
//    $a = 2;
//    $b = 1;
//    $c = 3;
//}
//if (isset($_POST['bottom2'])) {
//    $a = 3;
//    $b = 2;
//    $c = 1;
//}
//if (isset($_POST['bottom3'])) {
//        $a = 1;
//        $b = 2;
//        $c = 3;
//    }
//
//?>
<!--Cоздать 3 кнопки с названиями 1, 2, 3, расположенные друг над другом.<br/>-->
<!--При нажатии на любую кнопку порядок меняется на 2, 1, 3.<br/>-->
<!--Затем при нажатии на любую кнопку порядок меняется на 3, 2, 1.<br/>-->
<!--Затем при нажатии на любую кнопку порядок меняется на 1, 2, 3. И так далее.<br/>-->
<!---->
<!--<form method="post">-->
<!--    <input type = "submit" name="bottom1" value = "--><?php //echo $a;?><!--"><br>-->
<!--    <input type = "submit" name="bottom2" value = "--><?php //echo $b;?><!--"><br>-->
<!--    <input type = "submit" name="bottom3" value = "--><?php //echo $c;?><!--"><br>-->
<!--</form name="form">-->



<!--Пользователь вводит номер дня недели.<br/>-->
<!--Выведите список названий всех дней недели в столбец, при этом день,<br/>-->
<!--соответствующий данному номеру, выделите большим размером шрифта и другим цветом.<br/>-->
<!---->
<!--<form method="post">-->
<!--    <p><label>введите номер дня недели<em>*</em></label></p>-->
<!--    <input type="text" name="den"><br>-->
<!--    <input type="submit"><br>-->
<!--</form>-->
<!---->
<?php
//$arr = array("1" => "Понедельник",
//    "2" => "Вторник",
//    "3" => "Среда",
//    "4" => "Четверг",
//    "5" => "Пятница",
//    "6" => "Суббота",
//    "7" => "Воскресенье");
//
//    if (is_numeric($_POST['den'])) {
//        $den = trim($_POST['den']);
//        if (($den >= 1)&&($den <=7)) {
//            foreach ($arr as $key => $nedela) {
//                if ($key == $den) {
//                    echo "<big>","<strong>".$nedela."</strong>","</big>","<br>";
//                }
//                if ($key - $den){
//                    unset($arr[$den]);
//                    echo "$nedela<br>";
//                }
//            }
//        }else {
//            echo ",ошибка, номер дня недели введен не верно";
//        }
//    }else {
//        echo "Номер дня недели не введен";
//    }
//?>




<!--Пользователь вводит три действительных числа.<br/>-->
<!--Определить, существует ли треугольник с длинами сторон, равными этим числам.<br/>-->
<!--Если да, то определить, является ли данный треугольник остроугольным.<br/>-->
<!---->
<!---->
<!--<br/><form method="post">-->
<!--    <input type="text" name="a">a<br>-->
<!--    <input type="text" name="b">b<br>-->
<!--    <input type="text" name="y">y<br>-->
<!--    <input type="submit"><br>-->
<!--</form>-->
<!---->
<?php
//if (is_numeric($_POST['a'])&&is_numeric($_POST['b'])&&is_numeric($_POST['y'])){
//    if ((($_POST['a']) < ($_POST['b']) + ($_POST['y']))&&((($_POST['b']) < ($_POST['a'])) + ($_POST['y']))&&(($_POST['y']) <($_POST['b']) + ($_POST['a']))){
//        echo "треугольник существует<br>";
//        echo "определить, является ли данный треугольник остроугольным <strong>пока не могу!</strong><br>";
//    }else {
//        echo "такого треугольника не существует";
//    }
//}else {
//    echo "данных нет";
//}
//?>




<!--Пользователь вводит дату.<br>-->
<!--Загружается страница с календарем, на котором отображается месяц, указанный в дате.<br>-->
<!--День указанной даты выделяется другим фоном среди дней месяца.<br>-->
<!--<br>-->
<!--<br>-->
<!--<br>-->
<!--<br>-->
<!---->
<!---->
<!--<form method="post">-->
<!--    <label>Пользователь вводит дату</label><br>-->
<!--    <br>-->
<!--    <input type="text" name="day"><label for="day">ведите день недели</label><br>-->
<!--    <input type="text" name="month"><label for="month">введите месяц</label><br>-->
<!--    <br>-->
<!--    <input type="submit"><br>-->
<!--</form>-->
<!---->
<?php
//$arr = array("1" => "Январь", "2" => "Февраль", "3" => "Март", "4" => "Апрель",
//    "5" => "Май", "6" => "Июнь", "7" => "Июль", "8" => "Август", "9" => "Сентябрь",
//    "10" => "Октябрь", "11" => "Ноябрь", "12" => "Декабрь");
//$arr1 = array("1" => "31", "2" => "30", "3" => "31", "4" => "30",
//    "5" => "31", "6" => "30", "7" => "31", "8" => "31", "9" => "30",
//    "10" => "31", "11" => "30", "12" => "31",
//    );
//$arr2 = array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11',
//    '12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17',
//    '18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23',
//    '24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30','31'=>'31');
//$arr3 = array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11',
//    '12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17',
//    '18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23',
//    '24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30');
//
//if (is_numeric($_POST['day'])&&is_numeric($_POST['month'])) {
//    $day = trim($_POST['day']);
//    $month = trim($_POST['month']);
//    if (($month >= 1)&&($month <=12)) {
//        foreach ($arr as $key => $mon) {
//            if ($key == $month) {
//                echo "<big>","<strong>".$mon."</strong>","</big>","<br>";
//                if ($arr1[$month]==31){
//               echo "$arr1[$month] день в месяце <br>";
//                    foreach ($arr2 as $key1 => $mons) {
//                        if ($key1 == $day) {
//                            echo "<big>","<strong>".$mons."</strong>","</big>";
//                        }
//                        if ($key1 - $day){
//                            unset($arr3[$day]);
//                            echo $mons;
//                        }
//                    }
//                }
//                if ($arr1[$month]==30){
//                    echo "$arr1[$month] дней в месяце <br>";
//                    foreach ($arr3 as $key2 => $mons) {
//                        if ($key2 == $day) {
//                            echo "<big>","<strong>".$mons."</strong>","</big>";
//                        }
//                        if ($key2 - $day){
//                            unset($arr3[$day]);
//                            echo $mons;
//                        }
//                        }
//                }
//            }
//        }
//    }else {
//        echo "ошибка! месяц введен не верно";
//    }
//
//}else {
//    echo "Введите все поля";
//}
//?>



<!--Пользователь указывает цвет и размер трех кругов.<br>-->
<!--Вывести их в случайных местах в браузере.<br>-->
<!--<br>-->
<!--<br>-->
<!--<br>-->
<!--<html>-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <title></title>-->
<!--    <style>-->
<!--        .layer1 {-->
<!--            padding: 10px;-->
<!--            margin-right: 20px;-->
<!--            float: left;-->
<!--        }-->
<!--    </style>-->
<!--    --><?php
//    $arr = array('Красный'=>'Red', 'Оранжевый'=>'Orange', 'Желтый'=>'Yellow',
//        'Зеленый'=>'Green', 'Голубой'=>'Blue', 'Синий'=>'Indigo', 'Фиолетовый'=>'Violet');
//
//    ?>
<!--</head>-->
<!--<body>-->
<!--<div class="layer1">-->
<!--<form method="post">-->
<!--    <input type="text" name="one" placeholder="размер первого круга"><br>-->
<!--    <input type="text" name="color1" placeholder="цвет"><br>-->
<!--    <br>-->
<!--    <input type="text" name="two" placeholder="размер второго круга"><br>-->
<!--    <input type="text" name="color2" placeholder="цвет"><br>-->
<!--    <br>-->
<!--    <input type="text" name="free" placeholder="размер третьего круга"><br>-->
<!--    <input type="text" name="color3" placeholder="цвет"><br>-->
<!--    <br>-->
<!--    <input type="submit"><br>-->
<!--</form>-->
<!--</div>-->
<!---->
<!--<div>-->
<!---->
<!--</div>-->
<!---->
<!--<div>-->
<!--    <p><b>Список цветов:</b>-->
<!--    --><?php
//    foreach ($arr as $key=>$colors){
//        echo "| <i style=\"color: $colors; \">$key</i> |";
//    }
//
//    ?><!--</p>-->
<!---->
<!--</div>-->
<!---->
<!--<div>-->
<!--    --><?php
//    if (empty($_POST)){
//        echo "Данных нет";
//
//    }else {
//
//        $one = trim($_POST['one']);
//        $two = trim($_POST['two']);
//        $free = trim($_POST['free']);
//        $color1 = trim($_POST['color1']);
//        $color2 = trim($_POST['color2']);
//        $color3 = trim($_POST['color3']);
//        $y = rand(1, 900);
//        $z = rand(1, 900);
//        $a = rand(1, 900);
//        $b = rand(1, 900);
//        if (is_numeric($_POST['one'])&&isset($_POST['color1'])){
//            if (array_key_exists($color1,$arr)){
//                foreach ($arr as $key=>$colors){
//                    if ($key==$color1){
//                        echo "<div style=\"left:$y; top:$z; width:$one; height:$one; background:$colors; border-radius:$one;\"></div><br>";
//                    }
//                }
//            }else {
//                echo "Ошибка ! такого цвета как <b>$color1</b> нет в нашем проекте<br>";
//            }
//        }else {
//            echo "Ошибка ! размер первого круга и цвет не указаны<br>";
//        }
//        if (is_numeric($_POST['two'])&&isset($_POST['color2'])){
//            if (array_key_exists($color2,$arr)){
//                foreach ($arr as $key=>$colors){
//                    if ($key==$color2){
//                        echo "<div style=\"left:$a; top:$b; width:$two; height:$two; background:$colors; border-radius:$two;\"></div><br>";
//                    }
//                }
//            }else {
//                echo "Ошибка ! такого цвета как <b>$color2</b> нет в нашем проекте<br>";
//            }
//        }else {
//            echo "Ошибка ! размер второго круга и цвет не указаны<br>";
//        }
//        if (is_numeric($_POST['free'])&&isset($_POST['color3'])){
//            if (array_key_exists($color3,$arr)){
//                foreach ($arr as $key=>$colors){
//                    if ($key==$color3){
//                        echo "<div style=\"left:$z; top:$a; width:$free; height:$free; background:$colors; border-radius:$free;\"></div><br>";
//                    }
//                }
//            }else {
//                echo "Ошибка ! такого цвета как <b >$color3</b> нет в нашем проекте<br>";
//            }
//        }else {
//            echo "Ошибка ! размер третьего круга и цвет не указаны<br>";
//        }
//    }
//    ?>
<!--</div>-->
<!---->
<!--</body>-->
<!--</html>-->


Выясните, можно ли с шахматного поля (k,p) одним ходом ферзя попасть на поле (m,n).<br>
Если нет, то сообщите, как это можно сделать за два хода.<br>
Решение отобразить на странице в виде черно-белой шахматной доски с двумя(тремя)<br>
клетками красного цвета и с номерами ходов в этих клетках.<br>
<br>
<br>
<br>
<br>

