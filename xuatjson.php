<?php
	// đọc file xml
	$xml=simplexml_load_file("nv.xml");
	echo json_encode($xml);
	foreach ($xml ->children() as $key ) {
		$key=array('key'=>$key->name);
		# code...
	}
	echo json_encode($key);

?>