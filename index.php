<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Folder images visualiser</title>
	<style type="text/css">
		<!--
		li{
			list-style-type:none;
			margin-right:10px;
			margin-bottom:10px;
			float:left;
		}

	-->
</style></head>

<body>

	<ul>
		<?php

		function is_image($path)
		{
			$a = getimagesize($path);
			$image_type = $a[2];

			if(in_array($image_type , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)))
			{
				return true;
			}
			return false;
		}

		$directory = 'images';

		$di = new RecursiveDirectoryIterator($directory);

		foreach (new RecursiveIteratorIterator($di) as $filename => $file) {

			if (is_image($file)){
				echo '<li><a href="'.$filename.'/"><img src="img.php?src='.$file.'&w=175&zc=1" alt="" /></a></li>';
			}

		}
		?>
	</ul>

</body>
</html>
