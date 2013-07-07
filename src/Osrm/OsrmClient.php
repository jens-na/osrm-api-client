<?php

namespace Osrm;

class OsrmClient {
    
    private $server;
    
    /**
     * The constructor with the OSRM server
     * @param string $server
     */
    public function __construct($server) {
        $this->server = $server;
    }
    
    /**
     * The 'nearest' implementation of the OSRM server API.
     * https://github.com/DennisOSRM/Project-OSRM/wiki/Server-api
     * 
     * @param \Osrm\Coordinate $coordinate
     * @return type
     */
    public function getNearestStreetPoint(Coordinate $coordinate) {
        $this->prepareServerUrl();
        
        $requestUrl = $this->server . 'nearest?' . $coordinate;
        $curl = curl_init();
        curl_setopt_array($curl, array(
           CURLOPT_RETURNTRANSFER => 1,
           CURLOPT_URL => $requestUrl,
        ));
        
        $resp = curl_exec($curl);
        curl_close($curl);
        
        return $resp;
    }
    
    /**
     * The 'locate' implementation of the OSRM server API.
     * https://github.com/DennisOSRM/Project-OSRM/wiki/Server-api
     * 
     * @param \Osrm\Coordinate $coordinate
     * @return type
     */
    public function getNearestNodePoint(Coordinate $coordinate) {
        $this->prepareServerUrl();
        
        $requestUrl = $this->server . 'locate?' . $coordinate;   
        $curl = curl_init();
        curl_setopt_array($curl, array(
           CURLOPT_RETURNTRANSFER => 1,
           CURLOPT_URL => $requestUrl,
        ));
        
        $resp = curl_exec($curl);
        curl_close($curl);
        
        return $resp;
    }
    
    /**
     * The 'viaroute' implementation of the OSRM server API.
     * https://github.com/DennisOSRM/Project-OSRM/wiki/Server-api
     * 
     * @param \Osrm\Coordinate $coordinate an undefined argument list of
     * coordinates. Two arguments (from/to) must be provided. 
     * @return type
     */
    public function getRoute() {
        $this->prepareServerUrl();
        $requestUrl = $this->server . 'viaroute?';
        
        if(func_num_args() < 2) {
            throw new OsrmException('A minimum of two arguments must be provided.', 1);
        }
        
        for($j = 0; $j < func_num_args(); $j++) {
            $coord = func_get_arg($j);
            
            if($coord instanceof Coordinate) {
                 if($j != 0) {
                     $requestUrl = $requestUrl . '&';
                 }
                 $requestUrl = $requestUrl . $coord;
            }
        }
        
        $curl = curl_init();
        curl_setopt_array($curl, array(
           CURLOPT_RETURNTRANSFER => 1,
           CURLOPT_URL => $requestUrl,
        ));
        
        $resp = curl_exec($curl);
        curl_close($curl);
        
        return $resp;
    }
    
    /**
     * Prepares the server URL. If the last character is no '/', this function
     * appends this character to the URL.
     */
    private function prepareServerUrl() {
        if (substr($this->server, -1) !== '/') {
            $this->server = $this->server . '/';
        }
    }
}
?>
