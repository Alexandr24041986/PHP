
<?php
//Задача 1
 // Создать функцию с аргументом для вывода приветствия. Установить значение по умолчанию для аргумента равное «Гость»
    function privetstvie($username="Гость") {
            echo "Привет, $username<br>";
        }
        privetstvie();
        privetstvie("Щавель");
        echo"<br>";


// Задача 2 
        // Используя функцию удаления HTML и PHP-тегов из строки, выведите на экран строку «<h1>Hello, world!</h1>». 
        // Строка не должна выглядеть как заголовок первого уровня – все теги должны быть удалены. 
        $str = "<h1>Hello, world!</h1>";
        echo strip_tags($str);
        echo "<br>";

//Задача 3 
// Создайте массив. Объедините все элементы массива в строку и выведите её на экран. 
        $arr = array("Hi", "my", "name", "is", "Alex", "!!!");
        echo"<br>";
        $string = join(" ", $arr);
        echo "$string<br>";
        echo"<br>";


//Задача 4 
// Допустим, пользователь вводит названия городов через пробел. Вы их присваиваете переменной. 
// Переставьте названия так, чтобы названия были упорядочены по алфавиту.
        $text = "Питер Иркутск Москва Саранск Ухта Гомель";
            $cityes = explode(" ", $text);
            sort($cityes);
            $cityes = implode(", ", $cityes);
            echo $cityes;
            echo"<br>";
        
// Задача 5
// В переменной $date лежит дата в формате '30-11-2017'. Преобразуйте эту дату в формат '2017.11.30'.
        echo"<br>";
        $date = "30-11-2017";
        echo date("y.m.d", strtotime($date));
        echo "<br>";
// Задача 6 
// Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.
        echo"<br>";
        $str = "/php/";
        echo trim($str,"/");
        echo "<br>";
        echo rtrim($str,"/");
        echo "<br>";
        echo ltrim($str,"/");
        echo "<br>";


// Задача 7
 // Дана строка 'просто строка.'. В конце этой строки может быть точка, а может и не быть. 
 //Сделайте так, чтобы в конце этой строки гарантировано стояла точка. 
 //То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim
 echo"<br>";
 $str = "просто строка.";
 $str = rtrim($str, ".");
 $str = $str . ".";
 echo "$str<br>";
 
// Задача 8
//Написать функцию - конвертер строки. 
//Возможности: 
//перевод всех символов в верхний регистр, 
//перевод всех символов в нижний регистр, 
//перевод всех символов в нижний регистр и первых символов слов в верхний регистр. 
//Это должна быть одна функция
 echo "<br>";
 $str = "HeLLo MY NAme AlEx";
 function change($string, $case) {
        if ($case === "uc") { 
                $string = strtoupper($string);
                echo "$string<br>";
        } elseif ($case === "lc") { 
                $string = strtolower($string);
                echo "$string";
        } elseif ($case === "pc") { 
                $string = strtolower($string);
                $string = ucwords($string);
                echo "$string";
        } else {
                echo "ERROR:Неверный аргумент<br>";
        }
    }
    echo "Исходная строка: $string = <br>";
    change($input_str, "uc");
    change($input_str, "lc");
    change($input_str, "pc");
    change($input_str, "HI");
    echo "<br>";
 ?>