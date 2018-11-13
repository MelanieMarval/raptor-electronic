<?php

require_once 'DBConnection.php';

class Admin extends DBConnection
{

    public function registerEmployeeDB($adminData, $table) {

        $query = "INSERT INTO $table (ci, name, phone_number, email, birthday, position, username, password) 
                        VALUES (:ci,:name,:phone_number,:email,:birthday,:position,:username,:password)";


        $preparedStmt = DBConnection::connect()->prepare($query);

        $preparedStmt->bindParam(':ci', $adminData['ci'], PDO::PARAM_STR);
        $preparedStmt->bindParam(':name', $adminData['name'], PDO::PARAM_STR);
        $preparedStmt->bindParam(':phone_number', $adminData['phone_number'], PDO::PARAM_STR);
        $preparedStmt->bindParam(':email', $adminData['email'], PDO::PARAM_STR);
        $preparedStmt->bindParam(':birthday', $adminData['birthday']);
        $preparedStmt->bindParam(':position', $adminData['position'], PDO::PARAM_STR);
        $preparedStmt->bindParam(':username', $adminData['username'], PDO::PARAM_STR);
        $preparedStmt->bindParam(':password', $adminData['password'], PDO::PARAM_STR);

        if ($preparedStmt->execute()) {
            return 'success';
        } else {
            return 'error';
        }

        $preparedStmt -> close();
    }

    public function existAdmin($adminData, $table) {

        try {
            $query = "SELECT ci, username FROM $table WHERE ci = :ci OR username = :username";

            $stmt = DBConnection::connect()->prepare($query);
            $stmt -> bindParam(':ci', $adminData['ci']);
            $stmt -> bindParam(':username', $adminData['username']);

            $stmt->execute();

            if ($stmt->fetch()) {
                return true;
            }

            return false;

        } catch (PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }
    }

    public function getAllEmployeesDB($table) {

        $query = "SELECT ci, name, phone_number, email, birthday, position FROM $table";

        $stmt = DBConnection::connect()->query($query);
        $stmt -> execute();

        return $stmt -> fetchAll();
        $stmt -> close();
    }

    public function deleteEmployeeDB($employeeCi) {

        $query = "DELETE FROM employees WHERE ci = $employeeCi";

        $stmt = DBConnection::connect()->query($query);

        if ($stmt -> execute()) {
            return 'deleted';
        } else {
            return 'no deleted';
        }

    }


}