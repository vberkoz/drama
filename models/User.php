<?php

class User
{

    /**
     * Register new user
     * @param string
     * @param string
     * @param string
     * @return boolean
     */
    public static function register($name, $password, $email)
    {

        $db = Db::getConnection();

        $sql = 'INSERT INTO user (name, email, password) '
            . 'VALUES (:name, :email, :password)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();

    }

    /**
     * Update user data
     * @param integer $id
     * @param string $name
     * @param string $password
     * @return boolean
     */
    public static function edit($id, $name, $password)
    {

        $db = Db::getConnection();

        $sql = 'UPDATE user SET name = :name, password = :password WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();

    }

    /**
     * Check if user exists
     * @param string $email
     * @param string $password
     * @return mixed integer user id or false
     */
    public static function checkUserData($email, $password)
    {

        $db = Db::getConnection();

        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetch();

        if ($user) {
            return $user['id'];
        }
        return false;

    }

    /**
     * Check if user logged
     * @return integer
     */
    public static function checkLogged()
    {

        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header('Location: /user/login');

    }

    /**
     * Set user session
     * @param integer $userId
     */
    public static function auth($userId)
    {

        $_SESSION['user'] = $userId;

    }

    /**
     * Validate name
     * @param string
     * @return boolean
     */
    public static function checkName($name)
    {

        if (strlen($name) >= 2)
            return true;
        return false;

    }

    /**
     * Validate password
     * @param string
     * @return boolean
     */
    public static function checkPassword($password)
    {

        if (strlen($password) >= 6)
            return true;
        return false;

    }

    /**
     * Validate email
     * @param string
     * @return boolean
     */
    public static function checkEmail($email)
    {

        if (filter_var($email, FILTER_VALIDATE_EMAIL))
            return true;
        return false;

    }

    /**
     * Check if email currently exists
     * @param string
     * @return boolean
     */
    public static function checkEmailExists($email)
    {

        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;

    }

    /**
     * Check if user is guest
     * @return boolean
     */
    public static function isGuest()
    {

        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;

    }

    /**
     * Returns user by id
     * @param integer $id
     * @return array
     */
    public static function getUserById($id)
    {

       $id = intval($id);

       if ($id) {

           $db = Db::getConnection();
           $sql = 'SELECT * FROM user WHERE id = :id';

           $result = $db->prepare($sql);
           $result->bindParam(':id', $id, PDO::PARAM_INT);
           
           $result->setFetchMode(PDO::FETCH_ASSOC);
           $result->execute();

           return $result->fetch();
           
       }

    }

}