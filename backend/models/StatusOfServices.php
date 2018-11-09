<?php
/**
 * Created by PhpStorm.
 * User: Joshuan Marval
 * Date: 4/11/2018
 * Time: 14:10
 */
require_once 'DBConnection.php';
class StatusOfServices extends DBConnection
{

    public function registerStatusOfServiceDB($statusData, $table) {

        try {




        $query = "INSERT INTO $table (order_num, client_ci, name, phone_number, email, description, devices, status, begin_at, finish_at, price, employee_id, comment, delivered)
                                   VALUES (:order_num, :client_ci, :name, :phone_number, :email, :description, :devices, :status, :begin_at, :finish_at, :price, :employee_id, :comment, :delivered)";

            $preparedStmt = DBConnection::connect()->prepare($query);
            $preparedStmt->bindParam(':order_num', $statusData['order_num']);
            $preparedStmt->bindParam(':client_ci', $statusData['client_ci']);
            $preparedStmt->bindParam(':name', $statusData['name']);
            $preparedStmt->bindParam(':phone_number', $statusData['phone_number']);
            $preparedStmt->bindParam(':email', $statusData['email']);
            $preparedStmt->bindParam(':description', $statusData['description']);
            $preparedStmt->bindParam(':devices', $statusData['devices']);
            $preparedStmt->bindParam(':status', $statusData['status']);
            $preparedStmt->bindParam(':begin_at', $statusData['begin_at']);
            $preparedStmt->bindParam(':finish_at', $statusData['finish_at']);
            $preparedStmt->bindParam(':price', $statusData['price']);
            $preparedStmt->bindParam(':employee_id', $statusData['employee_id']);
            $preparedStmt->bindParam(':comment', $statusData['comment']);
            $preparedStmt->bindParam(':delivered', $statusData['delivered']);

            if ($preparedStmt->execute()) {
                return 'success';
            } else {
                return 'error';
            }

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

//        $preparedStmt -> close();
    }

    public function existStatus($statusData, $table){

        try {
            $query = "SELECT order_num FROM $table WHERE order_num = :order_num";

            $stmt = DBConnection::connect()->prepare($query);
            $stmt ->bindParam(':order_num', $statusData['order_num']);

             $stmt ->execute();

            if ($stmt ->fetch()) {
                return true;
            }
            return false;

        } catch (PDOException $exception) {
            echo "Error: " . $exception->getMessage();
        }

    }

    public function getAllStatusOfServices($table) {

        $query = "SELECT order_num, client_ci, name, phone_number, email, description, devices, status, begin_at, finish_at, price, employee_id, comment, delivered FROM $table";

        $stmt = DBConnection::connect()->query($query);
        $stmt -> execute();

        return $stmt -> fetchAll();
        $stmt -> close();

    }

    public function getTechnicalEmployee($position ,$table) {

        $query = "SELECT id, name FROM $table WHERE position = :position";

        $preparedStmt = DBConnection::connect()->prepare($query);
        $preparedStmt -> bindParam(':position',$position );

        $preparedStmt->execute();
        return $preparedStmt->fetchAll();
        $preparedStmt -> close();

    }

}