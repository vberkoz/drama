<?php

class UserController
{

    public function actionLogin()
    {
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkPassword($password)) {
                $errors[] = 'Password must be longer or equal 6 symbols';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Wrong email';
            }

            $userId = User::checkUserData($email, $password);

            if (!$userId) {
                $errors[] = 'Wrong email or password';
            } else {
                User::auth($userId);
                header('Location: /admin/dashboard/');
            }
        }

        require_once(ROOT . '/views/user/login.php');
        return true;
    }

    public static function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Name must be longer or equal 2 symbols';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Password must be longer or equal 6 symbols';
            }

            if (!User::checkEmail($email)) {
                $errors[] = 'Wrong email';
            }

            if (User::checkEmailExists($email)) {
                $errors[] = 'The email is used';
            }

            if (!$errors) {
                $result = User::register($name, $password, $email);
            }
        }
        
        require_once(ROOT . '/views/user/register.php');
        return true;
    }

    public function actionLogout()
    {
        // session_start();
        unset($_SESSION['user']);
        // header('Locations: /user/login/');
        AdminBase::checkAdmin();
        
        return true;
    }
}