<?php
/**
 * Created by PhpStorm.
 * User: Joshuan Marval
 * Date: 31/10/2018
 * Time: 10:20
 */
include_once 'DBConnection.php';

class Login extends DBConnection
{
    public function getEmployeeToLogin($loginData) {

        $query = 'SELECT name, username, password FROM  employees  WHERE username = :username AND password = :password';

        $preparedStmt = DBConnection::connect()->prepare($query);
        $preparedStmt -> bindParam(':username', $loginData['username']);
        $preparedStmt -> bindParam(':password', $loginData['password']);

        $preparedStmt -> execute();

        return $preparedStmt -> fetch();
        $preparedStmt -> close();
    }
}