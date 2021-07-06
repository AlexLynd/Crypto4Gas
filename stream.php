<?php

header("Content-Type: application/json");
$data = json_decode(file_get_contents("php://input"));

// really shitty code i have to fix

if($data->ft==0 and $data->fst==8) { // flag AP from beacon frame
	$i = 0;
	$array = array();

	$read = fopen("data/networks.csv", "r") or die("can't open the file");
	while (!feof($read)) {
		$array[$i] = fgets($read);
		++$i;
	}
	fclose($read);

	$write = fopen("data/networks.csv", "a+") or die("can't open the file");
	if (!in_array($data->src."\n", $array)) {fwrite($write, $data->src."\n");} // needs line break cause im lazy to make array
	fclose($write);
}

if ($data->dev) { // synthesize all nodes to node1.json

	$data->seen = time();
	// echo date("m-d-Y h:i:s");
	// echo json_encode($data, true);
	
	// edit json to inclue time
	$node1 =  file_get_contents("data/node1.json");
	$json = json_decode($node1, true);

	

	$length = count($json);

	for ($line = 0; $line < $length; $line++) {
		// echo "time: ";
		// echo time();
		// echo "\n seen: ";
		// echo $json[$line]["seen"];
		// echo "\n";
		// echo time()-$json[$line]["seen"];
		// echo "\n";
		// echo "\n";
		
		
		// echo "\n---\n";
		if ($json[$line]["src"] == $data->src or ($json[$line]["seen"]-time())>30) { // if source is found or time > 30 sec	
			unset($json[$line]);
		}
	}
	array_push($json, $data); // push new packet into array

	// echo json_encode(array_values($json));
	$node1 = fopen("data/node1.json", "w") or die('asdf');

	fwrite($node1, json_encode(array_filter(array_values($json)))) or die('asdf'); // write json to file
	fclose($node1);
} 

// if ($data->clients) {
// 	$clients = fopen("clients.json", "w") or die("Can't open file, check permissions");
// 	fwrite($clients, json_encode($data));
// } else if ($data->networks) {
// 	$networks = fopen("networks.json", "w") or die("Can't open file, check permissions");
// 	fwrite($networks, json_encode($data));
// }

if ($data->delete) {
	$i = 0;
	$array = array();

	$read = fopen("known.csv", "r") or die("can't open the file");
	while (!feof($read)) {
		$array[$i] = fgets($read);
		++$i;
	}
	fclose($read);

	$write = fopen("known.csv", "w") or die("can't open the file");
	foreach ($array as $a) {
		if (!strstr($a, $data->delete->bssid)) fwrite($write, $a);
	}
	fclose($write);

	//echo $data->delete->bssid;
	//deleteLineInFile("known.csv","dev");
} else if ($data[0]->name) {  // known devices 
	$known = fopen("known.csv", "a+") or die("Can't open file, check permissions");
	foreach ($data as $key => $jsons) {
		foreach ($jsons as $key => $value) {
			if ($key == "bssid" && !strpos(file_get_contents("known.csv"), $value)) {
				fwrite($known, $value . ",");
			} else if ($key == "bssid" && strpos(file_get_contents("known.csv"), $value)) {
				break;
			} else {
				fwrite($known, $value . "\n");
			}
		}
	}
}

function deleteLineInFile($file, $string)
{
	$i = 0;
	$array = array();

	$read = fopen($file, "r") or die("can't open the file");
	while (!feof($read)) {
		$array[$i] = fgets($read);
		++$i;
	}
	fclose($read);

	$write = fopen($file, "w") or die("can't open the file");
	foreach ($array as $a) {
		if (!strstr($a, $string)) fwrite($write, $a);
	}
	fclose($write);
}

function cleanList() {

}