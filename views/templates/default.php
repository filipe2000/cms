<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="<?php echo BASE; ?>assets/css/default.css">
		<meta charset="utf-8" />
		<title><?php echo $this->config['site_title']; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body>
	<div class="topo">
		
	</div>
	<div class="menu">
		<?php
		$this->loadMenu();
		?>
	</div>
	<div class="container">	
		<?php
		$this->loadView('home');
		?>
	</div>
	<div class="rodape">
		
	</div>

	</body>
</html>
