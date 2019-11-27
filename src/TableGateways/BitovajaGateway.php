<?php

namespace Src\TableGateways;

class BitovajaGateway {

    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function countBitovajaAll($name)
    {
        $statement = "
            SELECT
                COUNT (*) 
            FROM UNO1.dbo.RESTORAN
            WHERE READER like '%$name%' AND BT='34'
        ";
        
        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function countBitovajaToday($name)
    {
        $today = date('Y-m-d');
        $statement = "
            SELECT
                COUNT (*) 
            FROM UNO1.dbo.RESTORAN
            WHERE READER like '%$name%' AND BT='34' AND DATEIO >='$today'
        ";
        
        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }


    public function countBitovajaYesterday($name)
    {   
        $yesterday =  date("Y-m-d", strtotime('-1 days'));
        $today =  date("Y-m-d");

        $statement = "
                SELECT 
	                COUNT (*) 
                FROM UNO1.dbo.RESTORAN
                WHERE READER like '%$name%' AND BT='34' AND DATEIO >= '$yesterday' AND DATEIO <'$today'
        ";
        
        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }
}