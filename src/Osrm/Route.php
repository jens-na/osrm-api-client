<?php

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
