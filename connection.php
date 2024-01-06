<?php
class Database
{
    public static $connection;

    public static function setUpConnection()
    {
        if (!isset(Database::$connection)) {
            Database::$connection = new mysqli("localhost", "root", "", "saloon");
        }
    }

    public static function getConnection()
    {
        Database::setUpConnection();
        return Database::$connection;
    }

    public static function iud($q)
    {
        $connection = Database::getConnection();
        $connection->query($q);
    }

    public static function search($q)
    {
        $connection = Database::getConnection();
        $resultset = $connection->query($q);
        return $resultset;
    }

    public static function getLastInsertedId()
    {
        $connection = Database::getConnection();
        return $connection->insert_id;
    }
}
