<?php

require __DIR__.'/../vendor/autoload.php';

class Router {
    static function run(){
        $controller = 'Index';
        $action = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routes[1])) {
            $controller = $routes[1]; // имя контроллера
        }

        if (!empty($routes[2])) {
            $action = $routes[2]; // имя метода
        }

        $controller = ucfirst(strtolower($controller)) . 'Controller';
        $action = strtolower($action) . 'Action';

        $controller_filename = '../private/Controllers/' . $controller . '.php';
        if (file_exists($controller_filename)) {
            require_once $controller_filename;
        } else {
            // обработка ошибки
            var_dump('file not found');
        }

        if (class_exists($controller)) {
            $controller = new $controller();
        } else {
            // обработка ошибки
            var_dump('class not found');
        }

        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            // обработка ошибки
            var_dump('method not found');
        }
    }
}
Router::run();