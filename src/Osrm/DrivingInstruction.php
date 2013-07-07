<?php
/* 
 * osrm-api-client, a PHP implementation of the OSRM server API 
 * Copyright (C) 2013 Jens Nazarenus
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

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
