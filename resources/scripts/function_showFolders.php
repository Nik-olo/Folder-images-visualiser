<?php include_once $all_paths;

//
$path = $main_folder;

if ($handle = opendir($path)) {
	while (false !== ($file = readdir($handle))) {
		if ('.' === $file) continue;
		if ('..' === $file) continue;

		if ('.git' === $file) continue;
		if ('resources' === $file) continue;

		//echo $file.'<br>';
		if (is_dir($file)){
			echo '<div class="grid-item">';
			echo '<a href="showImages?path='.$file.'"><img src="'.$folder_image.'" alt="'.$file.'" /></a></div>';
		}

	}
	closedir($handle);
}
?>