<?php
/**
 * Created by PhpStorm.
 * User: Joshuan Marval
 * Date: 30/10/2018
 * Time: 17:45
 */

class DBConnection
{
    public function connect() {

        try {
            $connectionData = new PDO("mysql:host=localhost;port=3307;dbname=raptor_electronic", "root", "");
            $connectionData->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        return $connectionData;
    }

}