<div class="container">

	<h1>Lista de países</h1>
	
	<table class="table table-striped">
		<tr>
			<th>Nombre</th>
			<th>Num.hab.</th>
		</tr>
		
		<?php foreach ($paises as $pais):?>
		<tr>
			<td><?=$pais->nombre?></td>
			<td>-</td>
			<td th:text="${p.getNumHabitantes()}"/>
		</tr>
		<?php endforeach;?>
		
	</table>
</div>