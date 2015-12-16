<?php
	$url  = 'https://maps.googleapis.com/maps/api/geocode/xml';
	$url .= '?address=350+5th+Avenue+New+York,NY';
	$url .= '&sensor=false';

	$xml = file_get_contents($url);
	$xml_obj = new SimpleXMLElement($xml);
	echo "Address: \t" . $xml_obj->result->formatted_address . PHP_EOL;
	echo "Latitude: \t" . $xml_obj->result->geometry->location->lat . PHP_EOL;
	echo "Longitude: \t" . $xml_obj->result->geometry->location->lng . PHP_EOL;
	echo "Location Type: \t" . $xml_obj->result->geometry->location_type . PHP_EOL;

