<?php
/**
 *  Тут будет храниться список Роутов
 *
 */

use App\Services\Router;

//регистрация страниччек
Router::page('/login', 'login');
Router::page('/register', 'register');
Router::page('/', 'home');

Router::enable();