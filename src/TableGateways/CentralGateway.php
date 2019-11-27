<?php

namespace Src\TableGateways;

class CentralGateway {

    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function countCentralAll($name)
    {
        $statement = "
            SELECT
                COUNT (*) 
            FROM UNO1.dbo.RESTORAN
            WHERE READER like '%$name%' AND LEN (CARDCODE) = 8
        ";
        
        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function countCentralToday($name)
    {
        $today = date('Y-m-d');
        $statement = "
            SELECT
                COUNT (*) 
            FROM UNO1.dbo.RESTORAN
            WHERE READER like '%$name%' AND LEN (CARDCODE) = 8 AND DATEIO >='$today'
        ";
        
        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }


    public function countCentralYesterday($name)
    {   
        $yesterday =  date("Y-m-d", strtotime('-1 days'));
        $today =  date("Y-m-d");

        $statement = "
                SELECT 
	                COUNT (*) 
                FROM UNO1.dbo.RESTORAN
                WHERE READER like '%$name%' AND LEN (CARDCODE) = 8 AND DATEIO >= '$yesterday' AND DATEIO <'$today'
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