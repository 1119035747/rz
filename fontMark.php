<?php
	$src="001.jpg";

	$info = getimagesize($src);

	$type = image_type_to_extension($info[2],false);

	print_r($type);
	
	$fun = "imagecreatefrom($type)";

	$image = $fun($src);
	
	
?>
