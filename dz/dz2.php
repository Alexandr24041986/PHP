<!-- Задание к субботе (13.01.18): 
1. Функции для работы с массивами 
1) array_combine, array_unique 
2) array_count_values, count 
3) array_diff_key, in_array 
4) array_intersect_key, range 
5) array_key_exists, compact 
6) array_intersect, array_merge 
7) array_multisort 
8) array_pop, array_push 
9) array_rand, shuffle 
10) lice array_replace, array_chunk 
11) array_reverse, array_search 
12) array_shift, array_unshift 
13) array_slice, array_sp -->

<!-- // array_rand() функция возвращает случайный ключ из массива, или он возвращает массив случайных ключей , 
// если вы укажете , что функция должна возвращать более одного ключа.
array_rand( array,number ) в скобках передаем обязательно массив в котором хотим произвести операцию,
и  необязательное значение число - количество ключей,которое хотим вернуть -->



<?php
//Возвращаем массив случайных ключей

$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);// цифрой 3 указали количество ключей,которое хотим вернуть
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]]."<br>";


//Возвращаем массив случайных ключей строки:

$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
var_dump(array_rand($a,3));



//shuffle() функция рандомизирует порядок элементов в массиве.

// Эта функция назначает новые ключи для элементов в массиве. Существующие ключи будут удалены 
// 


$my_array = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"purple");

shuffle($my_array);
var_dump($my_array);

//1. Дан массив [3, 1, 6, 0, 4, 5]. 
// С помощью цикла foreach найдите сумму квадратов элементов этого массива. 
// Результат вывести на экран; 

$number =  [3, 1, 6, 0, 4, 5];
    foreach ($number as  $value) {
        $summa = $summ += $value**2;
    }
    echo "$summa<br>";

//2. Вывести таблицу умножения чисел до 10 с помощью двух циклов for (вложенный цикл); 
echo "<br>";
for($m = 1; $m <= 10; $m++){
    //echo "$i ";
    for($n = 1; $n<=10 ; $n++){
        echo "<div style='display:inline-block; width:50px; height:50px;'>". $n * $m."</div>";
    }
    echo "<br>";
}


//3.Нарисуйте треугольник из символов *. Высота треугольника равна 15.
$arr_figure = [];
 	for($m = 0; $m < 15; $m++) {
 		array_push($arr_figure, "*");
 	}
 	for($n = 0; $n < 15; $n++) {
 		for($l = 0; $l < 15; $l++) {
 			echo $arr_figure[$l];
 		}
 		$arr_figure[$n] = "&nbsp";
 		echo "<br>";
     }
     
//4.Вывести все числа, от 0 до 30 (включительно) , у которых есть хотя бы одна цифра 3 и которые не делятся на 5.
     $allnum = [];
        for ($m = 0; $m <= 30; $m++) {
            array_push ($allnum, $m);
        }
 
        foreach ($allnum as $value):
            $num = strpos($value, "3");
            if ($num !== false and $value % 5 !== 0) {
                echo "$value<br>";
            }
        endforeach;

//5. Отсортировать массив по 'price'
        echo "<br>";
 $arr = [ 
     '1'=> [ 
         'price' => 10, 
         'count' => 2 
     ], 
     '2'=> [ 
         'price' => 5, 
         'count' => 5 
     ], 
     '3'=> [ 
         'price' => 8, 
         'count' => 5 
     ], 
     '4'=> [ 
         'price' => 12, 
         'count' => 4 
     ], 
     '5'=> [ 
         'price' => 8, 
         'count' => 4 
     ], 
 ];
 
        foreach($arr as $key => $row){
            $volume[$key] = $row['price']; 
        }
        array_multisort($volume, $arr);
        var_dump($arr);

//6.Создать массив из дней недели. С помощью цикла foreach выведите все дни недели, <br> 
//а текущий день выведите жирным. Текущий день можно получить с помощью функции date. Название дней выводить по-русски 

echo "<br>";
$dates = [
	"Mon" => "Понедельник",
	"Tue" => "Вторник",
	"Wed" => "Среда",
	"Thu" => "Четверг",
	"Fri" => "Пятница",
	"Sat" => "Суббота",
    "Sun" => "Воскресенье",
];
foreach ($dates as $key => $value) {
	if ($key === date('D')) {
		echo "<b>$value</b><br>";
	}	else {
		echo "$value<br>";
	}
}
?>