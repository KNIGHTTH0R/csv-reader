<?php

/*
*	Display error's in case the server is disabled the error's show in php.ini.
*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
*	Read the whole content of file and split it to an array, delimiter based on '\r\n'.
*/
$content = file_get_contents('data.csv');
$arrayData = explode("\r\n", $content);

/*
*	Process the rows of the previous array.
*/
$tempData = [];
foreach ($arrayData as $key => $value) {

	$tempData[] = $value;
}


/*
*	Print the results as JSON
*/
echo json_encode($tempData);