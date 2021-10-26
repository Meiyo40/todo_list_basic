<?php

namespace app\model\database;

class ConfigurationDatabase {
    private $db_user;
    private $db_pwd;
    private $dsn;

    public function __construct($db_user, $db_pwd, $dsn)
    {
        $this->db_pwd = $db_pwd;
        $this->db_user = $db_user;
        $this->dsn = $dsn;
    }

    /**
     * @return mixed
     */
    public function getDbUser()
    {
        return $this->db_user;
    }

    /**
     * @return mixed
     */
    public function getDbPwd()
    {
        return $this->db_pwd;
    }

    /**
     * @return mixed
     */
    public function getDsn()
    {
        return $this->dsn;
    }
}
