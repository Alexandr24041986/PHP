<?php
echo "Файловая систкма";

// подключение файлов

//include "имя файла";// если не найдет файла просто напишет и продолжит
//require "имя файла";// если не найдет файла то выдаст фатал ерор и прекратит выполнение скрипта

include "test.php";
var_dump($var_from_tst);

// не допускает повторного подключения
// include_once "имя файла";
// require_once "имя файла";

// // чтение из файла
// // 1. открать файл
// $fp = fopen("имя файла","r");// первое имя файла,второе режим(чтение-запись,запись-чтение)

// блокировка файла на момент записи
//flock($fp, LOCK_EX);


// //2. чтение из файла
// fread($fp, 4096);// первое переменная,второе значение длинна
//flock($fp, LOCK_UN);
// //3. закрыть файл
// fclose($fp);// передаем ту переменную для закрытия которую открывали

//запись в файл
// file_put_contents('имя файла', FILE_APPEND | LOCK_EX); // обьединяет два предыдущих пункта
//LOCK_EX - блокирует файл на момент записи

//чтение из файла
//file_get_contents($filename);


?>