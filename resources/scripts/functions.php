<?php include_once $all_paths;

//function to check if a file is an image
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

//Recurse through all the folders. (excluding certain folders)
$directory = $main_folder;
$iterator = new RecursiveDirectoryIterator($directory);
$iterator->setFlags(RecursiveDirectoryIterator::SKIP_DOTS);

$filter = new MyRecursiveFilterIterator($iterator);


$all_files  = new RecursiveIteratorIterator($filter,RecursiveIteratorIterator::SELF_FIRST);

foreach ($all_files as $filename => $file) {

	//if the file is an image, add it to the masonry responsive grid
	if (is_image($file)){
		$file = str_replace("\\","/",$file);
		echo '<div class="grid-item">';
		echo '<a href="'.dirname("$file").'"><img src="'.$img_caching.'?src='.$file.'&w='.$img_caching_width.'&zc=1" alt="" /></a></div>';
	}
}

class MyRecursiveFilterIterator extends RecursiveFilterIterator {

	//folders to ignore/exclude
	public static $FILTERS = array(
		'resources'
		);

	public function accept() {
		return !in_array(
			$this->current()->getFilename(),
			self::$FILTERS,
			true
			);
	}

}
?>