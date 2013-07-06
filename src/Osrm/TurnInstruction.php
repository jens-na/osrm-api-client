<?php

namespace Osrm;

class TurnInstruction {
    
    private static $instructions = array(
        0 => 'no instruction',
        1 => 'go straight',
        2 => 'turn slight right',
        3 => 'turn right',
        4 => 'turn sharp right',
        5 => 'U-Turn',
        6 => 'turn sharp left',
        7 => 'turn left',
        8 => 'turn slight left',
        9 => 'reach via point',
        10 => 'head on',
        11 => 'enter round about',
        12 => 'leave round about',
        13 => 'stay on round about',
        14 => 'start at end of street',
        15 => 'reached your destination',
        16 => 'enter against allowed direction',
        17 => 'leave against allowed direction',
    );
    
    public static function getInstructionText($instructionId) {
        return TurnInstruction::$instructions[$instructionId];
    }
}

