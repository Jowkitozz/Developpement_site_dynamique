<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>AlloVideo</title>
</head>
<body>

	<?php
	function getBlock($file, $data = []){
		require $file;
	}

	include('bdd.php');
	?>


	<?php getBlock('header.php');  ?>


	<div class="page">
		<section>
			<?php getBlock('director.php',$getData2); ?>
		</section>
	</div>


	<?php getBlock('footer.php'); ?>


</body>
</html>
