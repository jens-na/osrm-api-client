<?php

namespace Osrm;

class OsrmClient {
    
    private $server;
    
    public function __construct($server) {
        $this->server = $server;
    }
    
    public function getNearestStreetLocation(Coordinate $coordinate) {
        $this->prepareServerUrl();
        
        $this->server = $this->server . 'nearest?' . $coordinate;
        $curl = curl_init();
        curl_setopt_array($curl, array(
           CURLOPT_RETURNTRANSFER => 1,
           CURLOPT_URL => $this->server,
        ));
        
        $resp = curl_exec($curl);
        curl_close($curl);
        
        return $resp;
    }
    
    public function getNearestRoadNetwork(Coordinate $coordinate) {
        $this->prepareServerUrl();
        
        $this->server = $this->server . 'locate?' . $coordinate;   
        $curl = curl_init();
        curl_setopt_array($curl, array(
           CURLOPT_RETURNTRANSFER => 1,
           CURLOPT_URL => $this->server,
        ));
        
        $resp = curl_exec($curl);
        curl_close($curl);
        
        return $resp;
    }
    
    private function prepareServerUrl() {
        if (substr($this->server, -1) !== '/') {
            $this->server = $this->server . '/';
        }
    }
}
?>
