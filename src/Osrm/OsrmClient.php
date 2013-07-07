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
        echo($resp);
        curl_close($curl);
        $json = json_decode($resp);
        
        if($json->status === 0) {
            $latitude = $json->mapped_coordinate[0];
            $longitude = $json->mapped_coordinate[1];
            $name = $json->name;
            
            $retCoord = new Coordinate($latitude, $longitude);
            $retCoord->setName($name);
            
            return $retCoord;
        } else {
            throw new OsrmException("Osrm status error", $json->{'status'});
            return null;
        }
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
        
        $json = json_decode($resp);
        
        if($json->status === 0) {
            $latitude = $json->mapped_coordinate[0];
            $longitude = $json->mapped_coordinate[1];
            $name = $json->name;
            
            $retCoord = new Coordinate($latitude, $longitude);
            $retCoord->setName($name);
            
            return $retCoord;
        } else {
            throw new OsrmException("Osrm status error", $json->{'status'});
            return null;
        }
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
            throw new OsrmException('A minimum of two arguments must be provided.', 2);
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
        
        $json = json_decode($resp);
        
        //var_dump($json);
        
        if($json->status === 0) {
            $route = new Route();
            $route->setEndPoint($json->route_summary->end_point);
            $route->setStartPoint($json->route_summary->start_point);
            $route->setTotalTime($json->route_summary->total_time);
            $route->setTotalDistance($json->route_summary->total_distance);
            $route->setRouteGeometry($json->route_geometry);
            
            $instructionsJson = $json->route_instructions;
            $instructions = array();
            foreach($instructionsJson as $instrObj) {
                $instruction = new DrivingInstruction();
                $instruction->setTurnInstruction($instrObj[0]);
                $instruction->setWayName($instrObj[1]);
                $instruction->setLength($instrObj[2]);
                $instruction->setPosition($instrObj[3]);
                $instruction->setTime($instrObj[4]);
                $instruction->setLengthUnit($instrObj[5]);
                $instruction->setDirection($instrObj[6]);
                $instruction->setAzimuth($instrObj[7]);
                array_push($instructions, $instruction);
            }
            $route->setRouteInstructions($instructions);
            
            return $route;
        } else {
            throw new OsrmException("Osrm status error", $json->{'status'});
            return null;
        }
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
