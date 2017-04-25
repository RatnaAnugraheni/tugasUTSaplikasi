PERKIRAAN CUACA HARI INI DIWILAYAH DEMAK
<br>
<br>
<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/8933eac1e54aee69/forecast/q/IA/Demak.json");
	$parsed_json = json_decode ($json_string);
	
	$cuaca = $parsed_json->{'forecast'}->{'txt_forecast'}->{"date"};
	$icon   = $parsed_json->{'forecast'}->{"simpleforecast"}->forecastday[0]->{"icon"};
	
	$json_string2 = file_get_contents("http://api.wunderground.com/api/87ffe4528596bbed/conditions/q/IA/Demak.json");
	$parsed_json2 = json_decode ($json_string2);
	
	$con = $parsed_json2->{'current_observation'}->{'display_location'}->{"state_name"};
	$con2 = $parsed_json2->{'current_observation'}->{'display_location'}->{"city"};
	
	
	$json_string3 = file_get_contents ("http://api.wunderground.com/api/a657d7d2ba430b38/planner_08010831/q/IA/Demak.json");
	$parsed_json3 = json_decode ($json_string3);
	
	$sh = $parsed_json3->{'trip'}->{'temp_high'}->{"avg"}->{"C"};
	$sh2 = $parsed_json3->{'trip'}->{'temp_low'}->{"avg"}->{"C"};
	$cuaca = $parsed_json3->{'trip'}->{'cloud_cover'}->{"cond"};
	
	
	echo "State Name : ${con}\n";
	echo "<br>";
	echo "City : ${con2}\n";
	echo "<br>";
	echo "Kondisi Awan : ${cuaca}\n";
    echo "<br>";
	echo "Suhu Maxsimal: $sh <sup>O</sup> C";
    echo "<br>";
	echo "Suhu Minimal: $sh2 <sup>O</sup> C";
    echo "<br>";
	echo "Cuaca Hari Ini : <img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'>";
    echo "<br>";
	
	
?>