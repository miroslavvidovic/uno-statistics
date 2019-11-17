<?php

namespace Src\TableGateways;

class CentGateway {

    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function findAll()
    {
        // $statement = "
        //     SELECT 
        //         ID, PlatniBroj, ImePrezime, Sluzba, CardCode
        //     FROM
        //         UNOEmployees;
        // ";
        $statement = "
                SELECT TOP(1)
                	   e.emp_id,
                	   e.PlatniBroj,
                	   e.ImePrezime,
                	   e.Sluzba,
                	   t.id,
                	   t.dateIO
                FROM UNO1.dbo.UNOEmployees e 
                INNER JOIN UNO1.dbo.UNOTrans t ON e.CardCode LIKE t.CardCode
                ORDER BY t.id DESC;
        ";
        

        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function countReader()
    {
        $statement = "
                SELECT 
	                COUNT (*) 
                FROM AXDB.dbo.UnoTrans
        ";
        
        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function find($id)
    {
        $statement = "
            SELECT 
                ID, PlatniBroj, ImePrezime, Sluzba, IDKartice
            FROM
                UNOEmployess
            WHERE IDKartice = ?;
        ";

        try {
            $statement = $this->db->prepare($statement);
            $statement->execute(array($id));
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }    
    }
}