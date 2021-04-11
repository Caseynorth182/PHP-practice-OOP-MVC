<?php
session_start();
use App\Services\App;
require_once __DIR__. "/vendor/autoload.php";
App::start();
require_once __DIR__. "/router/routes.php";


/*
 *
 *  login page - sign in (GET) - авторизация
 *  / register - sign up (GET) - регистрация
 *  / auth/login (POST) -> form
 *  /dashboard - дорступна только админу
 *  / profile - доступна админу и пользователю
 *
 * */