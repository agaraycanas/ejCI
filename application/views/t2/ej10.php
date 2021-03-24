<div class="container">
	<h1>Ej10 (listado de 1..50 (resaltados impares )</h1>
	<ul>
<?php  for ($i=1;$i<=50;$i++): ?>
	<?php if ($i%2 == 1): ?>
		<?=resaltar($i)?>
	<?php else: ?>
		<?=$i?>
	<?php endif; ?>
<?php endfor; ?>
</ul>
</div>