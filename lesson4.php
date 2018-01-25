<?php
echo "Взаимодействие с пользователем";

// получение запроса пользователя
$link = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
var_dump($link);

$link = 'https://www.google.ru/?gfe_rd=cr&dcr=0&ei=giFeWoiQBbH37gSKmYGQDw';
$parsed_url = parse_url($link); //
var_dump($parsed_url);

echo "string \n str";
// требования к url
//1. латинские буквы
//2. цифры
//3. некоторвые знаки препинания
//4. остальные символы должны быть перекодированы

//1. urlencode($url_str);
//2. rawurlencode($url_str);

//1. urldecode($url_str);
//2. rawurldecode($url_str);

$str = 'https://www.google.ru/search?newwindow=1&dcr=0&source=h
p&ei=giFeWtaQCqiP6ASxhKroDw&q=%D1%81%D1%82%D1%80%D0%BE%D0%BA%D0%
B0+%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%D0%B0+php+&oq=%D1%81%D1%
82%D1%80%D0%BE%D0%BA%D0%B0+%D0%B7%D0%B0%D0%BF%D1%80%D0%BE%D1%81%D0
%B0+php+&gs_l=psy-ab.3..0i30k1.287703.301800.0.303012.30.26.0.0.0.0
.485.3117.0j13j3j0j1.18.0....0...1c.1.64.psy-ab..12.17.3035.6..0j
0i10i1i42k1j0i10i1k1j0i131k1j0i131i10i1k1j35i39k1j0i10k1j0i13k1j0i
13i30k1j0i8i13i30k1j0i13i5i30k1j0i13i5i10i30k1j0i7i30k1j0i8i7i30k1
.109.fRbaySOBNjo';

$decode_url = urldecode($str);
var_dump($decode_url);

//формирование строки запроса (например, для отправки на другой сервер)
//http_build_query(массив с параметрами);


//параметры
//?param1=value1&param2=value2

$params = [
    'id' => 1,
    'login' => 'qwe'
];

$url = 'https://oauth.vk.com/autorize' .
    http_build_query($params);

var_dump($url);

$get = $_GET;
var_dump($get['id']);
$id = $get['id'];

//isset();
// ?params[]=1&params[]=2&params[]=3
//var_dump($_POST['login']);

// qwe

$user = [
  [
      'login' => 'qwe',
      'pwd' => '41242'
  ],
    [
        'login' => 'asd',
        'pwd' => '5645'
    ]
];

function check_users($users) {
    if (!isset($post['login'])) {
        return false;
    }
    $post = $_POST;
    foreach ($users as $user) {
        if ($post['login'] == $user['login']) {
            if ($post['pwd'] == $user['pwd']) {
                echo 'Вы вошли как' . $post['login'];
                return true;
            }
        }
    }
    echo "Вы не вошли 2";
    return false;
}

//if (isset($_POST['login'])) {
    check_users($user);
//}

//var_dump(trim($_POST['login']));


//if ($_POST['login'] == 'qwe') {
//    echo "Вы вошли как qwe";
//} else {
//    echo "Вы не вошли";
//}

// защита от прямых атак
//1. trim($str); - удаляет пробелы и другие символы
//2. isset();
//3. переприсвоение данных из суперглобальных массивов
//4. Очистка суперглобальных массивов

// защита от xss атак
//strip_tags($str); // удаляет html теги
//htmlspecialchars($str); // преобразование в специальные символы
//htmlentities($str); //  Преобразует все возможные символы в соответствующие HTML-сущности

// защита от SQL инъекций
//addcslashes($str); // экранирует символы
//stripcslashes($str);
//mysqli_real_escape_string($str);

// Фильтрация данных
//filter_var(var, filter);
//filter_var_array(array);

?>

<a href="lesson1.php?id=4&login=Пупкин">Index</a>

<form method="post" action="lesson4.php">
    <label for="login">Введите логин</label>
    <input id="login" type="text" name="login">

    <label for="pwd">Введите пароль</label>
    <input id="pwd" type="password" name="pwd">

    <button type="submit">Войти</button>
</form>
