<?php
// Fill the keys and secrets you retrieved after registering your app
$oauth = new OAuth("3mjcuew2ie9r", "pDT1X4gp44KQ2uYE");
$oauth->setToken("7306277c-dde5-4a3b-a19f-42de58d7825a", "40779cbb-37be-4952-9177-21475d1d44a1");
 
$params = array();
$headers = array();
$method = OAUTH_HTTP_METHOD_GET;
  
// Specify LinkedIn API endpoint to retrieve your own profile
$url = "http://api.linkedin.com/v1/people/~";
 
// By default, the LinkedIn API responses are in XML format. If you prefer JSON, simply specify the format in your call
// $url = "http://api.linkedin.com/v1/people/~?format=json";
 
// Make call to LinkedIn to retrieve your own profile
$oauth->fetch($url, $params, $method, $headers);
  
echo $oauth->getLastResponse();
?>