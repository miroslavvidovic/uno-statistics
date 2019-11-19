<?php

namespace Src\Controller;

class PingController {

    public function __construct()
    {

    }

    public function pingComputers(){
        $result = array();

        $computers = array("unoserver","192.168.15.151","uno1","uno2","uno3");
        foreach($computers as $computer){
            $ping = new \JJG\Ping($computer);
            $ping->setTimeout(1);
            $latency = $ping->ping();
            if ($latency !== false) {
              print 'Latency is ' . $latency . ' ms';
              $result[$computer] = '1';
            }
            else {
              print 'Host could not be reached.';
              $result[$computer] = '0';
            }
        }
        
        return $result;
    }
}