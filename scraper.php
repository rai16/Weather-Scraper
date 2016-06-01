<?php

$city = $_GET['city'];
$city = str_replace(" ","",$city);

$contents =  @file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
if($contents)
{

	$matching_string = '/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s' ;

	preg_match($matching_string, $contents, $matches);

	echo $matches[1];
}

else
{
	echo "not ok";
}

?>