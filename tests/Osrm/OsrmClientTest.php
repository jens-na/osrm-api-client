<?php

/**
 * Description of OsrmClientTest
 *
 * @author jens
 */
class OsrmClientTest extends PHPUnit_Framework_TestCase {

    protected $obj = null;

    protected function setUp() {
        $this->obj = new Osrm\OsrmClient('router.project-osrm.org');
    }
    
    public function testRouting() {
        $from = new Osrm\Coordinate(50.142739,9.122257);
        $to = new Osrm\Coordinate(50.139631,9.107151);
        
        $request = $this->obj->getRoute($from, $to);
        echo($request);
    }

}

?>
