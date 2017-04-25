PERKIRAAN CUACA HARI INI DIWILAYAH UNGARAN
<br>
<br>
<?php
	$json_string = file_get_contents("http://api.wunderground.com/api/87ffe4528596bbed/forecast/q/IA/ungaran.json");
	$parsed_json = json_decode ($json_string);
	
	$cuaca = $parsed_json->{'forecast'}->{'txt_forecast'}->{"date"};
	$icon   = $parsed_json->{'forecast'}->{"simpleforecast"}->forecastday[0]->{"icon"};
	
	$json_string2 = file_get_contents("http://api.wunderground.com/api/87ffe4528596bbed/conditions/q/IA/ungaran.json");
	$parsed_json2 = json_decode ($json_string2);
	
	$con = $parsed_json2->{'current_observation'}->{'display_location'}->{"state_name"};
	$con2 = $parsed_json2->{'current_observation'}->{'display_location'}->{"city"};
	
	
	$json_string3 = file_get_contents ("http://api.wunderground.com/api/a657d7d2ba430b38/planner_08010831/q/IA/ungaran.json");
	$parsed_json3 = json_decode ($json_string3);
	
	$suhu = $parsed_json3->{'trip'}->{'temp_high'}->{"avg"}->{"C"};
	$suhu2 = $parsed_json3->{'trip'}->{'temp_low'}->{"avg"}->{"C"};
	$cuaca = $parsed_json3->{'trip'}->{'cloud_cover'}->{"cond"};
	
	
	echo "Negara : ${con}\n";
	echo "<br>";
	echo "Kota : ${con2}\n";
	echo "<br>";
	echo "Kondisi Awan : ${cuaca}\n";
    echo "<br>";
	echo "Suhu Maxsimal: $suhu <sup>O</sup> C";
    echo "<br>";
	echo "Suhu Minimal: $suhu2 <sup>O</sup> C";
    echo "<br>";
	echo "Cuaca Hari Ini : <img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'>";
    echo "<br>";
	
	
?>