<?php

namespace Src\TableGateways;

class BitoGateway {

    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function countReader()
    {
        $statement = "
                SELECT 
	                COUNT (*) 
                FROM AXDB.dbo.UnoRestoranBit
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