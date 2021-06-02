<div class="container">
	<h3>Lista de personas</h3>
	
	<table class="table table-striped">
	<tr>
		<th>Nombre</th>
		<th>Sexo</th>
		<th>Madurez</th>
	</tr>
	
	<?php foreach ($personas as $persona):?>
	<tr>
		<td><?=$persona->nombre?></td>
		<td><?=$persona->sexo?></td>
		<td><?=getMadurez($persona)?> (<?=$persona->anyo?> )</td>
	</tr>
	<?php endforeach;?>
	</table>
	
	<a href="<?=base_url()?>">Volver</a>
	
</div>