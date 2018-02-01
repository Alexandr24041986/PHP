<?php
session_start();// начало сессии
setcookie('cookie_name',
    'cookie_value',
    (time() + 3600));
echo "Session";
var_dump($_SESSION);
// работа с данными сессий
$_SESSION['auth'] = true; // добавление переменной
//unset($_SESSION['soma_var']); // удаление одной переменной сессии
//session_unset(); // удаляет все переменные сессии
isset($_SESSION['soma_var']); // проверка принадлежности переменной к сессии
//var_dump(getallheaders());
//session_destroy(); // уничтожение сессии (данные уничтожаются, когда пользователь закрывает браузер)
echo session_id() . "<br>"; // id ceccии
echo session_name(). "<br>"; // имя сессии
echo session_save_path(); // хранилище сессий
// время жизни сессии 1440 секунд - по умолчанию
var_dump($_COOKIE);
// установка cookie
//setcookie(
//    name => имя cookie
//    value => значение cookie
//    expire => время жизни cookie (time() + 3600)
//    domain => домен, которому доступны cookie
//    secure (boolean) => через https
//    httponly (boolean) => доступны только серверу, не браузерному коду
//);
//session_start();
//if ($_POST['login'] == user['login']) {
//    if ($_POST['pwd'] == user['pwd']){
//        $_SESSION['auth'] = true;
//        setcookie('login', login, (time() + 3600));
//    }
//}
//index.php
//if ($_COOKIE['login'] == login) {
//
//}
//пароли нужно хранить в зашифрованном виде!
// md5(); sha1(); - не использовать для шифрования паролей
//password_hash(); // хэширование паролей
//password_verify(); // проверка пароля на соответствие хэшу
$pwd_form_bd = "dawuntc4n";
$pwd = "1234";
if (password_verify($pwd, $pwd_form_bd)) {
    // "пароли зашифрованы";
}
$data['pwd'] = password_hash($data['pwd'], PASSWORD_DEFAULT);
var_dump(password_hash('1234', PASSWORD_DEFAULT));
