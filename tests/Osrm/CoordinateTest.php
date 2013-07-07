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

class CoordinateTest extends PHPUnit_Framework_TestCase {

    protected $obj = null;

    protected function setUp() {
        $this->obj = new Osrm\Coordinate(3.4, 1.2);
    }

    public function testLatitude() {
        $this->assertEquals(3.4, $this->obj->getLatitude());
    }

    public function testLongitude() {
        $this->assertEquals(1.2, $this->obj->getLongitude());
    }
}

?>
