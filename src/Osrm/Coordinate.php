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

