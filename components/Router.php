<?php

class Router
{
    private $routes; // массив с маршрутами
    private $match;

    public function __construct() // конструктор
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
        $this->match = false;
    }

    /**
     * Returns request string
     * @return string
     */
    private function get_uri()
    {
        //получить строку запроса
        if(!empty($_SERVER['REQUEST_URI']))
        {
            // trim - удаляет с начала и конца строки пробелы и указанный символ
            return trim($_SERVER['REQUEST_URI'], '/');
        }
        return '';
    }

    public function run()
    {
        $uri =  $this->get_uri();

        // проверить наличие такого запроса в routes.php

        foreach($this->routes as $uri_pattern => $path)
        {
            $this->match = false;
            // сравниваем $uri_pattern и $uri
            if(preg_match("~^$uri_pattern$~", $uri ))
            {
                // получаем внутренний путь из внешнего согласно правилу
                $internal_route = "";
                $internal_route = preg_replace("~$uri_pattern~", $path, $uri);

                // определить, какой контроллер и экшн
                // обрабатывают запрос
                $segments = array();
                $segments = explode('/', $internal_route);

                $controller_name = "";
                $controller_name = array_shift($segments).'Controller';
                $controller_name = ucfirst($controller_name);

                $action_name = "";
                $action_name = 'action'.ucfirst(array_shift($segments));

                $parameters = $segments;

                // подключить файл класса-контроллера
                $controller_file = ROOT.'/controllers/'.
                    $controller_name.'.php';
                if(file_exists($controller_file))
                {
                    include_once($controller_file);
                }

                // создать объект, вызвать метод (т. е. action)
                $controller_object = new $controller_name;

                $result = null;
                //print_r($parameters);
                $result = call_user_func_array(array($controller_object, $action_name), $parameters);
                //call_user_func_array - вызов пользовательской функции с массивом параметров

                if($result)
                {
                    $this->match = true;
                    break;
                }
            }
        }
        if(!$this->match)
        {
            include_once(ROOT.'/views/error/404.php');
        }




    }
}