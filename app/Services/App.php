<?php


namespace App\Services;


class App
{
    /**
     * //Подключаем файл config.php который в возвращает данные
     */
    public static function start()
    {
        self::libs();
        self::db();
    }

    /**
     * перебирает все библиотеки и прикреплять к index.php
     */
    public static function libs()
    {
        $config = require_once 'config/app.php';

        foreach ($config['libs'] as $lib) {

            require_once 'libs/' . $lib . '.php';
        }
    }

    /*
     * подключает базу данных
     */
    public static function db()
    {
        $config = require_once 'config/db.php';
        if($config['enable'] !== false) {
            //Искать Класс R нужно в глобальном пространстве ( \  )
            \R::setup( 'mysql:host='.$config['host'].';port='.$config['port'].';dbname='.$config['dbname'],
                $config['username'], $config['password'] );
            if(!\R::testConnection()) {
                die('Error db connect');
            }
        }



    }
}