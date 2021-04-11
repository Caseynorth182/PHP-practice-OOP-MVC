<?php

namespace App\Services;

class Router
{
    private static $list = [];

    /**
     * //Метод регестриует роут для страниц
     * @param $uri
     * @param $page_name
     */
    public static function page($uri, $page_name)
    {
        self::$list[] = [
            'uri' => $uri,
            'page_name' => $page_name
        ];
    }

    /**
     *  Метод выводит нужную страницу
     */
    public static function enable()
    {


        $query = $_GET['q'];
        foreach (self::$list as $page) {

            if ($page['uri'] === '/' . $query) {
                if ($page['post'] === true && $_SERVER['REQUEST_METHOD'] == 'POST') {
                    $action = new $page['class'];
                    $method = $page['method'];
                    if ($page['form-data'] && $page['files']) {
                        $action->$method($_POST, $_FILES);
                    } else if ($page['form-data'] && !$page['files']) {
                        $action->$method($_POST);
                    } else {
                        $action->$method();
                    }
                    die();
                } else {
                    require_once 'views/pages/' . $page['page_name'] . '.php';
                    die();
                }
            }
        }
        //если страници не существует , выводим 404
        self::error('404');
    }

    /**
     *  // метод выводит страницу ошибки если метод enable() не нашел страницу
     */
    public static function error($error)
    {
        require_once 'views/errors/' . $error . '.php';
    }

    public static function post($uri, $class, $method, $formdata = false, $files = false)
    {
        self::$list[] = [
            'uri' => $uri,
            'class' => $class,
            'method' => $method,
            'post' => true,
            'form-data' => $formdata,
            'files' => $files
        ];
    }

    public static function redirect($uri)
    {
        header('Location: ' . $uri);
    }


}