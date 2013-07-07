<?php

namespace Osrm;

/**
 * A coordinate class to store longitude, latiude and a name
 * @author Jens Nazarenus <jens@0x6a.de>
 */
class Coordinate {
    
    private $longitude = 0.0;
    private $latitude = 0.0;
    private $name = "";
    
    public function __construct($latitude, $longitude) {
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
    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }
    
    public function __toString() {
        return "loc=" . $this->latitude . "," . $this->longitude;
    }
}

