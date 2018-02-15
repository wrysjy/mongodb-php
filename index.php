<?php
   	require 'vendor/autoload.php';
    // connect to mongodb
	$client = new MongoDB\Client;
	
	$mydb = $client->test_nosql;

	$result1 = $mydb->createCollection('test1');
	
	var_dump($result1);
?>