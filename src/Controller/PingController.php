<?php

namespace Src\Controller;

class PingController {

    public function __construct()
    {

    }

    public function pingComputers(){
        $result = array();

        $computers = array("unoserver","192.168.15.151","uno1","uno2","uno3","uno4","uno5","uno6");
        foreach($computers as $computer){
            $ping = new \JJG\Ping($computer);
            $ping->setTimeout(1);
            $latency = $ping->ping();
            if ($latency !== false) {
              $result[$computer] = '1';
            }
            else {
              $result[$computer] = '0';
            }
        }
        
        return $result;
    }
}