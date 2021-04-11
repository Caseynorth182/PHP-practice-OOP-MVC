<?php

namespace App\Services;

class Router
{
    private static $list = [];

    public static function page($uri, $page_name)
    {
        self::$list[] = [
            'uri' => $uri,
            'page_name' => $page_name
        ];
    }

    public static function enable()
    {
        /*echo "<pre>";
        var_dump($page);
        echo "</pre>";*/

        $query = $_GET['q'];
        foreach (self::$list as $page) {

            if ($page['uri'] === '/' . $query) {
                require_once 'views/pages/' . $page['page_name'] . '.php';
                die();
            }
        }
        //если страници не существует , выводим 404
        self::not_found_page();
    }

    private static function not_found_page()
    {
        require_once 'views/errors/404.php';
    }
}