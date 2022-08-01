<?php

class Dbh
{

    public function connect()
    {
        try {
            $username = "root";
            $password = "";

            $db = new PDO('mysql:host=localhost;dbname=', $username, $password);
            return $db;
        } catch (PDOException $err) {
            print "Error: " . $err->getMessage() . "<br/>";
            die();
        }
    }
}
