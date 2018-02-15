<?php
    require 'vendor/autoload.php';

    $client = new MongoDB\Client;
	$db = $client->test_nosql;
    $collection = $db->test1;
    
    // $result = $collection->findOne( 
    //     [   
    //        '_id' => '1'
    //     ]
    // );

    $result = $collection->find(
        [ 'name' => 'wry' ]
    );
    foreach($result as $x){
        var_dump($x);
    }
?>