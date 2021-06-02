<div class="container">
	<h3>Crear persona</h3>
	
	<form action="<?=base_url()?>examen/persona/cPost" method="post">
		Nombre
		<input type="text" name="nombre"/>
		
		Año de nacimiento
		<input type="number" name="anyo" min="1900" max="2050" value="2021"/>
		<br/>
		
		<fieldset>
			<legend>Sexo</legend>
			
			<input id="idHombre" type="radio" name="sexo" value="hombre"/>
			<label for="idHombre">Hombre</label>
			
			<input id="idMujer" type="radio" name="sexo" value="mujer" checked="checked"/>
			<label for="idMujer">Mujer</label>
		</fieldset>
		
		<input type="submit"/>
	</form>
</div>