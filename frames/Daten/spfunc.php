<?php
function convertObjectToArray($data) {
    if (is_object($data)) {
        $data = get_object_vars($data);
    }

    if (is_array($data)) {
        return array_map(__FUNCTION__, $data);
    }

    return $data;
}

function unparse_url(array $parsed) 
{
	$stringurl = $parsed[scheme] . "://" . $parsed[host] . $parsed[path] . "?" . $parsed[query];
	return $stringurl;
}

function urlbea($url)
{
	$newurl = parse_url("$url");
	$apikey = file_get_contents("http://www.lukasmartin.net/frames/Daten/apikey.txt");
	$newurl[query] = $apikey;
	
	$finalurl = $newurl[scheme] . "://" . $newurl[host] . $newurl[path] . "?" . $newurl[query];
	
	$ergebnis = file_get_contents($finalurl);
	
    return $ergebnis;
}

function prolane($match, $lane)
{
	$ergebnis = 0;
	
	for($i=0;$i<20;$i++)
	{
		$lanev = $match['matches'][$i]['lane'];
		$rolev = $match['matches'][$i]['role'];
		
		
	if($lanev == $lane)
	{
		$ergebnis = $ergebnis + 1;
	}
	
	else if($lane == "ADC" && $lanev == "BOTTOM" && $rolev == "DUO_CARRY")
	{
		
		$ergebnis = $ergebnis + 1;
		
	}
	
	else if($lane == "SUPPORT" && $lanev=="BOTTOM" && $rolev == "DUO_SUPPORT")
	{

		$ergebnis = $ergebnis + 1;
	
	}
		
		
	}
	return $ergebnis;
}

?>
