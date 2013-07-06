Overview
===============
**osrm-api-client** is a an open source PHP implementation of the 
[OSRM Server API](https://github.com/DennisOSRM/Project-OSRM/wiki/Server-api).

###Features
- viaroute (computation of the shortest path on the road network between two coordinates)
- locate (nearest node of the road network)
- nearest (nearest point on any street segment of the road network)

###Installation
To add <tt>osrm-api-client</tt> as a locally per-project dependency you can insert the
following code to your composer.json file:

    {
        "require": {
            "jens-na/osrm-api-client": "1.0.0"
        },
    }

###API Usage Policy
If you are using the server **router.project-osrm.org** with this API client, please read the 
[API Usage Policy](https://github.com/DennisOSRM/Project-OSRM/wiki/API%20Usage%20Policy) of Project-OSRM.
Usage 
=====

###viaroute


###locate

    $client = new Osrm\OsrmClient('http://server:5000');
    $mylocation = new Osrm\Coordinate(9.305283, 50.344735);
    $nearestStreet = $client->getNearestNodePoint($mylocation);

###nearest

    $client = new Osrm\OsrmClient('http://server:5000');
    $mylocation = new Osrm\Coordinate(9.305283, 50.344735);
    $nearestStreet = $client->getNearestStreetPoint($mylocation);

License and Copyright
=====================
Licensed under the GNU General Public License 3.

(c) Jens Nazarenus, 2013
