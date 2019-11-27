<?php

namespace Src\Controller;

use Src\TableGateways\BitovajaGateway;

class BitovajaController {

    private $db;
    private $bitovajaGateway;

    public function __construct($db)
    {
        $this->db = $db;
        $this->bitovajaGateway = new BitovajaGateway($db);
    }

    public function getReaderStatsToday(){
        
        $rb = $this->bitovajaGateway->countBitovajaToday('uno-RB');
        $result = ['rb'=>$rb];
        return $result;
    }

    public function getReaderStats(){
        $rb = $this->bitovajaGateway->countBitovajaAll('uno-RB');
        $result = ['rb'=>$rb];
        return $result;
    }

    public function getReaderStatsYesterday(){
        $rb = $this->bitovajaGateway->countBitovajaYesterday('uno-RB');
        $result = ['rb'=>$rb];
        return $result;
    }
}