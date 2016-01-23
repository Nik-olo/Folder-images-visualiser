<?php include_once 'resources/scripts/paths.php'; ?>
<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Folder images visualiser</title>

	<link rel="stylesheet" href="<?php echo $resources_css; ?>">
</head>

<body>

	<div class="grid">
		<div class="grid-sizer"></div>

		<?php include $function_showImages; ?>

	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='http://masonry.desandro.com/masonry.pkgd.js'></script>
	<script src='http://imagesloaded.desandro.com/imagesloaded.pkgd.js'></script>

	<script src="<?php echo $resources_js; ?>"></script>




</body>
</html>
