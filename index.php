<?php
require_once __DIR__. "/vendor/autoload.php";
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