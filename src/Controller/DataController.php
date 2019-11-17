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

    public function getReaderStats(){
        
        $l1 = $this->dataGateway->countReader('uno-L1');
        $l2 = $this->dataGateway->countReader('uno-L2');
        $l3 = $this->dataGateway->countReader('uno-L3');
        $d1 = $this->dataGateway->countReader('uno-D1');
        $d2 = $this->dataGateway->countReader('uno-D2');
        $d3 = $this->dataGateway->countReader('uno-D3');
        $m1 = $this->dataGateway->countReader('uno-M1');
        $v1 = $this->dataGateway->countReader('uno-V1');

        $result = ['l1'=>$l1,'l2'=>$l2,'l3'=>$l3,'d1'=>$d1,'d2'=>$d2,'d3'=>$d3,'m1'=>$m1,'v1'=>$v1];
        
        return $result;
    }
}