<?php

namespace Osrm;

class DrivingInstruction {
    
    private $turnInstruction;
    private $wayName;
    private $length;
    private $position;
    private $time;
    private $lengthUnit;
    private $direction;
    private $azimuth;
        
    public function getTurnInstruction() {
        return $this->turnInstruction;
    }

    public function setTurnInstruction($turnInstruction) {
        $this->turnInstruction = $turnInstruction;
        return $this;
    }

    public function getWayName() {
        return $this->wayName;
    }

    public function setWayName($wayName) {
        $this->wayName = $wayName;
        return $this;
    }

    public function getLength() {
        return $this->length;
    }

    public function setLength($length) {
        $this->length = $length;
        return $this;
    }

    public function getPosition() {
        return $this->position;
    }

    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }

    public function getTime() {
        return $this->time;
    }

    public function setTime($time) {
        $this->time = $time;
        return $this;
    }

    public function getLengthUnit() {
        return $this->lengthUnit;
    }

    public function setLengthUnit($lengthUnit) {
        $this->lengthUnit = $lengthUnit;
        return $this;
    }

    public function getDirection() {
        return $this->direction;
    }

    public function setDirection($direction) {
        $this->direction = $direction;
        return $this;
    }

    public function getAzimuth() {
        return $this->azimuth;
    }

    public function setAzimuth($azimuth) {
        $this->azimuth = $azimuth;
        return $this;
    }    
}
?>
