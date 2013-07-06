<?php

namespace Osrm;

class Route {
    
    private $from;
    private $to;
    
    private $status;
    private $statusMessage;
    
    private $routeGeometry;
    
    private $totalDistance;
    private $totalTime;
    private $startPoint;
    private $endPoint;
    
    private $routeInstructions;
    
    public function __construct(Coordinate $from, Coordinate $to) {
        $this->from = $from;
        $this->to = $to;
    }
    
    public function getFrom() {
        return $this->from;
    }

    public function setFrom($from) {
        $this->from = $from;
        return $this;
    }

    public function getTo() {
        return $this->to;
    }

    public function setTo($to) {
        $this->to = $to;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function getStatusMessage() {
        return $this->statusMessage;
    }

    public function setStatusMessage($statusMessage) {
        $this->statusMessage = $statusMessage;
        return $this;
    }

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
