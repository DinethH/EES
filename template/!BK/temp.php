<?php
	$xsl = new DOMDocument ;
	$xsl->load('weather.xsl') ;
	$xslProc = new XSLTProcessor() ;
	$xslProc->importStylesheet($xsl) ;
	$xmldoc = new DOMDocument ;
	$xmldoc->load('http://forecast.weather.gov/MapClick.php?lat=38.86059&lon=-121.491393&FcstType=dwml') ;
	echo $xslProc->transformToXML($xmldoc) ;
?>