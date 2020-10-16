<?php



	$url = "http://api.openweathermap.org/data/2.5/weather?id=13371796&lang=en&units=metric&&APPID =[8f168d8d32eeb64bdfcf2a52297ad342]";
	

	$contents = file_get_contents($url);
  $clima = json_decode($contents);
  

$temp_max = $clima->main->temp_max;
$temp_min = $clima->main->temp_min;

$today = date("F j,Y,g:i a");
$cityname = $clima->name;

echo $cityname . "-" .$today. "<br>";
echo "Temp Max : " .$temp_max . "&deg;C<br>";
echo "Temp Min : " .$temp_min . "&deg;C<br>";

?>