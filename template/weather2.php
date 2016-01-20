<?php
include "../includes/db.php";


// save the data to a mysql database

$sql = "SELECT * FROM weather";
$results = mysql_query($sql);
$row = mysql_fetch_array($results);

$currentHour = date('g');


if ($row['hourUpdated'] == $currentHour) {
	
	// load the xml file and fetch the data
	$url = 'w1.weather.gov/xml/current_obs/KGKY.xml';
	$ch = curl_init();
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_URL, $url);
	curl_setopt ($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	curl_setopt ($ch, CURLOPT_TIMEOUT, 60);
	curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0);
	$raw_data = curl_exec ($ch);
	curl_close ($ch);
	
	$xml = simplexml_load_string($raw_data);
	$iconBase = $xml->icon_url_base;
	$iconPng = $xml->icon_url_name;
	$iconPath = $iconBase.$iconPng;
	$weather = $xml->weather;
	$tempF = $xml->temp_f;
	
	
	
	// update the weather data in the database
	$iconToMYSQL =  file_get_contents($iconPath);
	
	$update = mysql_query("UPDATE weather SET hourUpdated='$currentHour', dateTimeUpdated=NOW(), temperature='$tempF', weather='$weather', fileName='$iconPng' WHERE ID=0");
}




	// fetch the data from the database

	
	//$iconD = base64_decode($row['icon']);
	$conditionD = $row['weather'];
	$temperatureD = $row['temperature'];
	$iconName = $row['fileName'];
	
	
	// weather icons
	

?>



       	
        	<table>
            	<tr>
                	<td valign="middle">
                    	 <img src="../images/weather/<?php echo $iconName; ?>" alt="weather" />
                    </td>
                    <td valign="middle">
                    	Arlington, TX<br>
                    	<span style="font-size:12px" class="condition">
            				<?php echo $temperatureD.'&deg; F, '.$conditionD; ?>
            				
           				</span>
                    </td>
                </tr>
           	</table>	
    