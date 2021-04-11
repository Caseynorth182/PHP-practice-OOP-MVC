<?php
/**
 *  Тут будет храниться список Роутов
 *
 */

use App\Services\Router;

//регистрация страниччек
Router::page('/login', 'login');
Router::page('/test2', 'test2');

Router::enable();