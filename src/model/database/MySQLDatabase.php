<?php

namespace app\model\database;

use PDO;
use PDOException;

class MySQLDatabase
{
    private static $db_user = 'symfony';
    private static $db_pwd = 'symfony';
    private static $dsn = 'mysql:host=localhost;dbname=simple_todo_list';

    private static $connection_db = null;

    public static function connect()
    {
        try {
            if (is_null(self::$connection_db)) {
                self::$connection_db = new PDO(self::$dsn, self::$db_user, self::$db_pwd);
            }
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return self::$connection_db;
    }

    public static function disconnect()
    {
        self::$connection_db = null;
    }
}
