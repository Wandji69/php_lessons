<?php

class Dbh
{

    private function connect()
    {
        try {
            $username = "root";
            $password = "";

            $dbh = new PDO('mysql:host=localhost;dbname=', $username, $password);
            return $dbh;
        } catch (PDOException $err) {
            print "Error: " . $err->getMessage() . "<br/>";
            die();
        }
    }
}
