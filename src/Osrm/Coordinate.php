<?php

namespace Osrm;

class Coordinate {
    
    private $longitude = 0.0;
    private $latitude = 0.0;
    
    public function __construct($longitude, $latitude) {
        $this->longitude = $longitude;
        $this->latitude = $latitude;
    }
    
    public function getLongitude() {
        return (double) $this->longitude;
    }
    
    public function getLatitude() {
        return (double) $this->latitude;
    }
    
    public function setLongitude($longitude) {
        $this->longitude = $longitude;
        return $this;
    }
    
    public function setLatitude($latitude) {
        $this->latitude = $latitude;
        return $this;
    }
    
    public function __toString() {
        return "loc=" . $this->latitude . "," . $this->longitude;
    }
}

