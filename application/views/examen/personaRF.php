<div class="container">
	<h3>Lista de personas</h3>
	
	<h3>Elige sexo</h3>
	<form action="<?=base_url()?>examen/persona/rf">
		<select name="sexo" onchange="submit()">
			<option value="hombre" <?= $sexo=='hombre' ? 'selected=\"selected\"' : '' ?> >Hombre</option>
			<option value="mujer" <?= $sexo=='mujer' ? 'selected=\"selected\"' : '' ?> >Mujer</option>
		</select>
	</form>
	
	<table class="table table-striped">
	
	<tr>
		<th>Nombre</th>
		<th>Sexo</th>
		<th>Madurez</th>
	</tr>
	
	<?php foreach ($personas as $persona):?>
		<td><?=$persona->nombre?></td>
		<td><?=$persona->sexo?></td>
		<td><?=getMadurez($persona)?> (<?=$persona->anyo?>)</td>
	</tr>
	<?php endforeach;?>
	
	</table>
	
	<a href="/">Volver</a>
	
</div>