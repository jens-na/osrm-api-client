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

class Route {
        
    private $routeGeometry;
    private $totalDistance;
    private $totalTime;
    private $startPoint;
    private $endPoint;
    private $routeInstructions;


    public function getRouteGeometry() {
        return $this->routeGeometry;
    }

    public function setRouteGeometry($routeGeometry) {
        $this->routeGeometry = $routeGeometry;
        return $this;
    }

    public function getTotalDistance() {
        return $this->totalDistance;
    }

    public function setTotalDistance($totalDistance) {
        $this->totalDistance = $totalDistance;
        return $this;
    }

    public function getTotalTime() {
        return $this->totalTime;
    }

    public function setTotalTime($totalTime) {
        $this->totalTime = $totalTime;
        return $this;
    }

    public function getStartPoint() {
        return $this->startPoint;
    }

    public function setStartPoint($startPoint) {
        $this->startPoint = $startPoint;
        return $this;
    }

    public function getEndPoint() {
        return $this->endPoint;
    }

    public function setEndPoint($endPoint) {
        $this->endPoint = $endPoint;
        return $this;
    }

    public function getRouteInstructions() {
        return $this->routeInstructions;
    }

    public function setRouteInstructions($routeInstructions) {
        $this->routeInstructions = $routeInstructions;
        return $this;
    }
}

?>
