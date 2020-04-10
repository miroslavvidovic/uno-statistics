<?php

namespace Src\TableGateways;

class DataGateway {

    private $db = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function findAll()
    {
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

    public function countReader($name)
    {
        $statement = "
                SELECT
	                COUNT (*)
                FROM AXDB.dbo.UnoTrans
                WHERE FC like '%$name%'
        ";

        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function countReaderToday($name)
    {
        $today = date('Y-m-d');
        $statement = "
                SELECT
	                COUNT (*)
                FROM AXDB.dbo.UnoTrans
                WHERE FC like '%$name%' AND DATEIO >= '$today'
        ";

        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function countManualEntry()
    {
        $today = date('Y-m-d');
        $statement = "
                SELECT
	                COUNT (*)
                FROM AXDB.dbo.UnoTrans
                WHERE FC like ''
        ";

        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function countManualEntryToday()
    {
        $today = date('Y-m-d');
        $statement = "
                SELECT
	                COUNT (*)
                FROM AXDB.dbo.UnoTrans
                WHERE FC like '' AND DATEIO >= '$today'
        ";

        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function countManualEntryYesterday()
    {
        $today = date('Y-m-d');
        $statement = "
                SELECT
	                COUNT (*)
                FROM AXDB.dbo.UnoTrans
                WHERE FC like '' AND DATEIO >= '$today'
        ";

        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function countReaderYesterday($name)
    {
        $yesterday =  date("Y-m-d", strtotime('-1 days'));
        $today =  date("Y-m-d");

        $statement = "
                SELECT
	                COUNT (*)
                FROM AXDB.dbo.UnoTrans
                WHERE FC like '%$name%' AND DATEIO >= '$yesterday' AND DATEIO <'$today'
        ";

        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function countInvalid($name)
    {
        $statement = "
                SELECT
	                COUNT (*)
                FROM AXDB.dbo.UnoTrans
                WHERE FC = '$name'
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

    public function countEmployeesToday() {
        $today = date('Y-m-d');
        $statement = "
                SELECT
	                COUNT (DISTINCT EMPLOYEEID)
                FROM AXDB.dbo.UnoTrans
                WHERE DATEIO = '$today' and TIMEIO >= 21000 and TIMEIO <=25200
        ";

        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function listEmployeesToday() {
        $today = date('Y-m-d');
        $statement = "
                SELECT
	                EMPLOYEEID, EMPNAME, DIMENSION, DIMNAME
                FROM AXDB.dbo.UnoTrans
                WHERE DATEIO = '$today' and TIMEIO >= 21000 and TIMEIO <=25200 ORDER BY DIMENSION
        ";

        try {
            $statement = $this->db->query($statement);
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        } catch (\PDOException $e) {
            exit($e->getMessage());
        }
    }

    /**
     *  SQL query to sum the spare hours for each employee
     */
    public function sumSpareHours() {
        $statement = "
        SELECT c.EMPLOYEEID as Platni_broj, c.FIRSTNAME as Ime, c.LASTNAME as Prezime, c.DIMENSION as Mjesto_troska, sum(s.HOURS) as Naradjeni_sati
FROM AXDB.dbo.UNOCARDSET c  INNER JOIN AXDB.dbo.UNOSPAREHOURSTRANS s
ON c.EMPLOYEEID=s.EMPLOYEEID WHERE s.DATAAREAID = 'ta3' AND c.DATAAREAID = 'ta3'
GROUP BY c.EMPLOYEEID, c.FIRSTNAME, c.LASTNAME, c.DIMENSION
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
