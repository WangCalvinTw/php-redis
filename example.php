<?php 
	
	$redis = new Redis([
	    'host' => '127.0.0.1',
	    'port' => 6379,
	]);

	$redis->set('ini', 'hello~~~!');

	echo $redis->get('ini');

?>