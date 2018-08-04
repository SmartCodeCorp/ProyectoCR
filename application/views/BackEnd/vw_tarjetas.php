<!DOCTYPE html>
<html>
<head>
	<title>Tarjetas de credito</title>
	<?php foreach ($css_files as $file): ?>
		<link rel="stylesheet" type="text/css" href="<?=$file?>">
	<?php endforeach; ?>
</head>
<body>
	<div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
            	<?=$output; ?>
            </div>
        </div>
    </div>
	<?php foreach ($js_files as $file):	?>
	<script type="text/javascript" src="<?=$file?>"></script>
	<?php endforeach; ?>
</body>
</html>