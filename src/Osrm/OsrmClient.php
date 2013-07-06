<?php

namespace Osrm;

class OsrmClient {
    
    private $server;
    
    public function __construct($server) {
        $this->server = $server;
    }
    
    /**
     * 
     * @param \Osrm\Coordinate $coordinate
     * @return type
     */
    public function getNearestStreetPoint(Coordinate $coordinate) {
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
    
    /**
     * 
     * @param \Osrm\Coordinate $coordinate
     * @return type
     */
    public function getNearestNodePoint(Coordinate $coordinate) {
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
    
    /**
     * 
     */
    public function getRoute() {
        
    }
    
    private function prepareServerUrl() {
        if (substr($this->server, -1) !== '/') {
            $this->server = $this->server . '/';
        }
    }
}
?>
