<ul>
	<?php
	foreach($menu as $menuItem):?>
	<a href="<?php echo BASE.$menuItem['url']; ?>"> 
		<li>
		<?php echo utf8_encode($menuItem['name']); ?>
		</li>
	</a>

	<?php
	endforeach;
	?>

</ul>