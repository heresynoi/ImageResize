<?php

	require_once('ImageResize.php');

	/**
	 * ImageResize(対象イメージ, リサイズ横幅, 保存先パス)
	*/
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ImageResize</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<img src="<?php echo ImageResize('img.jpg', 900, 're_img/'); ?>" alt="">
</body>
</html>