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

