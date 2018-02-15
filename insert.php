<?php
    require 'vendor/autoload.php';

    $client = new MongoDB\Client;
	$db = $client->test_nosql;
    $collection = $db->test1;
    
    $result = $collection->insertOne( 
        [   
            '_id' => '1',
            'name' => 'wry',
            'tel' => '1112',
            'addr' => ['number'=>'2461','prov'=>'bkk','postcode'=>'10110'],
            'email'=> 'wrysjy@gmail.com'
        ]
    );
    
 echo "Inserted with Object ID '{$result->getInsertedId()}'";
?>