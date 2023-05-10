<?php

namespace App;

use Exception;

class Department
{
    public static function list()
    {
        global $conn;

        try {
            $sql = "";

            $statement = $conn->prepare($sql);
            $statement->execute();
            $records = [];

            while ($row = $statement->fetch()) {
                array_push($records, $row);
            }

            return $records;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}