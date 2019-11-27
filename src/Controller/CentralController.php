<?php

namespace Src\Controller;

use Src\TableGateways\CentralGateway;

class CentralController {

    private $db;
    private $centralGateway;

    public function __construct($db)
    {
        $this->db = $db;
        $this->centralGateway = new CentralGateway($db);
    }

    public function getReaderStatsToday(){
        
        $rc = $this->centralGateway->countCentralToday('uno-RC');
        $result = ['rc'=>$rc];
        return $result;
    }

    public function getReaderStats(){
        $rc = $this->centralGateway->countCentralAll('uno-RC');
        $result = ['rc'=>$rc];
        return $result;
    }

    public function getReaderStatsYesterday(){
        $rc = $this->centralGateway->countCentralYesterday('uno-RC');
        $result = ['rc'=>$rc];
        return $result;
    }
}