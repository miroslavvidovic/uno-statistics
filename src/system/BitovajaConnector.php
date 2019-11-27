<?php
namespace Src\System;

class BitovajaConnector {

    private $dbConnection = null;

    public function __construct()
    {
        $host = getenv('DB_HOST_bit');
        $port = getenv('DB_PORT');
        $db   = getenv('DB_DATABASE');
        $user = getenv('DB_USERNAME');
        $pass = getenv('DB_PASSWORD');

        try {
            $this->dbConnection = new \PDO(
                "sqlsrv:Server=$host;Database=$db",
                $user,
                $pass
            );
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function getConnection()
    {
        return $this->dbConnection;
    }
}