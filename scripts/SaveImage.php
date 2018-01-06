<?php
	define('UPLOAD_DIR', '..\\tunnustused\\');

	$img = $_POST['imgBase'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$filename = uniqid() . '.png';
	$file = UPLOAD_DIR . $filename;
	$success = file_put_contents($file, $data);
	
	echo './tunnustused/'.$filename;
?>