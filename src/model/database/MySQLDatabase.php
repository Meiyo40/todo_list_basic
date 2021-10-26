<?php

namespace app\model\database;

require_once ("ConfigurationDatabase.php");

use PDO;
use PDOException;
use app\model\database\ConfigurationDatabase;

class MySQLDatabase
{
    /*
    private static $db_user = 'symfony';
    private static $db_pwd = 'symfony';
    private static $dsn = 'mysql:host=localhost;dbname=simple_todo_list';
    */
    private static ConfigurationDatabase $configurationDatabase;

    private static $connection_db = null;

    public static function setConfigration(ConfigurationDatabase $config)
    {
        self::$configurationDatabase = $config;
    }

    public static function connect()
    {
        try {
            if (is_null(self::$connection_db)) {
                self::$connection_db = new PDO(self::$configurationDatabase->getDsn(),
                    self::$configurationDatabase->getDbUser(), self::$configurationDatabase->getDbPwd());
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
