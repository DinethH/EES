<?php
$placename = '76019'; // city where you want local weather
$place=urlencode($placename);
$place = utf8_encode($place);
$url = 'http://www.google.com/ig/api?weather='.$place;
$ch = curl_init();
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt ($ch, CURLOPT_TIMEOUT, 60);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 0);
$raw_data = curl_exec ($ch);
curl_close ($ch);

$xml = simplexml_load_string($raw_data);
$condition = $xml->weather->current_conditions->condition['data'];
$temp_f = $xml->weather->current_conditions->temp_f['data'];
$humidity = $xml->weather->current_conditions->humidity['data'];
$icon = $xml->weather->current_conditions->icon['data'];
$wind_condition = $xml->weather->current_conditions->wind_condition['data'];
?>

        	
        	<table>
            	<tr>
                	<td valign="middle">
                    	 <img src="<?php echo 'http://www.google.com' . $icon; ?>" alt="weather"?>
                    </td>
                    <td valign="middle">
                    	Arlington, TX<br>
                    	<span style="font-size:12px" class="condition">
            				<?php echo $temp_f.'&deg; F, '.$condition; ?>
            				
           				</span>
                    </td>
                </tr>
           	</table>	
        