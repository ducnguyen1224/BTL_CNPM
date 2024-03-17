<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>View dau tien</title>
	<style type="text/css">
		h3{
			text-align: center;
			font-family: 'segoe ui light';
			border-bottom: 1px solid gray;
			padding: 10px;
		}
	</style>

</head>
<body>
	<h3>DLC Gumasquy</h3>
	<ul>
		<?php foreach($dssdt as $key): ?>
			<li><?php echo $key;?></li>
		<?php endforeach ?>
	</ul>
</body>
</html>