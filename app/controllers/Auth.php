<?php


namespace App\controllers;

use App\Services\Router;

class Auth
{
    public function login($data)
    {
        $email = $data['email'];
        $password_1 = $data['password'];

        $user = \R::findOne('users', 'email = ?', [$email]);
        if (!$user) {
            die('Пользовательь не найден');
        }
        if (password_verify($password_1, $user['password'])) {
            session_start();
            $_SESSION['user'] = [
                'id' => $user->id,
                'full_name' => $user->full_name,
                'group' => $user->group,
                'avatar' => $user->avatar,
                'email' => $user->email,
            ];
            Router::redirect('/profile');

        } else {
            echo '<pre>';
            var_dump($user);
        }

    }

    public function register($data, $files)
    {
        $email = $data['email'];
        $user_name = $data['user_name'];
        $full_name = $data['full_name'];
        $password_1 = $data['password_1'];
        $password_2 = $data['password_2'];

        if ($password_1 !== $password_2) {
            Router::error('500');
            die();
        }

        $avatar = $files['user_avatar'];
        $filename = time() . '_' . $avatar['name'];

        $path = 'uploads/avatars/' . $filename;
        if (move_uploaded_file($avatar["tmp_name"], $path)) {
            $users = \R::dispense('users');
            $users->email = $email;
            $users->user_name = $user_name;
            $users->full_name = $full_name;
            /*
             * Група пользователя 1  и 2 - это админ
             */
            $users->group = 1;
            $users->password = password_hash($password_1, PASSWORD_DEFAULT);
            $users->avatar = '/' . $path;
            \R::store($users);
            Router::redirect('/login');
        } else {
            Router::error('500');
        }

    }

    public function logout()
    {
        unset($_SESSION['user']);
        Router::redirect('/login');
    }

}