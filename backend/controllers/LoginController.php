<?php
/**
 * Created by PhpStorm.
 * User: Joshuan Marval
 * Date: 31/10/2018
 * Time: 10:20
 */

class LoginController
{
    public function login() {

        if (isset($_POST['username']) && isset($_POST['password'])) {

            $loginData = array('username' => $_POST['username'], 'password' => $_POST['password']);

            $answer = (new Login)->getEmployeeToLogin($loginData);

        if ($answer['username'] == $_POST['username'] && $answer['password'] ==  $_POST['password']) {

                session_start();
                $_SESSION['session'] = true;
                $_SESSION['name'] = $answer['name'];

                header('location:products');
            }
            else {
                echo 'error al ingresar';
            }
        }

    }


}