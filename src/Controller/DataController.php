<?php
namespace Src\Controller;

use Src\TableGateways\DataGateway;

class DataController {

    private $db;
    private $dataGateway;

    public function __construct($db)
    {
        $this->db = $db;
        $this->dataGateway = new DataGateway($db);
    }

    public function getReaderStatsToday(){
        
        $l1 = $this->dataGateway->countReaderToday('uno-L1');
        $l2 = $this->dataGateway->countReaderToday('uno-L2');
        $l3 = $this->dataGateway->countReaderToday('uno-L3');
        $d1 = $this->dataGateway->countReaderToday('uno-D1');
        $d2 = $this->dataGateway->countReaderToday('uno-D2');
        $d3 = $this->dataGateway->countReaderToday('uno-D3');
        $m1 = $this->dataGateway->countReaderToday('uno-M1');
        $v1 = $this->dataGateway->countReaderToday('uno-V1');
        $r  = $this->dataGateway->countManualEntryToday();
        $total =  $l1[0]['']+$l2[0]['']+$l3[0]['']+$d1[0]['']+$d2[0]['']+$d3[0]['']+$m1[0]['']+$v1[0]['']+$r[0][''];

        $result = ['l1'=>$l1,'l2'=>$l2,'l3'=>$l3,'d1'=>$d1,'d2'=>$d2,'d3'=>$d3,'m1'=>$m1,'v1'=>$v1,'r'=>$r,'total'=>$total];
        
        return $result;
    }

    public function getReaderStats(){
        
        $l1 = $this->dataGateway->countReader('uno-L1');
        $l2 = $this->dataGateway->countReader('uno-L2');
        $l3 = $this->dataGateway->countReader('uno-L3');
        $d1 = $this->dataGateway->countReader('uno-D1');
        $d2 = $this->dataGateway->countReader('uno-D2');
        $d3 = $this->dataGateway->countReader('uno-D3');
        $m1 = $this->dataGateway->countReader('uno-M1');
        $v1 = $this->dataGateway->countReader('uno-V1');
        $r  = $this->dataGateway->countManualEntry();
        $total =  $l1[0]['']+$l2[0]['']+$l3[0]['']+$d1[0]['']+$d2[0]['']+$d3[0]['']+$m1[0]['']+$v1[0]['']+$r[0][''];

        $result = ['l1'=>$l1,'l2'=>$l2,'l3'=>$l3,'d1'=>$d1,'d2'=>$d2,'d3'=>$d3,'m1'=>$m1,'v1'=>$v1,'r'=>$r,'total'=>$total];
        
        return $result;
    }

    public function getReaderStatsYesterday(){
        $l1 = $this->dataGateway->countReaderYesterday('uno-L1');
        $l2 = $this->dataGateway->countReaderYesterday('uno-L2');
        $l3 = $this->dataGateway->countReaderYesterday('uno-L3');
        $d1 = $this->dataGateway->countReaderYesterday('uno-D1');
        $d2 = $this->dataGateway->countReaderYesterday('uno-D2');
        $d3 = $this->dataGateway->countReaderYesterday('uno-D3');
        $m1 = $this->dataGateway->countReaderYesterday('uno-M1');
        $v1 = $this->dataGateway->countReaderYesterday('uno-V1');
        $r  = $this->dataGateway->countManualEntryYesterday();
        $total =  $l1[0]['']+$l2[0]['']+$l3[0]['']+$d1[0]['']+$d2[0]['']+$d3[0]['']+$m1[0]['']+$v1[0]['']+$r[0][''];

        $result = ['l1'=>$l1,'l2'=>$l2,'l3'=>$l3,'d1'=>$d1,'d2'=>$d2,'d3'=>$d3,'m1'=>$m1,'v1'=>$v1,'r'=>$r,'total'=>$total];

        return $result;
    }


    public function getNumOfEmployees(){
        $NumOfWorkers = $this->dataGateway->countEmployeesToday();
        $result = ['Employees'=>$NumOfWorkers];

        return $result;
    }

    public function listEmployees(){
        $Employees = $this->dataGateway->listEmployeesToday();
        $result = ['List'=>$Employees];

        return $result;
    }

    public function listSpareHours(){
        $Employees = $this->dataGateway->sumSpareHours();
        $result = ['List'=>$Employees];

        return $result;
    }
}