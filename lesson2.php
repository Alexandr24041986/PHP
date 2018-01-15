<?php
$begin = 9;
$end = 5;
$num = 0;

if ($begin < $end) {
    if ($num < $end && $num > $begin) {
        echo "between begin && end";
    } else if ($begin === $num){         // elseif
        echo "begin = num";
    } else {
        echo "not between begin && end";
    }
} else {
    echo "begin > end";
}

// альтернативный синтаксис
//if (условие):
//    код;
//elseif (условие):
//    код;
//else:
//    код;
//endif;

// тернарный оператор
$some_var;
$some_var_res = (!isset($some_var)) ? "default" : $some_var;
var_dump($some_var_res);
//(условие) ? 1 : 2;
// короткий синтаксис:
//$res = выражение1 ? : выражение2;

//с php 7 оператор объединения с null ??
// для проверки на инициализированную переменную
$some_var2 = "some_var2";
$some_var_res2 = $some_var2 ?? 'default';
var_dump($some_var_res2);
// оператор выбора switch
$a = 1;
$b = 2;
//<=>
switch ($a <=> $b) {
    case 0:
        echo "a = b";
        break;
    case 1:
        echo "a > b";
        break;
    case -1:
        echo "a < b";
        break;
    default:
        echo "default";
}

// альтернативный синтаксис
//switch (переменная или выражение):
//    case вариант1:
//        код;
//        break;
//    case вариант2:
//    case вариант3:
//        код;
//        break;
//    default:
//        код;
//        break;
//endswitch;
echo "<br>";
// цикл while
// от 1 до 4
$var = 0;
while ($var < 4) {
    $var++;
    echo "$var<br>";
}

// альтернативные синтаксис
//while (выражение):
//    код;
//endwhile;

// от 5 до 7
$var1 = 5;
do {
    echo "$var1<br>";
    $var1++;
} while($var1 <= 7);
// альтернативный синтакси не работает!!!

// от 10 до -1
for ($i = 10; $i >= -1; $i--) {
    if ($i == true) {
        echo "i = $i<br>";
    }
    echo "$i<br>";
};

// альтернативный синтаксис
//for (начало; условие; шаг;):
//    код;
//endfor;

// массивы

//$arr = array(1, 6, 8);
$arr = [1, 7, 9];
var_dump($arr);
var_dump($arr[1]);
echo $arr[1] . "<br>";
echo $arr . "<br>";

$arr[3] = "elem";
var_dump($arr);

$arr["true"] = 'elem2';
var_dump($arr);

$arr2 = [
    'key' => 45,
    5 => null,
    null => "value",
    false => "false",
    5 => "5"
];
var_dump($arr2);



$arr = [1, 7, 9];
$arr2 = [
    'key1' => "value1",
    'key2' => "value2",
];
var_dump($arr2);

// до php 7 foreach работает с копией массива
foreach ($arr as $value) {
    $value += 3;
    echo "$value<br>";
}
var_dump($arr);

//foreach ($arr2 as $value2) {
//    echo "$value2<br>";
//}

foreach ($arr as $key => $value2) {
    echo "$key => $value2<br>";
}

// php7 можно изменят массив с помощью foreach
$days = [3, 8, 9, 6, 5];

foreach ($days as &$day) {
    $day += 3;
}
unset($day);
var_dump($days);

// языковая конструкция list()
$coords = [
    [1, 4],
    [8, 9]
];

foreach ($coords as list($a, $b, $c)) {
    echo "a = $a, b = $b, c = $c<br>";
}

$users = [
  ['qwe', 'admin', 'qwe@n.ru'],
  ['asd', 'admin', 'ere@n.ru'],
  ['ggrg', 'admin', 'qdfe@n.ru']
];

$var1 = 90;
//foreach ($users as list($login, $state, $email)) {
////    echo "$login $state $email<br>";
//}

// break
?>

<table>
    <tr>
        <th>Логин</th>
        <th>Статус</th>
        <th>E-mail</th>
    </tr>
    <?php foreach ($users as list($login, $state, $email)):?>
        <tr>
            <td><?php echo $login?></td>
            <td><?php echo $state?></td>
            <td><?php echo $email?></td>
        </tr>
    <?php endforeach;?>
</table>






